<?php
//print_r($_POST)
// Array ([fname]=>Gary [lname]=> Bhanot [marks]=>85 [imageUrl]=>test)
if(isset($_POST['addGrade'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $marks = $_POST['marks'];
    $imageURL = $_POST['imageURL'];
    
    include('connect.php');
    $querry="INSERT INTO students (fname , lname , marks, imageURL ) VALUES ('$fname','$lname','$marks','$imageURL')";
    $student = mysqli_query($connect,$querry);
    if($student){
    
        echo"Success";
    
    }else{
        echo mysqli_error($connect);
    }


} else{
    echo "you are not authenticated be here";
}




