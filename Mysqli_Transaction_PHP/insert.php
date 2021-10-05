<?php
include "oops.php";


$ClassObj=new OOPCRUD();
if(isset($_POST['name']) && $_POST['email'])
{
    $name=$_POST['name'];
    $email=$_POST['email'];

    $sqlInsert=$ClassObj->insertData($name,$email);
    if($sqlInsert)
    {
        echo "Data inserted successfully";

    }else{
        echo "Data Not inserted";
    }
}else{
    echo '<script> alert("Empty data cannot be inserted") </script>';
}

?>