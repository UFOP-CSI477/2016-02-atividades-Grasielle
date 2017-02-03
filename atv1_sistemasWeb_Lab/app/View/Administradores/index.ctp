<div class="col-md-5">
  <br/>
  <br/>
  <br/>

  <br/><p class="lead"><a>Você acessou a<a/> <strong> ÁREA ADMINISTRATIVA. </br></strong> Escolha uma das opções abaixo:</p>
    <div class="list-group">
        <a href="<?php echo Router::url(array('controller' => 'procedimentos', 'action' => 'crud_procedimentos')); ?>" class="list-group-item">Incluir, Editar ou Excluir procedimentos</a>
        <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'crud_exames')); ?>" class="list-group-item">Editar ou Excluir exames solicitados pelos pacientes</a>
        <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'lista_exames')); ?>" class="list-group-item">Visualizar exames solicitados</a>
        <a href="<?php echo Router::url(array('controller' => 'pacientes', 'action' => 'lista_pacientes')); ?>" class="list-group-item">Visualizar lista de pacientes</a>
      </div>
  <strong><a href="<?php echo Router::url('http://localhost/atv1_sistemasWeb_Lab/'); ?>"><u>Voltar</u></a></strong>
</div>
