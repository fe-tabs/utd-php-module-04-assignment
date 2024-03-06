<?php include_once 'views/components/header.php';?>

<main class="container py-4">
  <form action="controllers/login.php" method="POST">
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    
    <div class="mb-3">
      <label for="password" class="form-label">Senha</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>    
    
    <button type="submit" class="btn btn-primary">Entrar</button>
  </form>
</main>

<?php include_once 'views/components/footer.php';?>
