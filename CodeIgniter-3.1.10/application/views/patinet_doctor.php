
<!DOCTYPE html>
<html>
<head>
<title></title>

<meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="row">
<!-- left. side -->
 <div class="col-md-3">
  <div class="card">
 <img class="card-img-top" src="../../images/profileIcon.jpeg" alt="Card image">
  <div class="card-body">
   <h4 class="card-title">John Doe</h4>
   <p class="card-text">john@gmail.com</p>
    <p class="card-text">0722000000.</p>
   <a href="#" class="btn btn-primary">View Medical history</a>
  </div>
</div>
 
 </div>

 <!-- middle side -->
 <div class="col-md-7">
  <form action="/action_page.php" class=".needs-validation card p-3 bg-light">

<div class="form-group">
 <label for="Signs & Symptoms">Signs & Symptoms:</label>
 <textarea class="form-control" rows="6" id="symptoms"></textarea>
</div>

<div class="custom-control custom-switch">
   <input type="checkbox" class="custom-control-input" id="lab">
   <label class="custom-control-label" for="lab">Require lab test</label>
  </div>

  <div class="form-group">
 <label for="Medicine">Medicine</label>
 <textarea class="form-control" rows="4" id="medicine"></textarea>
</div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



 </div>





</body>
</html>