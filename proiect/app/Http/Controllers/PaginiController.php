<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 ///use App\User;
class PaginiController extends Controller
{
    public function index(){
       // $title ='bun sosit';
        $date =array(
        'titlu' =>'mos craciun',
        'a1' => ['minge' ,'caciula', 'acadele']
        );
       // return User::all();
        return view('pagini.index')->with($date);
    }
}
