<?php
include"../lib/dbcon.php";
 if(isset($_GET["d"])){
        $idtin=$_GET["d"];
        settype($idtin,"int");
        $query1="DELETE FROM `image` WHERE Idtin=$idtin";
        mysqli_query($con,$query1);
       $query2="DELETE FROM motel WHERE motel.Idtin = $idtin" ;
       mysqli_query($con,$query2);
       header("location: ../index.php?p=danhsachbaidang");
    }?> 