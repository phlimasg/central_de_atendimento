<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ url('css/app.css') }}">
  <link rel="stylesheet" href="{{ url('css/icons/flaticon.css') }}">
</head>
<body>
  <div class="menu-top">      
          <div class="col-sm-2">
            <img src="{{ url('/img/logo.png') }}" alt="" class="logo">
          </div>
          <div class="col-sm-1 col-sm-offset-9 off">
               <a href="#">  Usuário <span class="glyphicon glyphicon-off"></span></a>
          </div>
  </div>
  
<div class="col-sm-1 menu">
    <nav class="navbar navbar-inverse">
        <div class="">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>            
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">                
              <li ><a href="#"><div class="flaticon-speedometer"></div>Dashboard</a></li>
              <li ><a href="#"><div class="flaticon-support"></div> Atendimento</a></li>
              <li ><a href="#"><div class="flaticon-route"> </div>Visita Guiada</a></li>
              <li ><a href="#"><div class="flaticon-team"> </div>Usuários</a></li>
              <li ><a href="#"><div class="flaticon-enterprise"><br>Unidades</div></a></li>
            </ul>            
          </div>
        </div>
      </nav>    
</div>

  
<div class="col-sm-11">
        <div class="container-fluid">
            @yield('content')
        </div>
</div>

</body>
</html>
