<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Homestead.app</title>

        <!--<script src="js/vendor/modernizr.js"></script>-->
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="{{{asset('css/foundation.min.css')}}}" />
        <link rel="stylesheet" href="{{{asset('css/app.css')}}}" />
        <link rel="stylesheet" href="{{{asset('css\bootstrap.min.css')}}}"/>
    </head>

    <body>

    <!-- Header and Nav -->

      <nav class="navbar navbar-default">
        <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Odot</a>
        </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- End Header and Nav -->

    <div class="row">
      <div class="large-12">
        @yield('content')
      </div>
    </div>


    <!-- Footer -->

    <footer class="row">
      <div class="large-12 columns">
        <hr />
        <div class="row">
            <div class="large-6 columns">
                <p class="col-md-8 col-md-offset-2">Neat thing I learned how to do thanks to Team Treehouse</p>
            </div>
        </div>
      </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script src="{{{asset('js/vendor/jquery.js')}}}"></script>
    <script src="{{{asset('js/vendor/foundation.js')}}}"></script>
    <script src="{{{asset('js/vendor/bootstrap.min.js')}}}"></script>
    <script>
      $(document).foundation();
    </script>
    </body>
</html>
