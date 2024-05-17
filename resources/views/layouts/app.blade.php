<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/libs.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/media.css">

    <title>@yield('title', 'Games Market')</title>
  </head>
  <body>
    <div class="main-wrapper">
      @include('includes.header')

      <div class="middle">
        <div class="sidebar">
          @include('includes.sidebar.categories')
          @include('includes.sidebar.news')          
        </div>

        <div class="main-content">
          <div class="content-top">
            <div class="content-top__text">
              Купить игры неборого без регистрации смс с торента,
              получить компкт диск, скачать Steam игры
            </div>
            <div class="slider">
              <img src="/img/slider.png" alt="Image" class="image-main">
            </div>
          </div>
          
          @yield('content')

          <div class="content-bottom"></div>
        </div>
      </div>

      @include('includes.footer')

    </div>
    <script src="/js/main.js"></script>
  </body>
</html>
