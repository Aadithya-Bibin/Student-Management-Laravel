<?php
use  App\Models\deatil;
?>
<style>
    .a{
            text-align:center;
            padding-top:140px;
            padding-left:530px;
            
        }
     .login-box {
            
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        body{
            background-color:#00FFFB;          
        }
        table{
            padding-left:50px;
            border-collapse: collapse;
            text-align:center;
        }
</style>
<body>
    <div class=a>
<form action="{{route('intro')}}" method="post" class=login-box>
    @csrf
    <table border=1>
        <tr>
            <td>Roll Number</td>
            <td>Name</td>
            <td>Marks</td>
</tr>
@foreach($s as $d)
<tr>
    <td>{{$d->rollnum}}</td>
    <td>{{$d->name}}</td>
    <td>{{$d->marks}}</td>
</tr>
@endforeach
</table>
<input type=submit value=Continue>
</form>
    </div>
    </body>
