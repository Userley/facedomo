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

-- Volcando estructura para tabla domobd.dispositivos
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

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
