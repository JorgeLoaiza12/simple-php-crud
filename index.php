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

  $query = "SELECT * FROM books";
  $result = mysqli_query($conn, $query);

?>

<div class="container">
  <h1>BookShop CRUD</h1>
  
  <div class="row main bg-info">
    <div class="col-xs-4">
      <h3>Insert Books Form</h3>
      <form role="form" action="insert.php" method="POST" accept-charset="utf-8">
        <div class="form-group">
          <label for="inp-book-title">Book Title</label>
          <input type="text" id="inp-book-title" name="inp-book-title" class="form-control">
        </div>
        <div class="form-group">
          <label for="inp-book-price">Book Price</label>
          <input type="text" id="inp-book-price" name="inp-book-price" class="form-control">
        </div>
        <button type="submit" class="btn btn-info btn-block">Registar</button>
      </form>
    </div>

    <div class="col-xs-8">
      <h3>Display All Record Table</h3>
      <table class="table">
        <thead>
          <tr>
            <th>Book Title</th>
            <th>Book Price</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>

          <?php 
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td> <?php echo $row['book_title']; ?> </td>
            <td> <?php echo $row['book_price']; ?> </td>
            <td>
              <a href="editform.php?id=<?php echo $row['book_id'] ?>" class="btn btn-success" role="button">Edit Book</a>
              <a href="delete.php?id=<?php echo $row['book_id'] ?>" class="btn btn-danger" role="button">Delete Book</a>
            </td>
          </tr>
          <?php 
            }
            mysqli_close($conn);
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="./resources/js/jquery-3.1.0.min.js"></script>
<script src="./resources/js/bootstrap.min.js"></script>
</body>
</html>