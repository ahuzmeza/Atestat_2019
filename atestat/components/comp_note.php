<?php if (isset($_SESSION['username'])) : 

    $usr = $_SESSION['username'];

    
    $query = "SELECT title FROM users WHERE username = '$usr'";
    $query_rez = mysqli_query($db, $query);
    $title_exists = mysqli_fetch_assoc($query_rez);
    if ($title_exists)
    {    
          $row['title'] = mysqli_fetch_array($query_rez);
          
    }

?>

    <form class="note" method="get" action="api/save_note.php">

        <p>Title&nbsp;</p>
        <input type="text" name="title">
        
        <?php echo $row['title'] ?>
        
        <br><br><br>

        <button type="submit" class="btn btn-success"
                href="../index.php"> Save </button>
        <button type="button" class="btn btn-danger"> Delete </button>
        
    </form> 

<?php endif ?>


<!-- 

<p>
            Title:&nbsp;
            <span contenteditable="true" 
                 name="title" 
                 class="note__title"
                 method="get"> title </span>
        </p>

        <div contenteditable="true" 
             name = "body"
             class="note__body">
            <p>
                ds
            </p>
        </div>

-->


