
 <?php

include "oops.php";

if(isset($_GET['id']))
{ 
    $onerecord=new OOPCRUD();
    $id=$_GET['id'];
    $editData=$onerecord->fetchonerecord($id);
}

if(isset($_POST['update']) && isset($_GET['id'])) 
{
    $id=$_GET['id'];
    $updatedata=new OOPCRUD();

   $name=$_POST['name'];
    $email=$_POST['email'];
    $sql=$updatedata->updateData($name,$email,$id);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>UPDATE FORM</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-3">
    <h1 class="text-center bg-dark text-light">UPDATE DATA</h1>
    
    <form method="post" action="">
    <label id="name">Enter Name</label>
    <input type="text" name="name" id="name" class="form-control" required value="<?php echo isset($editData) ? $editData['name'] : '' ?>">

    <label id="name" class=" mt-3">Enter Email</label>
    <input type="email" name="email" id="email" class="form-control" required value="<?php echo isset($editData) ? $editData['email'] : '' ?>">

    <button type="submit" id="update" name="update" class="btn btn-warning  mt-3">Update</button>
    </form>
</div>

</body>
</html>