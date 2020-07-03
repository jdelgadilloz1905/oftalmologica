  <!-- =======================================================
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
<?php
  session_start();

  $url = Rutas::ctrRutas();

  $doctores = ControladorEstudio::strDoctores();
  ?>
  <br><br><br><br><br>
  <section id="especialidad" class="especialidad">
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">

            <div class="box">
              <div class="box-header with-border">

                <div class="box-tools pull-right">
                </div>
              </div>
              <!-- /.box-header -->
              <!-- centro -->
              <div class="panel-body table-responsive tablaRegistros" id="listadoregistros">
                <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                  <thead>
                    <th>Doctor</th>
                    <th>Especialidad</th>
                    <th>Turno</th>
                    <th>Opciones</th>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>
                    <th>Doctor</th>
                    <th>Especialidad</th>
                    <th>Turno</th>
                    <th>Opciones</th>
                  </tfoot>
                </table>
              </div>
              <!--Fin centro -->
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  </section><!-- /.content -->

  <!-- Modal message-->
  <div class="modal fade" id="modalMessageventana" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #0051A1">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h3 class="panel-title" style="color: #fff"><span class="fa fa-pencil-square-o"></span> Sírvase completar la siguiente información.</h3>
        </div>
        <div class="modal-body">
<!--          <div class="text-center img-rounded">-->
<!--            <h3 class="panel-title">Indique su requerimiento.</h3>-->
<!--          </div>-->
          <br>
          <div class="contact-form mb-50 wow fadeInLeft" data-wow-delay=".3s">
            <form id="contact-form" method="POST">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <label>Nombres y Apellidos</label>
                    <input type="text" name="first_name" id="first_name" class="form-control input-md" data-rule="minlen:3" data-msg="Por favor ingrese al menos 3 caracteres" required>
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <label>Cédula</label>
                    <input type="text" name="cedula" id="cedula" class="form-control input-md" data-rule="minlen:3" data-msg="Por favor ingrese al menos 3 caracteres" required>
                    <div class="validation"></div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <label>Correo electrónico</label>
                    <input type="email" name="email" id="email" class="form-control input-md" data-rule="email" data-msg="Por favor introduzca una dirección de correo electrónico válida" required>
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <label>Teléfono</label>
                    <input type="text" name="phone" id="phone" class="form-control input-md" data-rule="required" data-msg="El número de teléfono es obligatorio" required>
                    <div class="validation"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12" >
                  <div class="form-group">
                    <label>Indique su requerimiento o detalles de su cita</label>
                    <textarea name="mensaje" id="mensaje" cols="30" rows="3" class="form-control input-md" data-rule="required"></textarea>
                    <div class="validation"></div>
                  </div>
                </div>
              </div>

              <?php

              $envioEmail = new ControladorEmail();
              $envioEmail->ctrEnvioEmail();

              ?>

              <input type="submit" value="Solicitar" class="btn btn-skin btn-block btn-lg">

              <p class="lead-footer"><b>* Nos comunicaremos con usted para programar su cita.</b></p>

            </form>
            <p class="ajax-response"></p>
          </div>
        </div>
        <!--<div class="modal-footer">-->
        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
        <!--</div>-->
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalMensaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #0051A1">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h3 class="panel-title" style="color: #fff"><span class="fa fa-pencil-square-o"></span> Información.</h3>
        </div>
        <div class="modal-body">
          <br>
          <div class="contact-form mb-50 wow fadeInLeft" data-wow-delay=".3s">
            <form id="contact-form" method="POST">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <label><p>Para ubicar la información requerida, realice su búsqueda indicando palabras claves (incluyendo acentos).</p></label>
                  </div>

                  <ul>
                    <li> Ubique a su médico por Nombre y Apellido</li>
                    <li>Seleccione la Especialidad</li>
                    <li>Elija el Horario de su conveniencia</li>
                  </ul>
                </div>

              </div>

            </form>
            <p class="ajax-response"></p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

