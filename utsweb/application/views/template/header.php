<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <!-- style css -->
   <style >
     .badge{
      margin-left :3px;
     }
   </style>
   
   <title><?=$title ?></title>
  </head>
  <body>

  	
  	<!---navbar--->
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<div class="container">
  <a class="navbar-brand" href="#">CI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?= base_url(); ?>/mahasiswa">Data Mahasiswa</a>
      <a class="nav-item nav-link" href="<?= base_url(); ?>">About</a>
      <a class="nav-item nav-link" href="<?= base_url(); ?>login/logout">Logout</a>

      <!-- <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
    </div>
  </div>
  </div>
</nav>

<!-- <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul> -->