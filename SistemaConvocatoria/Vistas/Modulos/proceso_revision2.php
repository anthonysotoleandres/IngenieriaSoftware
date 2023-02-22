<?php
$empleadosC = new procesoInscripcionC();

$empleados= $empleadosC->mostrarDocumentosC();
$empleadosC->mostrararchivoC();

?>


<div class="col-xl col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Equipo Investigador</h6>
            </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Archivo1</th>
                      <th scope="col">Archivo2</th>
                      <th scope="col">Archivo3</th>
                      <th scope="col">Fecha</th>
                      <th scope="col">Docente Investigador</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php foreach($empleados as $empleado): ?>
                        <tr>
                            <td><?=$empleado['archivo1']?></td>
                            <embed src="data:application/pdf;base64,<?php echo base64_encode($empleado['archivo1']); ?>" type="application/pdf" />
                            <td><?=$empleado['archivo2']?></td>
                            <td><?=$empleado['archivo3']?></td>
                            <td><?=$empleado['fecha']?></td>
                            <td><?=$empleado['EquipoInvestigador_idEquipoInvestigador']?></td>

                            <!--<td>
                                <a href='index.php?ruta=editar&titulo=<?=$empleado['apellido']?> class="btn-floating btn-large waves-effect waves-light purple"'>
                                <i class="material-icons">edit</i>
                                </a>
                            </td>
                            <td>
                            <a href='index.php?ruta=ReporteChoferes&idadmin=<?=$empleado['idchofer']?>'>Borrar</a>
                                </a>
                            </td> -->
                            </tr>

                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>