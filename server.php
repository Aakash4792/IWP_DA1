<?php 
 
    $con = mysqli_connect("localhost","resumeinfo","");
    mysqli_select_db($con,"resumeinfo");

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phoneno = mysqli_real_escape_string($con, $_POST['phoneno']);
    $url = mysqli_real_escape_string($con, $_POST['url']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $perc12 = mysqli_real_escape_string($con, $_POST['perc12']);
    $perc10 = mysqli_real_escape_string($con, $_POST['perc10']);
    $cgpa = mysqli_real_escape_string($con, $_POST['cgpa']);

    echo "name : ".$name." email : ".$email." address : ".$address." perc12 : ".$perc12." perc10 :  ".$perc10." cgpa :  ".$cgpa." url :  ".$url." phoneno : ".$phoneno;
    
    $query = "INSERT INTO resumeinfo (name, email, phoneno,url,address,perc12,perc10,cgpa) VALUES ('$name', '$email', '$phoneno','$url','$address','$perc12','$perc10','$cgpa')";
             
    if (!mysqli_query($con, $query)){
        $error ="<p>Could not sign you up - please try again.</p>";
    } else {

        $_SESSION['id'] = mysqli_insert_id($con);  
        $_SESSION['name'] = $name;
        echo "Sucess!!";
        header("Location: resume.php");  
    }
             
?>