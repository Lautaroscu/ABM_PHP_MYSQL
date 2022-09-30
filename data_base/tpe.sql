-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2022 a las 20:39:48
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulos`
--

CREATE TABLE `capitulos` (
  `id_capitulo` int(11) NOT NULL,
  `titulo_cap` varchar(45) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `numero_cap` int(11) NOT NULL,
  `id_temp_fk` int(11) NOT NULL,
  `image` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `capitulos`
--

INSERT INTO `capitulos` (`id_capitulo`, `titulo_cap`, `descripcion`, `numero_cap`, `id_temp_fk`, `image`) VALUES
(1, 'Principio del fin', 'Un profesor de química de escuela secundaria recurre a la venta de drogas para mantener a su familia', 1, 1, './htdocs/TpeWeb2/img/imagenoneone.jpg'),
(2, 'El gato en la bolsa', 'Luego del fracaso de su primer negocio de drogas, Walt y Jesse deben deshacerse de dos cadáveres. Sk', 2, 1, ''),
(3, 'Y la bolsa en el rio', 'Mientras Walt limpia el desorden que quedó tras su primer negocio de drogas, piensa en decirle a Sky', 3, 1, ''),
(4, 'Cancer', 'Al ser forzado a contar la verdad acerca de su enfermedad, Walt enfrenta el problema de cómo pagar u', 4, 1, ''),
(5, 'Materia gris', 'Skyler organiza una intervención para convencer a Walt de que acepte la generosa oferta de su excomp', 5, 1, ''),
(6, 'un loco puniado de nada', 'Los efectos secundarios y el costo del tratamiento crecen, y Walt exige que Jesse encuentre un reven', 6, 1, ''),
(7, 'Acuerdo no violento', 'Tras el encuentro cercano de Jesse con la muerte, Walt acepta producir más drogas para Tuco, mientra', 7, 1, ''),
(8, 'Siete con treinta y siete', 'Cuando preparan los planes para su gran negocio final de drogas, a Walt y Jesse les preocupa que a T', 1, 2, ''),
(9, 'A las brasas', 'Mientras la DEA pone en marcha la búsqueda de Tuco, Skyler recurre a Hank para que la ayude a encont', 2, 2, ''),
(10, 'Picadura de una abeja muerta', 'Walt intenta volver a acercarse a Skyler, y Jesse se encuentra sin hogar después de que sus padres l', 3, 2, ''),
(11, 'Abajo', 'Walt lucha por intentar salvar su relación con Skyler, y Jesse se queda sin hogar cuando sus padres ', 4, 2, ''),
(12, 'Rotura', 'Hank trata de recobrar la compostura tras su encuentro con Tuco. Mientras, Jesse forma una pandilla ', 5, 2, ''),
(13, 'Cucu', 'Jesse busca a los adictos que robaron las drogas a Skinny Pete, y Walt lucha por sostener su coartad', 6, 2, ''),
(14, 'Negro y Azul', 'La reputación de narco implacable de Jesse lleva a Walt a ampliar sus actividades; la incursión de H', 7, 2, ''),
(15, 'Llama a Saul!', 'El arresto de Badger obliga a Walt y Jesse a contratar a un abogado de mala reputación.\r\n\r\n', 8, 2, ''),
(16, 'Cuatro dias afuera', 'Preocupado porque no le queda mucha vida, Walt intenta cubrir las necesidades de su familia en una m', 9, 2, ''),
(17, 'Terminado', 'Al recibir buenas noticias sobre el tratamiento de cáncer, Walt acude a su cuñado, Hank, antes de ce', 10, 2, ''),
(18, 'Mandala', 'Skyler tiene conflictos por sus sentimientos hacia su jefe. La muerte de un vendedor callejero fuerz', 11, 2, ''),
(19, 'Phoenix', 'Walt intenta encaminar su vida y la de Jesse mientras se prepara para la cirugía y pretende esconder', 12, 2, ''),
(20, 'ABQ', 'Walt intenta encaminar su vida y la de Jesse mientras se prepara para la cirugía y pretende esconder', 13, 2, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporadas`
--

CREATE TABLE `temporadas` (
  `id_temp` int(11) NOT NULL,
  `titulo_temp` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `temporadas`
--

INSERT INTO `temporadas` (`id_temp`, `titulo_temp`) VALUES
(1, 'temporada 1'),
(2, 'temporada 2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  ADD PRIMARY KEY (`id_capitulo`),
  ADD KEY `id_temp_fk` (`id_temp_fk`);

--
-- Indices de la tabla `temporadas`
--
ALTER TABLE `temporadas`
  ADD PRIMARY KEY (`id_temp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  MODIFY `id_capitulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `temporadas`
--
ALTER TABLE `temporadas`
  MODIFY `id_temp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `capitulos`
--
ALTER TABLE `capitulos`
  ADD CONSTRAINT `capitulos_ibfk_1` FOREIGN KEY (`id_temp_fk`) REFERENCES `temporadas` (`id_temp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
