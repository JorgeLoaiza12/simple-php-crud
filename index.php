<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="./resources/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <h1>BookShop CRUD</h1>
  
  <div class="row main bg-info">
    <div class="col-xs-4">
      <form role="form" action="index_submit" method="get" accept-charset="utf-8">
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
      <table class="table">
        <thead>
          <tr>
            <th>Book Title</th>
            <th>Book Price</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Java Book</td>
            <td>$20</td>
            <td>
              <a href="#" class="btn btn-success" role="button">Edit Book</a>
              <a href="#" class="btn btn-danger" role="button">Delete Book</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="./resources/js/jquery-3.1.0.min.js"></script>
<script src="./resources/js/bootstrap.min.js"></script>
</body>
</html>