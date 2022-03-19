<?php

    $servername='localhost';
    $username='root';
    $password='';
    $dbname='formphp';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mnumber = $_POST['mnumber'];
    $location = $_POST['location'];
    $psw = $_POST['psw'];
    $dname = $_POST['dname'];

    if($conn->connect_error){
        die('Connection Failed :' .$conn->connect_error);
    }
    else{
        $sql=mysqli_query($conn,"SELECT * FROM register where Email='$email'");
        if(mysqli_num_rows($sql)>0)
        {
            echo "Email Id Already Exists"; 
            exit;
        }
        else{
        $stmt = $conn->prepare("insert into register(fname, lname,username, email, mnumber, location, password, dname) value (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $fname, $lname, $username, $email, $mnumber, $location, $psw, $dname);
        $stmt->execute();
        echo " Registration Completed, Now you login.";
        $stmt->close();
        $conn->close();
        }
    }
?>