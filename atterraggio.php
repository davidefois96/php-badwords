<?php 



$paragrafo=$_POST['paragrafo'];
$badword=trim($_POST['badword']);
$lunghezzaParagrafo=strlen($paragrafo);
$nuovoParagrafo=str_replace($badword,'***',$paragrafo);
$lunghezzaNuovoParagrafo=strlen($nuovoParagrafo)



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <title>atterraggio</title>
</head>
<body class="d-flex flex-column align-items-center ">

  <h2>Paragrafo:</h2>
  <p><?php echo $paragrafo ?></p>
  <p>lunghezza: <?php echo $lunghezzaParagrafo ?></p>
  <p>badword: <?php echo $badword?></p>

  <h2>Paragrafo censurato:</h2>
  <p><?php echo $nuovoParagrafo ?></p>
  <p>Lunghezza paragrafo censurato: <?php echo $lunghezzaNuovoParagrafo?></p>
  
</body>
</html>

