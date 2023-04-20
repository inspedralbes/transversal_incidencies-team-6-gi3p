<!DOCTYPE html>
<html>
<body>
 
<?php
$username = $_POST['userid'];
$pwd = $_POST['password'];
 
if($username == 'grupo6' and $pwd == '1234')
{    
    session_start();
    $_SESSION['sid']=session_id();
    $_SESSION['username']=$username;
    header("Location: indexAdministrador.php");
    
}
else{
    header("Location: index.php");
}
?>
 
</body>
</html>
