<?php include 'header.php'?>
<?php include 'dbcon.php'?>


<div class="box1">
    <h2>All Students</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        ADD STUDENTS
    </button>

</div>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Age</th>
            <th>Field</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $query="SELECT * FROM `student_data`";
        $result=mysqli_query($connection,$query);
     if(!$result){
         die("query failed".mysqli_error($connection));
     }
     else{
       while($row=mysqli_fetch_assoc($result)){
       ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['firstName']?></td>
            <td><?php echo $row['lastName']?></td>
            <td><?php echo $row['age']?></td>
            <td><?php echo $row['field']?></td>
            <td><a href="update_page_1.php?id=<?php echo $row['id']?>" class="btn btn-success">Update</a></td>
            <td><a href="delete_page.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php
     }
    
    }
        ?>


    </tbody>
</table>
<?php

if(isset($_GET['message'])){
    echo"<h6>".$_GET['message']."</h6>";
    
}


?>
<?php

if(isset($_GET['insert_msg'])){
    echo"<h6>".$_GET['insert_msg']."</h6>";
    
}


?>

<?php

if(isset($_GET['update_msg'])){
    echo"<h6>".$_GET['update_msg']."</h6>";
    
}


?>
<?php

if(isset($_GET['delete_msg'])){
    echo"<h6>".$_GET['delete_msg']."</h6>";
    
}


?>

<form action="insert_data.php" method="POST">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Students</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="f-name">FirstName</label>
                        <input type="text" name="f-name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="l-name">LastName</label>
                        <input type="text" name="l-name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" name="age" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="field">Field</label>
                        <input type="text" name="field" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" value="add" name="add-students" class="btn btn-success">
                </div>
            </div>
        </div>
    </div>
</form>

<?php include "footer.php"?>

</html>