<?php
$registrarC = new procesoInscripcionC();
$docentes= $registrarC->contarDocentesC();
$jurado= $registrarC->contarJuradoC();
$documentos= $registrarC->contarDocumentosC();
$colaboradores= $registrarC->contarColaboradoresC();

$mostrarJurados= $registrarC->mostrarJuradosC();
$mostrarDocentes= $registrarC->mostrarDocentesC();


?>



<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
      <div class="row">

        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Total Docentes Investigadores</h6>

                <?php foreach($docentes as $docente): ?> 
                    <p class="ms-card-change" ><?=$docente['numero']?></p>                       
                <?php endforeach; ?>       
                
              </div>
            </div>
            <i class="flaticon-statistics"></i>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-secondary ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Total Jurado</h6>
                <?php foreach($jurado as $jurad): ?> 
                    <p class="ms-card-change" ><?=$jurad['numero']?></p>                       
                <?php endforeach; ?> 
                <p class="fs-12" type="hidden"> .</p>
              </div>
            </div>
            <i class="flaticon-stats"></i>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-warning ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Total de Documentos de Investigación</h6>
                <?php foreach($documentos as $documento): ?> 
                    <p class="ms-card-change" ><?=$documento['numero']?></p>                       
                <?php endforeach; ?> 
                
              </div>
            </div>
            <i class="flaticon-user"></i>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-info ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Coinvestigadore y Colaboradores</h6>
                <?php foreach($colaboradores as $colaboradore): ?> 
                    <p class="ms-card-change" ><?=$colaboradore['numero']?></p>                       
                <?php endforeach; ?> 
                
              </div>
            </div>
            <i class="flaticon-reuse"></i>
          </div>
        </div>

        <div class="col-xl-11 col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>JURADOS REGISTRADOS</h6>
            </div>
            <div class="ms-panel-body p-0">
              <div class="table-responsive">
                <table class="table table-hover thead-light">
                  <thead>
                    <tr>
                    <th scope="col">Nombre</th>
                      <th scope="col">Apellido</th>
                      <th scope="col">Perfil</th>
                      <th scope="col">DNI</th>
                      <th scope="col">Profesion</th>
                      <th scope="col">Email</th>
                    
                      
                    </tr>
                  </thead>
                  <tbody>

                  <?php foreach($mostrarJurados as $mostrarJurados): ?>
                        <tr>
                            <td><img src="Vistas\Modulos\user4.png" alt="people"><?=$mostrarJurados['nombre']?></td>
                            <td><?=$mostrarJurados['apellido']?></td>
                            <td><?=$mostrarJurados['perfil']?></td>
                            <td><?=$mostrarJurados['dni']?></td>
                            <td><?=$mostrarJurados['tipo_profesion']?></td>
                            <td><?=$mostrarJurados['email']?></td>
                            <td>
                            
                        </tr>
                    <?php endforeach; ?>
                  </tbody>              
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-11 col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>DOCENTES INVESTIGADORES</h6>
            </div>
            <div class="ms-panel-body p-0">
              <div class="table-responsive">
                <table class="table table-hover thead-light">
                  <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                      <th scope="col">Apellido</th>
                      <th scope="col">Perfil</th>
                      <th scope="col">Email</th>

                      <th scope="col">Escuela Perteneciente</th>
                      
                    </tr>
                  </thead>
                  <tbody>

                    <?php foreach($mostrarDocentes as $mostrarDocente): ?>
                        <tr>
                            <td><img src="Vistas\Modulos\user4.png" alt="people"><?=$mostrarDocente['nombre']?></td>
                            <td><?=$mostrarDocente['apellidos']?></td>
                            <td><?=$mostrarDocente['perfil']?></td>
                            <td><?=$mostrarDocente['email']?></td>

                            <td><?=$mostrarDocente['Escuela']?></td>
                            
                            <td>
                            
                        </tr>
                    <?php endforeach; ?>
                    </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>       
        

      </div>
    </div>