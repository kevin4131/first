<?php

namespace App\Http\Controllers\Allstar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FireController extends Controller
{
    //
    public function list(Request $request)
    {
        return view('Allstar.Fire.list');
    }
}
