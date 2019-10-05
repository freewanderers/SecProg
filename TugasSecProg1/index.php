<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas SecProg</title>
</head>
<body>

<script>
    function myFunction() {
        var x = document.getElementById("passwd");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
    <script>
    function myFunction2(){
    var y = document.getElementById("passwd2");
    if(y.type === "password"){
        y.type = "text";
    } else {
        y.type = "password";
    }
} 
        </script>


    <form action="./controller/login.php" method="POST">
    <p>Login <br></p>
    <p>Username</p>
    <input type="text" name="Username" id="">
    <p>Email</p>
    <input type="text" name="Email" id="">
    <p>Password</p>
    <input type="password" name="Password" id="passwd">
    <input type="checkbox" onclick="myFunction()">Show Password <br>
    <p>Confirm Password</p>
    <input type="password" name="cPassword" id="passwd2">
    <input type="checkbox" onclick="myFunction2()"> Show Password
    <br><br>
    <input type="checkbox" name="check" required> I have agreed to the terms and conditions
    <br>
    <br>    
    <button type="submit">Login</button>    
    </form> 
</body>
</html>