<?php
    $conn = mysqli_connect('localhost', 'root', '','exam');
    
    $txtName = $_POST['name'];
    $txtEmail = $_POST['email'];
    $txtMessage = $_POST['message'];

    $sql = "INSERT INTO contact (name, email, message) VALUES ('$txtName','$txtEmail' , '$txtMessage')";

    $run = mysqli_query($conn, $sql) or die(mysqli_error());

    if ($run) 
    {
        echo "<script> alert('Form Submitted Successfully!'); window.location='index.php' </script>";
    } 
    else 
    {
        echo "<script> alert('Form Not Submitted!'); window.location='index.php' </script>";
    }
    mysqli_close($conn);
?>