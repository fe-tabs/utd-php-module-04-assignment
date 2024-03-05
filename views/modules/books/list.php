<?php 

  include_once 'models/Connection.php';
  include_once 'models/Manager.php';
  include_once 'models/Book.php';

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
  