<?php

$estudios_encabezado =ControladorEstudio::strMostrarEstudios();
$detalle_estudios    = ControladorEstudio::strMostrarDetalleEstudios();

$url = Rutas::ctrRutas();

?>
<!-- Section: intro -->
<section id="intro" class="intro">
    <div class="intro-content">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-xs-12">

                    <div class="well well-trans">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                                <i><h4 class="h-ultra">Unidad Oftalmológica de Caracas</h4></i>
                            </div>
                            <ul class="lead-list">
                                <li><i><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Reconocido equipo multidisciplinario de Médicos Oftalmólogos</strong> </span></i></li>
                                <li><i><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Quirófanos especializados con avanzada tecnología</strong></span></i></li>
                                <li><i><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Modernos equipos para estudios oftalmológicos especializados</strong></span></i></li>
                            </ul>
                            <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                                <a href="#" class="modalMessage btn btn-skin btn-lg">Reserve su cita <i class="fa fa-angle-right"></i></a>
<!--                                <a href="http://citasonline.oftalmologica.com.ve/" target="_blank" class="modalMessage btn btn-skin btn-lg">Reserve su cita <i class="fa fa-angle-right"></i></a>-->

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-xs-12 imagenOcultar">
                    <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                        <img src="<?php echo $url ?>img/citas_oftalmologica.jpg" class="img-responsive" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /Section: intro -->

<!-- Section: boxes -->
<section id="boxes" class="home-section paddingtop-80">

    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box text-center">
                        <i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
                        <h4 class="h-bold">Visite
                            <p>nuestra sede</p></h4>
                        <p>
                            Conozca nuestra Sede de Consulta, en las que podrá disfrutar de amplias y confortables salas de espera, estacionamiento exclusivo para pacientes, y servicio de cafetín.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box text-center">
                        <i class="fa fa-user-md fa-3x circled bg-skin"></i>
                        <h4 class="h-bold">Seleccione <p>su especialista</p></h4>
                        <p>
                            Su visión en manos de expertos; nuestro equipo médico reúne oftalmólogos reconocidos del país, seleccione su especialista en cómodos horarios y disponibilidad.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box text-center">
                        <i class="fa fa-list-alt fa-3x circled bg-skin"></i>
                        <h4 class="h-bold">Programe <p>sus estudios</p></h4>
                        <p>
                            Contáctenos para programar los estudios oftalmológicos especializados solicitados por su médico; para realizarlos con nuestros modernos equipos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box text-center">

                        <i class="fa fa-check fa-3x circled bg-skin"></i>
                        <h4 class="h-bold">Reserve <p>su cita</p></h4>
                        <p>
                            Comuníquese con nosotros a los teléfonos 0212 918.77.77 / 918.77.00, y gustosamente le orientaremos en las mejores opciones para su requerimiento.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /Section: boxes -->


<section id="callaction" class="home-section paddingtop-40">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="callaction bg-gray">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="wow fadeInUp" data-wow-delay="0.1s">
                                <div class="cta-text">
                                    <h3>¿Necesitas ayuda?</h3>
                                    <p>Contacte a nuestra Central telefónica 0212 918.77.77 / 918.77.00; nuestros operadores gustosamente atenderán su requerimiento y le ofrecerán la orientación adecuada a su caso. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                <div class="cta-btn">
                                    <a href="#" class="modalMessage btn btn-skin btn-lg">Reserve su cita <i class="fa fa-angle-right"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: services -->
