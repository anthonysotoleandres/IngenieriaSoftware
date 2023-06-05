<?php
$registrarC = new procesoInscripcionC();
$docentes= $registrarC->mostrarPerfilC();



?>

<div class="ms-content-wrapper">

      
    <!-- foto perfil -->
      <div class="row">
        <div class="col-xl-7 col-md-12">
        <div class="ms-card">
            <div class="ms-card-body">
              <div class="media fs-14">
                <div class="mr-2 align-self-center">
                  <img src="Vistas\Modulos\download.png" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <h6>Armando Mezares Oscco </h6>
                </div>
              </div>

              <h2 style="text-align: center;" class="section-title">Datos Personales</h2>
              <table class="table ms-profile-information">
                <tbody>
                  <tr>
                    <th >Nombre</th>
                    <?php foreach($docentes as $docente): ?>                       
                        <td><?=$docente['nombre']?></td>  
                    <?php endforeach; ?>     

                  </tr>
                  <tr>
                    <th>Apellido</th>
                    <?php foreach($docentes as $docente): ?>                       
                        <td><?=$docente['apellido']?></td>  
                    <?php endforeach; ?> 
                  </tr>
                  <tr>
                    <th>Usuario</th>
                    <?php foreach($docentes as $docente): ?>                       
                        <td><?=$docente['usuario']?></td>  
                    <?php endforeach; ?> 
                  </tr>
                  <tr>
                    <th>Perfil</th>
                    <?php foreach($docentes as $docente): ?>                       
                        <td><?=$docente['perfil']?></td>  
                    <?php endforeach; ?> 
                  </tr>
                  <tr>
                    <th>DNI</th>
                    <?php foreach($docentes as $docente): ?>                       
                        <td><?=$docente['dni']?></td>  
                    <?php endforeach; ?> 
                  </tr>
                  <tr>
                    <th>Telefono</th>
                    <?php foreach($docentes as $docente): ?>                       
                        <td><?=$docente['telefono']?></td>  
                    <?php endforeach; ?> 
                  </tr>
                  <tr>
                    <th>Email</th>
                    <?php foreach($docentes as $docente): ?>                       
                        <td><?=$docente['email']?></td>  
                    <?php endforeach; ?> 
                  </tr>
                  
                </tbody>
                
              </table>



              <div class="col-md-3 col-sm-6">
                  
                  <button class="btn btn-primary" data-toggle="modal" data-target="#modal-11"> Modificar Perfil </button>
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
                          <label >Telefono</label>
                          <div class="">
                            <input type="number" placeholder="Telefono" class="form-control" name="password" value="">
                            
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