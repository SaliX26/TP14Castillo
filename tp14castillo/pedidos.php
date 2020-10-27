<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <title></title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="#">Dulceria online</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="registro.php">Registrarse</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="iniciar_sesion.php">Iniciar sesion</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="pedidos.php">Hacer un pedido</a>
        </li>
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </nav>
  <br></br>
  <h3 style="width:30%; margin-left:5%; margin-top:-1%;"></h3>
  <form style="width:30%; margin-left:5%; margin-top:5%; border:1px solid #006cff; padding:2%;" method="post" action="insert_into2.php">
    <div class="form-group">
      <label>Dulce a solicitar</label>
      <input type="text" name="dulce" class="form-control">
    </div>
    <div>
      <label>Marca</label>
      <input type="text" name="marca" class="form-control">
    </div>
    <div>
      <label>Cantidad</label>
      <input type="number" name="cantidad" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Importe a pagar</label>
      <input type="int" class="form-control" name="precio">
    </div>
    <div>
      <label>Direccion a llegar</label>
      <input type="text" name="direccion" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</body>

</html>