<main class="container py-4">
  <form action="controllers/User.php" method="POST">
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
    
    <div class="mb-3">
      <label for="type" class="form-label">Tipo</label>
      <input type="text" class="form-control" id="type" name="type">
    </div>    
    
    <input type="hidden" id="action" name="action" value="insert">

    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</main>
