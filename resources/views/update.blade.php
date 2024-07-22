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
</style>
<body>
    <div class=a>
<form method="POST" action="{{route('update')}}" class=login-box>
@csrf
    Enter Roll Number
    <input type='text' id='t1' name='t1' value="{{$s->rollnum}}" readonly>
    <br>
    Enter Name
    <input type='text' id='t2' name='t2' value="{{$s->name}}">
    <br>
    Enter Marks
    <input type='text' id='t3' name='t3' value="{{$s->marks}}">
    <br>
    <input type='submit' value='update' id=s4 name=s4>
</form>
    </div>
    </body>
    