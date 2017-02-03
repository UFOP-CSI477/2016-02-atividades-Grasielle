<div class="col-md-5">
  <br/>
  <br/>
  <br/>

  <br/><p class="lead"><a>Você está na<a/> <strong> ÁREA ADMINISTRATIVA. </br></strong> Você pode editar ou excluir o exame:</p>
</div>


<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
      <div class="col-md-6 col-sm-offset-1">
        <h4><strong><center>Exames Solicitados</center></strong></h4><br/>
        <table class="table table-hover">
          <thead>
            <tr>
              <th></th>
              <th>Nome</th>
              <th>Paciente</th>
              <th>Data</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($exames as $e): ?>
                <tr>
                  <td>
                    <center><a href=" <?php echo Router::url(array('controller' => 'exames', 'action' => 'altera_exame', $e['Exame']['id'])); ?>" >Editar</a></center>
                  </td>
                  <td>
                    <?php echo $e['Procedimento']['nome']; ?>
                  </td>
                  <td>
                    <?php echo $e['Paciente']['nome']; ?>
                  </td>
                  <td>
                    <?php echo $e['Exame']['data']; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
          </tbody>
          </table>
      </div>
    </div>
