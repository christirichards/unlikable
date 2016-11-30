<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="Unlikable is a set of utilities for Facebook to manage your account using the PHP SDK">
    <meta name="author" content="Christi Richards">
    <link rel="icon" href="favicon.ico">

    <link rel="stylesheet" href="dist/css/main.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/4.4.0/font/octicons.min.css" />

    <title>Unlikable</title>
  </head>

  <body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" title="Facebook Unlikable">Unlikable</a>
      </div>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="https://facebook.com/" target="_blank" title="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Profile<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#" title="#" target="_blank">Placeholder</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="preloader"></div>
  <div class="jumbotron text-center">
    <div class="container">
    <h1>Facebook Unlikable</h1>
      <form method="POST" action="/manager/preview.php" id="preview">
        <button type="submit" name="preview" id="preview" class="btn btn-primary btn-block">Get Pages</button>
      </form>
    </div>
  </div>
  <div class="container">
    <h3>Facebook Likes</h3>
    <div class="col-sm-12">
      <div id="results">
        <div class="alert alert-dismissible alert-warning clearfix">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <p class="text-center">There is currently no info to display.</p>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
      <p class="text-center"><span class="text-muted"><span class="octicon octicon-code black"></span> with <span class="octicon octicon-heart pink"></span> by <a href="https://christirichards.com" title="ChristiRichards.com" target="_blank">Christi Richards</a></span></p>
    </div>
  </footer>
    <script src="dist/js/main.min.js"></script>
  </body>
</html>
