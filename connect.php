<?php
$con=mysqli_connect ("localhost","username","password","db_name");
if (mysqli_connect_errno()) {
echo "failed to connect mysql: ". mysqli_connect_error();
}else echo "sucess!";
?>
