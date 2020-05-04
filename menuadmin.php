<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">IHEA | Servicio Social</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="plantel.php">Planteles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="prestatarios.php">Prestatarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aceptaciones.php">Aceptaciones</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="liberaciones.php">Liberaciones</a>
      </li>
    </ul>
	<span class="navbar-text">
      <a class="nav-link"><?=$_SESSION['user']?></a>
	</span>
    <span class="navbar-text">
      <a class="nav-link" href="logout.php">Salir</a>
    </span>
  </div>
</nav>