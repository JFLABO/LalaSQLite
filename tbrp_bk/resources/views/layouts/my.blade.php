<!DOCTYPE html>
<html lang="ja">
<head>
<title>たびれぽ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="./build/three.js"></script>
<script src="./js/controls/TrackballControls.js"></script>
<script src="./js/renderers/CSS3DRenderer.js"></script>
</head>
<body>
        <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">たびれぽ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
              <a class="nav-link" href="/tbrp">Home <span class="sr-only">(current)</span></a>
            </li>
            <!---
            <li class="nav-item">
              <a class="nav-link disabled" href="/tbrp/tabispot">tabi spot list</a>
            </li>

            <li class="nav-item">
              <a class="nav-link disabled" href="/tbrp/show_img_card">Images</a>
            </li>

            <li class="nav-item">
              <a class="nav-link disabled" href="/tbrp/images/create">post Image</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="/tbrp/images/create">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="/tbrp/images/create">LinkBox</a>
            </li>
            -->
            <!--
            <li class="nav-item">
              <a class="nav-link disabled" href="/tbrp/posttabiclip">post tabi clip</a>
            </li>
            -->
            <li class="nav-item">
              <a class="nav-link disabled" href="/tbrp/logout">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="../">Topに戻る</a>
            </li>
            <!--

            <li class="nav-item">
              <a class="nav-link disabled" href="/tbrp/register">Register</a>
            </li>
            -->
            <!--
　
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                ウルトラビジョンモードチェンジ
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation">　<a role="menuitem" tabindex="-1" href="#">ボーイスカウト</a></li>
                <li role="presentation">　<a role="menuitem" tabindex="-1" href="#">航空自衛隊</a></li>
                <li role="presentation">　<a role="menuitem" tabindex="-1" href="#">陸上自衛隊</a></li>
                <li role="presentation">　<a role="menuitem" tabindex="-1" href="#">海上自衛隊</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation">　<a role="menuitem" tabindex="-1" href="#">警察</a></li>
                <li role="presentation">　<a role="menuitem" tabindex="-1" href="#">消防</a></li>
                <li role="presentation">　<a role="menuitem" tabindex="-1" href="#">行政</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation">　<a role="menuitem" tabindex="-1" href="#">政府</a></li>
              </ul>
            </div>
          -->



            <font color="white">
              <?php
              $user = \Auth::user();
              if ($user) {
                echo "Hello $user->name ";
              }
              ?>
            </font>　
            <!---
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          --->
        </div>
      </nav>
    </header>
    <main role="main" class="container" style="padding-top: 70px;">
    @yield('content')
    </main>
    </body>
<script>
  $('#BTN_BK').click(function() {
    //alert('Handler for .click() called.');
    window.location.href = 'http://jflabo.org/';
  });
</script>
</html>
