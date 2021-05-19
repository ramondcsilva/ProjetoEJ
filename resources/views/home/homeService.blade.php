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
      <nav>
        <ul class="menu">
          <img class="img-nav" src="https://ecompjr.com.br/images/logoNome.png" alt="">
          <li class="logo"></li>
          <li class="item"><a href="{{ url('')}}">Home</a></li>
          <li class="item"><a href="{{ url('services')}}">Serviços</a></li>
          <li class="item"><a href="{{ url('enterprise/list')}}">Empresas Junior</a></li>
          <li class="item button"><a href="{{ url('login')}}">Log In</a></li>
        </ul>
      </nav>
      <div class="recent-grid">
        <div class="project">
          <div class="card">
            <div class="container px-4 py-5" id="featured-3">
              <h1 class="text-center" style="color: #545454"> <b>Serviços</b> </h2>
              <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                
                <div class="card-service mb-3">
                  <div class="card-header bg-transparent box-icon-service border-0">
                    <div class="box-icon-service">
                      <i class="bi bi-image-fill"></i>
                    </div>
                  </div>
                  <h3 class="text-center mt-xl-3" style="color: white"> <b>Site</b> </h3>
                  <p class="text-center" style="padding-top:20px; font-size: 15px; color: white"> 
                    Desenvolvimento de sites de forma criativa, funcional e responsiva, oferecendo a melhor solução para você ou sua empresa
                  </p>
                </div>

                <div class="card-service mb-3">
                  <div class="card-header bg-transparent box-icon-service border-0">
                    <div class="box-icon-service">
                      <i class="bi bi-display"></i>
                    </div>
                  </div>
                  <h3 class="text-center mt-xl-3" style="color: white"><b>Sistemas - Locais</b></h3>
                  <p class="text-center" style="padding-top:20px; font-size: 15px; color: white">
                    Impulsione o seu desempenho profissional reduzindo seus gastos. Possibilitamos a você os melhores Sistemas Locais que permitem automatizar com facilidade suas tarefas ou serviços.
                  </p>  
                </div>

                <div class="card-service mb-3">
                  <div class="card-header bg-transparent box-icon-service border-0">
                    <div class="box-icon-service">
                      <i class="bi bi-cloud"></i>
                    </div>
                  </div>
                  <h3 class="text-center mt-xl-3" style="color: white"><b>Sistemas - Web</b></h3>
                  <p class="text-center" style="padding-top:20px; font-size: 15px; color: white">
                    Reduza seus gastos impulsionando o seu desempenho profissional. Possibilitamos a você os melhores Sistemas Web que permitem automatizar com facilidade suas tarefas ou serviços.
                  </p>
                </div>

                <div class="card-service mb-3">
                  <div class="card-header bg-transparent box-icon-service border-0">
                    <div class="box-icon-service">
                      <i class="bi bi-phone"></i>
                    </div>
                  </div>
                  <h3 class="text-center mt-xl-3" style="color: white"><b>Aplicativos Mobile</b></h3>
                  <p class="text-center" style="padding-top:20px; font-size: 15px; color: white">
                    Já pensou em ter a sua empresa, serviços e ideias na palma de sua mão? Nós possibilitamos isso desenvolvendo soluções mobile sob medida para você.
                  </p>
                </div>

                <div class="card-service mb-3">
                  <div class="card-header bg-transparent box-icon-service border-0">
                    <div class="box-icon-service">
                      <i class="bi bi-cash-coin"></i>
                    </div>
                  </div>
                  <h3 class="text-center mt-xl-3" style="color: white"><b>e-Commerce</b></h3>
                  <p class="text-center" style="padding-top:20px; font-size: 15px; color: white">
                    Tenha sua Loja Virtual e faça seus produtos atingirem uma clientela ainda maior.
                  </p>
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