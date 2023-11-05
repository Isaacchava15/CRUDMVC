
-- Base de datos: `progra`

CREATE DATABASE IF NOT EXISTS `progra` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `progra`;


DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE `alumnos` (
  `Matricula` varchar(20) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `cedula` int(20) NOT NULL,
  `telefono` int(20) NOT NULL,
  `familiar` varchar(20) NOT NULL,
  `telFamiliar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `alumnos` (`Matricula`, `Nombre`, `Apellido`, `cedula`, `telefono`, `familiar`, `telFamiliar`) VALUES
('A001', 'Edward', 'Arce', 60121481, 87895423, 'María Quesada', 22648744),
('A002', 'Isaac', 'Chavarria Hernandez', 117485541, 87878787, 'Carmen jimenez', 21478442),
('A003', 'Britanny ', 'Morales', 61548100, 88447444, 'Marco Morales', 22457167);


ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`Matricula`);
