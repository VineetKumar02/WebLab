<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "sdelab";

$conn = mysqli_connect($server, $username, $password, $dbname);
if (isset($_POST['submit'])) 
{
    if (!empty($_POST['name']) && !empty($_POST['BS']) && !empty($_POST['year']) && !empty($_POST['mobile']) && !empty($_POST['gender'])) 
    {
        $name = $_POST['name'];
        $BS = $_POST['BS'];
        $year = $_POST['year'];
        $mobile = $_POST['mobile'];
        $gender = $_POST['gender'];
        $query = "insert into student_details(name, BS, year, mobile, gender) values('$name' , '$BS' , '$year' , '$mobile' , '$gender')";
        $run = mysqli_query($conn, $query) or die(mysqli_error());

        if ($run) 
        {
            echo "<script> alert('Form Submitted Successfully!');window.location='index.php' </script>";
        } 
        else 
        {
            echo "<script> alert('Form Not Submitted!');window.location='index.php' </script>";
        }
    } 
    else 
    {
        echo "<script> alert('All Fields Required!');window.location='index.php' </script>";
    }
}
?>