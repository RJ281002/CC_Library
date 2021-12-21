<?php
  session_start();
  $connection = mysqli_connect("localhost", "root", "");
  $db= mysqli_select_db($connection, 'books');
    if(isset($_POST['submit'])){
      $bookname = $_POST['bookname'];
      $author = $_POST['author'];
      $bookid = $_POST['bookid'];
      $about = $_POST['desc'];
      $image = $_FILES['image'];
      $filename = $image['name'];
      $fileerror = $image['error'];
      $filetmp = $image['tmp_name'];
      $fileext = explode('.',$filename);
      $filecheck=strtolower(end($fileext));
      $fileextstored = array('png','jpg','jpeg');
      if(in_array($filecheck,$fileextstored))
      {
        $destination ='images/'.$filename;
        move_uploaded_file($filetmp, $destination);
          
      }
      $q = "INSERT INTO `add_book`(`bookname`, `author`, `bookid`, `desc`, `image`) VALUES ('$bookname','$author',' $bookid','$about','$destination')";
      $query = mysqli_query($connection, $q);
      if($query){
        $_SESSION['status']= "Data Inserted Successfully";
        header("location: list.php");
      }
      
    }
    
    if(isset($_GET['delete']))
    {
      $id = $_GET['delete'];
      $delquery = "DELETE FROM add_book WHERE bookid=$id";
      $last=mysqli_query($connection, $delquery);
      header("location: list.php");
    }

    if(isset($_POST['update']))
    {
      $name = $_POST['bookname'];
      $author = $_POST['author'];
      $bookid = $_POST['bookid'];
      $about = $_POST['desc'];

      $upquery="UPDATE `add_book` SET `bookname`='$name',`author`='$author',`bookid`='$bookid',`desc`='$about' WHERE bookid='$bookid'";
      $access=mysqli_query($connection, $upquery);

      header("location: list.php");
    }

?>


