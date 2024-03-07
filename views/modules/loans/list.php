<?php

  if (!$user_data || $user_data['type'] != 'Administrador') {
    header("location: index.php?page=list-books");
  }

  $headers = [
    'ID',
    'Usuário', 
    'Livro', 
    'Devolvido', 
    'Data de Empréstimo', 
    'Data de Devolução', 
    'Ações'
  ];
  
  $rows = $data;

  for ($i=0; $i < count($rows); $i++) { 
    $rows[$i]['action'] = '
      <div class="d-flex gap-3">
        <form action="?page=update-loan&id='.$rows[$i]['id'].'" method="POST">
          <input 
            id="id"
            name="id"
            type="hidden"
            value="'.$rows[$i]['id'].'"
          />

          <input 
            class="btn btn-primary fs-4" 
            type="submit" 
            value="Editar"
          />
        </form>
        
        <form action="controllers/Loan.php" method="POST">
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
            value="'.$rows[$i]['id'].'"
          />

          <input 
            class="btn btn-danger fs-4" 
            type="submit" 
            value="Excluir"
          />
        </form>
      </div>
    ';
  }

?>

<div class="card">
  <div class="card-body overflow-auto">
    <table class="table table-sm table-responsive align-middle">
      <thead class="align-middle text-nowrap">
        <?php foreach ($headers as $header) : ?>
          <th style="min-width: 160px;"><?= $header; ?></th>
        <?php endforeach; ?>
      </thead>
      <tbody>
        <?php foreach ($rows as $row) : ?>
          <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['title']; ?></td>
            <td><?= $row['is_returned'] ? 'Sim' : 'Não'; ?></td>
            <td><?= $row['loan_date']; ?></td>
            <td><?= $row['return_date']; ?></td>
            <td><?= $row['action']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div class="card-footer">
    <nav>
      <ul class="pagination">

      </ul>
    </nav>
  </div>
</div>
