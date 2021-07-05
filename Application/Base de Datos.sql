-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2021 a las 04:07:22
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `personajesanime`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Cedula` varchar(12) NOT NULL,
  `Nacionalidad` varchar(150) NOT NULL,
  `Raza` varchar(200) NOT NULL,
  `Ocupacion` varchar(50) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Poder` varchar(300) NOT NULL,
  `Serie` varchar(200) NOT NULL,
  `Estado` varchar(100) NOT NULL,
  `Biografía` varchar(1000) NOT NULL,
  `img` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`Nombre`, `Apellido`, `Cedula`, `Nacionalidad`, `Raza`, `Ocupacion`, `Sexo`, `Fecha_Nacimiento`, `Poder`, `Serie`, `Estado`, `Biografía`, `img`, `id`) VALUES
('Shoto', 'Todoroki ', '00102852605', 'Japones', 'Humano', 'Estudiante', 'Masculino', '2021-06-17', 'Mitad Frío Mitad Caliente', 'My Hero Academy', 'Muerto', 'Es un estudiante de la Clase 1-A de la Academia U.A, donde ingresó a través de recomendaciones oficiales y está entrenando para convertirse en un Héroe.', 'avatar/00102852605.jpg', 1),
('Pikachu', '', '000000', 'Japonesa.', 'Ratón', 'Pokemon', 'Masculino', '2021-06-17', 'Electricidad estática', 'Pokemon', 'Vivo', 'Es un Pokémon de tipo eléctrico introducido en la primera generación. Es el Pokémon más conocido de la historia, mayormente por ser el acompañante del protagonista del anime, Ash Ketchum y la mascota ', 'avatar/000000.png', 5),
('Hinata', 'Hyūga', '0000001', 'País del Fuego', 'Humano', 'Genin', 'Femenino', '2021-12-27', 'Byakugan', 'Naruto Shippūden', 'Vivo', 'Es una kunoichi de rango Chūnin de Konohagakure y antigua heredera de la rama principal del Clan Hyūga,además de ser hija de Hiashi Hyūga, prima de Neji Hyūga y hermana mayor de Hanabi Hyūga.', 'avatar/0000001.jpg', 7),
('Meliodas', '', '1231', 'Japonesa', 'Demonio', 'Capitán de los Siete Pecados Capitales', 'Masculino', '2021-07-25', 'Full Counter', 'Nanatsu no taizai', 'Vivo', 'Es el líder de los Siete Pecados Capitales. Él es el protagonista masculino de la historia, su pecado es la Ira y su símbolo el Dragón, también es el propietario del Boar Hat.', 'avatar/1231.jpg', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Cedula` (`Cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