<section id="service" class="home-section nopadding paddingtop-60">
    <br><br><br><br>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-md-4">
                <div class="wow fadeInRight" data-wow-delay="0.1s">
                    <div class="service-box">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-hospital-o fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Unidad Oftalmológica <p>de Caracas</p></h5>
                                <p>Fundada en 1982, la Unidad Oftalmológica de Caracas, es reconocida nacional e... <a href="#" data-toggle="modal" data-target="#modalMessageUnidad"> <b><small>Leer más.</small></b></a></p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="wow fadeInRight" data-wow-delay="0.3s">
                    <div class="service-icon">
                        <span class="fa fa-medkit fa-3x"></span>
                    </div>
                    <div class="service-desc">
                        <h5 class="h-light">Tratamientos <p>Con Láser</p></h5>
                        <p>De acuerdo a cada diagnóstico oftalmológico, es posible que el médico especialista...<a href="#" data-toggle="modal" data-target="#modalMessagelaser"> <b><small>Leer más.</small></b></a></p>
                    </div>
                </div>
                <br>
                <div class="wow fadeInRight" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <span class="fa fa-eye fa-3x"></span>
                        </div>
                        <div class="service-desc">
                            <h5 class="h-light">Óptica: <p>Blue Vision</p> </h5>
                            <p>Contamos con la excelente atención de la Óptica Blue Vision; que le brindará variedad... <a href="#" data-toggle="modal" data-target="#modalMessageOptica"> <b><small>Leer más.</small></b></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="wow fadeInRight" data-wow-delay="0.1s">
                    <div class="service-box">
                        <div class="service-icon">
                            <span class="fa fa-user-md fa-3x"></span>
                        </div>
                        <div class="service-desc">
                            <h5 class="h-light">Su visión en manos <p>de Expertos</p></h5>
                            <p>Conformamos un equipo multidisciplinario de Médicos Oftalmólogos, internistas... <a href="#" data-toggle="modal" data-target="#modalMessageVision"> <b><small>Leer más.</small></b></a></p>
                        </div>
                    </div>
                </div>
                <div class="wow fadeInRight" data-wow-delay="0.1s">
                    <div class="service-box">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-heart-o fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Evaluación Cardiovascular <p>Pre-Operatoria</p></h5>
                                <p>Realice su Electrocardiograma y Evaluación Cardiovascular Pre-Operatoria con...<a href="#" data-toggle="modal" data-target="#modalMessageEvaluacion"> <b><small>Leer más.</small></b></a></p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="wow fadeInRight" data-wow-delay="0.3s">
                    <div class="service-box">
                        <div class="service-icon">
                            <span class="fa fa-h-square fa-3x"></span>
                        </div>
                        <div class="service-desc">
                            <h5 class="h-light">Fundación <p>Avao</p> </h5>
                            <p>Somos una asociación civil sin fines de lucro creada en el año 1984 por sus... <a href="#" data-toggle="modal" data-target="#modalMessageAvao"> <b><small>Leer más.</small></b></a></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-4 col-md-4">
                <div class="wow fadeInRight" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <span class="fa fa-list-alt fa-3x"></span>
                        </div>
                        <div class="service-desc">
                            <h5 class="h-light"> Estudios Oftalmológicos <p>Especiales</p></h5>
                            <p>En la sección de Estudios Especiales podrá realizar todos los estudios...<a href="#" data-toggle="modal" data-target="#modalMessageEstudio"> <b><small>Leer más.</small></b></a></p>
                        </div>
                    </div>
                </div>

                <div class="wow fadeInRight" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <span class="fa fa-wheelchair fa-3x"></span>
                        </div>
                        <div class="service-desc">
                            <h5 class="h-light">Amplio Estacionamiento <p>para nuestros pacientes</p></h5>
                            <p>Nuestra Sede de Consulta en Santa Paula Plaza I; cuenta con un estacionamiento... <a href="#" data-toggle="modal" data-target="#modalMessageAmplio"> <b><small>Leer más.</small></b></a></p>
                        </div>
                    </div>
                </div>

                <div class="wow fadeInRight" data-wow-delay="0.3s">
                    <div class="service-box">
                        <div class="service-icon">
                            <span class="fa fa-check fa-3x"></span>
                        </div>
                        <div class="service-desc">
                            <h5 class="h-light">Reserve <p>su Cita</p></h5>
                            <p>Comuníquese a nuestra Central telefónica 0212 918.77.77 / 918.77.00; nuestros... <a href="#" data-toggle="modal" data-target="#modalMessageCita"> <b><small>Leer más.</small></b></a></p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="modalMessageUnidad" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0051A1">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="color: #fff">Unidad Oftalmológica de Caracas</h4>
            </div>
            <div class="modal-body">
                <p>
                    Fundada en 1982 por los destacados médicos venezolanos: Dr. Guillermo Pereira y el Dr. Nayib Salomón, la Unidad Oftalmológica de Caracas es reconocida nacional e
                    internacionalmente como Centro Oftalmológico Médico Quirúrgico de referencia por su alta calidad de atención y la aplicación de las más innovadoras técnicas y
                    procedimientos de prevención y corrección en problemas de salud visual.
                </p>
                <p>
                    <b>Misión:</b> Prestar servicios médicos especializados para el diagnóstico, tratamiento y prevención de enfermedades oculares, dentro de un marco de excelencia,
                    donde impere la ética y la calidad de los servicios, apoyados en un destacado equipo médico y de personal asistencial y administrativo altamente calificado.
                </p>
                <p>
                    <b>Visión:</b> Consolidarnos como uno de los principales proveedores de servicios médicos oftalmológicos, ofreciendo un alto nivel de calidad de servicio,
                    tanto para nuestros pacientes como para nuestros médicos oftalmólogos.
                </p>
                <p>
                    Comuníquese con nosotros a los teléfonos 0212 918.77.77 / 918.77.00, y gustosamente le orientaremos en las mejores opciones para su requerimiento oftalmológico.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalMessageEvaluacion" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0051A1">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="color: #fff">Evaluación Cardiovascular Pre-Operatoria</h4>
            </div>
            <div class="modal-body">
                <p>
                    Nuestros Médicos Internistas especializados podrán realizar el Electrocardiograma y la Evaluación Cardiovascular Pre-Operatoria requeridas para su cirugía, en la comodidad de nuestras instalaciones.
                </p>
                <p>
                    Programe su cita de evaluación cardiovascular pre-operatoria contactando a nuestros teléfonos 0212 918.77.77 / 918.77.00.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="modalMessageVision" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0051A1">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="color: #fff">Su visión en manos de Expertos</h4>
            </div>
            <div class="modal-body">
                <p>
                    Nuestro liderazgo como Centro Oftalmológico Médico Quirúrgico se basa en la alta calidad científica y humana de nuestros profesionales.
                </p>
                <p>
                    Agrupamos un equipo multidisciplinario de Médicos Oftalmólogos, Internistas y Anestesiólogos, acreditados con excelente formación académica, trayectoria profesional y reconocimientos a nivel nacional e internacional.
                </p>
                <p>
                    Con todo gusto podremos atenderle en las siguientes especialidades oftalmológicas:
                </p>
                <ul>
                    <li>Cirugía refractiva (Miopía – Hipermetropía - Astigmatismo)</li>
                    <li>Retina y Vítreo </li>
                    <li>Glaucoma</li>
                    <li>Segmento anterior</li>
                    <li>Cirugía Plástica Ocular, Órbita, Vías Lagrimales, Tumores Oculares</li>
                    <li>Córnea</li>
                    <li>Oftalmología Pediátrica</li>
                    <li>Neuroftalmología</li>
                    <li>Medicina Interna</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="modalMessageAmplio" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0051A1">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="color: #fff">Amplio Estacionamiento para nuestros pacientes</h4>
            </div>
            <div class="modal-body">
                <p>
                    Le esperamos en nuestra Sede de Consulta en Santa Paula; ubicada en la Avenida Circunvalación del Sol, Edificio Santa Paula Plaza I, Piso 7, Oficina 701 - El Cafetal, Estado Miranda.
                </p>
                <p>
                    En nuestra Sede podrá disfrutar de:
                </p>
                <ul>
                    <li>Estacionamiento exclusivo para nuestros pacientes, con un horario de 7:00 am a 6:30 pm</li>
                    <li>Servicio de atención especial con sillas de ruedas </li>
                    <li>Cómodas y amplias salas de espera </li>
                    <li>Servicio de cafetín interno</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="modalMessageOptica" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0051A1">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="color: #fff">Óptica: Blue Vision </h4>
            </div>
            <div class="modal-body">
                <p>Acérquese y conozca la <b style="font-size: 24px">Óptica Blue Vision</b></p>
                <p>Contamos con la excelente atención de la Óptica Blue Vision; que le brindará variedad en monturas y servicios.</p>
                <p>
                    Puede comunicarse directamente a los teléfonos 0212 918.77.62.
                </p>
                <p>
                    Ubicada en las instalaciones de la Sede de Consulta en Santa Paula; Avenida Circunvalación del Sol, Edificio Santa Paula Plaza I, Piso 7, Oficina 701 - El Cafetal, Estado Miranda.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="modalMessageEstudio" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0051A1">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="color: #fff">Estudios Oftalmológicos Especiales</h4>
            </div>
            <div class="modal-body">
                <p>En el área de <b>Estudios Especiales </b> podrá realizarse toda la evaluación oftalmológica con modernos equipos.</p>
                <p>Entre estos estudios tenemos a su disposición:</p>
                <ul>
                    <li>Angiografía Fluorescénica (FRG),</li>
                    <li>Biometría,</li>
                    <li>Campo Visual computarizado,</li>
                    <li>Ecografía Ocular,</li>
                    <li>Fotografía,</li>
                    <li>Microscopia Especular,</li>
                    <li>Paquimetría Corneal,</li>
                    <li>Tecnología de Doble Frecuencia (FDT),</li>
                    <li>Tomografía Óptica Coherente (OCT),</li>
                    <li>Topografía Corneal,</li>
                    <li>Entre otros.</li>
                </ul>
                <p>
                    Contáctenos a los teléfonos 0212 918.77.77 / 918.77.00 para programar los estudios oftalmológicos especializados solicitados por su médico.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="modalMessagelaser" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0051A1">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="color: #fff">Tratamientos Con Láser</h4>
            </div>
            <div class="modal-body">
                <p>
                    De acuerdo con cada diagnóstico oftalmológico, es posible que el médico especialista indique algún procedimiento con tratamiento láser.
                </p>
                <p>
                    Contamos con modernos equipos láser para procedimientos menores que pueden ayudar en casos de pacientes con opacificación de la cápsula, diabetes, retinopatía, o con glaucoma.
                </p>
                <p>
                    <b>Tratamientos con Láser Yag:</b>
                    <ul>
                        <li>Capsulotomía,</li>
                        <li>Iridotomía,</li>
                    </ul>
                </p>
                <p>
                    <b>Tratamientos con Láser Argón / Macular </b>
                <ul>
                    <li>Panfotocoagulación,</li>
                    <li>Fotocoagulación,</li>
                    <li>Trabeculoplastia,</li>
                    <li>Iridotomía,</li>
                </ul>
                </p>
                <p>
                    Contáctenos a los teléfonos 0212 918.77.77 / 918.77.00 para programar el tratamiento láser indicado por su médico.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="modalMessageCita" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0051A1">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="color: #fff">Reserve su Cita</h4>
            </div>
            <div class="modal-body">
                <p>Comuníquese a nuestra Central telefónica</p>
                <p><b>0212 918.77.77 / 918.77.00</b></p>
                <p>
                    Nuestros operadores gustosamente atenderán su requerimiento y le ofrecerán la orientación adecuada a su caso.
                </p>
                <p>
                    O ingrese por <b>RESERVE SU CITA</b>
                </p>
                <p>
                    Sírvase completar la información solicitada e indique su requerimiento o detalles de su cita.
                </p>
                <p>
                    Nos comunicaremos con usted lo más pronto posible para programar su cita.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="modalMessageAvao" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0051A1">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="color: #fff">Fundación Avao</h4>
            </div>
            <div class="modal-body">
                <p>
                    La <b>Fundación AVAO, Asociación Venezolana para el Avance de la Oftalmología;</b>  es una Asociación Civil sin fines de lucro creada en el año 1984, por los fundadores de la Unidad Oftalmológica de Caracas; los destacados médicos venezolanos, el Dr. Guillermo Pereira y el Dr. Nayib Salomón, dedicada a la asistencia social y a la formación docente en el área de salud visual.
                </p>
                <h4>Misión</h4>
                <p>
                    Nace con dos nortes muy bien definidos y complementarios. El de enseñar y transmitir conocimientos a las nuevas generaciones, y el de tener la oportunidad de ayudar a personas de escasos recursos a mejorar su salud visual poniendo a su alcance la misma calidad y servicio que se les ofrece a pacientes de una institución privada.
                </p>
                <p>Comuníquese con nosotros a través de los siguientes teléfonos <b>0212 985.18.19/82.62/59.60</b></p>
                <p>
                    ó visite nuestra página  <a href="http://www.fundacionavao.org.ve/" target="_blank">http://www.fundacionavao.org.ve/</a>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>
