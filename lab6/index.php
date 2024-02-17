<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include ('inc/nav.php')?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="diplay-5 mt-3 mb-5">
                    Student Catalog

                </h1>
            </div>

        </div>
    </div>
    <?php
    $connect = mysqli_connect('localhost','root','root','http5225');
    $querry = 'SELECT * FROM students';

    $students = mysqli_query($connect , $querry);

    ?>
    ?>

    <div class="row">
        <?php
    foreach($students as $student){

        if($student['marks']<50){

            $bgClass='bg-danger';
        }else{
            $bgClass='bg-Success';
        }
       echo '<div class="col-md-4">
                <div class="card '.$bgClass.' " style="width: 18rem;">
                    <img src="' .$student['imageURL']. '" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">NAME:  '.$student['fname'].' '.$student['lname'].'</h5>
                    <p class="card-text">Marks:'.$student['marks'].'</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    <div class = "card-footer">
                        <div class = "col">
                           </div>
                            <div class = "col">
                                <form action="inc/deleteStudent.php" method="GET">
                                    <input type = "hidden" name="id" value="'.$student['id'].'">
                                    <button type="submit" name= "deleteStudent" class="btn btn-sm btn-warning">
                                    Delete 
                                    </button>
                                </form>
                                <form action="update.php" method="GET">
                                    <input type = "hidden" name="id" value="'.$student['id'].'">
                                    <button type="submit" name= "updateStudent" class="btn btn-sm btn-warning">
                                    Update
                                    </button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>';








    } ;
    ?>



</body>

</html>