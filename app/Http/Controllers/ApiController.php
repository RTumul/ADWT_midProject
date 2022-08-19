<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use DateTime;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Token;

class ApiController extends Controller
{
    //

    function get(){
        $users = User::all();
        return $users;
    }

    function login(Request $req){
        
        if($req->name == "Tumul" && $req->password == "12345678"){
            $tk = new Token();
            $tk-> tkey = Str::random(67);
            $tk-> user_id = 1;
            $tk-> created_at = new DateTime();
            $tk->save();
            return response()->json(["msg"=>"Done"]);
        }
        return response()->json(['msg'=>'User Invalid']);
    }
}
