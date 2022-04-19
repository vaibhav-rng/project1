<?php 
    $con = new mysqli("localhost","root","",);

    if($con->connect_error){
        die("Connecrion failed : " .$con->connect_error);
    }

    $sql = "CREATE DATABASE dbimage";

    if($con->query($sql)){
        echo "database created succesfull";
    }
    else{
        echo "failed " .$con->eror;
    }

    $con->close();
    ?>