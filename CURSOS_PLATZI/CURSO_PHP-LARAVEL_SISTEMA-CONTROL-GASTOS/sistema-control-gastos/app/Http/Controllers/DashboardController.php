<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard',
        [
            'title' => 'Dashboard'
        ]);
    }

    public function index2(Request $request)
    {
        //dd($request->query('title','Valor default'));
        return view('dashboard',
        [
            'title' => $request->query('title','Dashboard Predeterminado')
        ]);
    } 
}
