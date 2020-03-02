<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users CRUD App for TTN Assignment</title>
  <link href="{{ asset('sass/app.css') }}" rel="stylesheet" type="text/css" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <style>
    body{
        background-color: #25274d;
    }
    .container{
        background: #00e4ff;
        margin-top:1.5%;
        margin-bottom:1.5%;
        padding: 4%;
        border-top-left-radius: 0.5rem;
        border-bottom-left-radius: 0.5rem;
    }
  </style>
</head>
<body>
  <div class="container">
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
  <script>
    function popup()
    {
        var retVal = confirm("Do you want to delete this user?");
            if( retVal == true ) {
                return true;
            } else {
                return false;
            }
    }
  </script>
</body>
</html>