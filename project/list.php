<?php
  $connection = mysqli_connect("localhost", "root", "");
  $db= mysqli_select_db($connection, 'books');
  session_start();
?>
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
  <body class="bgcol">
  
    <?php include("header.html");?>
    <div class="btn1 fixed-top">
      <a href="index.php" class="btn btn-dark btn-outline-success" tabindex="-1" role="button" aria-disabled="true">Add Book</a>
    </div>
    <hr class="w-100 pt-5">
    <section>
      <form action="fetch.php" method="POST" enctype="multipart/form-data">
        <div class="container">
          <div class="row text-center">
                <?php

                  // $mysqli =new mysqli('localhost', 'root', '', 'books');
                
                  $displayquery = "SELECT * FROM `add_book`";
                  $querydisplay = mysqli_query($connection, $displayquery);
                  
                  // $row = mysqli_num_rows($querydisplay);
                  while($result = mysqli_fetch_array($querydisplay)){
                    ?>
                    
                      <div class="col-lg-3 col-md-4 col-12 my-2 ">
                        <div class="card border border-dark">
                          <img src="<?php echo $result['image']; ?>" class="card-img-top  capitalize" alt="img">
                          <div class="card-body text-muted border">
                            <blockquote class="blockquote capitalize">
                              <p class="mb-0"><?php echo $result['bookname']; ?></p>
                              <footer class="blockquote-footer"><cite title="Source Title"><?php echo $result['author']; ?></cite></footer>
                            </blockquote>
                              <a href="show.php?more=<?php echo $result['bookid']?>" name="more" class="btn btn-info ">More</a>
                            
                              <a href="edit.php?edit=<?php echo $result['bookid']?>" name="edit" class="btn btn-info ">Edit</a>
                              <a onclick='javascript:confirmationDelete($(this));return false;' href="fetch.php?delete=<?php echo $result['bookid']?>" name="delete" class="btn btn-danger " >Delete</a>

                          </div>
                        </div>
                      </div> 
                    <?php
                  }  
                ?>
          </div> 
        </div>
      </form>
    </section>
    <script>
      function confirmationDelete(anchor)
      {
        var conf = confirm('Do you really want to delete the book?');
        if(conf)
            window.location=anchor.attr("href");
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

  </body>
</html>