<!-- /Section: services -->
<!-- Section: testimonial de los pacientes-->
<section id="especialistas" class="home-section paddingbot-10 parallax" data-stellar-background-ratio="0.5">
    <div class="container marginbot-10">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="section-heading text-center">
                        <h2 class="h-bold">Nuestros Especialistas Oftalmólogos</h2>
                        <p>Equipo multidisciplinario de Médicos Oftalmólogos, Médicos Anestesiólogos y Médicos Internistas, acreditados con excelente formación académica, trayectoria profesional y reconocimientos a nivel nacional e internacional.</p>
                    </div>
                </div>
                <div class="divider-short"></div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container">
            <div class="row">


                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-md-4 col-sm-6">

                                <div class="person-text rel text-light">
                                    <a title="" href="especialistas"><img src="<?php echo $url; ?>img/testimonials/3.jpg" alt="" class="person img-responsive" /></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 hidden-xs">

                                <div class="person-text rel text-light">
                                    <a title="" href="especialistas"><img src="<?php echo $url; ?>img/testimonials/2.jpg" alt="" class="person img-responsive" /></a>

                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                <div class="person-text rel text-light">
                                    <a title="" href="especialistas"><img src="<?php echo $url; ?>img/testimonials/1.jpg" alt="" class="person img-responsive" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- /Section: testimonial-->

