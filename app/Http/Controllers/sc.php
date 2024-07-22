<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reg;

class sc extends Controller
{
    public function reg()
    {
        return view('reg');
    }
    public function register()
    {
        return view('registration');
    }
    public function insert()
    {
      $us=request('username');
      $ps=request('password');
      reg::firstorcreate([
        'usname'=>$us],[
            'pass'=>$ps
        ]);
        return view('reg');
    }

    public function check()
    {
        $us=request('email');
        $ps=request('password');
        $m=reg::where('usname',$us)->first();
        $password=$m->pass;
        if($ps===$password)
        return view('intro');
    else
    return view('reg');
    }
}
