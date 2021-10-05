
<?php


// include 'oops.php';
include "delete.php";
$ClassObj=new OOPCRUD();


?>

<!DOCKTYPE html>
<html>
<head>
<title>PHP CRUD</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


<style type="text/css">
     .pagination {   
        display: inline-block;   
    }   
    .pagination a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        padding: 8px 16px;   
        text-decoration: none;   
        border:1px solid black;   
    }   
    .pagination a.active {   
            background-color: #000;   
            color:#fff;
    }   
    .pagination a:hover:not(.active) {   
        background-color: red;
        color:#fff;
    }    
</style>

</head>
<body>
<div class="container mt-3" id="container1">
    <h1 class="text-center bg-dark text-light">PHP MySql CRUD Operation In OOPS</h1>

    <span id="result1" class="text-success"></span>
    <span id="result2" class="text-danger"></span>
    <form method="post" action="">
    <label for="name">Enter Name</label>
    <input type="text" name="name" id="name" class="form-control" required>

    <label for="email" class=" mt-3">Enter Email</label>
    <input type="email" name="email" id="email" class="form-control" required>
    
    <button type="submit" id="submit" name="insert" class="btn btn-primary  mt-3">Insert</button>

   
    </form>
</div>  
<div class="container table-responsive" id="pagination-data">

</div>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax.js"></script>


