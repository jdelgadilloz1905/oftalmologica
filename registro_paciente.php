<?php
$url = Rutas::ctrRutas();

?>
<!-- Section: intro -->
<section id="intro" class="intro">
    <div class="intro-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-12"></div>
                <div class="col-md-6 col-xs-12">
                    <div class="panel panel-skin">
                        <div class="panel-heading" style="background-color: #0051A1">
                            <h4 class="panel-title"><span class="fa fa-pencil-square-o"></span> Sírvase completar la siguiente información.</h4>
                        </div>
                        <div class="panel-body">
                            <form method="post" role="form" class="contactForm lead">
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
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12"></div>
            </div>
        </div>
    </div>
</section>


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
<!--                <div class="text-center img-rounded">-->
<!--                    <h3 class="panel-title">Indique su requerimiento.</h3>-->
<!--                </div>-->
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

<!--MENSAJE NAVIDEÑO -->
<div class="modal fade" id="modalMensajeNavidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                    <img src="<?php echo $url ?>img/vacaciones.jpg" alt="Vacaciones Unidad Oftalmologica de Caracas" class="img-responsive">
                                </div>

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

<!--MENSAJE DE FALLAS DE TELEFONO-->
<div class="modal fade" id="modalMensajeTelefono" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0051A1">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="panel-title" style="color: #fff"><span class="fa fa-pencil-square-o"></span> Información</h3>
            </div>
            <div class="modal-body">
                <br>
                <div class="contact-form mb-50 wow fadeInLeft" data-wow-delay=".3s">
                    <form id="contact-form" method="POST">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <img src="<?php echo $url ?>img/lineas.jpeg" alt="Lineas telefonica de la Unidad Oftalmologica de Caracas" class="img-responsive">
                                </div>

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
