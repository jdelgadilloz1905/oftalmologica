  <!-- =======================================================
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
<?php
  session_start();

  $url = Rutas::ctrRutas();

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
              <div class="panel-body table-responsive tablaRegistros" id="listadoregistrosSus">
                <table id="tbllistadoSuscriptores" class="table table-striped table-bordered table-condensed table-hover">
                  <thead>
                    <th>id</th>
                    <th>Email</th>
                    <th>Fecha creacion</th>

                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>
                  <th>id</th>
                  <th>Email</th>
                  <th>Fecha creacion</th>
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




