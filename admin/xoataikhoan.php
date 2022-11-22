<?php
include"../lib/dbcon.php";
 if(isset($_GET["d"])){
        $iduser=$_GET["d"];
        settype($iduser,"int");
        $query1="DELETE FROM `motel` WHERE `motel`.`Idtin` = $iduser";
        mysqli_query($con,$query1);
       $query2="DELETE FROM `user` WHERE `user`.`Iduser`=$iduser" ;
       mysqli_query($con,$query2);
       header("location: ../index.php?p=qltk");
    }?> 