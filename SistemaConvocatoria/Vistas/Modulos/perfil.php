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
                  <h6>John Doe </h6>
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
            </div>
            
          </div>
        </div>

 

       

    

      </div>


    </div>