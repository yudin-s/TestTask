<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request){
        $result = [];

        for($i = 1; $i < 101; $i++){
            $line= "";
            if($i % 3 == 0){
                $line.="Fizz";

            }

            if($i % 5 == 0){
                $line .="Buzz";
            }

            if(!strlen($line)){
                $line = $i;
            }

            $result[] = $line;

        }

        return view('test.index',['numbers'=>$result]);

    }
}
