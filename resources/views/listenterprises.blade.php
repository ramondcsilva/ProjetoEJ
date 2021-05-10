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
          <li class="item"><a href="{{ url('')}}">Home</a></li>
          <li class="item"><a href="{{ url('enterprise/list')}}">Empresas Junior</a></li>
          <li class="item"><a href="{{ url('enterprise')}}">Cadastrar Empresas Junior</a></li>
          <li class="item"><a href="{{ url('federation')}}">Cadastrar Federação</a></li>

          <li class="item button"><a href="{{ url('login')}}">Log In</a></li>

          <li class="item button secondary"><a href="#">Sign Up</a></li>
        </ul>
      </nav>
      
      <div class="recent-grid">
        <div class="projects">
          <div class="card">
            <div class="card-header">
              <h3>Empresas Junior</h3>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                
                <select class="form-control" name="select">
                  <option class="form-option" value="">Todos</option>
                </select>
                <button type="submit"> Pesquisar</button>
              </form>


              </div>
              <button>See all <span class="las la-arrow-right">
              </span></button>

            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table width="100%">
                  <thead>
                    <tr>
                      <td>Nome</td>
                      <td>Federação</td>
                      <td>Estado</td>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($enterprises as $e)
                      <tr>
                        <td>{{$e->name}}</td>
                        <td>{{$e->federation->name}}</td>
                        <td>{{$e->federation->state->name}}</td>
                      </tr>
                    
                  @endforeach
                  </tbody>
                </table>
              </div>  
            </div>
          </div>
        </div>
      </div> 
    </div>
  </body>
</html>