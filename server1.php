<?php
//To handel logi pag
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $username=filter_var($username,FILTER_SANITIZE_SPECIAL_CHARS);
    $password=filter_var($password,FILTER_SANITIZE_SPECIAL_CHARS);
    setcookie("username",$username);
    $sql="SELECT * FROM users where username='$username' AND password='$password'";
    $conn=new mysqli("localhost","root","","library");
    if($conn->connect_error)
    {
        die('Unable to connect to database');
    }
    else
    {
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
            echo "<script>window.alert('Logged in successfully')</script>";
            echo "<script>window.location.href='gate.php'</script>";
        }
        else
        {
            echo "<script>window.alert('Invalied username or password.Try again...!')</script>";
            echo "<script>window.location.href='login.php'</script>";
        }
    }
    $conn->close();
}

?>