<?php
//to look ragister page
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $email=$_POST['email'];
    $username=filter_var($username,FILTER_SANITIZE_SPECIAL_CHARS);
    $password=filter_var($password,FILTER_SANITIZE_SPECIAL_CHARS);
    $cpassword=filter_var($cpassword,FILTER_SANITIZE_SPECIAL_CHARS);
    $email=filter_var($email,FILTER_SANITIZE_EMAIL);
    $conn=new mysqli("localhost","root","","library");
    $sql1="SELECT * FROM users WHERE username='$username'";
    $result=$conn->query($sql1);
    if($result->num_rows>0)
    {
        echo "<script>window.alert('User already exist try signing in or use different username!')</script>";
        echo "<script>window.locate.href='register.php'</script>";
    }
    if($conn->connect_error)
    {
        die("Unable to connect!");
    }
    if($password===$cpassword)
    {
       $sql2="INSERT INTO users values('$username','$password',now(),'$email')";
       if($conn->query($sql2))
        {
            echo "<script>window.alert('Registered successfully')</script>";
            echo "<script>window.location.href='login.php'</script>";
        }
        else
        {
            echo "<script>window.alert('Unable to register')</script>";
            echo "<script>window.location.href='register.php'</script>";

        }
    }
    else
    {
        echo "<script>window.alert('Passwords do not match')</script>";
        echo "<script>window.location.href='register.php'</script>";
    }
    $conn->close();
}

?>