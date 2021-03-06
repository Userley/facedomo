-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.11-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla domobd.comandos
DROP TABLE IF EXISTS `comandos`;
CREATE TABLE IF NOT EXISTS `comandos` (
  `idcomando` int(11) NOT NULL AUTO_INCREMENT,
  `cmd` varchar(500) DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idcomando`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla domobd.comandos: ~5 rows (aproximadamente)
DELETE FROM `comandos`;
/*!40000 ALTER TABLE `comandos` DISABLE KEYS */;
INSERT INTO `comandos` (`idcomando`, `cmd`, `estado`) VALUES
	(1, 'hola', b'1'),
	(2, 'estado', b'1'),
	(3, 'on', b'1'),
	(4, 'off', b'1'),
	(5, 'resumen', b'1');
/*!40000 ALTER TABLE `comandos` ENABLE KEYS */;

-- Volcando estructura para tabla domobd.dispositivos
DROP TABLE IF EXISTS `dispositivos`;
CREATE TABLE IF NOT EXISTS `dispositivos` (
  `IdDispositivo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `imagen` varchar(500) DEFAULT NULL,
  `Estado` int(11) DEFAULT NULL,
  `Respuesta` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdDispositivo`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla domobd.dispositivos: ~8 rows (aproximadamente)
DELETE FROM `dispositivos`;
/*!40000 ALTER TABLE `dispositivos` DISABLE KEYS */;
INSERT INTO `dispositivos` (`IdDispositivo`, `Nombre`, `Descripcion`, `imagen`, `Estado`, `Respuesta`) VALUES
	(1, 'Luz Habitación', 'Control de iluminación de la habitación principal ', 'assets/images/lampara.png', 0, 0),
	(2, 'Luz Sala', 'Control de iluminación de la sala del domicilio.', 'assets/images/lampara.png', 0, 0),
	(3, 'Seguridad Puerta', 'Sistema de seguridad implementado para el aviso o ', 'assets/images/seguridad.png', 0, 0),
	(4, 'Alarma General', 'Alarma General del domicilio en caso de emergencia', 'assets/images/bocina.png', 0, 0),
	(5, 'Temperatura', 'Medidor de temperatura del domicilio y la humedad ', 'assets/images/clima.png', 0, 0),
	(6, 'Riego Patio', 'Dispensadores de agua que regarán el gras y planta', 'assets/images/regar.png', 0, 0),
	(7, 'Proximidad Casa', 'Medidor de distancia de una persona desde la entra', 'assets/images/proximidad.png', 0, 0),
	(8, 'Reproductor de Música', 'Encargado de reproducir música en el domicilio.', 'assets/images/music.png', 0, 0);
/*!40000 ALTER TABLE `dispositivos` ENABLE KEYS */;

-- Volcando estructura para tabla domobd.post
DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `idpost` int(11) NOT NULL AUTO_INCREMENT,
  `identificador` varchar(50) DEFAULT NULL,
  `contenido` longtext DEFAULT NULL,
  `creacion` datetime DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idpost`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla domobd.post: ~15 rows (aproximadamente)
DELETE FROM `post`;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`idpost`, `identificador`, `contenido`, `creacion`, `estado`) VALUES
	(1, '1', '          <div class="card  p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">\r\n            <div class="d-inline-flex ml-1">\r\n              <img src="assets/images/music.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">\r\n              <div class="float-left mt-1">\r\n                <span><small><strong>LUZ</strong></small></span> -\r\n                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>\r\n                    Hace 35 min.</small></span>\r\n              </div>\r\n            </div>\r\n            <hr>\r\n            <div class="p-1 pl-2 pr-2">\r\n              <p><span style="text-align: justify !important;"></span>Buen día USUARIO, soy <i>DISPOSITIVO</i> de tu domicilio <i class="fa fa-smile-o" aria-hidden="true"></i>.</p>\r\n              <small>\r\n                <p class="text-muted"><i class="fa fa-home" aria-hidden="true"></i> Domo<i>Live</i></p>\r\n              </small>\r\n            </div>\r\n          </div>', NULL, b'1'),
	(2, '1', '          <div class="card  p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">\r\n            <div class="d-inline-flex ml-1">\r\n              <img src="assets/images/music.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">\r\n              <div class="float-left mt-1">\r\n                <span><small><strong>LUZ</strong></small></span> -\r\n                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>\r\n                    Hace 35 min.</small></span>\r\n              </div>\r\n            </div>\r\n            <hr>\r\n            <div class="p-1 pl-2 pr-2">\r\n              <p><span style="text-align: justify !important;"></span>El estado de <i>DISPOSITIVO</i> es:</p>\r\n              <p style="text-align:center !important;"><i class="fa fa-power-off" aria-hidden="true" style="color:COLORPHP;font-size: 25px;"></i><br>ESTADOPHP</p>\r\n              <small>\r\n                <p class=""><span style="color: #159F5C">Actuado:</span> FECHAPHP <i>a las</i> HORAPHP <i>por</i> <i class="fa fa-user-o" style="color:#4C8CF5" aria-hidden="true"></i> USUARIOPHP</p>\r\n              </small>\r\n              <small>\r\n                <p class="text-muted"><i class="fa fa-home" aria-hidden="true"></i> Domo<i>Live</i></p>\r\n              </small>\r\n            </div>\r\n          </div>', NULL, b'1'),
	(3, '1', '          <div class="card  p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">\r\n            <div class="d-inline-flex ml-1">\r\n              <img src="assets/images/music.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">\r\n              <div class="float-left mt-1">\r\n                <span><small><strong>LUZ</strong></small></span> -\r\n                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>\r\n                    Hace 35 min.</small></span>\r\n              </div>\r\n            </div>\r\n            <hr>\r\n            <div class="p-1 pl-2 pr-2">\r\n              <p><span style="text-align: justify !important;"></span>Su solicitud a <i>DISPOSITIVO</i> se está enviando</p>\r\n              <p style="text-align:center !important;"><i class="fa fa-toggle-on" aria-hidden="true" style="color:#49B164; font-size: 25px;"></i><br><i> encender...</i></p>\r\n              <small>\r\n                <p class="text-muted"><i class="fa fa-home" aria-hidden="true"></i> Domo<i>Live</i></p>\r\n              </small>\r\n            </div>\r\n          </div>', NULL, b'1'),
	(4, '1', '          <div class="card  p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">\r\n            <div class="d-inline-flex ml-1">\r\n              <img src="assets/images/music.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">\r\n              <div class="float-left mt-1">\r\n                <span><small><strong>LUZ</strong></small></span> -\r\n                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>\r\n                    Hace 35 min.</small></span>\r\n              </div>\r\n            </div>\r\n            <hr>\r\n            <div class="p-1 pl-2 pr-2">\r\n              <p><span style="text-align: justify !important;"></span>Su solicitud a <i>DISPOSITIVO</i> se está enviando</p>\r\n              <p style="text-align:center !important;"><i class="fa fa-toggle-off" aria-hidden="true" style="color:#F90101; font-size: 25px;"></i><br><i> apagando...</i></p>\r\n              <small>\r\n                <p class="text-muted"><i class="fa fa-home" aria-hidden="true"></i> Domo<i>Live</i></p>\r\n              </small>\r\n            </div>\r\n          </div>', NULL, b'1'),
	(5, '1', '          <div class="card  p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">\r\n            <div class="d-inline-flex ml-1">\r\n              <img src="assets/images/music.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">\r\n              <div class="float-left mt-1">\r\n                <span><small><strong>MÚSICA</strong></small></span> -\r\n                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>\r\n                    Hace 35 min.</small></span>\r\n              </div>\r\n            </div>\r\n            <hr>\r\n            <div class="p-2">\r\n              <p><span style="color:red; text-align: justify !important;">♫</span> Reproduciendo Like a Stone - Stereophonic a las 3:24 pm en sala.</p>\r\n              <small>\r\n                <p class="text-muted"><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>\r\n              </small>\r\n            </div>\r\n          </div>', NULL, b'1'),
	(6, '1', '          <div class="card text-center p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">\r\n            <div class="d-inline-flex ml-1">\r\n              <img src="assets/images/proximidad.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">\r\n              <div class="float-left mt-1">\r\n                <span><small><strong>PROXIMIDAD HOGAR</strong></small></span> -\r\n                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>\r\n                    Hace 35 min.</small></span>\r\n              </div>\r\n            </div>\r\n            <hr>\r\n            <div class="p-2">\r\n              <p><span style="color:green; text-align: justify !important;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>\r\n              <small>\r\n                <p class="text-muted"><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>\r\n              </small>\r\n            </div>\r\n          </div>', NULL, b'1'),
	(7, '1', '          <div class="card text-center p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">\r\n            <div class="d-inline-flex ml-1">\r\n              <img src="assets/images/regar.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">\r\n              <div class="float-left mt-1">\r\n                <span><small><strong>RIEGO PLANTAS</strong></small></span> -\r\n                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>\r\n                    Hace 35 min.</small></span>\r\n              </div>\r\n            </div>\r\n            <hr>\r\n            <p></p>\r\n            <p><span style="color:green;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>\r\n            <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>\r\n          </div>', NULL, b'1'),
	(8, '1', '          <div class="card text-center p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">\r\n            <div class="d-inline-flex ml-1">\r\n              <img src="assets/images/bocina.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">\r\n              <div class="float-left mt-1">\r\n                <span><small><strong>ALARMA GENERAL</strong></small></span> -\r\n                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>\r\n                    Hace 35 min.</small></span>\r\n              </div>\r\n            </div>\r\n            <hr>\r\n            <p></p>\r\n            <p><span style="color:green;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>\r\n            <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>\r\n          </div>', NULL, b'1'),
	(9, '1', '          <div class="card text-center p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">\r\n            <div class="d-inline-flex ml-1">\r\n              <img src="assets/images/seguridad.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">\r\n              <div class="float-left mt-1">\r\n                <span><small><strong>SEGURIDAD PUERTA</strong></small></span> -\r\n                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>\r\n                    Hace 35 min.</small></span>\r\n              </div>\r\n            </div>\r\n            <hr>\r\n            <p></p>\r\n            <p><span style="color:green;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>\r\n            <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>\r\n          </div>', NULL, b'1'),
	(10, '1', '          <div class="card text-center p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">\r\n            <div class="d-inline-flex ml-1">\r\n              <img src="assets/images/lampara.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">\r\n              <div class="float-left mt-1">\r\n                <span><small><strong>LUZ CUARTO</strong></small></span> -\r\n                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>\r\n                    Hace 35 min.</small></span>\r\n              </div>\r\n            </div>\r\n            <hr>\r\n            <p></p>\r\n            <p><span style="color:green;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>\r\n            <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>\r\n          </div>', NULL, b'1'),
	(11, '1', '          <div class="card text-center p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">\r\n            <div class="d-inline-flex ml-1">\r\n              <img src="assets/images/lampara.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">\r\n              <div class="float-left mt-1">\r\n                <span><small><strong>LUZ SALA</strong></small></span> -\r\n                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>\r\n                    Hace 35 min.</small></span>\r\n              </div>\r\n            </div>\r\n            <hr>\r\n            <p></p>\r\n            <p><span style="color:green;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>\r\n            <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>\r\n          </div>', NULL, b'1'),
	(12, '1', '          <div class="card text-center p-1 mt-2 p-2 shadow-sm d-flex" style="width: 100%;">\r\n            <div class="d-inline-flex ml-1">\r\n              <img src="assets/images/clima.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow">\r\n              <div class="float-left mt-1">\r\n                <span><small><strong>TEMPERATURA Y HUMERDAD</strong></small></span> -\r\n                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>\r\n                    Hace 2 min.</small></span>\r\n              </div>\r\n            </div>\r\n            <hr>\r\n            <p></p>\r\n            <span class="text-primary">\r\n              <h1><i class="fa fa-sun-o" aria-hidden="true"></i></h1>\r\n            </span>\r\n            <p><b>Buen día Erick</b></p>\r\n            <p><i>Hoy es <?php echo $fecha = strftime("%d de %B de %Y"); ?></i></p>\r\n          </div>', NULL, b'1'),
	(13, '1', '          <div class="card  p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">\r\n            <div class="d-inline-flex ml-1">\r\n              <img src="assets/images/music.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">\r\n              <div class="float-left mt-1">\r\n                <span><small><strong>LUZ</strong></small></span> -\r\n                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>\r\n                    Hace 35 min.</small></span>\r\n              </div>\r\n            </div>\r\n            <hr>\r\n            <div class="p-1 pl-2 pr-2">\r\n              <p><span style="text-align: justify !important;"></span>Buen día USUARIO, soy <i>DISPOSITIVO</i> de tu domicilio <i class="fa fa-smile-o" aria-hidden="true"></i>.</p>\r\n              <small>\r\n                <p class="text-muted"><i class="fa fa-home" aria-hidden="true"></i> Domo<i>Live</i></p>\r\n              </small>\r\n            </div>\r\n          </div>', NULL, b'1'),
	(14, '1', '          <div class="card  p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">\r\n            <div class="d-inline-flex ml-1">\r\n              <img src="assets/images/music.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">\r\n              <div class="float-left mt-1">\r\n                <span><small><strong>LUZ</strong></small></span> -\r\n                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>\r\n                    Hace 35 min.</small></span>\r\n              </div>\r\n            </div>\r\n            <hr>\r\n            <div class="p-1 pl-2 pr-2">\r\n              <p><span style="text-align: justify !important;"></span>El estado de <i>DISPOSITIVO</i> es:</p>\r\n              <p style="text-align:center !important;"><i class="fa fa-power-off" aria-hidden="true" style="color:COLORPHP;font-size: 25px;"></i><br>ESTADOPHP</p>\r\n              <small>\r\n                <p class=""><span style="color: #159F5C">Actuado:</span> FECHAPHP <i>a las</i> HORAPHP <i>por</i> <i class="fa fa-user-o" style="color:#4C8CF5" aria-hidden="true"></i> USUARIOPHP</p>\r\n              </small>\r\n              <small>\r\n                <p class="text-muted"><i class="fa fa-home" aria-hidden="true"></i> Domo<i>Live</i></p>\r\n              </small>\r\n            </div>\r\n          </div>', NULL, b'1'),
	(15, '1', '          <div class="card  p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">\r\n            <div class="d-inline-flex ml-1">\r\n              <img src="assets/images/music.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">\r\n              <div class="float-left mt-1">\r\n                <span><small><strong>LUZ</strong></small></span> -\r\n                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>\r\n                    Hace 35 min.</small></span>\r\n              </div>\r\n            </div>\r\n            <hr>\r\n            <div class="p-1 pl-2 pr-2">\r\n              <p><span style="text-align: justify !important;"></span>Su solicitud a <i>DISPOSITIVO</i> se está enviando</p>\r\n              <p style="text-align:center !important;"><i class="fa fa-toggle-off" aria-hidden="true" style="color:#F90101; font-size: 25px;"></i><br><i> apagando...</i></p>\r\n              <small>\r\n                <p class="text-muted"><i class="fa fa-home" aria-hidden="true"></i> Domo<i>Live</i></p>\r\n              </small>\r\n            </div>\r\n          </div>', NULL, b'1');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