<!-- Section: Estudios especiales -->
<section id="estudios" class="home-section bg-gray paddingbot-60">
    <div class="container marginbot-30">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="section-heading text-center">
                        <h2 class="h-bold">Estudios Oftalmológicos Especiales</h2>
                        <p>
                            En el área de Estudios Especiales podrá realizar toda evaluación oftalmológica y tratamientos con láser con nuestros modernos equipos.
                        </p>
                    </div>
                </div>
                <div class="divider-short"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div id="filters-container" class="cbp-l-filters-alignLeft">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">Todos (
                        <div class="cbp-filter-counter"></div>)
                    </div>
                    <?php

                    foreach($estudios_encabezado as $key){

                        echo '<div data-filter=".'.$key["id"].'" class="cbp-filter-item">'. $key["nombre"].' (
                    <div class="cbp-filter-counter"></div>)
                  </div>';
                    }
                    ?>
                </div>

                <div id="grid-container" class="cbp-l-grid-team">
                    <ul>
                        <?php
                        foreach($detalle_estudios as $detalle){

                            //se toma los valores y se almacena en un array y se pasa por el metodo GET
                            $miarray = array(
                                "folder"=>$detalle["folder"],
                                "imagen"=>$detalle["imagen"],
                                "titulo"=>$detalle["titulo"],
                                "descripcion"=>$detalle["descripcion"],
                                "ruta"=>$url,
                                "nombre"=>$detalle["nombre"]
                            );
                            $array_para_enviar_via_url = serialize($miarray);
                            $array_para_enviar_via_url = urlencode($array_para_enviar_via_url);

                            echo '<li class="cbp-item '.$detalle["id_estudio"].'">
                            <a href="'.$url.'vistas/modulos/info.php?informacion='.$array_para_enviar_via_url.'" class="cbp-caption cbp-singlePage">
                              <div class="cbp-caption-defaultWrap">
                                <img src="'.$url.'img/'.$detalle["folder"].'/'.$detalle["imagen"].'?v=1" alt="" width="100%">
                              </div>
                              <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                  <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-text">VER DETALLE</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a href="'.$url.'vistas/modulos/info.php?informacion='.$array_para_enviar_via_url.'" class="cbp-singlePage cbp-l-grid-team-name">'.$detalle["titulo"].'</a>
                            <div class="cbp-l-grid-team-position">'.$detalle["nombre"].'</div>
                          </li>';
                        }

                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /Section: de estudios especiales -->

