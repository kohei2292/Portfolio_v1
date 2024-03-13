<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/anime.min.js"></script>
    <script src="./js/script.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <title>Portfolio</title>
    @yield('style')
    <script>
        $(function(){
          $(".headC").click(function(){
            $(".headB").slideToggle();
          });
        });
    </script>
</head>
<body>
    <div class="nav-dark Hcontainer">
      <div class="container-small">
        <a class="headA" href="index.html">Portfolio</a>
        <button type="button" class="headC">
          <span class="fas fa-bars" title="MENU"></span>
        </button>
      </div>
      <nav class="headB">
        <ul>
          <li><a href="index.html">Skill</a></li>
          <li><a href="index.html">Profile</a></li>
          <li><a href="index.html">Creation</a></li>
        </ul>
      </nav>
    </div>
      @yield('content')
      <footer>
        <div class="Fcontainer">
            <div class="footA">
                <h2>PortFolio</h2>
                <p>©︎Kohei Nunokawa All rights reserved.</p>
            </div>
            <div class="footB">
                <ul>
                    <li><a href="#"><span class="fab fa-twitter" title="Twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-f" title="Facebook"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram" title="Instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>