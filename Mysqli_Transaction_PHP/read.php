<?php
include 'oops.php';
    $classObj=new OOPCRUD();

?>

    

<table class="container table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php

    $record_per_page = 3;  
    $page="";
    $output="";

    if (isset ($_POST['page']) ) {  
        $page = $_POST['page'];  
    } else {  
       $page=1;
    }  
  
    //determine the sql LIMIT starting number for the results on the displaying page  
    $start_from = ($page-1) * $record_per_page;  
    $data=$classObj->fetchData($record_per_page,$start_from);
    $cnt= 1 + $start_from;
    while($row=mysqli_fetch_array($data))
    {
    ?>
    <tr>
        <td><?php echo htmlentities($cnt);?></td>
        <td><?php echo htmlentities($row['name']);?></td>
        <td><?php echo htmlentities($row['email']);?></td>
        <td><a class="btn btn-secondary" href="update.php?id=<?php echo htmlentities($row['id']);?>">Edit</a></td>
        <td><a class="btn btn-danger" href="delete.php?del=<?php echo htmlentities($row['id']);?>">DELETE</a></td>
    <?php
        $cnt++;
    } 

    ?>
    
</tbody>
</table>
<div class="text-center pagination" id="container3">
        <?php
        $res=$classObj->getPage();
        $total_pages=ceil($res/$record_per_page);
        // echo $total_pages;
        for ($i=1; $i <= $total_pages; $i++) { 
            echo "<button class='pagination_link' style='cursor:pointer;margin:3px; padding:6px 12px; border:1px solid #ccc;' id='".$i."'>".$i."</button>";
        }
        ?>
    </div>
