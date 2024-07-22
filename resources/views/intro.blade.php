
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
<form method="POST" action="{{route('in')}}" class=login-box>
@csrf
    Enter Roll Number
    <input type='text' id='t1' name='t1'>
    <br>
    Enter Name
    <input type='text' id='t2' name='t2'>
    <br>
    Enter Marks
    <input type='text' id='t3' name='t3'>
    <br>
    <input type='submit' value='Insert' id=s1 name=s1>
    <input type='submit' value='Display' id=s2 name=s2>
    <input type='submit' value='Search' id=s3 name=s3>
    <input type='submit' value='update' id=s4 name=s4>
    <input type='submit' value='Delete' id=s5 name=s5>
    <input type='submit' value='Exit' id=s6 name=s6>
</form>
    </div>
    </body>