<?php 

  include_once 'models/Connection.php';
  include_once 'models/Manager.php';
  include_once 'models/Book.php';

?>

<?php include_once 'views/components/header.php';?>

<main class="container py-4 h-100">
  <section>
    <div class="row row-cols-1">
      <div class="col">
        <?php foreach($data as $book): ?>
          <div class="card container my-3">
            <div class="row">
              <div class="col-sm-4 col-md-5 text-center book-cover">
                <img 
                  class="rounded my-3" 
                  src="<?=$book['cover_image']?>" 
                  alt="Capa do Livro '<?=$book['title']?>'"
                >
              </div>
    
              <div class="card-body d-flex flex-column justify-content-between col-sm-8 col-md-7">
                <div>
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

                <div class="d-flex gap-3 justify-content-end mt-3">
                  <form action="?page=insert-loan&id=<?=$book['id']?>" method="POST">
                    <input 
                      id="id"
                      name="id"
                      type="hidden"
                      value="<?=$book['id']?>"
                    />

                    <input 
                      class="btn btn-success fs-4" 
                      type="submit" 
                      value="Alugar"
                    />
                  </form>

                  <form action="?page=insert-loan&id=<?=$book['id']?>" method="POST">
                    <input 
                      id="id"
                      name="id"
                      type="hidden"
                      value="<?=$book['id']?>"
                    />

                    <input 
                      class="btn btn-primary fs-4" 
                      type="submit" 
                      value="Editar"
                    />
                  </form>

                  <form action="controllers/Book.php" method="POST">
                    <input
                      id="action"
                      name="action"
                      type="hidden"
                      value="delete"
                    />

                    <input 
                      id="id"
                      name="id"
                      type="hidden"
                      value="<?=$book['id']?>"
                    />

                    <input 
                      class="btn btn-danger fs-4" 
                      type="submit" 
                      value="Excluir"
                    />
                  </form>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

<?php include_once 'views/components/footer.php';?>
  