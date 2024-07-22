<!DOCTYPE html>
<html lang="en">
<head>
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
    <meta charset="UTF-8">
    <title>Registration Form</title>
</head>
<body>
    <div class=a>
   
    <form action="{{route('intro')}}" method="post" class=login-box>
        @csrf
        <h2>Register</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Register">
    </form>
    </div>
</body>
</html>
