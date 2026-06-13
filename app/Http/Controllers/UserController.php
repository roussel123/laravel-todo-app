<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller{
    
    public function index(){
        return 'Hello From Userconttoller';
    }
    public function show($id){
        
        $data = ["data" => "Data from the database"];
        return view('user')
            ->with('name', 'Roussel Rojas')
            ->with('age', 20)
            ->with('email', 'rousselrojas@gmail.com')
            ->with('id', $id);
    }
}