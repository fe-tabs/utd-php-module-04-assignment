<main class="container py-4">
  <form action="controllers/Loan.php" method="POST">
    <div class="mb-3">
      <label for="user_id" class="form-label">Usuário</label>
      <select class="form-select" id="user_id" name="user_id">
        <?php foreach($users as $user): ?>
          <option value="<?=$user['id']?>"><?=$user['name']?></option>
        <?php endforeach; ?>
      </select>
    </div>
    
    <div class="mb-3">
      <label for="loan_date" class="form-label">Data de Empréstimo</label>
      <input type="date" class="form-control" id="loan_date" name="loan_date" value="<?=$data['loan_date'];?>">
    </div>    

    <div class="mb-3">
      <label for="return_date" class="form-label">Data de Devolução</label>
      <input type="date" class="form-control" id="return_date" name="return_date" value="<?=$data['return_date'];?>">
    </div>

    <div class="form-check mb-3">
      <label for="is_returned" class="form-check-label">Devolvido</label>
      <input type="checkbox" class="form-check-input" id="is_returned" name="is_returned" value="<?=$data['is_returned'];?>">
    </div>    
    
    <input type="hidden" id="book_id" name="book_id" value="<?=$data['book_id'];?>">
    <input type="hidden" id="id" name="id" value="<?=$data['id'];?>">
    <input type="hidden" id="action" name="action" value="update">

    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</main>
