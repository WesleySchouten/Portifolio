
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Portifolio</title>
  </head>
  <body>

    <?php
    include 'inc/jumbo.php';
    include 'inc/nav.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">


  <form class="contact-form" action="Contact.php" method="post">
    <div class="form-group">
      <label for="exampleInputPassword1">Full name</label>
      <input type="text" name="name" class="form-control" required placeholder="Name">
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Subject</label>
      <input type="text" name="subject" class="form-control" required placeholder="Subject">
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Message</label>
    <textarea class="form-control" id="exampleTextarea" rows="3" required name="message"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Send E-mail</button>
</form>
</div>
  <div class="col-sm-6">
  
    <br>
    <br>


    <i class="fa fa-phone"></i>

          +31 (6) 381 002 49
          <br>
        <i class="fa fa-map-marker"></i> Rode wouw | 5754CM | Deurne
        <br>
        <i 	class="fa fa-envelope"></i> welseyschouten@outlook.com



  </div>
</div>
</div>
    <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
  </html>
