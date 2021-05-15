<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EJ Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css') }}" >
  </head>
  <body>
    <div class="stylish-form">
      <nav>
        <ul class="menu">
          <img class="img-nav" src="https://ecompjr.com.br/images/logoNome.png" alt="">
          <li class="logo"></li>
          <li class="item"><a href="{{ url('home')}}">Home</a></li>
          <li class="item"><a href="{{ url('enterprise/list/loged')}}">Empresas Junior</a></li>
          <li class="item"><a href="{{ url('enterprise')}}">Cadastrar Empresas Junior</a></li>
          <li class="item"><a href="{{ url('federation')}}">Cadastrar Federação</a></li>

          <li class="item button secondary"><a href="{{ route('logout')}}">Logout</a></li>
        </ul>
      </nav>
    </div>
    
  </body>
</html>