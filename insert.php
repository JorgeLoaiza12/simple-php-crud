<?php 

  include('./config/config.php');

  $title = $_POST['inp-book-title'];
  $price = $_POST['inp-book-price'];

  $query = "INSERT INTO books(book_title, book_price) VALUES('$title', '$price')";

  if (mysqli_query($conn, $query)) {
  //echo "Record successfully insert into database !";
    header("Location:index.php");
  } else {
    echo "Error in Query" + mysqli_error($conn);
  }

  mysqli_close($conn);

?>