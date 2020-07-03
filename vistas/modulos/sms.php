<!-- Section: Contactos-->
<section id="sms" class="intro">
    <div class="intro-content2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-6">
                    <div class="form-wrapper">
                        <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                            <div class="panel panel-skin">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><span class="fa fa-pencil-square-o"></span>Envio de SMS Masivo</h4>
                                </div>
                                <div class="panel-body">

                                    <form method="post" role="form" class="contactForm lead" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-xs-12" >

                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Cargar archivo SMS</label>
                                                    <input type="file" class="form-control-file" id="archivosms" name="archivosms" required>
                                                </div>
                                            </div>
                                        </div>
                                        <?php

                                        $envioSms = new ControladorSms();
                                        $envioSms-> ctrEnvioSms();

                                        ?>
                                        <input type="submit" value="Enviar" class="btn btn-skin btn-block btn-lg verProgeso">


                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================
    VENTANA MODAL PROCESANDO PAGO
    ======================================-->
<!-- Modal -->
<div class="modal fade" id="espereEnviando" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="myModalLabel">Espere por favor...</h2>
                </div>
                <div class="modal-body text-center">
                    <div class="overlay">
                        <i class="fa fa-refresh fa-spin"></i><h4> Se estan enviando los mensajes...</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>