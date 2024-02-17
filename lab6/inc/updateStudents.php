<?php
//print_r($_POST)
// Array ([fname]=>Gary [lname]=> Bhanot [marks]=>85 [imageUrl]=>test)
if(isset($_POST['updateGrade'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $marks = $_POST['marks'];
    $imageURL = $_POST['imageURL'];
    $id = $_POST['id'];
    
    include('connect.php');
    $query="UPDATE students SET  fname ='$fname', lname = '$lname', marks='$marks', imageURL='$imageURL' WHERE id='$id'";
    $student = mysqli_query($connect,$query);
    if($student){
    
        echo"Success";
    
    }else{
        echo mysqli_error($connect);
    }


} else{
    echo "you are not authenticated be here";
}


/*
UPDATE `students` SET `id`='[value-1]',`fname`='[value-2]',`lname`='[value-3]',`marks`='[value-4]',`grade`='[value-5]',`imageURL`='[value-6]' WHERE 1
*/

