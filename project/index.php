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
        <button class="btn btn-outline-success" type="submit">Book List</button>
    </form>
    </div>
        
    <div class="container d-md-block py-5 my-0">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" >
          <div class="carousel-item active">
            <img src="images/pageimage/img2.jpg" class="d-block w-100 setimg" alt="Img">
            <div class="carousel-caption d-none d-md-block">
                <blockquote class="blockquote">
                    <h1 class="mb-5"><b>Welcome To ColoredCow Library</b></h1>
                    <p class="text-white">"Nothing is pleasanter than exploring a library."</p>
                    <footer class="blockquote-footer text-light"><cite title="Source Title">Walter Savage Landor </cite></footer>
                  </blockquote>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/pageimage/img4.jpg" class="d-block w-100 setimg" alt="Img">
            <div class="carousel-caption d-none d-md-block">
                <blockquote class="blockquote">
                    <p class="text-white bg-dark">"When in doubt go to the library."</p>
                    <footer class="blockquote-footer text-light"><cite title="Source Title">J.K. Rowling </cite></footer>
                  </blockquote>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/pageimage/img3.jpg" class="d-block w-100 setimg" alt="Img">
            <div class="carousel-caption d-none d-md-block">
                <blockquote class="blockquote">
                    <p class="mb-0"><b>"I have always imagined that Paradise will be a kind of a Library."</b></p>
                    <footer class="blockquote-footer text-light"><cite title="Source Title">Jorge Luis Borges</cite></footer>
                  </blockquote>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
    </div>

    <!-- starting of add book page -->
    <section>
        <center class="container content-align-center"><h3><large class="text-dark"><b>ADD BOOK INFO</b></large></h3></center>
        
        <form action="fetch.php" method="POST" enctype="multipart/form-data">  
            <div class="container px-5 py-5 my-4 jumbotron ">
              <div class="row">
                <div class="col-lg-7 col-md-6 col-12 px-5" >  
                  <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Book Name:</label>
                    <input type="text" class="form-control capitalize" id="exampleInputText1" placeholder="Book Name" name="bookname" required>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label" >Author:</label>
                    <input type="text" class="form-control capitalize" id="exampleInputtext1" placeholder="Author" name="author" required>
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputtext1" class="form-label" >Book Id:</label>
                      <input type="number" class="form-control capitalize" id="exampleInputtext1" placeholder="Book Id" name="bookid" required>
                  </div>
                  <div class="form-floating mb-3">
                      <label for="floatingTextarea">About the Book:</label>
                      <textarea class="form-control capitalize" placeholder="Tell us something about book" name="desc" ></textarea>
                  </div>
                </div>
                <div class="col-lg-5 col-md-6 col-12 px-5 my-5 ml-auto">
                  <img src="" class="img-fluid set" id="output"/>
                  <div class=my-5>
                    <input type="file" name="image" accept="image/*" required>
                  </div>    
                </div>
              </div>
            </div>
            <div class="my-3" align="center">
                <button type="submit" class="btn btn-dark btn-outline-success text-white" name="submit">Add Book</button>
            </div>
        </form>
    </section>
    <!-- end of add book page -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
