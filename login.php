
<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        header("Location: main.php");
        $sql = "select * from users where name = '$username' or email = '$username'";  
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count=mysqli_num_rows($result);
       
        if($result){
            
            if($password==$row['password']){
                
                header("Location: main.php");
            }
            
        }  
        else{ 
            echo  '<script>
                        
                        alert("Login failed. Invalid username or password!!")
                        window.location.href = "login.php";
                    </script>';
        }    
    }

?>


   
    
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
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
            font-family:serif;
            
            box-shadow:10px 10px 10px 5px black;

        }
        h1{
            text-shadow: 2px 2px 5px rgba(3, 3, 3, 0.5);
            margin:10px;
            margin-bottom:10px;
            font-weight:bold;
        }
        input{
            border-radius:8px;
            margin:5px;
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
            <h1 id="heading">Login Form</h1>
            <form name="form" action="login.php" method="POST" >
                <label><b>Enter Username/Email:</b> </label>
                <input type="text" id="user" name="user"></br></br>
                <label><b>Password: </b></label>
                <input type="password" id="pass" name="pass" required></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
        </center>
        </div>
        </center>
        
    </body>
</html>