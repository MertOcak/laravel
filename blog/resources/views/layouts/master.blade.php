
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Blog Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css">
  <!-- Custom styles for this template -->
  <link href="http://blog.dev/css/blog.css" rel="stylesheet">
</head>

<body>

  @include('layouts.nav')

  <div class="blog-header">
    <div class="container">
      <h1 class="blog-title">The Bootstrap Blog</h1>
      <p class="lead blog-description">An example blog template built with Bootstrap.</p>
    </div>
  </div>

  <div class="container">

    <div class="row">

      <div class="col-sm-8 blog-main">

        <div class="blog-post">


          <h2 class="blog-post-title">

            @yield('title')


          </h2>


          @yield('body')


          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 offset-sm-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">

            @yield('about')


          </div>
          <div class="sidebar-module">


            @yield('archieves')


          </div>
          <div class="sidebar-module">


            @yield('elsewhere')

          
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    @include('layouts.footer')
  </body>
  </html>
