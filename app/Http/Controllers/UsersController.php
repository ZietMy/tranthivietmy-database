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

       
        $usersList = $this->users->getAllUser();
        return view('clients.users.lists', compact ('title','usersList'));
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
        return redirect() ->route('users.index');
    }
}
