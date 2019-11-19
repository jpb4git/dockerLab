  <?php 


if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
    move_uploaded_file($_FILES['monfichier']['tmp_name'], 'upload/' . basename($_FILES['monfichier']['name']));
}


  $pDSN  = "mysql:dbname=mysql;host=db"; 
  $pUserName = "root"; 
  $pPassword = "root";
  try {
     $instance = new PDO($pDSN, $pUserName, $pPassword);
      $instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      $instance->setAttribute(PDO::ATTR_EMULATE_PREPARES,false); 
      $instance->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");
      echo "ok yes";
      
  } catch (Exception $e) {
     echo   "Error" . $e->getMessage();
  }
     
  echo '<ul>';
  foreach (glob('./upload/*') as $file){
     echo '<li>' . $file . ' </li> ';
  }  
  echo '</ul>';
      
  
  ?>
  <!DOCTYPE html>
  <html lang="fr">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title></title>
      <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      <link rel="stylesheet" href="css/app.css">
  </head>

  <body>
      <header>

      </header>
      <main>

          <form enctype="multipart/form-data" action="index.php" method="post">
              <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
              Transfère le fichier <input type="file" name="monfichier" />
              <input type="submit" />
          </form>

      </main>
      <footer>

      </footer>


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
          integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
      </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
          integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
      </script>
  </body>

  </html>