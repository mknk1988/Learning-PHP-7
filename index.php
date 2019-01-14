<?php
    $date = new DateTime('now', new DateTimeZone('MSK'));
?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="_source/style.css">

    <title>Главная страница сервера</title>
  </head>
  <body class="text-center">
    <div class="container-fluid">
        
        <?php
            print_r("<h1>Сегодня:</h1><p>". $date->format('l jS F Y H:i:s') ."</p>");
        ?>
        
        <h3>Список файлов</h3>

        <?php
            $dir = 'C:/Server/data/htdocs/learning';
            $files = scandir($dir);
            
            foreach ($files as $key => $value) {
                if (! is_dir($value) && $value != "index.php" &&  $value != "phpinfo.php") {
                    print("<a href=\"$value\"><button type=\"button\" class=\"btn btn-info\" style= \"width: 200px; margin-bottom: 10px;\">$value</button></a><br/>");
                }
            }
        ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>