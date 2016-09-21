<?php 
  include('./config/config.php');

  $bid = $_GET['id'];
  $query = "DELETE FROM books WHERE book_id='$bid'";

  if (mysqli_query($conn, $query)) {
    header("Location:index.php");
  }else {
    echo "Error in Query" + mysqli_error($conn);
  }

  mysqli_close($conn);
?>