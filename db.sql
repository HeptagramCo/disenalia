-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 09-03-2015 a las 16:47:22
-- Versión del servidor: 5.5.38
-- Versión de PHP: 5.4.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `disenalia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
`id_category` int(11) NOT NULL,
  `name_category` varchar(50) NOT NULL,
  `description_category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `description_category`) VALUES
(8, 'PUBLICIDAD', 'Tag de publicidad'),
(11, 'PACKING', 'Tag de packing'),
(12, 'BRANDING', 'Tag de branding'),
(13, 'EDITORIAL', 'Tag de editorial'),
(14, 'TIPOGRAFÃA', 'Tag de tipografÃ­a'),
(15, 'RECURSOS', 'Tag de recursos'),
(16, 'DISEÃ‘O WEB', 'Tag de DiseÃ±o Web'),
(17, 'ILUSTRACIÃ“N', 'Tag de IlustraciÃ³n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE `comment` (
`id_comment` int(11) NOT NULL,
  `author_comment` varchar(255) NOT NULL,
  `email_comment` varchar(255) NOT NULL,
  `date_comment` varchar(250) NOT NULL,
  `comment` mediumtext NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comment`
--

INSERT INTO `comment` (`id_comment`, `author_comment`, `email_comment`, `date_comment`, `comment`, `id_post`) VALUES
(1, 'Ernesto Valenzuela Vargas', 'ernesto.valenzuela@heptagram.com.mx', '2015-03-08', 'Hola que tal muy buen articulo', 5),
(2, 'Jose Vargas', 'jose@hotmail.com', '2015-03-09', 'Hola que tal', 5),
(3, 'Ernesto Valenzuela', 'ernesto.valenzuela@heptagram.com.mx', '2015-03-09', 'Muy buen articulo', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
`id_post` int(11) NOT NULL,
  `title_post` varchar(255) NOT NULL,
  `img_post` varchar(255) NOT NULL,
  `date_post` varchar(100) NOT NULL,
  `prev_post` text NOT NULL,
  `post_post` longtext NOT NULL,
  `views_post` int(100) NOT NULL DEFAULT '0',
  `likes_post` int(100) NOT NULL DEFAULT '0',
  `id_category` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id_post`, `title_post`, `img_post`, `date_post`, `prev_post`, `post_post`, `views_post`, `likes_post`, `id_category`, `id_user`) VALUES
