<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
      <link rel="stylesheet" href="/application/views/layouts/css/bootstrap/bootstrap.min.css">
      <link rel="stylesheet" href="/application/views/layouts/css/header/style.css">
    <title><?=$title;?></title>
  </head>

  <body class="text-center">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand m-b-0" href="/">BWT_test</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <?php if (!isset($_SESSION['email']) && !isset($_SESSION['name']) && !isset($_SESSION['surname'])):?>
            <li class="nav-item">
            <a class="nav-link" href="/account/login">Log in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/account/register">Sign up</a>
          </li>
            <?php endif; ?>
          <li class="nav-item">
            <a class="nav-link" href="/weather/get-weather">Weather</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/feedback/send-feedback">Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/feedback/feedback-list">Feedlist</a>
          </li>
        </ul>

          <?php if (isset($_SESSION['email']) && isset($_SESSION['name']) && isset($_SESSION['surname'])):?>
                <form class="form-inline my-2 my-lg-0" action="/account/login" method="post">
                    <button type="submit" class="btn btn-danger" name="logout">Log out <b>(<?="{$_SESSION['name']} {$_SESSION['surname']}"; ?>)</b></button>
              </form>
            <?php endif; ?>
      </div>
    </nav>

    <?=$content;?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>