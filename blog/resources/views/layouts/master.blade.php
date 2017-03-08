
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>My Blog</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css">

  <!-- Custom styles for this template -->
  <link href="/css/blog.css" rel="stylesheet">
</head>

<body>

  @include('layouts.nav')

  <div class="blog-header">
    <div class="container">
      <h1 class="blog-title">My Blog</h1>
      <p class="lead blog-description">Online Daily Posts</p>
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

       </div><!-- /.blog-post -->


       <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
      </nav>

    </div><!-- /.blog-main -->

    <div class="col-sm-3 offset-sm-1 blog-sidebar">
      <div class="sidebar-module sidebar-module-inset">

        @include('widgets.about')


      </div>
      <div class="sidebar-module">


        @include('widgets.allPosts')
      

      </div>
      <div class="sidebar-module">


        @include('widgets.elsewhere')


      </div>
    </div><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</div><!-- /.container -->

@include('layouts.footer')
</body>
</html>
