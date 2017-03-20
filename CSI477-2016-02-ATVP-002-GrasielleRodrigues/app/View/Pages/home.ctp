<div class="form-top container top-content form-top row">
    <br/>
    <br/>
    <br/>
</div>
<div class="panel panel-primary">
        <div class="panel-heading">
          <center><h1 class= "panel-title">Seja bem vindo(a)! <br> Aqui você encontra o que tem de melhor para o seu animalzinho de estimação!</h1></center>
        </div>

        <div class="panel-body">

          <div class="col-md-2 col-sm-offset-1">
            <center><p><a href="<?php echo Router::url(array('controller' => 'produtos', 'action' => 'visualiza_produtos')); ?>"
               class="btn-primary btn btn-lg">ÁREA GERAL</a></p></center>
          </div>

          <div class="col-md-3 col-sm-offset-1">
            <center><p><a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'login')); ?>"
              class="btn-primary btn btn-lg">ÁREA DO CLIENTE</a></p></center>
          </div>

          <div class="col-md-2 col-md-offset-1">
            <center><p><a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'login_adm')); ?>"
               class="btn-primary btn btn-lg">ÁREA ADMINISTRATIVA</a></p></center>
          </div>

          <center><img src="app/webroot/img/inicial.jpg"/></center>
        </div>
</div>
