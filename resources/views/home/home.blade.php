<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EJ Home</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css') }}" >
  </head>
  <body>
    <div class="stylish-form">
      <div class="nav-header">
        <nav>
          <ul class="menu" style="padding-left:0rem;" >
            <img class="img-nav" src="https://ecompjr.com.br/images/logoNome.png" alt="">
            <li class="logo"></li>
            @auth
              <li class="item"><a href="{{ url('home')}}">Home</a></li>
              <li class="item"><a href="{{ url('services')}}">Serviços</a></li>
              <li class="item"><a href="{{ url('enterprise/list')}}">Empresas Junior</a></li>
              <li class="item"><a href="{{ url('enterprise')}}">Cadastrar Empresas Junior</a></li>
              <li class="item"><a href="{{ url('federation')}}">Cadastrar Federação</a></li>

              <li class="item button secondary"><a href="{{ route('logout')}}">Logout</a></li>
            @else
              <li class="item"><a href="{{ url('home')}}">Home</a></li>
              <li class="item"><a href="{{ url('services')}}">Serviços</a></li>
              <li class="item"><a href="{{ url('enterprise/list')}}">Empresas Junior</a></li>
              <li class="item button"><a href="{{ route('home.login')}}">Log In</a></li>
              <li class="item button secondary"><a href="{{ route('register')}}">Sign Out</a></li>
            @endauth
          </ul>
        </nav>
      </div>
      <div class="recent-grid">
        <div class="project">
          <div class="card">
            <div class="container px-4 py-5" id="featured-3">
              <h1 class="text-center" style="color: #545454"> <b>Diretrizes</b> </h2>
              <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                
                <div class="feature col" >
                  <div class="box-icon bg-gradient align items">
                    <div class="box-icon">
                      <i class="bi bi-trophy " style="font-size: 20px; padding:10px; color: white"></i>
                    </div>
                  </div>
                  <h1 class="text-center mt-xl-3" style="color: #1c86b8"> <b>Missão</b> </h1>
                  <p class="text-center" style="padding-top:20px; font-size: 15px; color: #545454"> Através da vivência empresarial e trabalho em equipe, formar profissionais <b> inovadores</b>, <b>comprometidos</b> e <b>capazes de vencer desafios</b> futuros.</p>
                </div>

                <div class="feature col">
                  <div class="box-icon feature-icon bg-gradient offset-xl-2">
                    <div class="box-icon">
                      <i class="bi bi-eye" style="font-size: 20px; padding:10px; color: white"></i>
                    </div>
                  </div>
                  <h1 class="text-center mt-xl-3" style="color: #1c86b8"><b>Visão</b></h1>
                  <p class="text-center" style="padding-top:20px; font-size: 15px; color: #545454">Ser uma empresa que realiza <b>projetos de impacto</b>, mais <b>conectada ao movimento empresa júnior</b> e com grande reconhecimento <b>dentro e fora</b> da universidade.</p>  
                </div>

                <div class="feature col">
                  <div class="box-icon feature-icon bg-gradient offset-xl-2">
                    <div class="box-icon">
                      <i class="bi bi-people-fill" style="font-size: 20px; padding:10px; color: white"></i>
                    </div>
                  </div>
                  <h1 class="text-center mt-xl-3" style="color: #1c86b8"><b>Valores</b></h1>
                  <p class="text-center" style="padding-top:20px; font-size: 15px; color: #545454">Os valores de uma empresa guiam a conduta da mesma, portanto a EcompJr. baseia-se nos seguintes valores: <b>Protagonismo, Cooperatividade, Assiduidade, Resiliência, Constância em resultados, Evolução com os erros, Conexão com o Movimento, Foco na Qualidade, Ética e Empatia</b>.</p>
                </div>
              
              </div>
            </div>
          </div>  
        </div>    
      </div>
    </div>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>