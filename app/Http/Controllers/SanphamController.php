<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SanphamController extends Controller
{
    public function Chitiet(){
        return view('Sanpham.chitiet');
    }

}
