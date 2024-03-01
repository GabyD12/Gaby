<?php

namespace App\Http\Controllers;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    //
    public function create(){

        return view('formulario');
      
      }
    public function promedio(Request $request){
        $not1=$request->not1;
        $not2=$request->not2;
        $not3=$request->not3;
        $average=($not1+$not2+$not3)/3;
        return $average;
        
        }
        public function store(Request $request){

            $result= new Result();
            $result->name=$request->name;
            $result->not1=$request->not1;
            $result->not2=$request->not2;
            $result->not3=$request->not3;
            $average=($request->not1+$request->not2+$request->not3)/3;
            $result->average=$average;
            $result->save();
            return $result;
         }
}