(5, 'Evento en lÃ­nea #CreativosAdobe con Josuedric, Typewear y Llegas Pacheco', 'http://x1fze2corou13fhas3750tzy.wpengine.netdna-cdn.com/wp-content/uploads/2015/02/evento-adobe-latinoamerica.jpg', '12/02/2015', '<p>Invitaci&oacute;n al evento que esta organizando<strong>&nbsp;Adobe Latinoamerica</strong>&nbsp;en conjunto con Conecta para el d&iacute;a de&nbsp;<strong>hoy&nbsp;<span id="IL_AD7" class="IL_AD">Miercoles</span>&nbsp;11 de Febrero</strong>, ser&aacute; un evento&nbsp;<span id="IL_AD4" class="IL_AD">en linea</span>&nbsp;y completamente gratuito que ser&aacute; de mucho inter&eacute;s para todos los dise&ntilde;adores,&nbsp;<span id="IL_AD1" class="IL_AD">creativos</span>&nbsp;e ilustradores, pues participaran incre&iacute;bles artistas quienes compartir&aacute;n<strong>&nbsp;tips del proceso creativo</strong>&nbsp;que llevan para realizar sus dise&ntilde;os.</p>', '<p><span class="pspan arial"><span class="ispan">&iquest;Te has preguntado como hacen los ilustradores m&aacute;s famosos para crear esas&nbsp;<span id="IL_AD2" class="IL_AD">im&aacute;genes</span>&nbsp;que se comparten miles de veces en las redes sociales ? Ahora Adobe Latam y Conecta traer&aacute;n para ti la respuesta con el<strong>&nbsp;evento en l&iacute;nea #CreativosAdobe</strong>&nbsp;donde&nbsp;<strong>Josuedric</strong>,&nbsp;<strong>Typewear</strong>&nbsp;y&nbsp;<a title="Graciosas ilustraciones de llegas Pacheco" href="http://www.frogx3.com/2013/12/27/ilustraciones-de-llegas-pacheco/"><strong>Llegas Pacheco</strong></a>&nbsp;te explicar&aacute;n el proceso creativo y la ejecuci&oacute;n con los mejores tips de ilustraci&oacute;n.</span></span><span class="pspan arial"><span class="ispan">&nbsp;</span></span></p>\r\n<p><span class="pspan arial"><span class="ispan">Mi&eacute;rcoles 11 de Febrero</span></span><span class="pspan arial"><span class="ispan">&nbsp;</span></span><span class="pspan arial"><span class="ispan">M&eacute;xico / Honduras / El&nbsp;<span id="IL_AD3" class="IL_AD">Salvador</span>&nbsp;/ Guatemala / Costa Rica / Nicaragua 8:00pm</span></span><span class="pspan arial"><span class="ispan">Colombia /Ecuador / Per&uacute; / Panam&aacute; / Cuba 9:00pm</span></span><span class="pspan arial"><span class="ispan">Venezuela 9: 30 pm</span></span><span class="pspan arial"><span class="ispan">Dominicana / Puerto Rico 10:00pm</span></span><span class="pspan arial"><span class="ispan">Chile / Paraguay / Argentina 11:00 pm</span></span><span class="pspan arial"><span class="ispan">Uruguay 00:00 am (jueves 12)</span></span><span class="pspan arial"><span class="ispan">Espa&ntilde;a 3:00 am (jueves 12)</span></span></p>\r\n<h3>Mi&eacute;rcoles 11 de Febrero</h3>\r\n<ul>\r\n<li>M&eacute;xico / Costa Rica / El&nbsp;Salvador&nbsp;8 pm</li>\r\n<li>Colombia / Per&uacute; 9 pm</li>\r\n<li>Venezuela 10 pm</li>\r\n<li>Chile / Argentina 11 pm</li>\r\n</ul>\r\n<h3>Jueves 12 de Febrero</h3>\r\n<ul>\r\n<li>Uruguay 12 am</li>\r\n<li>Espa&ntilde;a 3 am</li>\r\n</ul>\r\n<p>Enlace para<a title="Evento Adobe Latinoamerica" href="https://adobeformscentral.com/?f=DCGEa0LwN7qQOXTxWHzdGA" target="_blank" rel="nofollow">&nbsp;registrarte y participar en #CreativosAdobe</a></p>', 110, 180, 8, 2),
(6, 'Affinity Photo nueva alternativa a Photoshop gratis por un tiempo', 'http://x1fze2corou13fhas3750tzy.wpengine.netdna-cdn.com/wp-content/uploads/2015/02/Affinity-Photo.jpg', '12/02/2015', '<p>Por mucho tiempo Photoshop se ha posicionado como el programa de edici&oacute;n fotogr&aacute;fica ydise&ntilde;o&nbsp;digital profesional preferido por los profesionales y por aquellos que pueden pagar las<span id="IL_AD9" class="IL_AD">licencias</span>&nbsp;que&nbsp;<span id="IL_AD10" class="IL_AD">ofrece</span>&nbsp;Adobe para utilizar Photoshop.&nbsp;</p>', '<p class="first-text" data-textannotation-id="d21508640acd3306b420064d6aa60662">Sin embargo, Photoshop no es &uacute;nico desde hace unos a&ntilde;os ya exist&iacute;an alternativas muy interesantes como Gimp para Windows, Linux y Mac, o Pixelmator exclusivamente para Mac, pero ahora ha llegado&nbsp;<strong>una nueva alternativa a Photoshop</strong>&nbsp;de la mano de Serif empresa que hace unos meses lanzo&nbsp;<a title="Affinity, nueva aplicaci&oacute;n de dise&ntilde;o vectorial para Mac" href="http://www.frogx3.com/2014/08/01/affinity-nueva-aplicacion-de-diseno-vectorial-para-mac/">Affinity Designer una gran alternativa para Illustrator</a>.</p>\r\n<p class="first-text" data-textannotation-id="d21508640acd3306b420064d6aa60662"><strong>Serif lanzo Affinity Photo una aplicaci&oacute;n para Mac</strong>&nbsp;que tiene caracter&iacute;sticas similares a las de Photoshop pero a un precio mas accesible, aunque de momento es&nbsp;<span id="IL_AD2" class="IL_AD">gratuita</span>&nbsp;en su versi&oacute;n beta.</p>\r\n<p data-textannotation-id="42c76a43a051c0cac0af77e7c28f92d4"><strong>Affinity Photo</strong>&nbsp;ha sido creado&nbsp;especialmente para producir y&nbsp;<span id="IL_AD4" class="IL_AD">editar</span>&nbsp;<span id="IL_AD6" class="IL_AD">im&aacute;genes</span>. Serif&nbsp;afirma que es una versi&oacute;n mucho m&aacute;s r&aacute;pida y precisa que Photoshop, ya que fue desarrollada para usarse<span id="IL_AD5" class="IL_AD">en equipo</span>&nbsp;de computo&nbsp;modernos con&nbsp;tecnolog&iacute;a&nbsp;actual, entendemos por esto que se refieren a equipos de&nbsp;64bits.</p>\r\n<p data-textannotation-id="ec4df348be8e78bd7b669c22eb7db034">Affinity Photo&nbsp;ofrece&nbsp;un soporte de 16-bits por cada canal de edici&oacute;n y el historial de cambios es completamente reversible. Tambi&eacute;n&nbsp;ofrece&nbsp;soporte para&nbsp;<span id="IL_AD11" class="IL_AD">formatos</span>&nbsp;nativos de Photoshop y tambi&eacute;n para plugins Photoshop. Selecci&oacute;n de&nbsp;<span id="IL_AD7" class="IL_AD">detalles</span>, manejo de profundidad, estabilizaci&oacute;n de imagen y manipulaci&oacute;n de niveles son solo algunas de sus funciones.</p>\r\n<p><iframe src="http://player.vimeo.com/video/118802763?title=0&amp;byline=0&amp;portrait=0" width="800" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>\r\n<p data-textannotation-id="cc393f234294dd689f1fb8e587072eb9">Es una aplicaci&oacute;n exclusiva para&nbsp;Mac y su versi&oacute;n Beta ya est&aacute; disponible para&nbsp;<span id="IL_AD1" class="IL_AD">descargar gratis</span>en el enlace al final del post. La versi&oacute;n completa se distribuir&aacute; a trav&eacute;s de la&nbsp;<strong>Mac App Store con un costo de $50 d&oacute;lares</strong>&nbsp;con actualizaciones gratuitas por un periodo de dos a&ntilde;os, un precio mucho menor si sacamos cuentas de lo que pagar&iacute;amos por dos a&ntilde;os de suscripci&oacute;n en Adobe Creative Cloud. Serif no se ha olvidado de los usuarios de Windows y tiene entre sus planes el lanzamiento de&nbsp;<em>Affinity Photo para Windows</em>, pero a&uacute;n no tiene fecha establecida.</p>\r\n<p data-textannotation-id="c08f2f1271db62edaca5c838b3fe0089">Definitivamente es un software al que valdr&aacute; la pena darle una oportunidad, quiz&aacute;s se convierta en el preferido de los dise&ntilde;adores y obligue a Adobe a mejorar sus&nbsp;<span id="IL_AD12" class="IL_AD">precios</span>.</p>\r\n<p data-textannotation-id="c08f2f1271db62edaca5c838b3fe0089">Enlace para descargar&nbsp;<a title="Affinity Photo Beta" href="https://affinity.serif.com/en-gb/photo/" target="_blank" rel="nofollow">Affinity Photo Beta gratis</a></p>', 0, 7, 8, 2),
(7, 'Netflix producirÃ¡ la primera serie de Zelda con actores reales', 'http://x1fze2corou13fhas3750tzy.wpengine.netdna-cdn.com/wp-content/uploads/2015/02/zelda.jpg', '12/02/2015', '<p>Netflix ha comprado los derechos de&nbsp;<strong>The Legend of Zelda</strong>, la famosa saga de juegos de Nintendo con el fin de&nbsp;llevar la historia de&nbsp;<em>Link</em>&nbsp;a las pantallas de TV e Internet&nbsp;muy al estilo de series de fantas&iacute;a como&nbsp;<strong>Juego de Tronos</strong>.</p>', '<p>Netflix ha comprado los derechos de&nbsp;<strong>The Legend of Zelda</strong>, la famosa saga de juegos de Nintendo con el fin de&nbsp;llevar la historia de&nbsp;<em>Link</em>&nbsp;a las pantallas de TV e Internet&nbsp;muy al estilo de series de fantas&iacute;a como&nbsp;<strong>Juego de Tronos</strong>.</p>\r\n<p>Hasta el momento los pocos&nbsp;<span id="IL_AD5" class="IL_AD">detalles</span>&nbsp;que se conocen sobre la<strong>&nbsp;serie de&nbsp;The Legend of Zelda</strong>que producir&aacute;&nbsp;Netflix son que esta ser&iacute;a producida en conjunto con Nintendo para realizar esta serie de televisi&oacute;n, adem&aacute;s de que ya est&aacute;n en pl&aacute;ticas para comenzar a trabajar con actores reconocidos, pues esta serie ser&iacute;a realizada con actores reales.</p>\r\n<p>Esta no es la primera vez que las aventuras de Link y la&nbsp;<span id="IL_AD4" class="IL_AD">leyenda de Zelda</span>&nbsp;llegan a la pantalla de nuestros&nbsp;<span id="IL_AD2" class="IL_AD">televisores</span>, la primera vez fue en 1989 cuando fue lanzada una caricatura de Zelda que duro apenas unos 13 episodios.</p>\r\n<p>Aun no se sabe mucho, solo nos resta esperar para conocer aun mas&nbsp;detalles&nbsp;sobre una serie que seguro ser&aacute; un &eacute;xito entre los gamers fans de&nbsp;<span id="IL_AD1" class="IL_AD">The legend of Zelda</span>.</p>', 7, 17, 11, 2),
(8, 'Propuestas de diseÃ±o del dÃ³lar americano por Travis Purrington', 'http://x1fze2corou13fhas3750tzy.wpengine.netdna-cdn.com/wp-content/uploads/2015/02/propuesta-dolar-americano-Travis-P-1.jpg', '12/02/2015', '<p>Hoy vamos a&nbsp;<span id="IL_AD6" class="IL_AD">mencionar</span>&nbsp;un proyecto&nbsp;<span id="IL_AD8" class="IL_AD">que si</span>&nbsp;bien no es nuevo, si es muy interesante. Es un proyecto realizado por el&nbsp;<strong>dise&ntilde;ador Travis Purrington</strong>&nbsp;quien es originario de Zurich, Suiza. Su proyecto&nbsp;me llamo mucho la&nbsp;<span id="IL_AD7" class="IL_AD">atenci&oacute;n</span>&nbsp;y creo a ustedes igual les gustar&aacute;, lo que ha hecho Travis es una&nbsp;<strong>propuesta de dise&ntilde;o del d&oacute;lar americano</strong>, que deja a un lado a los personajes iconicos de la historia norteamerica para utilizar temas que representen los avances de la sociedad de aquel pa&iacute;s en la actualidad.</p>', '<blockquote>\r\n<p>Una propuesta de billetes modernos creado para los Estados Unidos de Am&eacute;rica dentro de&nbsp;mi&nbsp;tesis de maestr&iacute;a para el proyecto de dise&ntilde;o &ldquo;<em>WORTH: The&nbsp;<span id="IL_AD4" class="IL_AD">Aesthetics</span>&nbsp;of Global Interest</em>&rdquo; mientras asist&iacute;a a la Academia de Arte y Dise&ntilde;o/<span id="IL_AD2" class="IL_AD">Comunicaci&oacute;n</span>&nbsp;Visual (<em>Escuela de Dise&ntilde;o de Basilea</em>) en Suiza. Fue impreso para la&nbsp;<em>Diplom Exhibition</em>&nbsp;en 2011 en Basilea.</p>\r\n<p>Inspirado por el ambicioso proceso de redise&ntilde;o del Franco suizo (<em>la moneda se ha redise&ntilde;ado a fondo cada 20 a&ntilde;os por medio de&nbsp;<span id="IL_AD1" class="IL_AD">concursos</span></em>), El objetivo fue&nbsp;desarrollar un sistema iconogr&aacute;fico actualizado que refleje&nbsp;mejor&nbsp;los avances y la cultura dentro de la sociedad estadounidense.</p>\r\n<p>Esta serie en particular juega con los&nbsp;temas relacionados con&nbsp;el descubrimiento humano y se esfuerza por conectar los logros, la teor&iacute;a y las propiedades fundamentales de la vida.</p>\r\n</blockquote>\r\n<p><img class="alignnone size-full wp-image-39738" src="http://x1fze2corou13fhas3750tzy.wpengine.netdna-cdn.com/wp-content/uploads/2015/02/propuesta-dolar-americano-Travis-P-1.jpg" alt="propuesta dolar americano Travis P 1" width="850" height="415" /><img class="alignnone size-full wp-image-39739" src="http://x1fze2corou13fhas3750tzy.wpengine.netdna-cdn.com/wp-content/uploads/2015/02/propuesta-dolar-americano-Travis-P-2.jpg" alt="propuesta dolar americano Travis P 2" width="850" height="415" /><img class="alignnone size-full wp-image-39740" src="http://x1fze2corou13fhas3750tzy.wpengine.netdna-cdn.com/wp-content/uploads/2015/02/propuesta-dolar-americano-Travis-P-3.jpg" alt="propuesta dolar americano Travis P 3" width="850" height="955" /><img class="alignnone size-full wp-image-39741" src="http://x1fze2corou13fhas3750tzy.wpengine.netdna-cdn.com/wp-content/uploads/2015/02/propuesta-dolar-americano-Travis-P-4.jpg" alt="propuesta dolar americano Travis P 4" width="850" height="955" /><img class="alignnone size-full wp-image-39742" src="http://x1fze2corou13fhas3750tzy.wpengine.netdna-cdn.com/wp-content/uploads/2015/02/propuesta-dolar-americano-Travis-P-5.jpg" alt="propuesta dolar americano Travis P 5" width="850" height="955" /><img class="alignnone size-full wp-image-39743" src="http://x1fze2corou13fhas3750tzy.wpengine.netdna-cdn.com/wp-content/uploads/2015/02/propuesta-dolar-americano-Travis-P-6.jpg" alt="propuesta dolar americano Travis P 6" width="850" height="955" /><img class="alignnone size-full wp-image-39744" src="http://x1fze2corou13fhas3750tzy.wpengine.netdna-cdn.com/wp-content/uploads/2015/02/propuesta-dolar-americano-Travis-P-7.jpg" alt="propuesta dolar americano Travis P 7" width="850" height="955" /><img class="alignnone size-full wp-image-39745" src="http://x1fze2corou13fhas3750tzy.wpengine.netdna-cdn.com/wp-content/uploads/2015/02/propuesta-dolar-americano-Travis-P-8.jpg" alt="propuesta dolar americano Travis P 8" width="1400" height="797" /></p>\r\n<p>Enlace hacia el portafolio de&nbsp;<a title="Travis Purrington" href="http://www.travispurrington.com/211378/2317660/gallery/2014-usd-proposal" target="_blank" rel="nofollow">Travis Purrington</a></p>', 2, 9, 12, 2),
(9, 'Spiderman regresa a Marvel y confirma su apariciÃ³n en Civil War', 'http://x1fze2corou13fhas3750tzy.wpengine.netdna-cdn.com/wp-content/uploads/2015/02/spiderman.jpg', '12/02/2015', '<p>Ayer por la noche&nbsp;<strong>Marvel anunciaba un acuerdo con&nbsp;<span id="IL_AD3" class="IL_AD">Sony</span></strong>&nbsp;para recuperar parte de los derechos de&nbsp;<strong>Spider-Man</strong>, si bien Marvel es quien posee los derechos sobre el personaje,&nbsp;Sonyera el &uacute;nico&nbsp;<span id="IL_AD5" class="IL_AD">estudio</span>&nbsp;de cine que pod&iacute;a realizar&nbsp;<span id="IL_AD7" class="IL_AD">pel&iacute;culas</span>&nbsp;sobre el superh&eacute;roe algo que no hizo muy&nbsp;<span id="IL_AD1" class="IL_AD">bien que</span>&nbsp;digamos, tras el anuncio de Marvel se fortalecieron los rumores de la aparici&oacute;n de Spider-Man en&nbsp;<span id="IL_AD4" class="IL_AD">Civil</span>&nbsp;War la nueva&nbsp;<span id="IL_AD6" class="IL_AD">pel&iacute;cula</span>&nbsp;de El Capit&aacute;n Am&eacute;rica,&nbsp;pel&iacute;cula&nbsp;que se estrenar&aacute; en 2016.</p>', '<p>Bueno los rumores se han confirmado<strong>&nbsp;Spider-Man aparecer&aacute; en&nbsp;Civil&nbsp;Wa</strong>r, tambi&eacute;n se ha confirmado una&nbsp;<strong>nueva&nbsp;pel&iacute;cula&nbsp;de Spider-Man para 2017</strong>&nbsp;la cual ser&aacute; producida en conjunto entre Marvel y&nbsp;Sony. El solo hecho que Marvel se involucre en la nueva&nbsp;pel&iacute;cula&nbsp;del aragnido despierta el inter&eacute;s y la esperanza de ver por fin una&nbsp;pel&iacute;cula&nbsp;decente de Spider-Man.</p>\r\n<p>Todo esto no afectara los planes de&nbsp;Sony&nbsp;quien esta desarrollado la&nbsp;pel&iacute;cula&nbsp;The Sinister Six, el plan para esta&nbsp;pel&iacute;cula&nbsp;sigue en pie aunque posiblemente tenga un retraso en su&nbsp;<span id="IL_AD8" class="IL_AD">estreno</span>.</p>\r\n<p>Sin duda estas son excelentes noticias para todos los fans del universo de superh&eacute;roes de Marvel ahora solo nos queda esperar para conocer mas detalles de la aparici&oacute;n de Spider-Man en&nbsp;Civil&nbsp;War y la futura&nbsp;pel&iacute;cula&nbsp;del aragnido en 2017.</p>', 1, 16, 17, 2),
(10, 'Poster tercera temporada de House of Cards', 'http://x1fze2corou13fhas3750tzy.wpengine.netdna-cdn.com/wp-content/uploads/2015/02/Poster-House-of-Cards-Tercera-Temporada.jpg', '12/02/2015', '<p>Netflix present&oacute; el<strong>&nbsp;p&oacute;ster oficial de la tercera temporada de&nbsp;<span id="IL_AD2" class="IL_AD">House of</span>&nbsp;Cards</strong>&nbsp;que se estrenar&aacute; en exclusiva a trav&eacute;s&nbsp;de Netflix el&nbsp;<strong>pr&oacute;ximo 27 de Febrero</strong>, esta nueva temporada deHouse of&nbsp;Cards contara con 13 episodios y&nbsp;<strong>podr&aacute; ser vista en calidad 4k</strong>&nbsp;para los usuarios que paguen el paquete HD de Netflix.</p>', '<div id="post-39664" class="post">\r\n<div id="HOTWordsTxt" class="text">\r\n<p>House of&nbsp;Cards es una serie dram&aacute;tica creada&nbsp;por el productor ejecutivo nominado al Globo de Oro y al premio Emmy,&nbsp;<strong>Beau Willimon.</strong>&nbsp;House of&nbsp;Cards se ha convertido en un&nbsp;drama aclamado por la cr&iacute;tica, que cuenta con la participaci&oacute;n de la&nbsp;pareja ganadora del Globo de Oro Kevin Spacey y Robin Wright. La serie se basa en la lucha del&nbsp;presidente Underwood para garantizar su legado. Sin embargo, Claire Underwood quiere ser m&aacute;s que s&oacute;lo la Primera Dama. As&iacute;, la mayor amenaza que enfrentar&aacute;n ser&aacute; contender entre ellos mismos.</p>\r\n<p><img class="alignnone size-full wp-image-39665" src="http://x1fze2corou13fhas3750tzy.wpengine.netdna-cdn.com/wp-content/uploads/2015/02/Poster-House-of-Cards-Tercera-Temporada.jpg" alt="Poster-House-of-Cards-Tercera-Temporada" width="800" height="1183" /></p>\r\n<h3>Trailer&nbsp;tercera temporada de House of Cards</h3>\r\n<p><iframe src="https://www.youtube.com/embed/8I2bJajRaUw" width="712" height="360" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class="social_wids">&nbsp;</div>', 3, 7, 8, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
`id_user` int(11) NOT NULL,
  `real_name_user` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `avatar_user` varchar(255) NOT NULL,
  `type_user` varchar(55) NOT NULL,
  `twitter_user` varchar(255) NOT NULL,
  `facebook_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `real_name_user`, `name_user`, `password_user`, `avatar_user`, `type_user`, `twitter_user`, `facebook_user`, `email_user`) VALUES
(1, '', 'programminghack', '94d161f749f18733975b26771504ef69ef74533968cd0fcab720adc3beabd09c', '', 'admin', 'https://twitter.com/programminghack', 'https://www.facebook.com/programming.hack', 'programminghack@gmail.com'),
(2, 'Ernesto Valenzuela Vargas', 'admin', '94d161f749f18733975b26771504ef69ef74533968cd0fcab720adc3beabd09c', 'http://disena.dev:8888/media/img/profile/906776_316503078492701_1569587655_o.jpg', 'admin', 'https://twitter.com/programminghack', 'https://www.facebook.com/programming.hack', 'programminghack@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id_category`), ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`id_comment`), ADD KEY `id_post` (`id_post`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
 ADD PRIMARY KEY (`id_post`), ADD KEY `category` (`id_category`,`id_user`), ADD KEY `id_category` (`id_category`), ADD KEY `id_user` (`id_user`), ADD KEY `title_post` (`title_post`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`), ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `comment`
--
ALTER TABLE `comment`
MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comment`
--
ALTER TABLE `comment`
ADD CONSTRAINT `post` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `post`
--
ALTER TABLE `post`
ADD CONSTRAINT `id_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
