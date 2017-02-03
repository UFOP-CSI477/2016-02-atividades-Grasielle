<div class="col-md-4">
  <br/>
  <br/>
  <br/>
  
  <br/><p class="lead"><a>Você acessou a<a/> <strong> ÁREA GERAL. </strong> Visualize ao lado a relação de procedimentos disponíveis:</p>

  <strong><a href="<?php echo Router::url('http://localhost/atv1_sistemasWeb_Lab/'); ?>"><u>Voltar</u></a></strong>
</div>


<div class="form-top container top-content form-top row">
<div class="row">
  <br/>
    <div class="col-md-6 col-sm-offset-1">
      <h4><strong><center>PROCEDIMENTOS</center></strong></h4><br/>
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>NOME</th>
            <th>VALOR</th>
          </tr>
        </thead>
        <tbody>

  <?php foreach ($procedimentos as $p): ?>
    <tr>
      <td>
        <?php echo $p['Procedimento']['nome']; ?>
      </td>
      <td>
        <?php echo $p['Procedimento']['preco']; ?>
      </td>
    </tr>
  <?php endforeach; ?>
</tbody>
</table>
</div>
</div>
