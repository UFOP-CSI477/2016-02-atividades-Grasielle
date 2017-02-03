<div class="col-md-6">
  <br/>
  <br/>
  <br/>
  <br/><p class="lead"><a><strong> Acesso restrito! <br/>Efetue o login para prosseguir ou <a href="<?php echo Router::url('/pacientes/index_cadastro'); ?>"><u>Cadastre-se aqui.</u></a></strong>
</div>

<div class="form-top container top-content form-top row">
<div class="row">
  <br/>
    <div class="col-md-4 col-sm-offset-2">
        <?php echo $this->Form->create('Paciente', array('url' => 'login' ));?>
          <div class="form-group">
            <br/><h4><strong>Login:</strong></h4>
            <?php echo $this->Form->username('login', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true , 'class' => 'form-text form-control', 'label' => 'login')); ?>
          </div>
          <div class="form-group">
            <br/><p><h4><strong>Senha:</strong></h4></p>
            <?php echo $this->Form->password('senha', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true , 'class' => 'form-password form-control', 'label' => 'senha'));?>
            </div>
          <br/><?php  echo $this->Form->submit('Continuar', array('class' => 'btn btn-success') );  ?>
          <br/>
  <strong><a href="<?php echo Router::url('http://localhost/atv1_sistemasWeb_Lab/'); ?>"><u>Voltar</u></a></strong>
</div>
</div>
      </div>
    </div>
