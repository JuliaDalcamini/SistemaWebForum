<HTML>
<HEAD>
 <TITLE>DISNEY-FORUM</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</HEAD>
<BODY>
<div class="topo">
<img src="imagens/disney.jpg">
</div>


<div>
        <nav class="navbar navbar-dark" style="background-color: #393E8F;">
                <a class="navbar-brand" href="../controller/controllerPosts.php?opcao=1"><img src="imagens/icon.png"> Forum</a>
                <button class="navbar-toggler" (click)="show = !show" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" [ngClass]="{'show':show}" id="navbarNav">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="../index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="SobreTrabalho.php">Sobre o Trabalho</a></li>
                        <li class= "nav-item"><a class= "nav-link" href="LoginUsuario.php">Login</a></li>
                        </ul>
                </div>
        </nav>
</div>
<p>