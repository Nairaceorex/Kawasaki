<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  

  <title>Kawasaki</title>
  
</head>
<body class="body-top">
  <?php

  include('templates/nav.php');
  ?>

  <div class="row">
    <div class="col-6"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af1760940526ba845003eca777deab6265a932581e9eab3b9d650e691ca7630fb&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script></div>
    <div class="col-6"><div > 
      <ul class="list-group">
        <li class="list-group-item active" style="color: #000000;
        background-color: #dc3545;
        border-color: #040404;">Адрес: г.Сасово, ул.Калинина, д.27</li>
        <li class="list-group-item active" style="color: #000000;
        background-color: #dc3545;
        border-color: #040404;">Телефон:+7(945)785-54-20</li>
        <li class="list-group-item active" style="color: #000000;
        background-color: #dc3545;
        border-color: #040404;">Почта:kawasaki@gmail.com</li>
        
      </ul>
    </div></div>
  </div>

  
  



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <?php

  include('templates/footer.php');
  ?>
</body>
</html>