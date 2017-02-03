<div class="col-md-6">
  <br/>
  <br/>
  <br/>
  <br/><p class="lead"><a><a>Você está na<a/><strong>   ÁREA ADMINISTRATIVA. </strong> <br/>Visualize a lista de Exames solicitados:</p>
</div>

<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
      <div class="col-md-6 col-sm-offset-1">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Paciente</th>
              <th>Data</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($exames as $e): ?>
                <tr>
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
