<?php 

  $user_data = array();

  session_start();
  
  if (isset($_SESSION[md5('user_data')])) {
    $user_data = $_SESSION[md5('user_data')];
  }

?>

<header class="bg-primary d-flex justify-content-between p-2 sticky-top fs-5">
  <nav class="nav navbar-expand-lg w-100" data-bs-theme="dark">
    <div class="container-fluid order-lg-2">
      <button 
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbar-navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div id="navbar-navigation" class="collapse navbar-collapse order-lg-1 px-3 pt-1">
      <div class="navbar-nav gap-3 text-white">
        <a class="nav-link" href="index.php?page=list-books">Início</a>

        <?php 
          echo $user_data && $user_data['type'] == 'Administrador' ? ('
            <div class="dropdown">
              <a href="#" role="button" class="nav-link" data-bs-toggle="dropdown">
                Livros
              </a>
              <div class="dropdown-menu bg-primary px-3 py-2">
                <a 
                  class="dropdown-item nav-link bg-primary" 
                  href="index.php?page=insert-book"
                >
                  Adicionar livro
                </a>
                <a 
                  class="dropdown-item nav-link bg-primary" 
                  href="index.php?page=list-books"
                >
                  Todos os livros
                </a>
              </div>
            </div>
    
            <div class="dropdown">
              <a href="#" role="button" class="nav-link" data-bs-toggle="dropdown">
                Usuários
              </a>
              <div class="dropdown-menu bg-primary px-3 py-2">
                <a 
                  class="dropdown-item nav-link bg-primary" 
                  href="index.php?page=insert-user"
                >
                  Adicionar usuário
                </a>
                <a 
                  class="dropdown-item nav-link bg-primary" 
                  href="index.php?page=list-users"
                >
                  Todos os usuários
                </a>
              </div>
            </div>
    
            <div class="dropdown">
              <a href="#" role="button" class="nav-link" data-bs-toggle="dropdown">
                Empréstimos
              </a>
              <div class="dropdown-menu bg-primary px-3 py-2">
                <a 
                  class="dropdown-item nav-link bg-primary" 
                  href="index.php?page=list-loans"
                >
                  Todos os empréstimos
                </a>
              </div>
            </div>
          ') : '';
        ?>

        <div class="dropdown">
          <a href="#" role="button" class="nav-link" data-bs-toggle="dropdown">
            Autenticação
          </a>
          <div class="dropdown-menu bg-primary px-3 py-2">
            <?php
              echo $user_data ? ('
                <a 
                  class="dropdown-item nav-link bg-primary" 
                  href="controllers/logout.php"
                >
                  Sair 
                </a>
              ') : ('
                <a 
                  class="dropdown-item nav-link bg-primary" 
                  href="index.php?page=register"
                >
                  Registrar-se
                </a>
                <a 
                  class="dropdown-item nav-link bg-primary" 
                  href="index.php?page=login"
                >
                  Entrar
                </a>
              ');
            ?>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>