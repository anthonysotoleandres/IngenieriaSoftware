<?php
$empleadosC = new procesoInscripcionC();

$empleados= $empleadosC->mostrarColaboradoresC();
$empleadosC->borrarColaboradoresC();


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
                      <th scope="col">Nombre</th>
                      <th scope="col">Apellido</th>
                      <th scope="col">DNI</th>
                      <th scope="col">email</th>
                      <th scope="col">Funcion</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php foreach($empleados as $empleado): ?>
                    <?php if($empleado['funcion']=='Coinvestigador'): ?>
                        <tr>
                            <td><img src="Vistas\Modulos\user3.png" alt="people"><?=$empleado['nombre']?></td>
                            <td><?=$empleado['apellidos']?></td>
                            <td><?=$empleado['dni']?></td>
                            <td><?=$empleado['email']?></td>
                            <td><?=$empleado['funcion']?></td>

            
                            <td>
                            <a style=""class="btn btn-pill btn-danger"href='index.php?ruta=proceso_revision&idcola=<?=$empleado['idColaboradores']?>'>Borrar</a>
                                </a>
                            </tr>

                    <?php else: ?>
                        <tr>
                            <td><img src="Vistas\Modulos\user2.png" alt="people"><?=$empleado['nombre']?></td>
                            <td><?=$empleado['apellidos']?></td>
                            <td><?=$empleado['dni']?></td>
                            <td><?=$empleado['email']?></td>
                            <td><?=$empleado['funcion']?></td>
                            <td>
                            <a  class="btn btn-pill btn-danger"href='index.php?ruta=proceso_revision&idcola=<?=$empleado['idColaboradores']?>'>Borrar</a>
                                </a>
                            </tr>
                            </tr>
                    <?php endif;?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>