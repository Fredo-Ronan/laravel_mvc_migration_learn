<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index(){
        $merchandise = Merchandise::get();
        return view('merch',compact('merchandise'));
    }
}
