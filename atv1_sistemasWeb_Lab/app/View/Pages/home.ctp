<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="top-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-sm-offset-2 text ">

          <img src="app/webroot/img/figura1.png" />

            <div class="description">
              <p>
                <strong>Seja bem vindo(a)! </strong>
                <br/>
                Qualidade, Confiança, Compromisso e muitas outras vantagens que só a EXAME pode lhe proporcionar!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-offset-4">
        <div class="form-top">
            <div class="form-top-left">
    <div class="col-md-8">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <center><h3 class= "panel-title"> Acesse o menu abaixo:</h3></center>
        </div>
        <div class="panel-body">
          <div class="col-md-4 col-sm-offset-1">
            <center><p><a href="<?php echo Router::url(array('controller' => 'procedimentos', 'action' => 'index')); ?>"
               class="btn btn-default btn-lg">ÁREA GERAL</a></p></center>
          </div>
          <div class="col-md-8 col-sm-offset-1">
            <center><p><a href="<?php echo Router::url(array('controller' => 'pacientes', 'action' => 'index_login')); ?>"
              class="btn btn-default btn-lg">ÁREA DO PACIENTE</a></p></center>
          </div>
          <div class="col-md-8 col-md-offset-1 ">
            <center><p><a href="<?php echo Router::url(array('controller' => 'administradores', 'action' => 'index')); ?>"
               class="btn btn-default btn-lg">ÁREA ADMINISTRATIVA</a></p></center>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
