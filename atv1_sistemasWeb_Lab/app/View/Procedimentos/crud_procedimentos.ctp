<div class="col-md-5">
  <br/>
  <br/>
  <br/>

  <br/><p class="lead"><a>Você está na<a/> <strong> ÁREA ADMINISTRATIVA. </br></strong> Execute uma das ações abaixo:</p>
</div>
<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
    <div class="col-md-6 col-sm-offset-1">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <center><h3 class="panel-title">INCLUIR PROCEDIMENTO</h3></center>
        </div>
        <div class="panel-body">
          <p><center>
            <div class="form-bottom">
              <?php echo $this->Form->create('Procedimento', array('url' => 'crud_procedimentos' ));?>

              <div class="form-group">
                <br/><p><h4><strong>Nome do novo procedimento:</strong></h4></p>
                <?php echo $this->Form->input('nome', array('placeholder' => '', 'required' => true , 'class' => 'form-text form-control', 'label' => '')); ?>
              </div>
              <div class="form-group">
                <br/><p><h4><strong>Valor do novo procedimento:</strong></h4></p>
                <?php echo $this->Form->input('preco', array('placeholder' => '', 'required' => true , 'class' => 'form-text form-control', 'label' => ''));?>
              </div>
              <br/><?php echo $this->Form->submit('Cadastrar', array('class' => 'btn btn-success')); ?>
            </div>
          </center></p>
        </div>
      </div>
      <div class="panel panel-primary">
        <div class="panel-heading">
          <center><h3 class="panel-title">EDITAR OU EXCLUIR PROCEDIMENTOS</h3></center>
        </div>
        <div class="panel-body">
          <p><center><table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th></th>
                <th>id</th>
                <th>NOME</th>
                <th>VALOR</th>
              </tr>
            </thead>
            <tbody>

      <?php foreach ($procedimentos as $p): ?>
        <tr>
          <td><center><a href=" <?php echo Router::url(array('controller' => 'procedimentos', 'action' => 'altera_procedimento', $p['Procedimento']['id'])); ?>" >Editar</a></center></td>
          <td><?php echo $p['Procedimento']['id']; ?></td>
          <td>
            <?php echo $p['Procedimento']['nome']; ?>
          </td>
          <td>
            <?php echo $p['Procedimento']['preco']; ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>-
    </table></center></p>
        </div>
      </div>
    </div>
  </div>
<br/><strong><a href="<?php echo Router::url(array('controller' => 'administradores', 'action' => 'index')); ?>"><u>Voltar</u></a></strong>
</div>
