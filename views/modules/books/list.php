<?php 

  include_once 'models/Connection.php';
  include_once 'models/Manager.php';
  include_once 'models/Book.php';

  if ($_POST && $_POST['action']) {
    unset($_POST['action']);

    switch ($_REQUEST['action']) {
      case 'insert':
        Book::insertBook($_POST);
        break;
      
      default:
        break;
    }
  }

?>

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
  <form action="index.php?page=list-books" method="POST">
    <div class="mb-3">
      <label for="title" class="form-label">Título</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>

    <div class="mb-3">
      <label for="author" class="form-label">Autor</label>
      <input type="text" class="form-control" id="author" name="author">
    </div>

    <div class="mb-3">
      <label for="genre" class="form-label">Gênero</label>
      <input type="text" class="form-control" id="genre" name="genre">
    </div>

    <div class="mb-3">
      <label for="language" class="form-label">Idioma</label>
      <input type="text" class="form-control" id="language" name="language">
    </div>

    <div class="mb-3">
      <label for="isbn_13" class="form-label">ISBN-13</label>
      <input type="text" class="form-control" id="isbn_13" name="isbn_13">
    </div>

    <div class="mb-3">
      <label for="series_name" class="form-label">Série</label>
      <input type="text" class="form-control" id="series_name" name="series_name">
    </div>

    <div class="mb-3">
      <label for="series_volume" class="form-label">Volume</label>
      <input type="int" class="form-control" id="series_volume" name="series_volume">
    </div>

    <div class="mb-3">
      <label for="quantity" class="form-label">Quantidade</label>
      <input type="number" class="form-control" id="quantity" name="quantity">
    </div>

    <div class="mb-3">
      <label for="cover_image" class="form-label">Imagem de Capa</label>
      <input type="text" class="form-control" id="cover_image" name="cover_image">
    </div>

    <input type="hidden" id="action" name="action" value="insert">

    <button type="submit" class="btn btn-primary">Adicionar livro</button>
  </form>

  <section>
    <div class="row row-cols-1">
      <div class="col">
        <?php foreach($data as $book): ?>
          <div class="card container my-3">
            <div class="row">
              <div class="col-sm-4 text-center">
                <img 
                  class="rounded my-3" 
                  src="<?=$book['cover_image']?>" 
                  alt="Capa do Livro '<?=$book['title']?>'">
              </div>
    
              <div class="card-body col-sm-8">
                <h5 class="card-title fw-bold fs-3">
                  <?=$book['title']?>
                </h5>
                <h6 class="card-subtitle fs-4 fw-bold">
                  <?=$book['author']?>
                </h6>
                <p class="card-text">
                  <?php
                    echo ($book['series_name'] != null) ? ('
                      <small class="text-body-secondary fs-5 fw-bolder">
                        Da série '.$book['series_name'].', Volume '.$book['series_volume'].'
                      </small>
                    ') : '';
                  ?>
                </p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

<footer class="bg-primary p-3 text-center">
    <p class="fs-4 text-white m-0">
      Desenvolvido por <strong>@fe-tabs</strong>
    </p>
</footer>
  