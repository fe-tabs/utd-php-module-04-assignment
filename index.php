<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Biblioteca UTD</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body class="vh-100">
  <header class="bg-primary p-2 sticky-top">
    <nav class="nav navbar-expand-lg" data-bs-theme="dark">
      <div class="container-fluid">
        <button 
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbar-navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div id="navbar-navigation" class="collapse navbar-collapse px-3 pt-1">
        <div class="navbar-nav text-white">
          <a class="nav-link" href="index.php">Início</a>
        </div>
      </div>
    </nav>
  </header>

  <main class="container py-4 h-100">
    <section>
      <div class="row row-cols-1 row-cols-xl-2 g-3">
        <div class="col">
          <div class="card container">
            <div class="row">
              <div class="col-sm-4 text-center">
                <img class="rounded my-3" src="https://upload.wikimedia.org/wikipedia/pt/2/26/Asociedadedoanel.jpg" alt="Capa do Livro 'O Senhor dos Anéis: A Sociedade do Anel'">
              </div>
    
              <div class="card-body col-sm-8">
                <h5 class="card-title fw-bold fs-3">
                  O Senhor dos Anéis: A Sociedade do Anel
                </h5>
                <h6 class="card-subtitle fs-4 fw-bold">J.R.R. Tolkien</h6>
                <p class="card-text">
                  <small class="text-body-secondary fs-5 fw-bolder">
                    Da série O Senhor dos Anéis, Livro I
                  </small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="bg-primary p-3 fixed-bottom text-center">
      <p class="fs-4 text-white m-0">
        Desenvolvido por <strong>@fe-tabs</strong>
      </p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>