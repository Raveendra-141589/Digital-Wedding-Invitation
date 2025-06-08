<?php

include('connection.php');
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['name']);
    $msg = mysqli_real_escape_string($conn, $_POST['wishes']);
    $sql="INSERT INTO msgtable(name,msgs) VALUES('$username','$msg') ";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        header("Location: thankyou.php");
    }
}
else{
    echo  '<script>
                    alert("Please give some suggestions or Advices to make our Good")
                    window.location.href = ".php";
                </script>';
}



?>