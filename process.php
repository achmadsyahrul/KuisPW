<?php
    $link = mysqli_connect('localhost','root','','message');
    if(isset($_POST['msg'])){
        $nama=$_POST['name'];
        $email=$_POST['email'];
        $pesan=$_POST['message'];
        $query="INSERT INTO message VALUES('', '$nama', '$email', '$pesan')";
        mysqli_query($link,$query);
    }
    header("location:contact.html");
?>