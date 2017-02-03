<div class="col-md-5">
  <br/>
  <br/>
  <br/>
  <br/><p class="lead"><a>Você acessou a<a/> <strong> ÁREA DO PACIENTE. </br></strong> Escolha uma das opções abaixo:</p>
    <div class="list-group">
        <div class="list-group">

          <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'solicita_exame')); ?>" class="list-group-item"> <strong> Solicitação de Exames</strong></a>
          <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'exames_solicitados')); ?>" class="list-group-item"><strong> Exames Solicitados</strong></a>
          <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'altera_exame')); ?>" class="list-group-item"><strong> Alterar Exame</strong></a>
          <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'exclui_exame')); ?>" class="list-group-item"><strong> Excluir Exame</strong></a>
          </div>
    </div>
  <br/><strong><a href="<?php echo Router::url(array('controller' => 'pacientes', 'action' => 'index_login')); ?>"><u>Voltar</u></a></strong>
</div>
