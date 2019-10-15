<!-- Main page -->
<?php include('api/server.php') ?>

<!DOCTYPE html>
<html lang="ro">

<head>
    <title> MyNote - Atestat </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta author="ahuzmeza">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"> MyNote </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <?php  if (isset($_SESSION['username'])) : ?>        
                        <?php include("components/comp_logged_in.php"); ?>
                <? else: ?>
                        <?php include('components/comp_logged_out.php'); ?>    
                <?php endif ?>
            </ul>
        </div>
    </nav>

    <div class="content">
  	<!-- notification message -->
  	<?php if (!isset($_SESSION['success'])) : ?>
        
        <div class="container">
          <div class="page-header">
            <h2> Salvează<span class="txt-rotate" data-period="2000"
                data-rotate='[ "-ți notițele cu MyNote ", "-ți notițele cu MyNote ! " ]'>
                </span>
            </h2>      
          </div>
          <p> Notițele se salvează automat dupa ce te opresti din a scrie </p>      
          <p> Notitele sunt personale si prorpii, 'anti-paste'
              <br> &nbsp; (doar ce este scris de utilizator se va salva). </p>
          <br>
          <p> Ultimul update: 07/05/2019
              <br> &nbsp; - Vizualizarea salvarii notitei printr-un reper vizual. </p>
          <br>
          <p> Urmatorul update:
              <br> &nbsp; - Adaugarea formatarii automate a notitei.
              <br> &nbsp; - Implementarea unui formular de resetare a parolei
              <br> pentru utilizatori. </p>
        </div>
        
        
  	<?php endif ?>
    </div>
    
    <?php include("components/comp_note.php"); ?>

<!-- SCRIPTS -->    
    
    <script type="text/javascript" src="js/main.js"></script>
    
</body>
</html>