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
        <div class="error" >
      	 <h3> You must log in </h3>
        </div>
  	<?php endif ?>
    </div>
    
    <?php include("components/comp_note.php"); ?>

<!-- SCRIPTS -->    
    
    <script type="text/javascript" src="js/main.js"></script>
    
</body>
</html>