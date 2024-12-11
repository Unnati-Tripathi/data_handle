<?php

$con=mysqli_connect("localhost","root" ,"","crudoperation");
if($con){
    // echo "connection successfull";
}
else{
    die ("not connected".mysqli_connect_error());
}

?>