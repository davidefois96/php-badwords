<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <title>php-badwords</title>
</head>
<body class="d-flex flex-column align-items-center ">

<h1 class="my-5">Php badwords</h1>

<form action="atterraggio.php" class="w-50" method="POST">

  <input type="text" name="badword" class="form-control" placeholder="badword">
  <textarea name="paragrafo" id="" cols="30" rows="10" class="form-control my-4 " placeholder="parola da censurare"></textarea>
  <button type="submit" class="btn btn-dark ">Send</button>


</form>
  
</body>
</html>