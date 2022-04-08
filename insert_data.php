<?php
include 'dbcon.php';

if(isset($_POST['add-students'])){

    $fname=$_POST['f-name'];
    $lname=$_POST['l-name'];
    $age=$_POST['age'];
    $field=$_POST['field'];

    if($fname==""||empty($fname)){
        header('location:index.php?message=You need to fill in the blank field! ');
       
     
}

else{
    $query= "INSERT INTO `student_data` ( `firstName`, `lastName`, `age`, `field`) VALUES ('$fname', '$lname', ' $age', ' $field')";
$result=mysqli_query($connection,$query);

if(!$result){
 die("query Faild".mysqli_error($connection));
}
else{
 header('location:index.php?insert_msg=Your Data Has Been Add Successfully');
}

}

}
    
    
?>