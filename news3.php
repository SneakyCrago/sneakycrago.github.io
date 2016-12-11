<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Новости</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
      
    <div>
      
        <div id="Up"> <nav role="navigation" class="navbar navbar-default navbar-static-top">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="index.html" class="navbar-brand">SneakyCrago</a>
  </div>
  <!-- Collection of nav links and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li><a href="index.html">Главная</a></li>
      <li><a href="gallery.html">Галерея</a></li>
      <li class="active"><a href="news.html">Новости</a></li>
      <li><a href="info.html">Информация</a></li>
    </ul>
  </div>
</nav></div>
        <h1> Новости </h1>
      
        <?php     
        $link = mysqli_connect('localhost','root','','Site_bd');
      
        if(mysqli_connect_errno()) {
            echo 'Ошибка в подключении к БД ('.mysqli_connect_errno().'): '. mysqli_connect_error();
            exit();
        }
        
        $sql = "SELECT * FROM news";
        $result = mysqli_query($link, $sql);
        
        while($news = mysqli_fetch_assoc($result)) {
            echo "{$news['title']} <br><br>";
            echo "{$news['text']} <br>";
            echo "{$news['data']} <br>";
            echo "{$news['author']} <br><br><br>";
        } 
        ?>
        
        <footer> 
            <p> Сайт-галерея</p>
            Copyright &copy; 2016 </footer>
	</div>   
  </body>
</html>