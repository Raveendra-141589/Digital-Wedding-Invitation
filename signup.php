
<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);
        
        $sql="select * from users where name='$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql="select * from users where email='$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_user == 0 && $count_email==0){
            if($password==$cpassword){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users(name, email, password) VALUES('$username', '$email', '$hash')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    header("Location: main.php");
                }
            }   
            else{
                echo '<script>
                    alert("Passwords do not match");
                    window.location.href = "signup.php";
                </script>';
            }
        }
        else{
            if($count_user>0){
                echo '<script>
                    window.location.href="index.php";
                    alert("Username already exists!!");
                </script>';
            }
            if($count_email>0){
                echo '<script>
                    window.location.href="index.php";
                    alert("Email already exists!!");
                </script>';
            }
        }
        
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <style>
        body{
            background: linear-gradient(45deg, black, white);
            background-repeat: no-repeat;
            width:100%;
            min-height:600px;
            overflow:hidden;
            
        }
        .section{
            width:35%;
            min-height:300px;
            background-color:white;
            align-items:center;
            margin:50px;
            padding:20px;
            border-radius:10px;
            font-style:italic;
           
            box-shadow:10px 10px 10px 5px black;
            font-weight:bold;

        }
        h1{
            text-shadow: 2px 2px 5px rgba(3, 3, 3, 0.5);
            margin:10px;
            margin-bottom:10px;
    
        }
        input{
            border-radius:8px;
            margin:5px;
            width:auto;
            height:20px;
        }
        #btn{
            margin:40px;
            width:20%;
            height:35px;
            border-radius:10px;
            font-style:italic;
            font-weight:bold;
            background-color:black;
            color:white;
        }
        #btn:hover{
            background-color:white;
            color:black;
        }

    </style>
    </head>
<body>
  <center>
    <div class="section">
        <center>
        <h1 id="heading">SignUp Form</h1><br>
        <form name="form" action="signup.php" method="POST">
            <label>Enter Username: </label>
            <input type="text" id="user" name="user" required><br><br>
            <label>Enter Email: </label>
            <input type="email" id="email" name="email" required><br><br>
            <label>Create Password: </label>
            <input type="password" id="pass" name="pass" required><br><br>
            <label>Retype Password: </label>
            <input type="password" id="cpass" name="cpass" required><br><br>
            <input type="submit" id="btn" value="SignUp" name = "submit"/>
        </form>
        </center>
    </div>
<center>
</body>
</html>