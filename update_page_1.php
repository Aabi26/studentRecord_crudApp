<?php include 'dbcon.php'?>
<?php include 'header.php'?>


<?php   
if(isset($_GET['id'])){
    $id=$_GET['id'];


$query="SELECT * FROM `student_data` where`id`='$id' ";
        $result=mysqli_query($connection,$query);
     if(!$result){
         die("query failed".mysqli_error($connection));
     }
     else{
         $row=mysqli_fetch_assoc($result);
        
     }
    }
        ?>


<?php  

if(isset($_POST['update-students'])){

    if (isset($_Get['id_new'])) {
       $idnew=$_Get['id_new'];
    }
$fname=$_POST['f-name'];
$lname=$_POST['l-name'];
$age=$_POST['age'];
$field=$_POST['field'];

$query="UPDATE `student_data` SET `firstName` = '$fname', `lastName`='$lname', `age`='$age', `field`='$field' where `id`= '$idnew'";

$result=mysqli_query($connection,$query);
if(!$result){
    die("query failed".mysqli_error($connection));
}
else{
    header('location:index.php?update_msg=Your Data Has Been updated Successfully');
   }

}

?>

<form action="update_page_1.php?id_new=<?php echo $id;?>" method="POST">

    <div class="form-group">
        <label for="f-name">FirstName</label>
        <input type="text" name="f-name" class="form-control" value="<?php echo $row['firstName']?>">
    </div>
    <div class="form-group">
        <label for="l-name">LastName</label>
        <input type="text" name="l-name" class="form-control" value="<?php echo $row['lastName']?>">
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="text" name="age" class="form-control" value="<?php echo $row['age']?>">
    </div>
    <div class="form-group">
        <label for="field">Field</label>
        <input type="text" name="field" class="form-control" value="<?php echo $row['field']?>">
    </div>
    <input type="submit" value="UPDATE" name="update-students" class="btn btn-success">

</form>


<?php include "footer.php"?>