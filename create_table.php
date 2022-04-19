<?php 
    $con = new mysqli("localhost","root","","dbimage");

    if($con->connect_error){
        die("Connecrion failed : " .$con->connect_error);
    }

    $sql = "CREATE TABLE `images` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `image` longblob NOT NULL,
        `created` datetime NOT NULL DEFAULT current_timestamp(),
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

if($con->query($sql)){
    echo "database created succesfull";
}
else{
    echo "failed " .$con->eror;
}

$con->close();
?>

    