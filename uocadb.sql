


-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.11-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para uocabd
DROP DATABASE IF EXISTS `uocabd`;
CREATE DATABASE IF NOT EXISTS `uocabd` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `uocabd`;

-- Volcando estructura para tabla uocabd.detalle_estudios
DROP TABLE IF EXISTS `detalle_estudios`;
CREATE TABLE IF NOT EXISTS `detalle_estudios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudio` int(11) NOT NULL,
  `folder` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla uocabd.detalle_estudios: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `detalle_estudios` DISABLE KEYS */;
REPLACE INTO `detalle_estudios` (`id`, `id_estudio`, `folder`, `imagen`, `titulo`, `descripcion`) VALUES
	(1, 1, 'estudios', 'ecografia-ocular.jpg\r\n', 'ECOGRAFÍA OCULAR', '<p>La <b>Ecografía Ocular </b> permite hacer una evaluación de las estructuras del segmento posterior del ojo; como la cavidad vítrea, retina, coroides, nervio óptico por medio de ultrasonido.</p>\r\n<br>\r\n<p>El examen toma alrededor de 15 minutos. </p>\r\n<p>Para este tipo de evaluación el paciente debe de venir acompañado, ya que se le dilatará la pupila y sentirá algunas molestias al percibir la luz.</p>\r\n'),
	(2, 1, 'estudios', 'biometria.jpg', 'BIOMETRIA', '<p>La <b>Biometría </b>es una prueba diagnóstica que nos permite obtener el tamaño del globo ocular, para calcular la medida del lente intraocular que se implantará luego de una cirugía de catarata.</p>\r\n<br>\r\n<p>El examen es sencillo, rápido e inofensivo. Con la nueva tecnología podemos realizar el examen sin tocar la córnea, midiendo la longitud del eje ocular, el radio de la córnea y la profundidad de la cámara anterior del ojo.</p>\r\n'),
	(3, 1, 'estudios', 'topografia-corneal.jpg', 'TOPOGRAFÍA CORNEAL', '<p>Este estudio se realiza para examinar las irregularidades de la superficie corneal, tales como cicatrices, adaptación de lentes de contacto entre otras.<p>\r\n<br>\r\n\r\n<p>Es imprescindible para el estudio pre-operatorio en cirugía refractiva (LASIK, por ejemplo). Ayuda a detectar el queratocono y otros problemas corneales que contraindican la cirugía refractiva.<p>\r\n<br>\r\n<p>La <b>Topografía Corneal</b> debe ser realizada sobre una córnea en “reposo”, es decir sin haber utilizado lentes de contacto durante algunos días (variable según el tipo de lentes y del cirujano), en principio se piden entre 4 a 15 días. </p>\r\n<p>Para realizarse este examen debido a su sencillez y puede venir sin acompañante.</p>\r\n'),
	(4, 1, 'estudios', 'angiografia.jpg', 'ANGIOGRAFÍA FLUORESCÉNICA O FRG', '<p>Es un examen ocular en el que se usa un contraste y una cámara especiales para determinar si existe circulación adecuada en los vasos sanguíneos de la retina.</p>\r\n<br>\r\n<p>Para realizar este examen es necesario inyectar en la vena del paciente un medio de contraste llamado fluoresceína. </p>\r\n<br>\r\n<p>Se administran gotas para dilatar la pupila, luego se le tomarán una serie de fotografías del interior del ojo. Cuando se inyecta el medio de contraste, se pueden experimentar náuseas leves y una sensación de calor, estos síntomas son generalmente muy breves.</p>\r\n<br>\r\n<p>Usted necesitará asistir acompañado, ya que su visión puede estar borrosa hasta por 12 horas después del examen.</p>\r\n'),
	(5, 1, 'estudios', 'microscopia.jpg', 'MICROSCOPIA ESPECULAR', '<p>La <b>Microscopía Especular</b> nos permite realizar el estudio del endotelio corneal. Puesto que la distribución celular es prácticamente uniforme, mediante la microscopía se puede conocer el número, la forma y el tamaño de la población endotelial.</p>\r\n<br>\r\n<p>Esta indicado para todo preoperatorio de cirugía intraocular del segmento anterior o Catarata, en el cálculo y acompañamiento de patologías endoteliales y en el desarrollo postoperatorio de la cirugía refractiva.</p>\r\n'),
	(6, 1, 'estudios', 'campo-visual.jpg', 'CAMPO VISUAL COMPUTARIZADO', '<p>El <b>Campo Visual </b> o campimetría es una prueba no invasiva de exploración funcional de la sensibilidad de su visión periférica. \r\n</p>\r\n<br>\r\n<p>Es fundamental en el glaucoma, dado que la pérdida progresiva de fibras nerviosas del nervio óptico tiene como consecuencia la pérdida de ciertas áreas del campo visual. También es de uso imprescindible en muchas enfermedades neuro-oftalmológicas. </p>\r\n<br>\r\n<p>El resultado de este examen oftalmológico, revelará si usted tiene una pérdida de la visión periférica y le ayudará al médico a diagnosticar la causa.\r\n</p>'),
	(7, 1, 'estudios', 'tecnologia-doble.jpg', 'TECNOLOGÍA DE DOBLE FRECUENCIA (FDT)', '<p>Perímetro computarizado para detección temprana del glaucoma.</p>\r\n<br>\r\n<p>La misma está basada en un principio de doble frecuencia que produce una ilusión óptica que sólo puede ser percibida por el paciente si las células ganglionares MY están sanas. Estas células son las primeras que se dañan en el glaucoma, y marcan así el comienzo de la pérdida funcional en el glaucoma.</p>'),
	(8, 1, 'estudios', 'paquimetria.jpg', 'PAQUIMETRIA', '<p><b>La Paquimetría corneal</b> es una prueba que mide el grosor de la córnea. Se utiliza como prueba preoperatorio en operaciones de miopía con Láser de Excimer, glaucoma y catarata.</p>\r\n\r\n<p>La paquimetría corneal es esencial antes de un procedimiento de cirugía refractiva para asegurar suficiente espesor de la córnea.</p>\r\n'),
	(9, 1, 'estudios', 'tomografia.jpg', 'TOMOGRAFÍA ÓPTICA COHERENTE', '<p>La <b>OCT (Tomografía de Coherencia Óptica)</b> es una técnica de exploración oftalmológica moderna que se aplica para estudiar “en vivo” el segmento anterior y posterior del ojo, aunque en la actualidad su uso es más frecuente para la obtención de imágenes de la retina. </p>\r\n<br>\r\n<p>Con un rápido chequeo del paciente se podrá valorar y estudiar a unos niveles hasta ahora no conseguidos con otros medios, el estado de la retina y al mismo tiempo detecta con gran precisión distintas patologías del nervio óptico y el manejo del glaucoma.</p>\r\n<br>\r\n<p>Es un moderno método de diagnóstico no invasivo que permite obtener imágenes de alta resolución de las diferentes estructuras intraoculares.</p>'),
	(10, 2, 'estudios', 'capsulotomia.jpg', 'CAPSULOTOMÍA CON YAG LÁSER', '<p>Algunas veces el tejido del ojo que encierra el Lente Intraocular se nubla y puede opacar su visión. Esta condición se llama opacificación de la cápsula posterior también conocida como post-catarata. Esto se puede desarrollar meses o años después de la cirugía para las cataratas. </p><br>\r\n<p>La opacificación se puede tratar con láser. Su médico usa un láser para realizar una pequeña incisión en el tejido del ojo detrás del cristalino para permitir que pase la luz. Este procedimiento ambulatorio e indoloro se conoce como <b>Capsulotomía con YAG Láser.</b></p> \r\n<br>\r\n<p>Para este tipo de procedimiento el paciente debe de venir acompañado, ya que se le dilatara la pupila y sentirá algunas molestias al percibir la luz.</p>\r\n'),
	(11, 2, 'estudios', 'iridotomia.jpg', 'IRIDOTOMIA', '<p>La Iridotomía es un procedimiento realizado con láser (puede realizarse con Láser Yag o Argón) para evitar episodios de Glaucoma agudo. Su finalidad es abrir un conducto en el iris a través del cual se equilibren las presiones de la cámara anterior y de la cámara posterior del ojo, y no se produzca un aumento en la tensión intraocular del ojo derivando en glaucoma.</p><br>\r\n\r\n<p>La <b>Iridotomía Láser</b> puede realizarse mediante varias clases de láseres. Se aplica un anestésico tópico, y para enfocar el haz de luz (láser) sobre el iris se emplea una pequeña lente condensadora. Las técnicas concretas varían con el tipo de láser utilizado.</p>\r\n'),
	(12, 3, 'estudios', 'panfotocoagulacion.jpg', 'PANFOTOCOAGULACIÓN', '<p>Este procedimiento es necesario como control de patologías visuales que estimulan la proliferación de nuevos vasos sanguíneos en el interior del ojo, los cuales son débiles y producen sangrado interno, obstruyendo la vía visual. Esta situación de nuevos vasos se puede presentar en pacientes con diabetes, retinopatía, en pacientes con glaucomas neo vasculares y con obstrucciones o trombosis de los vasos en el interior del ojo.</p><br>\r\n\r\n<p>Su objetivo principal es detener la fuga de sangre y líquido en la retina, para hacer más lenta la progresión de la enfermedad. La decisión de usar este procedimiento depende del tipo de retinopatía diabética.</p>\r\n'),
	(13, 3, 'estudios', 'FOTOCOAGULACION-CON-LASER.jpg', 'FOTOCOAGULACIÓN CON LÁSER', '<p>Existen dos tipos de láser:</p><br>\r\n<p>•	Láser focal</p><br>\r\n<p>•	Láser en rejilla.</p><br>\r\n<p>La <b>Fotocoagulación</b> es una técnica con la que se genera una cicatriz en la retina mediante quemadura terapéutica, para lo cual se aplica un haz de luz (láser) sobre la misma. La cicatriz resultante permite detener el desarrollo de un desprendimiento de retina; sellar la filtración de vasos sanguíneos o tejidos anormales; promover la absorción de líquido; y reducir, tanto como sea posible, la formación de nuevos vasos sanguíneos anormales.</p><br>\r\n\r\n<p>Habitualmente la cirugía con láser no causa dolor, aunque algunas personas pueden sentir algo de molestias, en el caso de que el dolor sea muy fuerte llame a su médico oftalmólogo.</p><br>\r\n<p>Es un procedimiento ambulatorio donde se aplica un láser, se realiza con anestesia tópica y no produce mayores molestias en los pacientes. En general, requiere de varias aplicaciones para cada ojo.</p>\r\n'),
	(14, 3, 'estudios', 'TRABECULOPLASTIA.jpg', 'TRABECULOPLASTIA', '<p>El glaucoma es una enfermedad que daña el nervio óptico, causando pérdida progresiva de la visión.</p><br>\r\n\r\n<p>El glaucoma se asocia con el aumento de la presión dentro del ojo. Este aumento se produce en la parte delantera del iris en un líquido llamado humor acuoso. </p><br> \r\n\r\n<p>El humor acuoso se supone que debe salir a través de pequeños canales entre el iris y la córnea, en una zona llamada la trabécula. Cuando la trabécula se bloquea, la presión de la acumulación de humor acuoso, o bien aumenta rápidamente con un considerable dolor y el enrojecimiento, o, como en la mayoría de los casos; la presión aumenta lentamente, sin síntomas hasta que la mayor parte de la visión se pierde. </p>\r\n<br>\r\n<p>La <b>Trabeculoplastia Láser</b> (procedimiento menos invasivo) es una técnica que mediante impactos de láser argón administrados con una lente especial en el ángulo formado entre iris y la córnea, concretamente en la zona del trabeculum, que es justamente la zona donde se drena, evacua o elimina el humor acuoso.</p>'),
	(15, 3, 'estudios', 'TRABECULOPLASTIA.jpg', 'IRIDOTOMIA', '<p>La Iridotomía es un procedimiento realizado con láser (puede realizarse con Láser Yag o Argón) para evitar episodios de Glaucoma agudo. Su finalidad es abrir un conducto en el iris a través del cual se equilibren las presiones de la cámara anterior y de la cámara posterior del ojo, y no se produzca un aumento en la tensión intraocular del ojo derivando en glaucoma.</p><br>\r\n\r\n<p>La <b>Iridotomía Láser</b> puede realizarse mediante varias clases de láseres. Se aplica un anestésico tópico, y para enfocar el haz de luz (láser) sobre el iris se emplea una pequeña lente condensadora. Las técnicas concretas varían con el tipo de láser utilizado.</p>\r\n');
