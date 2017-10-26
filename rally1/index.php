<?php
  $message = "";
  if(!empty($_REQUEST['status'])) {
    switch($_REQUEST['status']) {
      case 'success':
        $message = 'User was added succesfully';
      break;
      case 'error':
        $message = 'There was a problem inserting the user';
      break;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>


    <title></title>
  

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
 

    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    
<link rel="stylesheet" href="css/estilos.css">
</head>

<body>

<header> 


 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a class="navbar-brand" href="#">Rally </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
     
      </ul>
     
    </div>
  </div>
</nav> 

<div class="container">
    <div class="msg">
      <?php echo $message; ?>
    </div>
    <form action="signup.php" method="POST" class="form-inline" role="form">
      <div class="form-group">
        <label class="sr-only" for="">Cédula</label>
        <input type="text" class="form-control" id="" name="cedula" placeholder="Su cédula">
      </div>
      <div class="form-group">
        <label class="sr-only" for="">Nombre</label>
        <input type="text" class="form-control" id="" name="name" placeholder="Su nombre">
      </div>
      <div class="form-group">
        <label class="sr-only" for="">Apellidos</label>
        <input type="text" class="form-control" id="" name="lastname" placeholder="Sus apellidos">
      </div>
    

      <div> 
<select name="scarrera" class="form-control" id="combo">
    <?php 
    include('combo.php');
    ?>
  </select>
</div>



      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


</header>




  </body>
</html>

