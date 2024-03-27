<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
// use DB;
class UsersController extends Controller
{
    private $users;
    public function __construct()
    {
        $this->users = new Users();
    }
    public function index(){
        $title ="Danh sách người dùng";

       
        $this->users->learnQueryBuiler();
        $userList = $this->users->getAllUser();
        return view('client.users.lists', compact('title', 'userList'));
     
    }
    public function add(){
        $title ='Create user';
        return view('clients.users.add', compact ('title',));
    }
    public function postAdd(Request $request){
        
        $request->validate([
            'fullname' => 'required|min:5',
            'email' => 'required|email|unique:users'
        ],[
            'fullname.required' => "Họ và tên bắt buộc nhập",
            'fullname.min' => "fullname ít nhất 5 kí tự",
            'email.required' => "bắt buộc",
            'email.email' =>'không đúng định dạng',
            'email.unique'=>'email đã tồn tại'
        ]);
        // dd($request->all())
        $dataInsert = [
            $request->fullname,
            $request->email,
            date('Y-m-d H:i:s')
        ];
        $this->users->add( $dataInsert);
        return redirect() ->route('users.index')->with('msg','Thêm người dùng thành công');
    }
    public function getEdit(Request $request,$id=0){
        $title = 'Update users';
        if(!empty($id)){
            $userDetail =  $this->users->getDetail( $id);
            if(!empty($userDetail[0])){
                $request->session()->put('id',$id);
                $userDetail=$userDetail[0];
            }else{
                return redirect()->route('users.index')->with('msg', 'Người dùng không tồn tại');
            }
        }else{
            return redirect()->route('users.index')->with('msg', 'Liên kết không tồn tại');
        }

        return view('clients.users.edit', compact ('title','userDetail'));
    }
    public function postEdit(Request $request){
        $id= session('id');
        if (empty($id)){
            return back()->with('msg','Liên kết không tồn tại');
        }
        $request->validate([
            'fullname' => 'required|min:5',
            'email' => 'required|email|unique:users,email,'.$id
        ],[
            'fullname.required' => "Họ và tên bắt buộc nhập",
            'fullname.min' => "fullname ít nhất 5 kí tự",
            'email.required' => "bắt buộc",
            'email.email' =>'không đúng định dạng',
            'email.unique'=>'email đã tồn tại'
        ]);
        // dd($request->all())
        $dataUpdate = [
            $request->fullname,
            $request->email,            
            date('Y-m-d H:i:s')
        ];
        $this->users->updateUser( $dataUpdate,$id);
        return back()->with('msg','Cập nhật người dùng thành công');
    }
    public function delete($id=0){
        if(!empty($id)){
            $userDetail =  $this->users->getDetail( $id);
            if(!empty($userDetail[0])){
               $deleteStatus= $this->users->deleteUser( $id);
               if ($deleteStatus){
                    $msg = 'Xóa người dùng thành công';
               }else{
                    $msg= "Bạn không thể xóa người dùng lúc này. Vui lòng thử lại sau";
               }
            }else{
                return redirect()->route('users.index')->with('msg', 'Người dùng không tồn tại');
            }
        }else{
            $smg="Liên kết không tồn tại";
        }
        return redirect()->route('users.index')->with('msg',$msg);
    }
    
}
