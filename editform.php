<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="./resources/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    include('./config/config.php');

    $id = $_GET['id'];

    $query = "SELECT * FROM books WHERE book_id='$id'";
    $result = mysqli_query($conn, $query);

  ?>

  <div class="container">
    <h3>Edit Book Form</h3>
    <form action="edit.php" method="get" accept-charset="utf-8">
      <?php 
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="form-group">
        <input type="hidden" name="inp-book-id" class="form-control" value="<?php echo $row['book_id']?>">
      </div>

      <div class="form-group">
        <label for="inp-book-title">Book Title</label>
        <input type="text" name="inp-book-title" class="form-control" value="<?php echo $row['book_title']?>">
      </div>

      <div class="form-group">
        <label for="inp-book-price">Book Price</label>
        <input type="text" name="inp-book-price" class="form-control" value="<?php echo $row['book_price'] ?>">
      </div>
      <button type="submit" class="btn btn-success btn-block" role="button"> Edit Book</button>
      <?php
        }
        mysqli_close($conn);
      ?>
    </form>
  </div>

  <script src="./resources/js/jquery-3.1.0.min.js"></script>
  <script src="./resources/js/bootstrap.min.js"></script>
</body>
</html>