<?php 
include"../lib/dbcon.php";
    if(isset($_GET["d"])){
        $iduser=$_GET["d"];
        settype($iduser,"int");
        echo $iduser;
    }
    if(isset($_GET["t"])){
        $quyen=$_GET["t"];
        settype($quyen,"int");
        echo $quyen;
    }
    
    if ($quyen==0) {
        $sql="UPDATE `user` SET `Quyen` = b'1' WHERE `user`.`Iduser` = $iduser       " ;   
        mysqli_query($con,$sql);
        header("location: ../index.php?p=qltk")    ;
    } else {
        $sql="UPDATE `user` SET `Quyen` = b'0' WHERE `user`.`Iduser` = $iduser        " ;   
        mysqli_query($con,$sql);
        header("location: ../index.php?p=qltk");
    }
    
    
    
?>