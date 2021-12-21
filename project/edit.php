<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet/style.css">

    <title>CC-LIB</title>

  </head>
  <body>
    <?php include("header.html");?>
    <div class="btn1 fixed-top">
        <form  action="list.php" method="post" class="d-flex">
            <button class="btn btn-outline-success" type="submit" name="go">Book List</button>
        </form>
    </div>
    <!-- end of header -->
    <?php
        $conn =mysqli_connect('localhost', 'root', '', 'books');
        if(isset($_GET['edit']))
        { 
            $id = $_GET['edit'];
            $selquery = "SELECT * FROM add_book WHERE bookid=$id";
            $result=mysqli_query($conn, $selquery);
            $row = mysqli_fetch_array($result);
        }
    ?>
    <!-- starting of add book page -->
    <section >
        <center class="container content-align-center edittop"><h2><small class="text-dark"><b>Update Details</b></small></h2></center>
        
        <form action="fetch.php" method="POST" enctype="multipart/form-data">  
            <div class="container px-5 py-5 jumbotron">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-12 px-5" >
                    
                  <div class="mb-3">
                  <label for="exampleInputText1" class="form-label">Book Name:</label>
                  <input type="text" class="form-control capitalize" id="exampleInputText1" value="<?php print_r($row['bookname']);?>" name="bookname" required>
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputtext1" class="form-label" >Author:</label>
                  <input type="text" class="form-control capitalize" id="exampleInputtext1" value="<?php print_r($row['author']);?>" name="author" required>
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputtext1" class="form-label" >Book Id:</label>
                      <input type="text" class="form-control" id="exampleInputtext1" name="bookid" value="<?php print_r($row['bookid']);?>" required>
                  </div>
                  <div class="form-floating mb-3">
                      <label for="floatingTextarea">About the Book:</label>
                      <input type="text" class="form-control capitalize" name="desc" value="<?php print_r($row['desc']);?>">
                  </div>
                  
                </div>
                <div class="col-lg-6 col-md-6 col-12 px-5 my-5 ml-auto">
                    <img src="<?php print_r($row['image']);?>" class="img-fluid set editset" id="output"/>
                </div>

                <div class="my-3">
                    <button type="submit" class="btn btn-dark btn-outline-success text-white" name="update">Update</button>
                </div>

            </div>
        </form>
    </section>
    <!-- end of edit book page -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>