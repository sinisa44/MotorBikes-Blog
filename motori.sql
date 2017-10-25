-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2017 at 12:57 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motori`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE `komentari` (
  `id` int(11) NOT NULL,
  `komentar` tinytext,
  `kategorija` varchar(45) DEFAULT NULL,
  `korisnik` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id`, `komentar`, `kategorija`, `korisnik`) VALUES
(1, 'sda', '2', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `korisnickoIme` varchar(45) NOT NULL,
  `sifra` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `korisnickoIme`, `sifra`, `email`, `role`) VALUES
(1, 'sinisa', 'dd5501ca0d6403a5510aae13235bd345', 'sinisa@sinisa.com', 'admin'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `motori`
--

CREATE TABLE `motori` (
  `id` int(11) NOT NULL,
  `naziv` varchar(125) NOT NULL,
  `text` longtext NOT NULL,
  `kategorija` varchar(45) NOT NULL,
  `slika` varchar(256) NOT NULL,
  `podnaslov` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motori`
--

INSERT INTO `motori` (`id`, `naziv`, `text`, `kategorija`, `slika`, `podnaslov`) VALUES
(2, 'Honda CBR', 'The CBR1000RR, known in some countries as the Fireblade, is a 998 cc (60.9 cu in) liquid-cooled inline four-cylinder sportbike, introduced by Honda in 2004 as the 7th generation of the CBR series of motorcycles that began with the CBR900RR in 1992.The Honda CBR1000RR was developed by the same team that was behind the MotoGP series.Many of the new technologies introduced in the Honda CBR600RR, a direct descendant of the RC211V, were used in the new CBR1000RR such as a lengthy swingarm, Unit Pro-Link rear suspension, and Dual Stage Fuel Injection System (DSFI).The CBR1000RR was awarded Cycle World\'s International Bike of the Year for 2008-09 by the world\'s moto-journal communities as well as journalists.[9] The 2009 CBR1000RR won the Best Sportbike of the Year Award in Motorcycle USA Best of 2009 Awards,[10] having also won the over 750 cc open sportbike class in 2008. The 2012 CBR1000RR won another Cycle World shootout, as well as a Motorcycle USA best street and track] comparisons.                                     Various teams have won the Suzuka 8 Hours endurance race nine times between 2004 and 2014.', 'racing', 'hondacbr.jpg', 'The Honda CBR models are a series of Honda sport bikes. With the exception of the single-cylinder CBR125R, CBR150R, CBR250R and CBR300R,'),
(3, 'Ducati', 'The Ducati 1098 is a sport bike made by Ducati from 2007 to 2009, in three versions, the 1098, 1098S, and 1098R. The 1098 was succeeded by the 1198 in 2009, though the 1098R remained in production that year.\r\nThe 1098 shares more design elements with the older 998 than with its predecessor the 999, such as horizontally placed headlights and a non-integrated exhaust system. Another carryover from its 916/998 heritage is the single-sided swingarm. This return to a more traditional Ducati design has been welcomed by many Ducati fans who criticized the design of the 999. The Ducati 1098/1098 S/1098 R were available in black, red, yellow and a special edition 1098s in the Italian national flag colours of red, white and green called Tricolore. The 1098 was designed by Ducati designer, Giandrea Fabbro.', 'racng', 'ducati.jpg', 'The 1299 Panigale S stands apart with its full LED headlights and carbon fibre mudguard, excelling with auxiliary handlebar buttons and forged wheels.'),
(4, 'Suzkui GSX-R', 'The Suzuki GSX-R is a series of sport bikes made by Japanese manufacturer Suzuki. Current models are the GSX-R125 and GSX-R150 which will be on sale in 2017; GSX-R600 which was manufactured from 1992 to 1993, and since 1997; the GSX-R750 since 1985; and the GSX-R1000 since 2001.Suzuki has released a up spec model GSX-R1000R; this R model comes with a Motion Track Brake System, Bi-directional quick shifter and launch control. Also on the R model, as reported by Sport Rider, are the same Showa Balance Free Front (BFF) fork and Balance Free Rear Cushion (BFRC Lite) shock that come standard on the 2016 Kawasaki ZX-10R.The single-cylinder 125 cc (7.6 cu in) GSX-R125 was introduced at the 2016 Intermot.[8] The single-cylinder 143.3 cc (8.74 cu in) GSX-R150 was officially unveiled in Indonesia at IMOS 2016', 'racing', 'suzuki.jpg', 'Now, the 2017 GSX-R1000 is redefining what it means to be The King of Sportbikes. Without question, the 2017 GSX-R1000R is The Ultimate GSX-R'),
(5, 'Chopper Bikes', 'A chopper is a type of custom motorcycle which emerged in California in the late 1950s. The chopper is perhaps the most extreme of all custom styles, often using radically modified steering angles and lengthened forks for a stretched-out appearance. They can be built from an original motorcycle which is modified (\"chopped\") or built from scratch. Some of the characteristic features of choppers are long front ends with extended forks often coupled with an increased rake angle, hardtail frames (frames without rear suspension), very tall \"ape hanger\" or very short \"drag\" handlebars, lengthened or stretched frames, and larger than stock front wheels. The \"sissy bar\", a set of tubes that connect the rear fender with the frame, and which are often extended several feet high, is a signature feature on many choppers.\r\n\r\nPerhaps the best known choppers are the two customized Harley-Davidsons, the \"Captain America\" and \"Billy Bike\", seen in the 1969 film Easy Rider', 'chopper', 'chopper1.jpg', 'A chopper is a type of custom motorcycle which emerged in California in the late 1950s. ... British bikes, particularly Triumphs, were also a popular motor for choppers early on'),
(6, 'MV Agusta', 'The Brutale series of motorcycles are manufactured by MV Agusta of Italy. Its style is classified as a naked bike and the series consists of several models powered by either inline-four or inline-three, dohc-engines in various capacities.\r\n\r\nStandard models include the Brutale 750S, Brutale 910S, Brutale 910R and new for 2008 Brutale 1078RR. In September 2009, MV Agusta revealed two new 2010 Brutale models - the 990R and 1090RR, and in 2011 the Brutale 920 model. In 2012 a new 3 cylinders Brutale 675 in an attempt to bring the company back to profitability. On November 2012 a bigger 3 cylinders model is introduced, the Brutale 800, based on the 675, in 2015 the Brutale 800 RR followed. In 2016 the Brutale 800 was newly brought to the market.', 'dragster', 'agusta.jpg', 'MV Agusta, originally Meccanica Verghera Agusta, is a motorcycle manufacturer founded on 12 February 1945 near Milan in Cascina Costa, Italy.'),
(7, 'Harley Davidson VRSC', 'Introduced in 2001 and produced until 2017,the VRSC muscle bike family bears little resemblance to Harley\'s more traditional lineup. Competing against Japanese and American muscle bikes in the upcoming muscle bike/power cruiser segment, the \"V-Rod\" makes use of an engine developed jointly with Porsche that, for the first time in Harley history, incorporates overhead cams and liquid cooling. The V-Rod is visually distinctive, easily identified by the 60-degree V-Twin engine, the radiator and the hydroformed frame members that support the round-topped air cleaner cover. The VRSC platform was also used for factory drag-racing motorcycles.\r\n\r\nIn 2008, Harley added the anti-lock braking system as a factory installed option on all VRSC models. Harley also increased the displacement of the stock engine from 1,130 to 1,250 cc (69 to 76 cu in), which had only previously been available from Screamin\' Eagle, and added a slipper clutch as standard equipment.\r\n\r\nVRSC models include:\r\n\r\nVRSCA: V-Rod ), VRSCAW: V-Rod, VRSCB: V-Rod , VRSCD: Night Rod, VRSCDX: Night Rod Special , VRSCSE: Screamin\' Eagle CVO V-Rod (2005), VRSCSE2: Screamin\' Eagle CVO V-Rod (2006), VRSCR: Street Rod , VRSCX: Screamin\' Eagle Tribute V-Rod (2007), VRSCF: V-Rod Muscle .', 'dragster', 'harley.jpg', 'The Harley-Davidson VRSC or V-Rod, was a line of V-twin muscle bikes, produced by Harley-Davidson from 2001 until 2017.'),
(8, 'Yamaha v max', 'The Yamaha V-Max, (called VMAX after 2009), is a cruiser motorcycle made by Yamaha since 1985, known for its powerful 70  V4 engine, shaft drive, and distinctive styling.The V-Max was designed by Atsushi Ichijo in a team led by Akira Araki with input from Ed Burke and John Reed.  Upon its release in 1985, the V-Max garnered instant critical acclaim and earned the title \"Bike of the Year\" from Cycle Guide.Sold both in Japan and abroad, the V-Max was sold with only minor modifications from the 1985 model year until the 2007 model year. The V-Max was noted for its quick acceleration, but was also criticized for its poor cornering ability and soft suspension. Until 2008, the original V-Max was offered for sale through the Star Motorcycles division of Yamaha Motorcycles. Apart from a minor freshening to the bike\'s specifications in 1993, when the bike gained a larger-diameter fork to minimize high-speed wobbling and drift, four-piston brake calipers, and other handling and safety related upgrades, the 2007 V-Max was almost the same as the original 1985 version.', 'dragster', 'vmax.jpg', 'The Yamaha V-Max, (called VMAX after 2009), is a cruiser motorcycle made by Yamaha since 1985, known for its powerful 70° V4 engine'),
(9, 'Kawasaki KLX450R', 'The Kawasaki KLX 450R is an off-road motorcycle made by Kawasaki Heavy Industries of Japan. It was first made available in 2008 and is still being produced today,relatively unchanged except for color schemes and graphics (sales in the US were discontinued after 2010). The KLX 450R is essentially a KX450F open-class motocross bike with added convenience features that make it more suitable for trail riding, green laning, enduro events and lower speed riding in general. This is due to the larger gas tank, 18 inch rear wheel, headlamp and even electric start. The KLX also features a motor retuned for easier low speed running, offering more torque and smoother throttle response at low engine speeds. Some of this is achieved by less aggressive engine internals and the \"low boy\" exhaust header pipe.\r\nThe KLX however is still a fast machine and a dedicated off roader that shares essentially the same motor and aluminum twin-spar frame of its motocross sibling. It is also renowned for its supple suspension feel and strong brakes.', 'cross', 'enduro.jpg', 'The Kawasaki KLX 450R is an off-road motorcycle made by Kawasaki Heavy Industries of Japan. It was first made available in 2008 and is still being produced');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slika` varchar(45) DEFAULT NULL,
  `text` varchar(125) DEFAULT NULL,
  `column_4` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slika`, `text`, `column_4`) VALUES
(1, 'poz1.jpg', 'Welcome to Blog about Motorbikes', NULL),
(2, 'poz2.jpg', '', NULL),
(3, 'poz3.jpg', 'Newest news from moto bike world', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentari`
--
ALTER TABLE `komentari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motori`
--
ALTER TABLE `motori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentari`
--
ALTER TABLE `komentari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `motori`
--
ALTER TABLE `motori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