/*!40000 ALTER TABLE `detalle_estudios` ENABLE KEYS */;

-- Volcando estructura para tabla uocabd.doctores
DROP TABLE IF EXISTS `doctores`;
CREATE TABLE IF NOT EXISTS `doctores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `folder` text COLLATE utf8_spanish_ci NOT NULL,
  `image` text COLLATE utf8_spanish_ci NOT NULL,
  `turno` text COLLATE utf8_spanish_ci NOT NULL,
  `estatus` int(11) NOT NULL DEFAULT 0 COMMENT '0 = activo y 1 = inactivo',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla uocabd.doctores: ~25 rows (aproximadamente)
/*!40000 ALTER TABLE `doctores` DISABLE KEYS */;
REPLACE INTO `doctores` (`id`, `nombre`, `descripcion`, `folder`, `image`, `turno`, `estatus`) VALUES
	(1, 'Dr. Alemán Edgardo', '<p>Especialidades: Segmento Anterior, Cirugía Refractiva, Córnea</p>', 'medicos', '1.png', '<p>Mañana :Miércoles, Viernes</p><p>Tarde : Lunes, Martes, Jueves</p>', 0),
	(2, 'Dra. Capozzolo Bárbara', '<p>Especialidades: Segmento Anterior</p>', 'medicos', '2.png', '<p>Mañana :Lunes, Martes, Jueves, Viernes</p>', 0),
	(3, 'Dra. Fernández María Begoña', '<p>Especialidades: Internista</p>\r\n\r\n', 'medicos', '3.png', '<p>Tarde : Lunes, Jueves</p>', 1),
	(4, 'Dr. Gan Jorge ', '<p>Especialidades: Segmento Anterior, Cirugía Refractiva, Córnea</p>\r\n', 'medicos', '31.png', '<p>Mañana :Martes</p>\r\n<p>Tarde : Miércoles</p>', 0),
	(5, 'Dra. González Lilian ', '<p>Especialidades: Segmento Anterior, Glaucoma<p>\r\n\r\n', 'medicos', '41.png', '<p>Mañana :Lunes, Jueves, Viernes</p>\r\n<p>Tarde : Martes, Jueves</p>', 0),
	(6, 'Dr. Hernández Chirinos Víctor', '<p>Especialidades: Segmento Anterior, Glaucoma<p>\r\n\r\n', 'medicos', '6.png', '<p>Mañana :Lunes</p>\r\n<p>Tarde : Martes, Jueves, Viernes</p>', 0),
	(7, 'Dra. Jaimes Vanessa', '<p>Especialidades: Segmento Anterior, Retina y Vitreo</p>\r\n', 'medicos', '7.png', '<p>Mañana: Lunes, Miércoles, Viernes</p>', 0),
	(8, 'Dra. Márquez Melissa', '<p>Especialidades: Segmento Anterior, Cirugía Refractiva</p>\r\n\r\n', 'medicos', '8.png', '<p>Mañana: Jueves / Tarde: Lunes, Miércoles, Viernes</p>\r\n\r\n', 0),
	(9, 'Dra. Merola Rosina ', '<p>Especialidades: Segmento Anterior, Cirugía Refractiva, Córnea</p>\r\n\r\n\r\n', 'medicos', '9.png', '<p>Mañana :Martes, Jueves</p>\r\n<p>Tarde : Lunes, Viernes</p>', 0),
	(10, 'Dr. Millán Francisco ', '<p>Especialidades: Segmento Anterior, Glaucoma</p>\r\n\r\n\r\n', 'medicos', '10.png', '<p>Mañana :Lunes, Jueves, Viernes</p>', 0),
	(11, 'Dr. Monsalve Ramyur', '<p>Especialidades: Segmento Anterior, Cirugía Plástica Ocular, Órbita, Vías Lagrimales, Tumores Oculares</p>\r\n\r\n', 'medicos', '11.png', '<p>Mañana :Lunes, Miércoles</p>\r\n<p>Tarde : Martes, Jueves</p>', 0),
	(12, 'Dra. Morales Adriana', '<p>Especialidades: Segmento Anterior, Retina y Vitreo</p>\r\n\r\n', 'medicos', '12.png', '<p>Mañana :Miércoles</p>', 0),
	(13, 'Dra. Moreno Mitzi ', '<p>Especialidades: Segmento Anterior, Cirugía Plástica Ocular, Órbita, Vías Lagrimales, Tumores Oculares</p>\r\n\r\n', 'medicos', '13.png', '<p>Mañana :Lunes, Martes, Jueves</p>', 0),
	(14, 'Dr. Pardo Andrés', '<p>Especialidades: Segmento Anterior, Retina y Vitreo</p>\r\n\r\n', 'medicos', '14.png', '<p>Mañana :Lunes, Miércoles</p>\r\n<p>Tarde : Lunes, Miércoles, Viernes</p>', 0),
	(15, 'Dr. Peña Héctor ', '<p>Especialidades: Segmento Anterior</p>\r\n\r\n', 'medicos', '15.png', '<p>Mañana :Martes, Viernes</p>\r\n<p>Tarde : Martes, Miércoles, Jueves</p>', 0),
	(16, 'Dr. Pérez Félix ', '<p>Especialidades: Segmento Anterior, Cirugía Refractiva, Córnea</p>\r\n\r\n', 'medicos', '16.png', '<p>Mañana :Martes, Viernes</p>\r\n<p>Tarde : Miércoles</p>', 0),
	(17, 'Dr. Pérez Bustamante Jorge', '<p>Especialidades: Segmento Anterior, Cirugía Refractiva, Córnea</p>\r\n\r\n', 'medicos', '17.png', '<p>Mañana :Jueves</p>\r\n<p>Tarde : Lunes, Martes, Viernes</p>', 0),
	(18, 'Dra. Reverón María Elena ', '<p>Especialidades: Segmento Anterior, Glaucoma</p>\r\n', 'medicos', '18.png', '<p>Mañana :Miércoles, Jueves, Viernes</p>\r\n<p>Tarde : Lunes</p>', 0),
	(19, 'Dr. Rivas Rafael ', '<p>Especialidades: Segmento Anterior, Pediatría</p>\r\n', 'medicos', '19.png', '<p>Tarde : Miércoles</p>', 0),
	(20, 'Dra. Rodríguez María Alejandra', '<p>Especialidades: Segmento Anterior, Pediatría</p>\r\n\r\n', 'medicos', '20.png', '<p>Mañana :Martes, Miércoles</p>\r\n<p>Tarde : Martes, Miércoles</p>', 0),
	(21, 'Dra. Rodríguez Carmen Rosa', '<p>Especialidades: Internista, Endocrino</p>\r\n\r\n', 'medicos', '21.png', '<p>Mañana: Martes, Jueves</p>', 1),
	(22, 'Dr. Morón Orlando', '<p>Especialidades: Neuroftalmología</p>\r\n\r\n\r\n\r\n', 'medicos', '22.png', '<p>Mañana: Lunes</p>\r\n\r\n<p>Tarde: Miércoles, Viernes</p>', 0),
	(23, 'Dr. Salomon Nayib', '<p>Especialidades: Segmento Anterior, Cirugía Plástica Ocular, Órbita, Vías Lagrimales, Tumores Oculares</p>', 'medicos', '', '<p>Mañana : Lunes, Martes</p>', 0),
	(24, 'Dr. Torres Cárdenas Nelson', '<p>Especialidades: Segmento Anterior, Retina y Vítreo</p>', 'medicos', '', '<p>Mañana : Lunes, Miércoles</p>', 0),
	(25, 'Dra. Trujillo Andreina ', '<p>Especialidades: Segmento Anterior</p>', 'medicos', '', '<p>Mañana: Martes, Miércoles</p>\r\n\r\n<p>Tarde: Lunes, Viernes</p>\r\n\r\n', 0);
/*!40000 ALTER TABLE `doctores` ENABLE KEYS */;

-- Volcando estructura para tabla uocabd.especialidades
DROP TABLE IF EXISTS `especialidades`;
CREATE TABLE IF NOT EXISTS `especialidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla uocabd.especialidades: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `especialidades` DISABLE KEYS */;
REPLACE INTO `especialidades` (`id`, `nombre`) VALUES
	(1, 'Segmento Anterior'),
	(2, 'Cirugía Refractiva'),
	(3, 'Córnea'),
	(4, 'Internista'),
	(5, 'Glaucoma'),
	(6, 'Retina y Vitreo'),
	(7, 'Tumores Oculares'),
	(8, 'Vías Lagrimales'),
	(9, 'Órbita'),
	(10, 'Cirugía Plástica Ocular'),
	(11, 'Pediatría'),
	(12, 'Endocrino'),
	(13, 'Neuroftalmología');
