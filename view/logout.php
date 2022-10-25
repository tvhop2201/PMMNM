<?php
session_start();
$_SESSION['login'] == "";

session_unset();
// $_SESSION['id'] = "";

?>
<script language="javascript">
    document.location = "../view/login.php";
</script>