-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2023 at 04:05 PM
-- Server version: 5.7.41
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consulti_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `factor_clave_exito`
--

CREATE TABLE `factor_clave_exito` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `se_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factor_clave_exito`
--

INSERT INTO `factor_clave_exito` (`id`, `created_at`, `updated_at`, `nombre`, `se_id`) VALUES
(27, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'PLANEAMIENTO ESTRATÉGICO', 11),
(28, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'LOGÍSTICA Y OPERACIONES', 11),
(29, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'COMERCIALIZACIÓN', 11),
(30, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'RECURSOS HUMANOS', 11),
(31, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'SISTEMAS DE INFORMACIÓN', 11),
(32, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'GESTIÓN AMBIENTAL', 11),
(33, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'INVESTIGACIÓN Y DESARROLLO', 11),
(34, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'CONTABILIDAD Y FINANZAS', 11),
(35, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Producción', 12),
(36, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Logistica', 12),
(37, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Sistemas', 12);

-- --------------------------------------------------------

--
-- Table structure for table `factor_interno`
--

CREATE TABLE `factor_interno` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calificacion` double NOT NULL,
  `peso` int(11) NOT NULL,
  `final` double NOT NULL,
  `factor_clave_exito_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factor_interno`
--

INSERT INTO `factor_interno` (`id`, `created_at`, `updated_at`, `nombre`, `calificacion`, `peso`, `final`, `factor_clave_exito_id`) VALUES
(29, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'F1. PROCESO DE PLANEAMIENTO ESTRATÉGICO', 0, 10, 0, 27),
(30, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'F2. PLANIFICACIÓN Y PROCESO DE PRODUCCIÓN', 0, 5, 0, 28),
(31, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'F3. CAPACIDAD DEL PROCESO  DE PRODUCCIÓN', 0, 7, 0, 28),
(32, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'F4. APROVISIONAMIENTO', 0, 8, 0, 28),
(33, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'F5. MANEJO DE INVENTARIOS', 0, 9, 0, 28),
(34, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'F6. UBICACIÓN E INFRAESTRUCTURA', 0, 5, 0, 28),
(35, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'F7.  MERCADO NACIONAL', 0, 5, 0, 29),
(36, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'F8.  MERCADO EXPORTACIÓN:  PLAN DE EXPORTACIÓN', 0, 5, 0, 29),
(37, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'F9. MERCADO EXPORTACIÓN:  DISTRIBUCIÓN FÍSICA INTERNACIONAL', 0, 5, 0, 29),
(38, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'F10. RECURSOS HUMANOS', 0, 5, 0, 30),
(39, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'F11. CAPACITACIÓN Y PROMOCIÓN DEL PERSONAL', 0, 3, 0, 30),
(40, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'F12. CULTURA ORGANIZACIONAL', 0, 3, 0, 30),
(41, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'F13. SALUD Y SEGURIDAD INDUSTRIAL', 0, 3, 0, 30),
(42, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'F14. SISTEMAS INFORMACIÓN', 0, 5, 0, 31),
(43, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'F15. POLÍTICA AMBIENTAL DE LA EMPRESA', 0, 2, 0, 32),
(44, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'F16. INVESTIGACIÓN Y DESARROLLO', 0, 5, 0, 33),
(45, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'F17. MONITOREO DE COSTOS Y CONTABILIDAD', 0, 5, 0, 34),
(46, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'F18.  ADMINISTRACIÖN FINANCIERA', 0, 10, 0, 34),
(47, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Inventarios', 0, 10, 0, 35),
(48, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Materia Prima', 0, 10, 0, 35),
(49, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Operaciones', 0, 10, 0, 36),
(50, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Infraestructura', 0, 10, 0, 36),
(51, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Entregas', 0, 10, 0, 36),
(52, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Contabilidad', 0, 10, 0, 37),
(53, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Finanzas', 0, 40, 0, 37);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_16_080246_create_sector_economicos_table', 1),
(5, '2020_10_16_080355_create_preguntas_table', 1),
(6, '2020_10_16_080452_user__preguntas', 1),
(7, '2020_10_17_031427_create_factor_clave_exitos_table', 1),
(8, '2020_10_17_031621_create_factor_internos_table', 1),
(9, '2020_10_19_113917_sector_preguntas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preguntas`
--

CREATE TABLE `preguntas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso` int(11) NOT NULL,
  `sector_economico_id` bigint(20) UNSIGNED NOT NULL,
  `factor_interno_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preguntas`
--

INSERT INTO `preguntas` (`id`, `created_at`, `updated_at`, `nombre`, `peso`, `sector_economico_id`, `factor_interno_id`) VALUES
(34, '2020-10-31 01:50:32', '2020-11-17 00:08:46', 'La empresa ha realizado un proceso de planeamiento estratégico en los últimos dos años', 15, 11, 29),
(35, '2020-10-31 01:50:32', '2020-11-06 20:20:15', 'La empresa tiene una estrategia básica de negocios escrita y conocida por todos los que deben ejecutarla.', 20, 11, 29),
(36, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa tiene como política para la toma de decisiones involucrar a las personas responsables por su ejecución y cumplimiento.', 10, 11, 29),
(37, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'El planeamiento estratégico es el resultado de un trabajo en equipo y participan en su elaboración quienes son responsables por su ejecución y cumplimiento.', 10, 11, 29),
(38, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Se definen objetivos específicos, cuantificables y medibles, junto con un plazo de tiempo definido para su ejecución, por parte de las personas responsables del área o departamento involucrados.', 10, 11, 29),
(39, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Al planear se desarrolla un análisis DOFA (Debilidades, Oportunidades, Fortalezas y Amenazas) para la empresa y el sector donde ésta opera, con la adecuada participación de las áreas.', 5, 11, 29),
(40, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Se analiza con frecuencia el sector donde opera la empresa considerando entre otros factores: nuevos proveedores, nuevos clientes, nuevos competidores, nuevos productos competidores, nuevas tecnologías y nuevas regulaciones.', 5, 11, 29),
(41, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Al formular las estrategias competitivas, se utiliza la técnica de comparar la empresa con las mejores prácticas (\"benchmarking\").', 5, 11, 29),
(42, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa identifica su modelo de negocios de forma clara y lo transmite a los miembros de la organización', 5, 11, 29),
(43, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'El personal está activamente involucrado en el logro de los objetivos de la empresa, así como en los cambios que demanda la implementación de la estrategia.', 5, 11, 29),
(44, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Existe un sistema de rendición de cuentas periodico', 5, 11, 29),
(45, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'El planeamiento estratégico da las pautas para la asignación general de recursos en cada área del negocio de la empresa, con un seguimiento efectivo.', 5, 11, 29),
(46, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'El proceso de producción de la empresa es adecuado para fabricar productos con calidad y costos competitivos.', 20, 11, 30),
(47, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa tiene un programa escrito y detallado de adquisición de maquinaria y tecnología para ser ejecutado en el futuro previsible.', 15, 11, 30),
(48, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'El proceso de producción es suficientemente flexible para permitir cambios en los productos a ser fabricados, en función de satisfacer las necesidades de los clientes.', 10, 11, 30),
(49, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'El planeamiento de la producción está basado en pronósticos de ventas, desprendidos de Estudios de Mercado', 10, 11, 30),
(50, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa tiene medidas de control para el flujo de producción (desde la recepción de los materiales hasta la entrega de los productos terminados) para conocer el estado y avance de las órdenes de producción.', 10, 11, 30),
(51, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa evalúa con frecuencia la posibilidad de comprar materiales semiprocesados, así como producir aquellos que provienen de proveedores (integración vertical o subcontratación).', 5, 11, 30),
(52, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La maquinaria y la tecnología de la empresa le permiten fabricar productos competitivos, a nivel nacional, en calidad y precio.', 5, 11, 30),
(53, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa implementa buenas prácticas de manufactura', 5, 11, 30),
(54, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Existe un plan de mantenimiento preventivo', 5, 11, 30),
(55, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'El personal se capacita en buenas practicas de manufactura', 5, 11, 30),
(56, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Existe una programación y un plan de compras', 5, 11, 30),
(57, '2020-10-31 01:50:32', '2020-10-31 01:50:32', '2-Existe una programación y un plan de compras', 5, 11, 30),
(58, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa conoce la capacidad de producción de su maquinaria y equipo por cada línea de producción y de su recurso humano y define el rango deseado de su utilización.', 15, 11, 31),
(59, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa tiene planes de contingencia para ampliar su capacidad de producción más allá de su potencial actual para responder a una demanda superior a su capacidad de producción.', 15, 11, 31),
(60, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Se realiza un programa de mantenimiento preventivo a todos los equipos y maquinaria y los  resultados son debidamente documentados.', 15, 11, 31),
(61, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa mantiene un inventario de partes y repuestos claves para equipos críticos', 15, 11, 31),
(62, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Los operarios de los equipos participan en su mantenimiento.', 5, 11, 31),
(63, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa establece su programa de mantenimiento bajo el concepto del mantenimiento predictivo.', 5, 11, 31),
(64, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa establece su programa de mantenimiento bajo el concepto del mantenimiento total productivo (MTP).', 5, 11, 31),
(65, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa tiene seguro contra incendio y otras calamidades devastadoras, así como de un lucro cesante adecuado.', 5, 11, 31),
(66, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'El personal está activamente involucrado en el logro de los objetivos de la empresa, así como en los cambios que demanda la implementación de la estrategia.', 5, 11, 31),
(67, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Existe un sistema de rendición de cuentas periodico', 5, 11, 31),
(68, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'El planeamiento estratégico da las pautas para la asignación general de recursos en cada área del negocio de la empresa, con un seguimiento efectivo.', 5, 11, 31),
(69, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Es frecuente la programación de horas extras para cumplir con los pedidos', 5, 11, 31),
(70, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Existen criterios formales para la planificación de la compra de materias primas, materiales y repuestos (pronósticos de venta, disponibilidad, plazo de entrega, etc.).', 25, 11, 32),
(71, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Existe un sistema de abastecimiento flexible y eficiente que satisfaga las necesidades de la planta.', 25, 11, 32),
(72, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa tiene un plan de contingencia para  proveerse de materias primas críticas, tecnologías críticas y personal crítico que garanticen el normal cumplimiento de sus compromisos comerciales.', 25, 11, 32),
(73, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'En general, el criterio usado para seleccionar proveedores de materia prima y materiales es, en su orden, (1) calidad, (2) servicio, (3) precio y (4) condiciones de pago.', 25, 11, 32),
(82, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Como resultado de negociaciones con los proveedores se han programado las entregas de materias primas para  mantener el inventario en un nivel óptimo según necesidades.', 30, 11, 33),
(83, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Hay un nivel óptimo de inventario de materias primas, trabajo en proceso y producto terminado para reducir las pérdidas originadas en el mal manejo.', 30, 11, 33),
(84, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'El sistema de almacenamiento y administración de inventarios (materia prima,  suministros y producto terminado) garantiza adecuados niveles de rotación, uso y control de éstos.', 20, 11, 33),
(85, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Con periodicidad programada se compara el inventario físico de materia prima, materiales y producto terminado con el inventario llevado en el kardex (tarjetas o electrónico).', 20, 11, 33),
(86, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La ubicación de la planta es ideal para el abastecimiento de materias primas, mano de obra y para la distribución del producto terminado.', 35, 11, 34),
(87, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La infraestructura e instalaciones de la planta son adecuadas para atender sus necesidades actuales y  futuras.', 25, 11, 34),
(88, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La infraestructura de logística y acceso son adecuadas para atender sus necesidades actuales y  futuras.', 20, 11, 34),
(89, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La infraestructura e instalaciones del personal garantizan las necesidades actuales y  futuras del personal.', 20, 11, 34),
(90, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'El proceso de planeamiento genera un plan de mercadeo anual,  escrito y detallado, con responsables e índices de gestión claramente definidos.', 10, 11, 35),
(91, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa tiene claramente definido su mercado objetivo, sus estrategias de penetración, posicionamiento y comercialización. ', 10, 11, 35),
(92, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa conoce los segmentos del mercado en que compite, su participación, crecimiento y rentabilidad  y desarrolla estrategias comerciales escritas para cada uno de ellos.', 10, 11, 35),
(93, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa establece objetivos o cuotas de venta, de recaudo y de consecución de clientes nuevos a cada uno de sus vendedores y controla su cumplimiento.', 5, 11, 35),
(94, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa dispone de información de sus competidores (en cuanto a reputación, calidad de sus productos y servicios, fuerza de ventas y precios).', 5, 11, 35),
(95, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Las estrategias, objetivos y precios de la empresa están determinados con base en el conocimiento de sus costos, la oferta, la demanda y la situación competitiva.', 5, 11, 35),
(96, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'En los últimos dos años, los productos nuevos (menores de 3 años) han generado un porcentaje importante de las ventas y de las utilidades totales de la empresa.', 5, 11, 35),
(97, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Los recursos asignados al  mercadeo (material publicitario, promociones, etc.) son adecuados  y se usan de manera eficiente.  ', 5, 11, 35),
(98, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa dispone de un sistema de información y análisis que le permite obtener información actualizada sobre sus clientes, sus necesidades y los factores que guían sus decisiones de compra.', 5, 11, 35),
(99, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa evalúa periódicamente sus mecanismos de promoción, sistemas de información de mercados y seguimiento de tendencias. ', 5, 11, 35),
(100, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Existe una programación y un plan de compras', 5, 11, 35),
(102, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa tiene un plan anual de exportación, escrito y detallado.', 10, 11, 36),
(103, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa planea exportar un volumen importante en los próximos dos años.', 10, 11, 36),
(104, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa diseña sus productos para la exportación en forma diferente a como diseña para el mercado nacional.', 5, 11, 36),
(105, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa conoce y cumple las normas de calidad y de identificación (rotulación) que deben cumplir sus productos de exportación.', 5, 11, 36),
(106, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'El departamento responsable del desarrollo de nuevos productos cuenta con un presupuesto formal y adecuado, el equipo requerido y el personal calificado para realizar eficientemente su trabajo.  ', 5, 11, 36),
(107, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa tiene un procedimiento para investigar, analizar, elegir y explotar nuevos mercados de exportación. ', 5, 11, 36),
(108, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'En los últimos dos años, las exportaciones han generado un porcentaje importante de las ventas y de las utilidades totales de la empresa. ', 5, 11, 36),
(109, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa tiene un conocimiento claro de la competencia y del entorno competitivo en los mercados de exportación seleccionados.', 5, 11, 36),
(110, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa hace un seguimiento a sus exportaciones para medir el nivel de satisfacción del cliente y asegurar su recompra.', 5, 11, 36),
(111, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Se dispone de catálogos de productos, folletos publicitarios y especificaciones técnicas para el mercado de exportación (preferiblemente en inglés o en el idioma del mercado de destino).', 5, 11, 36),
(112, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa tiene un procedimiento para investigar, analizar, elegir y explotar nuevos mercados de exportación. ', 5, 11, 36),
(113, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'En los últimos dos años, las exportaciones han generado un porcentaje importante de las ventas y de las utilidades totales de la empresa. ', 5, 11, 36),
(114, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa conoce el manejo de la distribución física internacional, sus costos y su impacto en el precio de exportación.', 5, 11, 37),
(115, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'La empresa cumple con los requisitos de tiempo de entrega al cliente internacional.', 5, 11, 37),
(126, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa tiene un organigrama  escrito e implantado donde las líneas de autoridad y responsabilidad están claramente definidas.', 20, 11, 38),
(127, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa tiene un políticas y  manuales de procedimientos escritos, conocidos y acatados por todo el personal. ', 20, 11, 38),
(128, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Existe una junta directiva que lidere la empresa.', 20, 11, 38),
(129, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa cumple con todos los requisitos legales vigentes.  (ISS u otra EPS, SENA, cajas de compensación, reglamento de trabajo,  reglamento de  seguridad industrial, etc.)', 20, 11, 38),
(130, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa tiene por escrito los manuales de funciones, perfiles, planes de capacitación y carrera administrativa', 20, 11, 38),
(138, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa tiene un programa definido para la capacitación de todo su personal y al personal nuevo se le da una inducción a la empresa.', 50, 11, 39),
(139, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Las habilidades personales, las calificaciones, el deseo de superación, la creatividad y la productividad  son criterios claves para la remuneración y promoción del personal, así como para la definición de la escala salarial.', 25, 11, 39),
(140, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa tiene por escrito los manuales de funciones, perfiles, planes de capacitación y carrera administrativa', 25, 11, 39),
(150, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa ha establecido programas e incentivos para mejorar el clima laboral.', 25, 11, 40),
(151, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa realiza frecuentemente actividades sociales, recreativas y deportivas  y busca vincular a la familia del trabajador en estos eventos.', 25, 11, 40),
(152, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Existe una buena comunicación oral y escrita a través de los diferentes niveles de la compañía.', 25, 11, 40),
(153, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa  logra que el personal desarrolle un sentido de pertenencia.', 15, 11, 40),
(154, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'El trabajo en equipo es estimulado a través de todos los niveles de la empresa.', 10, 11, 40),
(162, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa tiene un programa de salud ocupacional implementado (plan de prevención de enfermedades ocupacionales, seguridad laboral, planes de emergencia, etc.).', 25, 11, 41),
(163, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La planta,  los procesos y los equipos están diseñados para procurar un ambiente seguro para el trabajador.', 25, 11, 41),
(164, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa tiene un programa de seguridad industrial para prevenir accidentes de trabajo, los documenta cuando ocurren y toma acciones preventivas y correctivas.', 25, 11, 41),
(165, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa lleva un registro de ausentismo ocasionado por enfermedades, accidentes de trabajo y otras causas.', 25, 11, 41),
(166, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'El sistema de información de la empresa está diseñado para satisfacer los requerimientos funcionales de información de la Gerencia General y de todos los departamentos en forma oportuna y confiable.', 25, 11, 42),
(167, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa está actualizada en materia de nuevos desarrollos en programas y equipos de cómputo  y tiene el personal capacitado para manejarlos.', 25, 11, 42),
(168, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'El diseño técnico y funcional del sistema responde a las necesidades de información de la empresa y es óptimo con relación al tiempo de proceso y seguridad. ', 10, 11, 42),
(169, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Se generan y archivan adecuadamente los documentos de soporte (ordenes de producción, entradas y salidas de almacén, comprobantes de egreso, recibos de caja, facturas, etc.) en las diferentes áreas de la empresa.', 10, 11, 42),
(170, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La captura de información genera operaciones simultáneas en las diferentes áreas de la empresa evitando la doble digitación de las transacciones en los diferentes sistemas.', 10, 11, 42),
(171, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Como política, la empresa realiza sistemáticamente copias de respaldo (back-ups) de sus archivos más importantes y los almacena en sitios seguros.  ', 5, 11, 42),
(172, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Existen procedimientos de contingencia, manuales o automatizados, en caso de perdidas de fluido eléctrico o fallas en el equipo de proceso.', 5, 11, 42),
(173, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La información generada por el sistema es confiable, oportuna, clara y útil y es usada para la toma de decisiones.', 5, 11, 42),
(174, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La Gerencia ha definido reportes que indiquen el tipo de datos requeridos para el proceso de toma de decisiones.', 5, 11, 42),
(178, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'En el diseño de la planta, la empresa tuvo en cuenta las regulaciones ambientales y el bienestar de sus trabajadores.', 20, 11, 43),
(179, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa conoce las normas ambientales que la controlan  y establece los procedimientos y procesos para cumplirlas.', 20, 11, 43),
(180, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La cultura y la estrategia de la compañía involucra aspectos, impactos y  riesgos ambientales.', 20, 11, 43),
(181, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa mide el desempeño ambiental frente a metas y estándares preacordados.', 10, 11, 43),
(182, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa considera las regulaciones ambientales cuando desarrolla nuevos productos y servicios, o realiza cambios en su infraestructura física.', 10, 11, 43),
(183, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Para la selección, instalación, operación y mantenimiento de los equipos se realizaron consideraciones ambientales, además de los aspectos técnicos y económicos.', 5, 11, 43),
(184, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Se definen y documentan las tareas, responsabilidades, competencias y procedimientos específicos que aseguren el cumplimiento de las normas ambientales, tanto internas como externas.', 5, 11, 43),
(185, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa trata de minimizar el consumo de energía, agua y materias primas contaminantes mediante la mejora de sus procesos productivos, el reciclaje, la sustitución de insumos, el mantenimiento preventivo y el uso de otras tecnologías.', 5, 11, 43),
(186, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa ha medido la cuantía del desperdicio, sabe  en qué etapa del proceso es generado y ha formulado planes para reducirlo.', 5, 11, 43),
(190, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La innovación es incorporada en los diferentes procesos de la empresa y se considera de vital importancia para su supervivencia.', 20, 11, 44),
(191, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Existe un proceso formal de  investigación de nuevas materias primas y procesos de producción.', 20, 11, 44),
(192, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa dispone de un programa de investigación y seguimiento a las tecnologías claves para sus diferentes negocios.', 15, 11, 44),
(193, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa tiene un programa escrito y detallado de adquisición de equipo, tecnología y modernización de sus procesos de producción.', 15, 11, 44),
(194, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Existe un Plan de mejoramiento continuo con indicadores y seguimiento', 10, 11, 44),
(195, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Cada año se incrementa el protafolio de productos como resultado de estudios de investigación de mercados', 10, 11, 44),
(196, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Un porcentaje de las ventas corresponde a productos desarrollados en los dos últimos años', 5, 11, 44),
(197, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Un número importante de empleados de producción participan de programas de re inducción, entrenamiento y capacitación', 5, 11, 44),
(202, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'El sistema de contabilidad y costos provee información confiable, suficiente, oportuna y precisa para la toma de decisiones.', 21, 11, 45),
(203, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La Gerencia General recibe los informes de resultados contables en los 10 primeros días del mes siguiente.', 21, 11, 45),
(204, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Periódicamente (quincenal o mensualmente) se preparan reportes de cuentas por cobrar, organizados por períodos de antigüedad.', 20, 11, 45),
(205, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa tiene un sistema establecido para contabilizar y rotar sus inventarios.', 5, 11, 45),
(206, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Existe un sistema claro para definir los costos de la empresa, dependiendo de las características de los productos y de los procesos.', 12, 11, 45),
(207, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Los productos de exportación se costean en forma diferente que los productos que van al mercado doméstico.', 11, 11, 45),
(208, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'El sistema de costos de la compañía puede costear rápidamente pedidos, para el mercado nacional o internacional, con base en datos confiables.', 10, 11, 45),
(214, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Se comparan mensualmente los resultados financieros con los presupuestos,  se analizan las variaciones y se toman acciones correctivas', 25, 11, 46),
(215, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa evalúa la utilidad de sus inversiones en equipo, otros activos fijos y en general de sus inversiones.', 40, 11, 46),
(216, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa tiene una planeación financiera formal  (presupuestos de ingresos y egresos, flujos de caja,  razones financieras, punto de equilibrio, etc.).', 5, 11, 46),
(217, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa conoce la rentabilidad de cada producto o línea de producto.', 5, 11, 46),
(218, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Los libros de actas, los registro de  socios, las reformas de escrituras, la  información para las superintendencias se encuentran al día y están debidamente archivados.', 5, 11, 46),
(219, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Se ha evaluado la inscripción de la empresa ante la Superintendencia de  Industria y Comercio, Cámara de Comercio y la DIAN a la luz de su objeto social.', 5, 11, 46),
(220, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'Se tiene  claramente definido el calendario tributario de la empresa, con fechas definidas de entrega de declaraciones y otros documentos.', 5, 11, 46),
(221, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa aplica los respectivos indicadores a sus declaraciones tributarias y se monitorean sus resultados.', 5, 11, 46),
(222, '2020-10-31 01:50:33', '2020-10-31 01:50:33', 'La empresa tiene una planificación tributaria definida,  conoce los montos aproximados por pagar en el período gravable de los diferentes impuestos, tasas y contribuciones.', 5, 11, 46),
(226, NULL, NULL, 'La empresa toma las precauciones suficientes para evitar la introducción de drogas ilícitas en su mercancía de exportación. ', 5, 11, 37),
(227, NULL, NULL, 'La empresa conoce sus  costos, los precios de su competencia internacional y las condiciones generales del sector que le permitan negociar con seguridad con sus clientes, canales de distribución y otros actores.', 5, 11, 37),
(228, NULL, NULL, 'La empresa ha participado en misiones comerciales a otros países.', 5, 11, 37),
(229, NULL, NULL, 'La empresa ha participado como observador en ferias internacionales (relacionadas con el negocio) en los últimos dos años.', 5, 11, 37),
(230, NULL, NULL, 'La empresa ha participado como expositor en ferias internacionales (relacionadas con el negocio) en los últimos dos años.', 5, 11, 37),
(231, NULL, NULL, 'La empresa tiene un sistema de investigación que le permita conocer el nivel de satisfacción del cliente, lo documenta y toma acciones con base en su análisis.', 5, 11, 35),
(232, NULL, NULL, 'La empresa dispone de catálogos y especificaciones técnicas de sus productos.', 5, 11, 35),
(233, NULL, NULL, 'La empresa posee una fuerza de  ventas capacitada, motivada y competente que apoya el cumplimiento de los objetivos de la empresa.', 5, 11, 35),
(234, NULL, NULL, 'La empresa ha desarrollado un sistema eficiente de distribución que permite llevar sus productos a sus clientes cuando y donde ellos los necesitan.', 5, 11, 35),
(235, NULL, NULL, 'La empresa prefiere contratar vendedores con vínculo laboral en lugar de independientes sin vínculo laboral.', 5, 11, 35),
(236, NULL, NULL, 'La empresa tiene un conocimiento claro de la competencia y del entorno competitivo en los mercados de exportación seleccionados.', 10, 11, 36),
(237, NULL, NULL, 'La empresa hace un seguimiento a sus exportaciones para medir el nivel de satisfacción del cliente y asegurar su recompra.', 5, 11, 36),
(238, NULL, NULL, 'Se dispone de catálogos de productos, folletos publicitarios y especificaciones técnicas para el mercado de exportación (preferiblemente en inglés o en el idioma del mercado de destino).', 5, 11, 36),
(239, NULL, NULL, '-La empresa hace un seguimiento a sus exportaciones para medir el nivel de satisfacción del cliente y asegurar su recompra.', 5, 11, 36),
(240, NULL, NULL, '-Se dispone de catálogos de productos, folletos publicitarios y especificaciones técnicas para el mercado de exportación (preferiblemente en inglés o en el idioma del mercado de destino).', 5, 11, 36),
(241, NULL, NULL, 'La empresa tiene personal adecuadamente familiarizado con sus productos y  procesos y  adicionalmente domina el inglés. ', 5, 11, 37),
(242, NULL, NULL, 'La Empresa ha enviado sus funcionarios a misiones en países de América latina\r\n', 5, 11, 37),
(243, NULL, NULL, 'La empresa ha programado ser expositor en ferias internacionales (relacionadas con el negocio) en los próximos dos años.\r\n', 5, 11, 37),
(244, NULL, NULL, 'La empresa ha programado participar como observador en ferias internacionales (relacionadas con el negocio) en los próximos dos años.', 5, 11, 37),
(245, NULL, NULL, 'La empresa ha participado en misiones comerciales a otros países.', 5, 11, 37),
(246, NULL, NULL, 'La empresa ha participado como observador en ferias internacionales (relacionadas con el negocio) en los últimos dos años.', 5, 11, 37),
(247, NULL, NULL, 'La empresa ha participado como expositor en ferias internacionales (relacionadas con el negocio) en los últimos dos años.\r\n', 5, 11, 37),
(248, NULL, NULL, 'La empresa tiene personal adecuadamente familiarizado con sus productos y  procesos y  adicionalmente domina el inglés. \r\n', 5, 11, 37),
(249, NULL, NULL, 'La Empresa ha enviado sus funcionarios a misiones en países de América latina', 5, 11, 37),
(250, NULL, NULL, 'La empresa ha programado ser expositor en ferias internacionales (relacionadas con el negocio) en los próximos dos años.', 5, 11, 37),
(251, NULL, NULL, 'La empresa ha programado participar como observador en ferias internacionales (relacionadas con el negocio) en los próximos dos años.\r\n', 10, 11, 37),
(252, NULL, NULL, 'La empresa ha programado participar en misiones comerciales a otros países en los próximos dos años.', 5, 11, 37),
(253, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta1', 25, 12, 47),
(254, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta2', 25, 12, 47),
(255, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta3', 25, 12, 47),
(256, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta4', 25, 12, 47),
(257, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta1-mp', 50, 12, 48),
(258, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta2-mp', 50, 12, 48),
(259, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta1-l', 25, 12, 49),
(260, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta2-l', 25, 12, 49),
(261, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta3-l', 25, 12, 49),
(262, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta4-l', 25, 12, 49),
(263, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta1-i', 50, 12, 50),
(264, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta2-i', 50, 12, 50),
(265, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta1-e', 25, 12, 51),
(266, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta2-e', 25, 12, 51),
(267, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta3-e', 25, 12, 51),
(268, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta4-e', 25, 12, 51),
(269, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta1-c', 25, 12, 52),
(270, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta2-c', 25, 12, 52),
(271, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta3-c', 25, 12, 52),
(272, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta4-c', 25, 12, 52),
(273, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta1-f', 50, 12, 53),
(274, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Pregunta2-f', 50, 12, 53);

-- --------------------------------------------------------

--
-- Table structure for table `sector_economico`
--

CREATE TABLE `sector_economico` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sector_economico`
--

INSERT INTO `sector_economico` (`id`, `created_at`, `updated_at`, `nombre`) VALUES
(11, '2020-10-31 01:50:32', '2020-10-31 01:50:32', 'Manufactura'),
(12, '2020-11-20 18:49:43', '2020-11-20 18:49:43', 'Calzado - prueba');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  `empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '0',
  `sector_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `remember_token`, `created_at`, `updated_at`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `empresa`, `cargo`, `activo`, `sector_id`) VALUES
(1, 'VwHbSkqL5fhXG7RBG8IeS0Vszw7iKg5E1dH1g3lzvj8F9EaeL1tpELsaCeId', NULL, NULL, 'Alejo', 'ajelof2@gmail.com', '2020-10-30 02:29:32', '$2y$10$Z42Wy32mrxNiNAPI1nKG1uZ4G9c.QtUj0RTC8UsnhPl0bD5AYJwse', 2, 'rerum', 'secretario', 0, 11),
(3, NULL, '2020-11-12 00:57:09', '2020-11-12 19:06:24', 'Jenny Felizzola', 'jeff.feliz57@gmail.com', NULL, '$2y$10$H013PphbJ.jUrRcFBjpgEeUl1lFpoKn/KxE4YobUUFCuddvaPHJ/S', 0, 'Madrid asociosados', 'Gerentes', 1, 11),
(4, NULL, '2020-11-14 16:09:58', '2020-11-17 00:09:47', 'Emerson Giraldo', 'emerson.giraldo@gmail.com', NULL, '$2y$10$Z42Wy32mrxNiNAPI1nKG1uZ4G9c.QtUj0RTC8UsnhPl0bD5AYJwse', 2, 'Consult-ING', 'Gerente', 1, 11),
(5, NULL, '2020-11-20 18:15:08', '2020-11-20 18:17:02', 'Jorge Restrepo', 'jrestrepo@tdea.edu.co', NULL, '$2y$10$Wqtliw4Q8LeD.KykQaecYuqwCiHeUvoSoyqAAeCMP.nsRRoAxtETS', 1, 'Tecnologico', 'Docente', 0, 11),
(7, NULL, '2020-11-20 19:15:19', '2020-11-20 19:15:19', 'Jorge Restrepo', 'gifatdea@gmail.com', NULL, '$2y$10$6qzhsSpJPFa/McpP25OsC.EGdttIoFMm/KjhOiASR9.dUO0j3kzvG', 0, '1', '2', 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user_preguntas`
--

CREATE TABLE `user_preguntas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `value` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pregunta_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_preguntas`
--

INSERT INTO `user_preguntas` (`id`, `created_at`, `updated_at`, `value`, `user_id`, `pregunta_id`) VALUES
(1, NULL, NULL, 30, 3, 34),
(2, NULL, NULL, 30, 3, 41),
(3, NULL, NULL, 30, 3, 35),
(4, NULL, NULL, 30, 3, 45),
(5, NULL, NULL, 30, 3, 44),
(6, NULL, NULL, 30, 3, 43),
(7, NULL, NULL, 30, 3, 42),
(8, NULL, NULL, 30, 3, 40),
(9, NULL, NULL, 30, 3, 39),
(10, NULL, NULL, 30, 3, 38),
(11, NULL, NULL, 30, 3, 37),
(12, NULL, NULL, 30, 3, 36),
(13, NULL, NULL, 30, 3, 53),
(14, NULL, NULL, 30, 3, 57),
(15, NULL, NULL, 30, 3, 56),
(16, NULL, NULL, 30, 3, 55),
(17, NULL, NULL, 30, 3, 54),
(18, NULL, NULL, 30, 3, 48),
(19, NULL, NULL, 30, 3, 52),
(20, NULL, NULL, 30, 3, 51),
(21, NULL, NULL, 30, 3, 50),
(22, NULL, NULL, 30, 3, 49),
(23, NULL, NULL, 30, 3, 47),
(24, NULL, NULL, 30, 3, 46),
(25, NULL, NULL, 30, 3, 65),
(26, NULL, NULL, 30, 3, 69),
(27, NULL, NULL, 30, 3, 68),
(28, NULL, NULL, 30, 3, 67),
(29, NULL, NULL, 30, 3, 66),
(30, NULL, NULL, 30, 3, 61),
(31, NULL, NULL, 30, 3, 64),
(32, NULL, NULL, 30, 3, 63),
(33, NULL, NULL, 30, 3, 62),
(34, NULL, NULL, 30, 3, 58),
(35, NULL, NULL, 30, 3, 60),
(36, NULL, NULL, 30, 3, 59),
(37, NULL, NULL, 30, 3, 70),
(38, NULL, NULL, 30, 3, 71),
(39, NULL, NULL, 30, 3, 72),
(40, NULL, NULL, 30, 3, 73),
(41, NULL, NULL, 30, 3, 85),
(42, NULL, NULL, 30, 3, 84),
(43, NULL, NULL, 30, 3, 83),
(44, NULL, NULL, 30, 3, 82),
(45, NULL, NULL, 30, 3, 86),
(46, NULL, NULL, 30, 3, 87),
(47, NULL, NULL, 30, 3, 88),
(48, NULL, NULL, 30, 3, 89),
(49, NULL, NULL, 30, 3, 231),
(50, NULL, NULL, 30, 3, 232),
(51, NULL, NULL, 30, 3, 233),
(52, NULL, NULL, 30, 3, 234),
(53, NULL, NULL, 30, 3, 235),
(54, NULL, NULL, 30, 3, 99),
(55, NULL, NULL, 30, 3, 100),
(56, NULL, NULL, 40, 3, 90),
(57, NULL, NULL, 30, 3, 98),
(58, NULL, NULL, 30, 3, 96),
(59, NULL, NULL, 30, 3, 94),
(60, NULL, NULL, 30, 3, 95),
(61, NULL, NULL, 30, 3, 93),
(62, NULL, NULL, 30, 3, 92),
(63, NULL, NULL, 30, 3, 97),
(64, NULL, NULL, 30, 3, 91),
(65, NULL, NULL, 30, 3, 238),
(66, NULL, NULL, 30, 3, 240),
(67, NULL, NULL, 30, 3, 237),
(68, NULL, NULL, 30, 3, 236),
(69, NULL, NULL, 30, 3, 113),
(70, NULL, NULL, 30, 3, 112),
(71, NULL, NULL, 30, 3, 111),
(72, NULL, NULL, 30, 3, 110),
(73, NULL, NULL, 30, 3, 109),
(74, NULL, NULL, 30, 3, 108),
(75, NULL, NULL, 30, 3, 107),
(76, NULL, NULL, 30, 3, 106),
(77, NULL, NULL, 30, 3, 105),
(78, NULL, NULL, 30, 3, 104),
(79, NULL, NULL, 30, 3, 103),
(80, NULL, NULL, 30, 3, 102),
(81, NULL, NULL, 30, 3, 239),
(82, NULL, NULL, 30, 3, 228),
(83, NULL, NULL, 30, 3, 229),
(84, NULL, NULL, 30, 3, 230),
(85, NULL, NULL, 30, 3, 226),
(86, NULL, NULL, 30, 3, 246),
(87, NULL, NULL, 30, 3, 241),
(88, NULL, NULL, 30, 3, 242),
(89, NULL, NULL, 30, 3, 243),
(90, NULL, NULL, 30, 3, 244),
(91, NULL, NULL, 30, 3, 245),
(92, NULL, NULL, 30, 3, 247),
(93, NULL, NULL, 30, 3, 248),
(94, NULL, NULL, 30, 3, 249),
(95, NULL, NULL, 30, 3, 250),
(96, NULL, NULL, 30, 3, 251),
(97, NULL, NULL, 30, 3, 227),
(98, NULL, NULL, 30, 3, 252),
(99, NULL, NULL, 30, 3, 114),
(100, NULL, NULL, 30, 3, 115),
(101, NULL, NULL, 30, 3, 126),
(102, NULL, NULL, 30, 3, 127),
(103, NULL, NULL, 30, 3, 128),
(104, NULL, NULL, 30, 3, 129),
(105, NULL, NULL, 30, 3, 130),
(106, NULL, NULL, 30, 3, 139),
(107, NULL, NULL, 30, 3, 138),
(108, NULL, NULL, 30, 3, 140),
(109, NULL, NULL, 30, 3, 153),
(110, NULL, NULL, 30, 3, 154),
(111, NULL, NULL, 30, 3, 152),
(112, NULL, NULL, 40, 3, 151),
(113, NULL, NULL, 30, 3, 150),
(114, NULL, NULL, 30, 3, 162),
(115, NULL, NULL, 30, 3, 163),
(116, NULL, NULL, 30, 3, 164),
(117, NULL, NULL, 30, 3, 165),
(118, NULL, NULL, 30, 3, 173),
(119, NULL, NULL, 30, 3, 166),
(120, NULL, NULL, 30, 3, 167),
(121, NULL, NULL, 30, 3, 168),
(122, NULL, NULL, 30, 3, 169),
(123, NULL, NULL, 30, 3, 170),
(124, NULL, NULL, 30, 3, 171),
(125, NULL, NULL, 30, 3, 172),
(126, NULL, NULL, 30, 3, 174),
(127, NULL, NULL, 30, 3, 185),
(128, NULL, NULL, 30, 3, 178),
(129, NULL, NULL, 30, 3, 179),
(130, NULL, NULL, 30, 3, 180),
(131, NULL, NULL, 30, 3, 181),
(132, NULL, NULL, 30, 3, 182),
(133, NULL, NULL, 30, 3, 183),
(134, NULL, NULL, 30, 3, 184),
(135, NULL, NULL, 30, 3, 186),
(136, NULL, NULL, 30, 3, 197),
(137, NULL, NULL, 30, 3, 191),
(138, NULL, NULL, 30, 3, 192),
(139, NULL, NULL, 30, 3, 193),
(140, NULL, NULL, 30, 3, 194),
(141, NULL, NULL, 30, 3, 195),
(142, NULL, NULL, 30, 3, 196),
(143, NULL, NULL, 30, 3, 190),
(144, NULL, NULL, 30, 3, 202),
(145, NULL, NULL, 30, 3, 203),
(146, NULL, NULL, 30, 3, 204),
(147, NULL, NULL, 30, 3, 206),
(148, NULL, NULL, 30, 3, 207),
(149, NULL, NULL, 30, 3, 208),
(150, NULL, NULL, 30, 3, 205),
(151, NULL, NULL, 30, 3, 217),
(152, NULL, NULL, 30, 3, 218),
(153, NULL, NULL, 30, 3, 214),
(154, NULL, NULL, 30, 3, 215),
(155, NULL, NULL, 30, 3, 216),
(156, NULL, NULL, 30, 3, 222),
(157, NULL, NULL, 30, 3, 221),
(158, NULL, NULL, 30, 3, 220),
(159, NULL, NULL, 30, 3, 219),
(160, NULL, NULL, 15, 4, 34),
(161, NULL, NULL, 15, 4, 41),
(162, NULL, NULL, 15, 4, 35),
(163, NULL, NULL, 15, 4, 45),
(164, NULL, NULL, 15, 4, 44),
(165, NULL, NULL, 15, 4, 43),
(166, NULL, NULL, 15, 4, 42),
(167, NULL, NULL, 15, 4, 40),
(168, NULL, NULL, 15, 4, 39),
(169, NULL, NULL, 15, 4, 38),
(170, NULL, NULL, 15, 4, 37),
(171, NULL, NULL, 15, 4, 36),
(172, NULL, NULL, 15, 4, 53),
(173, NULL, NULL, 15, 4, 57),
(174, NULL, NULL, 15, 4, 56),
(175, NULL, NULL, 15, 4, 55),
(176, NULL, NULL, 15, 4, 54),
(177, NULL, NULL, 15, 4, 48),
(178, NULL, NULL, 15, 4, 52),
(179, NULL, NULL, 15, 4, 51),
(180, NULL, NULL, 15, 4, 50),
(181, NULL, NULL, 15, 4, 49),
(182, NULL, NULL, 15, 4, 47),
(183, NULL, NULL, 15, 4, 46),
(184, NULL, NULL, 15, 4, 65),
(185, NULL, NULL, 15, 4, 69),
(186, NULL, NULL, 15, 4, 68),
(187, NULL, NULL, 15, 4, 67),
(188, NULL, NULL, 15, 4, 66),
(189, NULL, NULL, 5, 4, 61),
(190, NULL, NULL, 15, 4, 64),
(191, NULL, NULL, 15, 4, 63),
(192, NULL, NULL, 5, 4, 62),
(193, NULL, NULL, 5, 4, 58),
(194, NULL, NULL, 5, 4, 60),
(195, NULL, NULL, 5, 4, 59),
(196, NULL, NULL, 5, 4, 70),
(197, NULL, NULL, 5, 4, 71),
(198, NULL, NULL, 5, 4, 72),
(199, NULL, NULL, 5, 4, 73),
(200, NULL, NULL, 5, 4, 85),
(201, NULL, NULL, 5, 4, 84),
(202, NULL, NULL, 5, 4, 83),
(203, NULL, NULL, 5, 4, 82),
(204, NULL, NULL, 5, 4, 86),
(205, NULL, NULL, 5, 4, 87),
(206, NULL, NULL, 5, 4, 88),
(207, NULL, NULL, 5, 4, 89),
(208, NULL, NULL, 5, 4, 231),
(209, NULL, NULL, 8, 4, 232),
(210, NULL, NULL, 8, 4, 233),
(211, NULL, NULL, 8, 4, 234),
(212, NULL, NULL, 8, 4, 235),
(213, NULL, NULL, 8, 4, 99),
(214, NULL, NULL, 8, 4, 100),
(215, NULL, NULL, 8, 4, 90),
(216, NULL, NULL, 8, 4, 98),
(217, NULL, NULL, 8, 4, 96),
(218, NULL, NULL, 8, 4, 94),
(219, NULL, NULL, 8, 4, 95),
(220, NULL, NULL, 8, 4, 93),
(221, NULL, NULL, 8, 4, 92),
(222, NULL, NULL, 8, 4, 97),
(223, NULL, NULL, 8, 4, 91),
(224, NULL, NULL, 8, 4, 238),
(225, NULL, NULL, 9, 4, 240),
(226, NULL, NULL, 9, 4, 237),
(227, NULL, NULL, 9, 4, 236),
(228, NULL, NULL, 9, 4, 113),
(229, NULL, NULL, 9, 4, 112),
(230, NULL, NULL, 9, 4, 111),
(231, NULL, NULL, 9, 4, 110),
(232, NULL, NULL, 9, 4, 109),
(233, NULL, NULL, 9, 4, 108),
(234, NULL, NULL, 9, 4, 107),
(235, NULL, NULL, 9, 4, 106),
(236, NULL, NULL, 9, 4, 105),
(237, NULL, NULL, 9, 4, 104),
(238, NULL, NULL, 9, 4, 103),
(239, NULL, NULL, 9, 4, 102),
(240, NULL, NULL, 9, 4, 239),
(241, NULL, NULL, 5, 4, 228),
(242, NULL, NULL, 5, 4, 229),
(243, NULL, NULL, 5, 4, 230),
(244, NULL, NULL, 5, 4, 226),
(245, NULL, NULL, 5, 4, 246),
(246, NULL, NULL, 5, 4, 241),
(247, NULL, NULL, 5, 4, 242),
(248, NULL, NULL, 5, 4, 243),
(249, NULL, NULL, 5, 4, 244),
(250, NULL, NULL, 5, 4, 245),
(251, NULL, NULL, 5, 4, 247),
(252, NULL, NULL, 5, 4, 248),
(253, NULL, NULL, 5, 4, 249),
(254, NULL, NULL, 5, 4, 250),
(255, NULL, NULL, 5, 4, 251),
(256, NULL, NULL, 5, 4, 227),
(257, NULL, NULL, 5, 4, 252),
(258, NULL, NULL, 5, 4, 114),
(259, NULL, NULL, 5, 4, 115),
(260, NULL, NULL, 4, 4, 126),
(261, NULL, NULL, 4, 4, 127),
(262, NULL, NULL, 4, 4, 128),
(263, NULL, NULL, 4, 4, 129),
(264, NULL, NULL, 4, 4, 130),
(265, NULL, NULL, 4, 4, 139),
(266, NULL, NULL, 4, 4, 138),
(267, NULL, NULL, 4, 4, 140),
(268, NULL, NULL, 4, 4, 153),
(269, NULL, NULL, 4, 4, 154),
(270, NULL, NULL, 4, 4, 152),
(271, NULL, NULL, 4, 4, 151),
(272, NULL, NULL, 4, 4, 150),
(273, NULL, NULL, 4, 4, 162),
(274, NULL, NULL, 4, 4, 163),
(275, NULL, NULL, 4, 4, 164),
(276, NULL, NULL, 4, 4, 165),
(277, NULL, NULL, 4, 4, 173),
(278, NULL, NULL, 3, 4, 166),
(279, NULL, NULL, 3, 4, 167),
(280, NULL, NULL, 3, 4, 168),
(281, NULL, NULL, 3, 4, 169),
(282, NULL, NULL, 3, 4, 170),
(283, NULL, NULL, 3, 4, 171),
(284, NULL, NULL, 3, 4, 172),
(285, NULL, NULL, 3, 4, 174),
(286, NULL, NULL, 3, 4, 185),
(287, NULL, NULL, 3, 4, 178),
(288, NULL, NULL, 3, 4, 179),
(289, NULL, NULL, 3, 4, 180),
(290, NULL, NULL, 3, 4, 181),
(291, NULL, NULL, 3, 4, 182),
(292, NULL, NULL, 3, 4, 183),
(293, NULL, NULL, 7, 4, 184),
(294, NULL, NULL, 7, 4, 186),
(295, NULL, NULL, 7, 4, 197),
(296, NULL, NULL, 7, 4, 191),
(297, NULL, NULL, 7, 4, 192),
(298, NULL, NULL, 7, 4, 193),
(299, NULL, NULL, 7, 4, 194),
(300, NULL, NULL, 7, 4, 195),
(301, NULL, NULL, 7, 4, 196),
(302, NULL, NULL, 7, 4, 190),
(303, NULL, NULL, 7, 4, 202),
(304, NULL, NULL, 7, 4, 203),
(305, NULL, NULL, 7, 4, 204),
(306, NULL, NULL, 7, 4, 206),
(307, NULL, NULL, 7, 4, 207),
(308, NULL, NULL, 7, 4, 208),
(309, NULL, NULL, 7, 4, 205),
(310, NULL, NULL, 7, 4, 217),
(311, NULL, NULL, 7, 4, 218),
(312, NULL, NULL, 7, 4, 214),
(313, NULL, NULL, 7, 4, 215),
(314, NULL, NULL, 7, 4, 216),
(315, NULL, NULL, 7, 4, 222),
(316, NULL, NULL, 7, 4, 221),
(317, NULL, NULL, 6, 4, 220),
(318, NULL, NULL, 6, 4, 219);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `factor_clave_exito`
--
ALTER TABLE `factor_clave_exito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `preguntas_sector_economico_id_foreign` (`se_id`);

--
-- Indexes for table `factor_interno`
--
ALTER TABLE `factor_interno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `factor_interno_factor_clave_exito_id_foreign` (`factor_clave_exito_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `preguntas_factor_interno_id_foreign` (`factor_interno_id`),
  ADD KEY `preguntas_sector_economico_id_foreign` (`sector_economico_id`);

--
-- Indexes for table `sector_economico`
--
ALTER TABLE `sector_economico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_sector_id_foreign` (`sector_id`);

--
-- Indexes for table `user_preguntas`
--
ALTER TABLE `user_preguntas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_preguntas_user_id_foreign` (`user_id`),
  ADD KEY `user_preguntas_pregunta_id_foreign` (`pregunta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `factor_clave_exito`
--
ALTER TABLE `factor_clave_exito`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `factor_interno`
--
ALTER TABLE `factor_interno`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;

--
-- AUTO_INCREMENT for table `sector_economico`
--
ALTER TABLE `sector_economico`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_preguntas`
--
ALTER TABLE `user_preguntas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `factor_clave_exito`
--
ALTER TABLE `factor_clave_exito`
  ADD CONSTRAINT `preguntas_sector_economico_id_foreign` FOREIGN KEY (`se_id`) REFERENCES `sector_economico` (`id`);

--
-- Constraints for table `factor_interno`
--
ALTER TABLE `factor_interno`
  ADD CONSTRAINT `factor_interno_factor_clave_exito_id_foreign` FOREIGN KEY (`factor_clave_exito_id`) REFERENCES `factor_clave_exito` (`id`);

--
-- Constraints for table `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `SE` FOREIGN KEY (`sector_economico_id`) REFERENCES `sector_economico` (`id`),
  ADD CONSTRAINT `fi` FOREIGN KEY (`factor_interno_id`) REFERENCES `factor_interno` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_sector_id_foreign` FOREIGN KEY (`sector_id`) REFERENCES `sector_economico` (`id`);

--
-- Constraints for table `user_preguntas`
--
ALTER TABLE `user_preguntas`
  ADD CONSTRAINT `user_preguntas_pregunta_id_foreign` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`),
  ADD CONSTRAINT `user_preguntas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