/*!40000 ALTER TABLE `especialidades` ENABLE KEYS */;

-- Volcando estructura para tabla uocabd.especialidadxdoctores
DROP TABLE IF EXISTS `especialidadxdoctores`;
CREATE TABLE IF NOT EXISTS `especialidadxdoctores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idespecialidad` int(11) NOT NULL,
  `idmedico` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla uocabd.especialidadxdoctores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `especialidadxdoctores` DISABLE KEYS */;
/*!40000 ALTER TABLE `especialidadxdoctores` ENABLE KEYS */;

-- Volcando estructura para tabla uocabd.estudio
DROP TABLE IF EXISTS `estudio`;
CREATE TABLE IF NOT EXISTS `estudio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla uocabd.estudio: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `estudio` DISABLE KEYS */;
REPLACE INTO `estudio` (`id`, `nombre`) VALUES
	(1, 'Estudios Especiales'),
	(2, 'Tratamientos Con Láser Yag'),
	(3, 'Tratamiento Láser Argón/Macular');
/*!40000 ALTER TABLE `estudio` ENABLE KEYS */;

-- Volcando estructura para tabla uocabd.galeria
DROP TABLE IF EXISTS `galeria`;
CREATE TABLE IF NOT EXISTS `galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` text COLLATE utf8_spanish_ci NOT NULL,
  `image` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla uocabd.galeria: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `galeria` DISABLE KEYS */;
/*!40000 ALTER TABLE `galeria` ENABLE KEYS */;

-- Volcando estructura para tabla uocabd.servicios
DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla uocabd.servicios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;

-- Volcando estructura para tabla uocabd.sms
DROP TABLE IF EXISTS `sms`;
CREATE TABLE IF NOT EXISTS `sms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `celular` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `mensaje` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla uocabd.sms: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `sms` DISABLE KEYS */;
REPLACE INTO `sms` (`id`, `celular`, `mensaje`, `fecha`) VALUES
	(2, '04241242412', 'Otra prueba ', '2018-10-29 16:09:16'),
	(3, '04140518887', 'tercer mensaje de prueba', '2018-10-29 16:09:16'),
	(4, '04142517231', 'Esto es la segunda prueba', '2018-10-29 16:21:53'),
	(5, '04166184659', 'Avao Invita: Lo Mejor de los Mejores Eventos Oftalmologicos 2018. Fecha: 10/11/18, +Info www.fundacionavao.org.ve. Solo 100 Cupos!!', '2018-10-30 10:01:27');
/*!40000 ALTER TABLE `sms` ENABLE KEYS */;

-- Volcando estructura para tabla uocabd.suscribe
DROP TABLE IF EXISTS `suscribe`;
CREATE TABLE IF NOT EXISTS `suscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla uocabd.suscribe: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `suscribe` DISABLE KEYS */;
REPLACE INTO `suscribe` (`id`, `email`) VALUES
	(1, 'omen_dj@hotmail.com'),
	(2, 'jdelgadillo@gmail.com');
/*!40000 ALTER TABLE `suscribe` ENABLE KEYS */;

-- Volcando estructura para tabla uocabd.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `rol` int(11) NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla uocabd.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
