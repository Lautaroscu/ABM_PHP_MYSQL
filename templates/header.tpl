<!DOCTYPE html>
<html lang="en">

<head>
  <base href="{BASE_URL}">


  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos/style.css">
</head>

<body>
  <header>
    <h1>NETFLIX</h1>
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Temporadas
              </a>
              <ul class="dropdown-menu">
                {foreach from=$seasons item=$season}
                  <li><a class="dropdown-item" href="season/{$season->titulo_temp}">Temporada {$season->titulo_temp}</a>
                  </li>
                {{/foreach}}
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="login">Inciar Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main class="container">



