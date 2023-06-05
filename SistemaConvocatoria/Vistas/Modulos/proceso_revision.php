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
                      <th scope="col"></th>
                      <th scope="col"></th>
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
                            <td><button class="btn btn-pill btn-secondary" data-toggle="modal" data-target="#modal-11"> Modificar</button></td>
                            <td><a style=""class="btn btn-pill btn-danger"href='index.php?ruta=proceso_revision&idcola=<?=$empleado['idColaboradores']?>'>Borrar</a></td>

            
                            <td>
                            
                               
                            </tr>

                    <?php else: ?>
                      
                        <tr>
                            <td><img src="Vistas\Modulos\user2.png" alt="people"><?=$empleado['nombre']?></td>
                            <td><?=$empleado['apellidos']?></td>
                            <td><?=$empleado['dni']?></td>
                            <td><?=$empleado['email']?></td>
                            <td><?=$empleado['funcion']?></td>
                            <td><button class="btn btn-pill btn-secondary" data-toggle="modal" data-target="#modal-11"> Modificar</button></td>

                            <td><button type="button" name="button" class="btn btn-pill btn-danger trigger-swal" data-swal="multi-step" data-idcola="<?=$empleado['idColaboradores']?>">Borrar</button></td>
                                </td>
                            <td>
                            
                            </tr>
                            </tr>
                    <?php endif;?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                
                
                <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Advanced Alerts</h6>
            </div>
            <div class="ms-panel-body">
              <div class="row">
                <div class="col-md-3">
                  <h6 class="section-title">Multi Step Alert</h6>
                  <button type="button" name="button" class="btn btn-primary trigger-swal" data-swal="multi-step">Click Me</button>
                </div>
                <div class="col-md-3">
                  <h6 class="section-title">Auto Close Alert</h6>
                  <button type="button" name="button" class="btn btn-primary trigger-swal" data-swal="auto-close">Click Me</button>
                </div>
                <div class="col-md-3">
                  <h6 class="section-title">AJAX Alert</h6>
                  <button type="button" name="button" class="btn btn-primary trigger-swal" data-swal="ajax">Click Me</button>
                </div>
                <div class="col-md-3">
                  <h6 class="section-title">Custom Alert</h6>
                  <button type="button" name="button" class="btn btn-primary trigger-swal" data-swal="custom">Click Me</button>
                </div>
              </div>
            </div>
          </div>







                <div class="col-md-3 col-sm-6">
                  
                  
                </div>
                <div class="modal fade" id="modal-11" tabindex="-1" role="dialog" aria-labelledby="modal-11">
                  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
                    <div class="modal-content">

                      <div class="modal-body text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <i class="flaticon-user d-block"></i>
                        <h1>Modificar Perfil</h1>
                        <form method="post">
                          
                          <div class="">
                          <label >Nombre</label>
                            <input type="text" placeholder="Nombre" class="form-control" name="email" value="">
                           
                          </div>
                          <div class="">
                          <label >Apellidos</label>
                            <input type="text" placeholder="Apellidos" class="form-control" name="password" value="">
                            
                          </div>
                          <div class="">
                          <label >DNI</label>
                            <input type="number" placeholder="DNI" class="form-control" name="password" value="">
                            
                          </div>
                          <div class="">
                          <label >Email</label>
                            <input type="email" placeholder="Email Address" class="form-control" name="password" value="">
                            
                          </div>
                          
                          <button type="submit" class="btn btn-primary shadow-none">Modificar</button>
                        </form>
                      </div>

                    </div>
                  </div>
                </div>
            </div>

              </div>
            </div>
          </div>
        </div>