-- Volcando estructura para tabla domobd.respuestas
DROP TABLE IF EXISTS `respuestas`;
CREATE TABLE IF NOT EXISTS `respuestas` (
  `idrespuesta` int(11) NOT NULL AUTO_INCREMENT,
  `iddispositivo` int(11) DEFAULT NULL,
  `idcomando` int(11) DEFAULT NULL,
  `contenido` longtext DEFAULT NULL,
  PRIMARY KEY (`idrespuesta`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla domobd.respuestas: ~4 rows (aproximadamente)
DELETE FROM `respuestas`;
/*!40000 ALTER TABLE `respuestas` DISABLE KEYS */;
INSERT INTO `respuestas` (`idrespuesta`, `iddispositivo`, `idcomando`, `contenido`) VALUES
	(1, 1, 1, '              <p><span style="text-align: justify !important;"></span>Buen día USUARIO, soy <i>DISPOSITIVO</i> de tu domicilio <i class="fa fa-smile-o" aria-hidden="true"></i>.</p>\r\n              <small>\r\n                <p class="text-muted"><i class="fa fa-home" aria-hidden="true"></i> Domo<i>Live</i></p>\r\n              </small>'),
	(2, 1, 2, '              <p><span style="text-align: justify !important;"></span>El estado de <i>DISPOSITIVO</i> es:</p>\r\n              <p style="text-align:center !important;"><i class="fa fa-power-off" aria-hidden="true" style="color:COLORPHP;font-size: 25px;"></i><br>ESTADOPHP</p>\r\n              <small>\r\n                <p class=""><span style="color: #159F5C">Actuado:</span> FECHAPHP <i>a las</i> HORAPHP <i>por</i> <i class="fa fa-user-o" style="color:#4C8CF5" aria-hidden="true"></i> USUARIOPHP</p>\r\n              </small>\r\n              <small>\r\n                <p class="text-muted"><i class="fa fa-home" aria-hidden="true"></i> Domo<i>Live</i></p>\r\n              </small>'),
	(3, 1, 3, '              <p><span style="text-align: justify !important;"></span>Su solicitud a <i>DISPOSITIVO</i> se está enviando</p>\r\n              <p style="text-align:center !important;"><i class="fa fa-toggle-on" aria-hidden="true" style="color:#49B164; font-size: 25px;"></i><br><i> encender...</i></p>\r\n              <small>\r\n                <p class="text-muted"><i class="fa fa-home" aria-hidden="true"></i> Domo<i>Live</i></p>\r\n              </small>'),
	(4, 1, 4, NULL);
/*!40000 ALTER TABLE `respuestas` ENABLE KEYS */;

-- Volcando estructura para tabla domobd.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `NomUser` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla domobd.usuarios: ~4 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`IdUsuario`, `Nombres`, `Apellidos`, `NomUser`, `Password`, `Correo`, `Img`) VALUES
	(1, 'Erick Martin', 'Leyva Díaz', 'Userley', '44196944', 'userley.diaz@gmail.com', 'img/team-1.jpg'),
	(2, 'Diana Karina', 'Monsalve Frias', 'Diamfri', '12345678', 'diamfri@hotmail.com', 'img/team-2.jpg'),
	(3, 'Jhostyn Farhyt', 'Bances Monsalve', 'Jfarhyt', '12345678', 'jfrahyt@gmail.com', 'img/team-3.jpg'),
	(4, 'Sophia Meylin', 'Leyva Monsalve', 'Smeylin', '12345678', 'smeylin@gmail.com', 'img/team-4.jpg');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
