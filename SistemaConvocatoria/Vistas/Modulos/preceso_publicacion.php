<?php
$registrarC = new procesoInscripcionC();
$docentes= $registrarC->mostrarDocentesC();



?>



<div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Hoverable Rows Datatable</h6>
            </div>
            <div class="ms-panel-body">
              
              <div class="table-responsive">
                <table id="data-table-1" class="table table-hover w-100">
                <thead>
                        <tr>
                        <th>N°</th>
                        <th>Docente</th>
                        <th>Puntaje</th>
                        <th>Resultado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $num = 1; // Inicializar la variable de numeración
                            foreach ($docentes as $docente): ?>
                        <tr>
                            <td><?=$num++?></td>
                            <td><?=$docente['nombre']?>    <?=$docente['apellidos']?></td>
                            <td><?=$docente['puntaje']?></td>
                            <td><?=$docente['resultado']?></td>
                            
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
              </div>
            </div>
          </div>
   
