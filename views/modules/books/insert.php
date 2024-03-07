<main class="container py-4 h-100">
  <form action="controllers/Book.php" method="POST">
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
</main>
