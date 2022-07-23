<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    function show(){
       // return DB::select("SELECT * FROM register");
     //   return DB::update("UPDATE register set name='koooooo' where id=3");
     //   return DB::select("SELECT * from register  where id=5");
      $result= DB::delete("DELETE  from register  where id=3");
       if($result ==1){
        return $result;
       }else {
        return  "object not found";
       }
      
    }

}

