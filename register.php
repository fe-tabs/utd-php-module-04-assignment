<?php include_once 'views/components/header.php';?>

<main class="container py-4">
  <form action="controllers/register.php" method="POST">
    <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="name" class="form-control" id="name" name="name">
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    
    <div class="mb-3">
      <label for="password" class="form-label">Senha</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>    
    
    <button type="submit" class="btn btn-primary">Criar conta</button>
  </form>
</main>

<?php include_once 'views/components/footer.php';?>
