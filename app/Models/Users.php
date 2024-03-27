<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;
    protected $table = "users";
    public function getAllUser(){
        $users = DB::select('SELECT * FROM users ORDER BY create_at DESC');
        return $users;
    }
    public function add($data){
        DB::insert('INSERT INTO users (fullname, email, create_at) values (?,?,?)',$data);
    }
    public function getDetail($id){
        return DB::select('SELECT*FROM '.$this->table.' WHERE id= ?',[$id]);
    }
    public function updateUser($data,$id){
        $data[] = $id;
        return DB::update('UPDATE '.$this->table.' SET fullname=?, email=?, create_at=? where id =?', $data);
    }
    public function deleteUser($id){
        return DB::delete("DELETE FROM $this->table WHERE id=?",[$id]);
    }
    public function learnQueryBuiler(){
        // lấy tất cả bản ghi của table
        $id=20;
        // Join 2 bảng lại với nhau
        $lists =  DB::table('users')
        ->take(2)
        ->skip(2)
        ->get();
            // ->select('users.*', 'groups.name as group_name')
            // ->rightJoin('groups', 'users.group_id', '=', 'groups.id');
            //->orderBy('create_at','desc');
            // ->orderBy('id','desc');
            // ->inRandomOrder();
            // ->select(DB::raw('count(id) as email_count'), 'email')
            // ->groupBy('email')
            // ->having('email_count')
            // ->limit(2)
            // ->offset(1)
        $sql = DB::getQueryLog();
        dd($sql);
    //    $lists = DB::table($this->table)
    //    ->select('fullname','email')->whereIn('id',[1,4])
    //    ->get();
    //   $sql = DB::getQueryLog();
    //    ->where('id','<>',2)
    //     ->where('id','>=',2)
    //     ->where('id','<=',4)
    //    ->get();

       // Lấy 1 bản ghi đầu tiên của table lấy thông tin chi tiết
    //    $detail = DB::table($this->table)->first();

    }
}
