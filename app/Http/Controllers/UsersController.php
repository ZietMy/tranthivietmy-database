<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use DB;
class UsersController extends Controller
{
    public $data = [];
    public function index(){
        $title ="Danh sách người dùng";

        $users = DB::select('SELECT * FROM users ORDER BY create_at DESC');
        return view('clients.users.lists', compact ('title','users'));
    }
}
