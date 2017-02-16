<?php
if(isset($_COOKIE["visitor"])) {
        header("location:weeklyform.php");
} 
else {
    header("location: newuser.php");	
}
?>