<!-- Section: works -->
<section id="facilities" class="home-section paddingbot-60">
    <div class="container marginbot-50">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="section-heading text-center">
                        <h2 class="h-bold">Nuestras Instalaciones</h2>
                        <p>Dirección Sede Consulta: Av. Circunvalación del Sol. Edif. Santa Paula Plaza I, Piso 7, Ofic. 701 . Santa Paula - El Cafetal. Estado Miranda.</p>
                            <p>Dirección Sede Quirúrgica: Av. El Paují C.C. Galerías Los Naranjos, Nivel 3, Ofic. Oeste 89 - El Cafetal. Estado Miranda.</p>
                    </div>
                </div>
                <div class="divider-short"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div id="owl-works" class="owl-carousel">
                        <div class="item"><a href="<?php echo $url; ?>img/photo/1.jpg" title="Dirección Sede Consulta: Av. Circunvalación del Sol. Edif. Santa Paula Plaza I, Piso 7, Ofic. 701 . Santa Paula - El Cafetal. Estado Miranda." data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="<?php echo $url; ?>img/photo/1.jpg" class="img-responsive" alt="img"></a></div>
                        <div class="item"><a href="<?php echo $url; ?>img/photo/2.jpg" title="Quirofano" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg"><img src="<?php echo $url; ?>img/photo/2.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="<?php echo $url; ?>img/photo/3.jpg" title="Salas de espera" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg"><img src="<?php echo $url; ?>img/photo/3.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="<?php echo $url; ?>img/photo/4.jpg" title="Dirección Sede Consulta: Av. Circunvalación del Sol. Edif. Santa Paula Plaza I, Piso 7, Ofic. 701 . Santa Paula - El Cafetal. Estado Miranda." data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg"><img src="<?php echo $url; ?>img/photo/4.jpg" class="img-responsive " alt="img"></a></div>
