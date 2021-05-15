<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/register.css') }}" >
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://use.fontawesome.com/1dec14be15.js"></script>
  <title>EJ Login</title>
</head>
<body>
  <div class="container-fluid stylish-form">
    <img class="img-center" src="https://ecompjr.com.br/images/logomarca.png" alt="">
    <div class="row mar20" >
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="inner-section">
          <form method="post" action="{{route('/login/auth')}}">
          @csrf
            <div class="mar20 inside-form">
              <h2 class="font_white text-center">Login</h2>
              
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope "></i></span>
                <input type="email" class="form-control" value="a@admin.com" name="email" placeholder="E-mail">
              </div>
            
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Senha">
              </div>

              <div class="footer text-center">
                <button type="submit" class="btn btn-neutral btn-round btn-lg">Entrar</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>