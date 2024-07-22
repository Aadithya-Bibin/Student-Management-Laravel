<?php

namespace App\Http\Controllers;
use  App\Models\deatil;
use Illuminate\Http\Request;

class fc extends Controller
{
    public function intro()
    {
        return view('intro');
    }
    
    public function insert()
    {
        if(isset($_POST['s1']))
        {
        $r=request('t1');
        $n=request('t2');
        $m=request('t3');
        deatil::firstorcreate([
            'rollnum'=>$r],[
            'name'=>$n,
            'marks'=>$m
        ]);
        echo "Record inserted";
        return view('intro');
    }
    if(isset($_POST['s2']))
    {
        $s=deatil::all();
        return view('disp',compact('s'));
    }
    if(isset($_POST['s3']))
    {
        $r=request('t1');
        $s=deatil::where('rollnum',$r)->get();
        return view('disp',compact('s'));
    }
    if(isset($_POST['s4']))
    {
        $r=request('t1');
        $s=deatil::where('rollnum',$r)->first();
        return view('update',compact('s'));
    }
    if(isset($_POST['s5']))
    {
        $r=request('t1');
        $d=deatil::where('rollnum',$r);
        $d->delete();
        echo "Record Deleted";
        return view('intro');
    }
    if(isset($_POST['s6']))
    {
        return view('reg');
    }
}
public function update()
{
    $r=request('t1');
    $n=request('t2');
    $m=request('t3');
    $s=deatil::where('rollnum',$r);
    $s->update([
        'name'=>$n,
        'marks'=>$m
    ]);
    echo "Record updated";
    return view('intro');
}
}
