<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
</head>
<body>
	<nav class="navbar navbar-light bg-faded colorPalets" >
 		<div class="container-fluid">
    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
      			<a class="navbar-brand navTitle" href="/">SigPPG</a>
    		</div>
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
              <li><a href="listaaluno.html" class="navText">Listar Alunos</a></li>
      			</ul>

						<ul class="nav navbar-nav navbar-right">
              <button type="button" class="btn btn-primary navButton" id="myBtn">Logar</button>

              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Login</h4>
                    </div>
										<div class="modal-body">
											<form class="form-horizontal" method="POST" action="{{ route('login') }}">
	                        {{ csrf_field() }}

	                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

	                            <div class="col-md-6">
	                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

	                                @if ($errors->has('email'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	                            <label for="password" class="col-md-4 control-label">Password</label>

	                            <div class="col-md-6">
	                                <input id="password" type="password" class="form-control" name="password" required>

	                                @if ($errors->has('password'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('password') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <div class="col-md-6 col-md-offset-4">
	                                <div class="checkbox">
	                                    <label>
	                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
	                                    </label>
	                                </div>
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <div class="col-md-8 col-md-offset-4">
	                                <button type="submit" class="btn btn-primary">
	                                    Login
	                                </button>

	                                <a class="btn btn-link" href="{{ route('password.request') }}">
	                                    Forgot Your Password?
	                                </a>
	                            </div>
	                        </div>
	                    </form>
                    </div>
                  </div>
                </div>
              </div>
        			<button type="button" onClick="location.href='cadastro.html'" class="btn btn-primary navButton">Cadastrar-se</button>
      			</ul>
    		</div>
  		</div>
	</nav>
	<header>
    <h2 class="sectionTitle">Bem vindos ao SigPPG</h2>
	</header>
	<section>
    <p class="sectionText">O SigPPG é um sistema para alocação dinâmica das Bolsas de Mestrado PGCOMP. </br> Para fazer uso de nossas funcionalidades, você deve solicitar o acesso ao seu Coordenador e após isso realizar seu cadastro.</p>

	</section>
	 <footer class="footer colorPalets">
      <div class="container">
        <p class="text-muted textFooter fixed-bottom">Universidade Federal da Bahia</p>
      </div>
    </footer>

</body>
</html>