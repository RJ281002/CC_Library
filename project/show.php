<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet/style.css">

    <title>CC-LIB</title>
    <style>
      
    </style>
  </head>
  <body>
    <?php include("header.html");?>
    <?php
      if(isset($_GET['more'])){
        $conn = mysqli_connect('localhost', 'root', '', 'books');
        $id =$_GET['more'];
        $showquery = "SELECT * FROM add_book WHERE bookid=$id";
        $last=mysqli_query($conn, $showquery);
        $row = mysqli_fetch_array($last);
        ?>
        
        <div class="card capitalize showcard">
          <div class="card-header"><a href="list.php"class="btn btn-close" aria-label="Close" ></a></div>
          <div class="container text-center"><img src="<?php echo $row['image']; ?>" class="img-fluid rounded-start showcardimage" alt="img"></div>
          <div class="card-body text-center">
            <p class="text-muted">Book Id:<h5 class="text-muted"><b><?php echo $row['bookid']; ?></b></h5></p><br>
            <p class="text-muted">Book Name:<h5 class="text-muted"><b><?php echo $row['bookname']; ?></b></h5></p><br>
            <p class="text-muted">Author:<h5 class="text-muted"><b><?php echo $row['author']; ?></b></h5></p><br>
            <p class="text-muted">About the Book:<h5 class="text-muted"><b><?php echo $row['desc']; ?></b></h5></p><br>
          </div>
          <div class="card-footer text-muted">
            
          </div>
        </div>
        <?php
      }
    ?>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  </body>
</html>