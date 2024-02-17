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

        <div class="container">
            <div class="row">
                <div class="col">

                    <form method="POST" action="inc/addStudents.php">
                        <div class="mb-3">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" name="fname" class="form-control" id="fname"
                                aria-describedby="emailHelp">
                           
                        </div>
                        <div class="mb-3">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" name="lname"class="form-control" id="lname">
                        </div>
                        <div class="mb-3">
                            <label for="marks" class="form-label">Grades</label>
                            <input type="text" name="marks"class="form-control" id="marks">
                        </div>
                        <div class="mb-3">
                            <label for="imageURL" class="form-label">image URL</label>
                            <input type="text" name="imageURL"class="form-control" id="imageURL">
                        </div>
                        
                </div>
                <button type="submit" name='addGrade' class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>







</body>

</html>