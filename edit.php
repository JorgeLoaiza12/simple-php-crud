<?php 

  include('./config/config.php');

  $id = $_GET['inp-book-id'];
  $title = $_GET['inp-book-title'];
  $price = $_GET['inp-book-price'];

  $query = "UPDATE books SET book_title='$title', book_price='$price' WHERE book_id='$id'";

  if (mysqli_query($conn, $query)) {
    // echo "Record update successfully...";
    header("Location:index.php");
  } else {
    echo "Error in the query.";
  }

  mysqli_close($conn);

?>