<?php
//print_r($_POST)
// Array ([fname]=>Gary [lname]=> Bhanot [marks]=>85 [imageUrl]=>test)
if(isset($_GET['deleteStudent'])){

    $id = $_GET['id'];
    
    
    include('connect.php');
    $querry="DELETE FROM students WHERE id='$id'";
    $student = mysqli_query($connect,$querry);
    if($student){
        header('Location:../index.php');
    
    
    
    }else{

        echo mysqli_query($connect);
    }


} else{
    echo "you are not authenticated be here";
}