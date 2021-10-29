<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BAMED Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/narrow-jumbotron/narrow-jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="text-center ">
        <h3 class="text-info">BAMED</h3>
        <p>SKIN CARE</p>
      </div><br>

      <div class="d-flex justify-content-center">
        <div class="card border-default col-md-12" style="max-width: 20rem;">
          <div class="card-body text-dark">
          <img src="{{url('bamed/img/logo_login.png')}}" style=" width: 70px; height: 70px;">
          {{-- <h4 class="card-title text-center">Login</h4> --}}
          <hr>
          <form action="{{ route('login') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="{{ old('email') }}" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-block btn-sm btn-outline-info">Login</button>
          </form>
          </div>
          <div class="card-footer bg-transparent border-info text-muted pull-right">
            <small>Copyright © 2017-2018 <br>Powered by <a href="http://jadikapan.com/">JADIKAPAN</a></small>
          </div>
        </div>
      </div>
    
      </div>


    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
