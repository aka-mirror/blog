<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeBooks;//นำเอาโมเดลเข้ามาใช้

class TypeBooksController extends Controller
{
 public function index() {
  //   $typebooks = TypeBooks::all();//แสดงข้อมูลทั้งหมด
  //   $typebooks =TypeBooks::orderBy('id','desc')->get();
     $count = TypeBooks::count ();

//      $typebooks = TypeBooks::simplePaginate(3);
        $typebooks  =   TypeBooks ::paginate(3);

     return view('typebooks.index',[
        'typebooks'=>$typebooks,
        'count'=>$count 
     ]);

 }   

public function destroy($id){
//  TypeBoooks::find($id)->delete();
    TypeBooks::destroy($id);
    return back();
}



}
