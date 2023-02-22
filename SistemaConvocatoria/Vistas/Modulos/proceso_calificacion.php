<?php
$registrarC = new procesoInscripcionC();
$registrarC->registrarPuntucionC();

$empleados= $registrarC->mostrarPDFC();



?>



<div class="col-xl col-md-12">
          <div class="ms-panel">

            <div class="ms-panel-header">
              <h2 style="text-align: center;">Calificar Proyecto</h2>
            </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
              <form method="post" action="">
                    <div class="col-md-6 mb-3">
                        <label>Elije Proyecto a Calificar</label>
                        <div class="input-group">
                            <select class="form-control" name="proyectoCA">
                            <?php foreach($empleados as $empleado): ?>
                                <option value=<?=$empleado['EquipoInvestigador_idEquipoInvestigador']?> ><span><?=$empleado['archivo1']?>---<?=$empleado['nombre']?>---<?=$empleado['apellidos']?></span></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                    </div>               
                <table class="table table-bordered thead-secondary">

                    <thead>
                        <tr>
                        <th colspan="6"style="text-align: center;">ESCALA DE CALIFICACIÓN</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>No cumple - NC</td>
                            <td>Deficiente - D</td>
                            <td>Regular - R</td>
                            <td>Bueno - B</td>
                            <td>Muy bueno - MB</td>
                            <td>Sobresaliente - S</td>
                            </tr>
                            <tr>
                            <td style="text-align: center;"><b>0</b></td>
                            <td style="text-align: center;"><b>1</b></td>
                            <td style="text-align: center;"><b>2</b></td>
                            <td style="text-align: center;"><b>3</b></td>
                            <td style="text-align: center;"><b>4</b></td>
                            <td style="text-align: center;"><b>5</b></td>
                            </tr>
                    </tbody>

                </table>


                <table class="table table-bordered thead-secondary">

                    <thead>
                        <tr>
                        <th colspan="6"style="text-align: center;">CRITERIO DE EVALUACIÓN</th>
                        <th colspan="6"style="text-align: center;">ESCALA VALORATIVA</th>
                        </tr>
                        </thead>
                </table>
                <table class="table table-bordered thead-secondary">

                    <thead>
                        <tr>
                        <th colspan="7"style="text-align: center;">I.	Consistencia científica de la propuesta</th>
                        </tr>
                    </thead>
                        <tbody>
                    
                        <!-- PRIMERO -->
                            <tr>
                                <td >1.Consistencia del resumen del proyecto </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>1</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample" value="3">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>3</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample" value="4">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>4</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample" value="5">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>5</b></span>
                                    </li>
                                </td>
                            </tr>

                            <!-- Segundo -->
                            <tr>
                                <td >2.Consistencia del resumen publicable. </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample2" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample2" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>1</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample2" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample2" value="3">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>3</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample2" value="4">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>4</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample2" value="5">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>5</b></span>
                                    </li>
                                </td>
                            </tr>
                            <!-- TERCERO -->
                            <tr>
                                <td >3.Identificación y relevancia del problema</td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample3" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample3" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>1</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample3" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample3" value="3">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>3</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample3" value="4">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>4</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample3" value="5">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>5</b></span>
                                    </li>
                                </td>
                            </tr>                           
                            <!-- CUARTA -->
                            <tr>
                                <td >4.Coherencia entre los problemas, objetivos e hipótesis. </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample4" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample4" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample4" value="4">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>4</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample4" value="6">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>6</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample4" value="8">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>8</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample4" value="10">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>10</b></span>
                                    </li>
                                </td>
                            </tr>

                            <!-- QUINTA -->
                            <tr>
                                <td >5.Consistencia en la operacionalización de variables</td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample5" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample5" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>1</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample5" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample5" value="3">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>3</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample5" value="4">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>4</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample5" value="5">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>5</b></span>
                                    </li>
                                </td>
                            </tr>


                            <!-- SEXTO -->
                            <tr>
                                <td >6.Justificación de la investigación.</td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample6" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample6" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>1</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample6" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample6" value="3">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>3</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample6" value="4">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>4</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample6" value="5">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>5</b></span>
                                    </li>
                                </td>
                            </tr>

                            <!-- SEPTIMO -->
                            <tr>
                                <td >7.Actualidad del estado del arte: (Antecedentes, bases teóricas científicas).</td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample7" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample7" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample7" value="4">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>4</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample7" value="6">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>6</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample7" value="8">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>8</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample7" value="10">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>10</b></span>
                                    </li>
                                </td>
                            </tr>

                            <!-- OCTAVO -->
                            <tr>
                                <td >8.Consistencia del enfoque, tipo, nivel y diseño. Población, muestra, muestreo de la investigación. </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample8" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample8" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample8" value="4">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>4</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample8" value="6">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>6</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample8" value="8">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>8</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample8" value="10">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>10</b></span>
                                    </li>
                                </td>
                            </tr>


                            <!-- NOVEMNO -->
                            <tr>
                                <td >9.Consistencia de las técnicas, instrumentos de recolección de información y técnicas de manejo de datos y análisis estadístico.</td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample9" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample9" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>1</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample9" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample9" value="3">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>3</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample9" value="4">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>4</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample9" value="5">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>5</b></span>
                                    </li>
                                </td>
                            </tr>


                        <thead>
                            <tr>
                            <th colspan="7"style="text-align: center;">II.	Impacto de la propuesta</th>
                            </tr>
                        </thead>

                            <!-- DECIMO -->
                            <tr>
                                <td >10.Impacto social y/o económico de los resultados, en la localidad, la región, nacional y/o internacional. </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample10" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample10" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>1</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample10" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample10" value="3">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>3</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample10" value="4">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>4</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample10" value="5">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>5</b></span>
                                    </li>
                                </td>
                            </tr>


                        <thead>
                        <tr>
                        <th colspan="7"style="text-align: center;">III.	Sostenibilidad de la propuesta</th>
                        </tr>
                        </thead>

                            <!-- onceavo -->
                            <tr>
                                <td >11.Cuenta con los principales recursos: instalaciones, experiencia de equipo, aliados estratégicos, grupos de interés, de las dependencias y entidades participantes.</td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample11" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample11" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>1</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample11" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample11" value="3">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>3</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample11" value="4">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>4</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample11" value="5">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>5</b></span>
                                    </li>
                                </td>
                            </tr>

                            <!-- doceavo -->
                            <tr>
                                <td >12.Aplicación práctica de los resultados del proyecto.</td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample12" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample12" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>1</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample12" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample12" value="3">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>3</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample12" value="4">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>4</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample12" value="5">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>5</b></span>
                                    </li>
                                </td>
                            </tr>

                        <!-- AQUIE ENPIEZA -->
                            <thead>
                            <tr>
                            <th colspan="7"style="text-align: center;">IV.	Consideraciones éticas</th>
                            </tr>
                        </thead>

                            <!-- treceavo -->
                            <tr>
                                <td >13.Cumplimiento de los principios éticos de investigación, en ecosistemas, seres humanos, animales, grupos vulnerables.</td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample13" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample13" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>1</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample13" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample13" value="3">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>3</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample13" value="4">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>4</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample13" value="5">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>5</b></span>
                                    </li>
                                </td>
                            </tr>

                            <!-- catorce -->
                            <tr>
                                <td >14.Compromiso ético con la propiedad intelectual y el consentimiento informado.</td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample14" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample14" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>1</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample14" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample14" value="3">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>3</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample14" value="4">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>4</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample14" value="5">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>5</b></span>
                                    </li>
                                </td>
                            </tr>

                        <!-- AQUIE ENPIEZA -->
                        <thead>
                            <tr>
                            <th colspan="7"style="text-align: center;">V.	Presupuesto </th>
                            </tr>
                        </thead>

                            <!-- treceavo -->
                            <tr>
                                <td >15.El presupuesto es detallado (genérico y especifico de gastos, precisando su financiamiento).</td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample15" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample15" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>1</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample15" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample15" value="3">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>3</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample15" value="4">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>4</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample15" value="5">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>5</b></span>
                                    </li>
                                </td>
                            </tr>


                        <!-- AQUIE ENPIEZA parte 2 -->
                        <thead>
                            <tr>
                            <th colspan="7"style="text-align: center;">VI. Experiencia del equipo investigador</th>
                            </tr>
                        </thead>

                            <!-- dieci16 -->
                            <tr>
                                <td >16.Proyectos de investigación del investigador principal, concluidos en la UNAJMA como responsable o integrante (01 punto por resolución)</td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample16" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample16" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>1</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample16" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                
                            </tr>

                            <!-- 17 -->
                            <tr>
                                <td >17.Proyectos de investigación de los miembros del equipo, concluidos en la UNAJMA como responsable o integrante (01 punto por resolución)</td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample17" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample17" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>1</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample17" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                
                            </tr>                           

                            <!-- d18 -->
                            <tr>
                                <td >18.Artículos publicados del investigador principal, con cuartil SJR indizado en Scopus o Web Science ** (01 punto por artículo).</td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample18" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample18" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>1</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample18" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                
                            </tr>

                        <!-- d19 -->
                        <tr>
                                <td >19.Artículos publicados de los miembros del equipo, con cuartil SJR indizado en Scopus o Web Science ** (01 punto por artículo).</td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample19" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample19" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>1</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample19" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                                
                            </tr>
                        <!-- 20 -->
                        <tr>
                                <td >20.Artículos publicados del investigador principal o miembros del equipo, indizado en Scielo o Latindex o revistas de la UNAJMA, CTS, otros ** (01 punto por artículo).</td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample20" value="0">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>0</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample20" value="1">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>1</b></span>
                                    </li>
                                </td>
                                <td style="text-align: center;">
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample20" value="2">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span><b>2</b></span>
                                    </li>
                                </td>
                               
                                
                            </tr>
                      
                    </tbody>
                </table>
                <button type="submit" class="btn btn-square btn-secondary">Enviar Calificación</button>
                </form>
              </div>
            </div>
          </div>
        </div>