<!--                        <div class="item"><a href="--><?php //echo $url; ?><!--img/photo/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg"><img src="--><?php //echo $url; ?><!--img/photo/5.jpg" class="img-responsive " alt="img"></a></div>-->
<!--                        <div class="item"><a href="--><?php //echo $url; ?><!--img/photo/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg"><img src="--><?php //echo $url; ?><!--img/photo/6.jpg" class="img-responsive " alt="img"></a></div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Section: works -->
<!-- Section: Contactos-->
<section id="cita" class="intro">
    <div class="intro-content2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <div class="form-wrapper">
                        <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                            <div class="panel panel-skin">
                                <div class="panel-heading" style="background-color: #0051A1">
                                    <h4 class="panel-title"><span class="fa fa-pencil-square-o"></span> Sírvase completar la siguiente información.</h4>
                                </div>
                                <div class="panel-body">

<!--                                    <div class="text-center img-rounded">-->
<!--                                        <h3 class="panel-title">Indique su requerimiento.</h3>-->
<!--                                    </div>-->
                                    <br>
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
                    </div>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
    </div>
</section>
<section id="partner" class="home-section-map paddingbot-10">
    <div class="marginbot-10">
        <div class="row">
            <div class="col-md-6 col-xs-12">

                <div class="section-heading text-center">
                    <h2 align="center">Ubicación Geográfica Santa Paula</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.4743808481226!2d-66.84231238520196!3d10.463219592534484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a586ef7e562e7%3A0x8605ac5176790b5d!2sUnidad+Oftalmologica+de+Caracas!5e0!3m2!1ses!2sve!4v1525124037503" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
                <div class="divider-short"></div>
            </div>
            <div class="col-md-6 col-xs-12 ">

                <div class="section-heading text-center">
                    <h2 align="center">Ubicación Geográfica Sede Quirúrgica</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.7651950579784!2d-66.83825008519483!3d10.440198192550204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2af7dcdd271c5b%3A0xac6e50c7d5e95d3a!2sC.+C.+Galer%C3%ADas+Los+Naranjos!5e0!3m2!1ses!2sve!4v1539271485298" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
                <div class="divider-short"></div>
            </div>
        </div>
    </div>

    <div class="container" style="display: none">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="partner">
                    <a href="#"><img src="<?php echo $url; ?>img/dummy/partner-1.jpg" alt="" /></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="partner">
                    <a href="#"><img src="<?php echo $url; ?>img/dummy/partner-2.jpg" alt="" /></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="partner">
                    <a href="#"><img src="<?php echo $url; ?>img/dummy/partner-3.jpg" alt="" /></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="partner">
                    <a href="#"><img src="<?php echo $url; ?>img/dummy/partner-4.jpg" alt="" /></a>
                </div>
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
                                    <img src="<?php echo $url ?>img/navidad-2020.jpg" alt="Vacaciones Unidad Oftalmologica de Caracas" class="img-responsive">
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

<!--MENSAJE PROMOCIN -->
<div class="modal fade" id="modalMensajePromocion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                    <img src="<?php echo $url ?>img/uoca.jpg" alt="Promocion Unidad Oftalmologica de Caracas" class="img-responsive">
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