<?php

// Penanggung jawab : Miko

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginHTML(Request $request)
    {
        return view('admin.login');
    }
}
