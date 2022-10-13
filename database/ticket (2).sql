-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 13 oct. 2022 à 13:14
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ticket`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(6) NOT NULL,
  `nom_admin` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass_admin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id_admin`, `nom_admin`, `email`, `pass_admin`) VALUES
(1, 'super', 'super@super.tg', 'super'),
(2, 's', 's@s.s', 's'),
(3, 'a', 'a@a.a', 'a'),
(4, 'desire', 'desire@gmail.com', 'desire');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `id_ticket` int(6) NOT NULL,
  `type_demande` varchar(255) DEFAULT NULL,
  `equipement` varchar(255) DEFAULT NULL,
  `nombre` int(6) DEFAULT NULL,
  `site_demande` varchar(255) DEFAULT NULL,
  `add_by` varchar(255) DEFAULT NULL,
  `notified` int(11) NOT NULL,
  `date_envoi` datetime DEFAULT NULL,
  `date_env` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id_ticket`, `type_demande`, `equipement`, `nombre`, `site_demande`, `add_by`, `notified`, `date_envoi`, `date_env`) VALUES
(100, 'HS', 'NA', 0, 'TEST', 'T', 0, '2022-10-12 16:07:55', '2022-10-12'),
(101, 'HS', 'NA', 0, 'LOME', '0', 0, '2022-10-12 16:14:47', '2022-10-12'),
(1005, 'HS', 'NA', 0, 'LOME', '0', 0, '2022-10-12 16:18:37', '2022-10-12');

-- --------------------------------------------------------

--
-- Structure de la table `site`
--

CREATE TABLE `site` (
  `site_id` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `typologie` varchar(255) NOT NULL,
  `classification` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `distance` varchar(255) NOT NULL,
  `sla` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `site`
--

INSERT INTO `site` (`site_id`, `nom`, `typologie`, `classification`, `zone`, `distance`, `sla`) VALUES
('LOM-', 'DF', 'GE', 'BRONZE', 'CENTRALE-B', '25', '2'),
('LOM-008', 'TEST', 'SOLAIRE', 'BRONZE', 'LOME-E', '25', '2');

-- --------------------------------------------------------

--
-- Structure de la table `superviseur`
--

CREATE TABLE `superviseur` (
  `id_sup` int(11) NOT NULL,
  `nom_sup` varchar(35) NOT NULL,
  `email_sup` varchar(35) NOT NULL,
  `pass_sup` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `superviseur`
--

INSERT INTO `superviseur` (`id_sup`, `nom_sup`, `email_sup`, `pass_sup`) VALUES
(1, 'sup', 'sup@sup.sup', 'sup'),
(2, 'test', 'test@test.test', 'test'),
(3, 't', 'te@te.t', 't');

-- --------------------------------------------------------

--
-- Structure de la table `traiter`
--

CREATE TABLE `traiter` (
  `id_ticket` int(11) NOT NULL,
  `site` varchar(255) NOT NULL,
  `type_demande` varchar(255) NOT NULL,
  `equipement` varchar(255) NOT NULL,
  `nombre` int(11) NOT NULL,
  `add_by` varchar(255) NOT NULL,
  `notified` int(11) NOT NULL,
  `date_envoi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `traiter`
--

INSERT INTO `traiter` (`id_ticket`, `site`, `type_demande`, `equipement`, `nombre`, `add_by`, `notified`, `date_envoi`) VALUES
(1002, 'LOM', 'HS', 'NA', 0, '0', 0, '2022-10-12'),
(1003, 'LOME', 'HS', '0', 0, '0', 0, '2022-10-12');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(6) NOT NULL,
  `nom_user` varchar(255) DEFAULT NULL,
  `email_user` varchar(255) DEFAULT NULL,
  `pass_user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom_user`, `email_user`, `pass_user`) VALUES
(2, 'test', 'test@test.tg', 'test'),
(7, 'rest', 'rest@rest.tg', 'rest'),
(10, 'super', 'super@super.tg', 'super'),
(11, 'desire', 'desire@gmail.com', 'desire');

-- --------------------------------------------------------

--
-- Structure de la table `zone_nom_1`
--

CREATE TABLE `zone_nom_1` (
  `nom` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `zone_nom_1`
--

INSERT INTO `zone_nom_1` (`nom`) VALUES
('Nom'),
('BAGRE'),
('BARKOSSI'),
('BIANKOURI-MOOV'),
('BOMBOUAKA'),
('BORGOU'),
('BOULOUGOU'),
('BOUMONGA'),
('BOURJOUARE'),
('CINKASSE'),
('CINKASSE-BOSCO'),
('CINKASSE-BOUSSONGA'),
('CINKASSE-KOMOLOQS'),
('DAPAONG'),
('DAPAONG-COLLINE'),
('DAPAONG-LAMIREL'),
('DAPAONG-ZONGO'),
('DJAKPAGA-MOOV'),
('DJANGALE'),
('DONTOUGOU'),
('GALANGACHI'),
('GANDO'),
('GOULOUNGOUSSI'),
('KORBONGOU'),
('KOUDOUGOU'),
('KOUMBOG'),
('KOUMONGOU'),
('KOUMONGOUKAN'),
('KOUNDJOUARE'),
('KOUNTONGUE'),
('LOKPANO'),
('LOTOGOU'),
('MALAGOU'),
('MANDOURI'),
('MANGO'),
('MANGO-DOUANE'),
('MOGOU'),
('NADJOUNDJI'),
('NADOTI'),
('NAKI-EST'),
('NAKI-OUEST'),
('NALI'),
('NAMOUDJOGA'),
('NANERGOU'),
('NANGBENI'),
('NANO'),
('NASSABLE'),
('NIOUPOURMA'),
('PANA'),
('PANSIERI'),
('PAPRI'),
('PONIO'),
('SABIEBOU'),
('SADORI'),
('SAMNABA'),
('SISSIAK'),
('TAMBONGA'),
('TAKPAMBA'),
('TAKPAPIENI'),
('TALONGUE'),
('TAMONGUE'),
('TAMPIALIM'),
('TANDJOUARE'),
('TCHAMONGA'),
('TCHANAGA'),
('TCHANWIEKOU'),
('TIGOU'),
('TIMBOU'),
('WORGOU'),
('YEMBOUATE'),
('DJIYEGA'),
('TCHINMUL'),
('DAPAONG-KOMBOLOAGA'),
('OGARO'),
('AKPOSSOU'),
('PAYOKA'),
('NATARE'),
('CINKASSE-TOTAL'),
('LAMBOUNDI'),
('NATIGOU'),
('GBANTCHAL'),
('MANDOURI2'),
('TONTONDI'),
('ADELO'),
('ADJAMGBADE'),
('AGBANDAOUDE'),
('AGENCE-KARA'),
('AGOUNDE'),
('ALEDJO'),
('ATALOUTE'),
('ATCHANGBADE-MOOV'),
('AWANDJELO'),
('BAFILO'),
('BAFILO-MOOV'),
('BAGA'),
('BAGHAN'),
('BANJELI'),
('BAPURE'),
('BASSAR'),
('BASSAR-BYAKPABE'),
('BASSAR-DIGBANDI'),
('BEBEDA'),
('BITCHABE'),
('BOHOU'),
('BOUFALE'),
('BOUGABOU'),
('BROUKOU'),
('DAOUDE'),
('DEFALE-HAUT'),
('DIMORE'),
('DJAMDE'),
('FARENDE'),
('HELOTA'),
('IBOBO'),
('IMPOT'),
('KABOU'),
('KADJALA'),
('KALANGA'),
('KANTE'),
('KARA3'),
('KARA-ATEDA'),
('KARA-BOSCO'),
('KARA-CENTRAL'),
('KARA-DONGOYO'),
('KARA-HOTEL-FRANCE'),
('KARA-MARCHE'),
('KARA-PISSA'),
('KARA-SITO'),
('KARA-SOS'),
('KARA-SUD'),
('KARA-TCHINTCHINDA'),
('KATCHAMBA'),
('KEMENI'),
('KEMERIDA'),
('KETAWO'),
('KETAWO2'),
('KIDJABOUM'),
('KOUKA'),
('KOUKA-GBANGBALE'),
('KOULFIEKOU'),
('KOUMEA'),
('KOUMONDE'),
('KOUNDOUM'),
('KOUTOUGOU'),
('KPALOU'),
('KPELOUWAYI'),
('KPESSIDE'),
('LAMA'),
('LAMA-MOOV'),
('LANDA'),
('LASSA'),
('MALFAKASSA'),
('MANGA'),
('MASSEDENA'),
('NABOULGOU'),
('NADOBA'),
('NAMON'),
('NANDJOUTA'),
('NATCHAMBA'),
('NATCHANGOU'),
('NATCHIBORE'),
('NATCHITIKPI'),
('NAWARE'),
('NIAMTOUGOU'),
('OSSACRE'),
('PAGOUDA'),
('PANGOUDA'),
('PESSARE'),
('POUDA'),
('PYABAS'),
('PYAKADJIKA'),
('SANDA'),
('SANDA-KAGBANDA'),
('SARAKAWA'),
('SIOU'),
('SIRKA'),
('SOLA'),
('SOUDOU'),
('SOUMBOU'),
('SOUMDINA'),
('SOUMDINAKAWA'),
('SOUMDINA-MOOV'),
('TANKPAYABOUR'),
('TCHANWORO'),
('TCHARE'),
('TCHATCHAMINADE'),
('TCHITCHAO'),
('TCHITCHIRA'),
('TOMDE'),
('TOMDE2'),
('YAKEDJI'),
('YAKLE'),
('NIAMTOUGOU-KANTAMBOLI'),
('PAGOUDA-KAGNISSI'),
('GOULBI'),
('TCHORE'),
('NASSIKOU'),
('NGAMBI'),
('TCHOGOUMA'),
('TCHIMBERI'),
('BIDJANDE'),
('LABARKOUTA'),
('SOUDOU2'),
('NAMPOCH'),
('KOUTCHITCHEOU'),
('KOUBOUABOU'),
('KPETAB'),
('TCHAPOSSI'),
('NATIPONI'),
('KPINDI'),
('ADJENGRE'),
('AFATCHALAKOPE'),
('AFEMKABYE'),
('AGBAMASSOMOU'),
('AGBANSIKITI'),
('AGOULOUDE'),
('AKAMADE'),
('ALEHERIDE'),
('ALIBI1'),
('ALIBI2'),
('AMAOUDE'),
('AOUDA'),
('ASSOKOKO'),
('BAGO'),
('BALANKA'),
('BARIKI'),
('BARRIERE'),
('BLITTA'),
('BLITTAGARE'),
('BOULOHOU-MOOV'),
('BOWOUNDA'),
('CAFEBAZAR'),
('DIGUENGUE'),
('DJARKPAGA'),
('DOGOBLE'),
('DOUFOULI'),
('FAZAO'),
('GOUBI'),
('HALOUKPABOUNDOU'),
('HEZOUDE'),
('KAGNIGBARA'),
('KAMBOLI'),
('KANIAMBOUA'),
('KASSIKADE'),
('KAZABOUA'),
('KEDIA'),
('KOMAH'),
('KOULOUMI'),
('KOULOUNDE'),
('KOUMONIADE'),
('KOUSSOUMTOU'),
('KPANGALAM'),
('KPARATAO'),
('KPASSOUADE'),
('KPAZA'),
('KRIKRI'),
('LAMATESSI'),
('LANGABOU'),
('LAPOSTE'),
('LAREME'),
('MEDINA'),
('MELAMBOUA'),
('MOSQUEE'),
('NAMBA-MOOV'),
('NKENGBE'),
('NTCHOUROU'),
('PAGALAGARE'),
('PAGALAMINE'),
('SADA'),
('SAGBADAI'),
('SAIBOUDE'),
('SALIMDE'),
('SOTOUBOUA'),
('SOTOUBOUA-PEAGE'),
('SOTOUBOUA-UNIVERSITE'),
('TADJAN'),
('TCHALO'),
('TCHAMBA-STADE'),
('TCHAREBAWOU'),
('TCHAWANDA'),
('TCHEBEBE'),
('TCHOIDE'),
('TIGBADA'),
('TINDJASSE'),
('TITIGBE'),
('WARAGNI'),
('WASSARABO'),
('WELLY'),
('YALOUMBE'),
('YEGUE'),
('YOLOUM'),
('DJARKPANGA-PREFECTURE'),
('SOKODE-KPANGALAM'),
('PAGALA-VILLAGE'),
('DANTCHO'),
('AOU-MONO'),
('BONANGANA'),
('LEDIYO'),
('SAMAI2'),
('SOTOUBOUA-SONDE'),
('KITANGOULI'),
('ACOLE'),
('ADANKA'),
('ADETA'),
('AFODJI'),
('AFOLE'),
('AGADZA'),
('AGBANDI'),
('AGBANDI2'),
('AGBATITOE'),
('AGBODJEKOPE'),
('AGBONOU'),
('AGBONOU2'),
('AGBONOU3-MOOV'),
('AGOME-KOUTOUKPA'),
('AGOTIME-ADAME'),
('AGOTIME-ZOUKPE'),
('AGOU'),
('AGOU-GARE'),
('AGOUKATI'),
('AGOUNYOGBO'),
('AHASSOME'),
('AKA'),
('AKABA'),
('AKPARE'),
('ALI-KPODJI'),
('ALOKO-MOOV'),
('AMLAME'),
('AMLAME-NDANIDA'),
('AMOUOBLO'),
('AMOUSSOUKOPE'),
('AMOUTCHOU'),
('ANIE'),
('ANIE-LOSSOKOME'),
('ANIE-MISSION'),
('ANIE-TCHIMTOYI'),
('ASRAMA'),
('ATAKPAME'),
('ATAKPAME2'),
('ATAKPAME-KAMINA'),
('ATCHINEDJI'),
('AVETONOU'),
('AWAGOME'),
('AWOUNADJASSI'),
('AYAKOPE'),
('BADINKOPE'),
('BADOU'),
('BADOU-KESSIBO'),
('BODJE'),
('BROUNFOU'),
('DANYI'),
('DANYI-ELAVAGNON'),
('DATCHA'),
('DEVE'),
('DJEKLOE'),
('DJON-KOTORA'),
('ELAVAGNON'),
('ELAVAGNON-OKOUTAWAGA'),
('GAME-AMOU'),
('GBADINKOUGNA'),
('GBADJAHE'),
('GBAGBADJAKOU'),
('GBOWLE-MOOV'),
('GLEI'),
('GLITO'),
('GNAMASSILA'),
('GOUDEVE'),
('HAHOMEGBE'),
('HAITO-MOOV'),
('HANYIGBA'),
('HIHEATRO'),
('HUILEHUI'),
('IGBEVE'),
('IGBOLOUDJA'),
('ISATI'),
('KABAGNI'),
('KAMINA'),
('KELEKPE'),
('KESSIBO-WAWA'),
('KLABE-EFOUKPA'),
('KOLOKOPE'),
('KOSSIKITI'),
('KOUGNOHOU'),
('KOUMA'),
('KOUMA-KONDA'),
('KPADAPE'),
('KPALIME'),
('KPALIME2'),
('KPALIME3'),
('KPALIME4'),
('KPALIME-HOTEL'),
('KPALIME-KPODJI'),
('KPATEGAN'),
('KPEGNON'),
('KPEKPLEME'),
('KPELE'),
('KPELE-AGAVE'),
('KPELE-AKATA'),
('KPELE-ELE'),
('KPESSI'),
('KPETEBENE'),
('KPOVE'),
('LAVIE'),
('MADJAMAKOU'),
('MANGOASSE-MOOV'),
('MORETAN'),
('NANGBETO'),
('NDIGBE'),
('NIAMTOUGOU-KOPE'),
('NOTSE'),
('NOTSE-BERCEAU'),
('NOTSE-GAPEDJI'),
('NOTSE-KPEDOME'),
('NYILE'),
('OFE'),
('OKE'),
('OKOU'),
('OTADI'),
('OUNABE'),
('OUNTIVOU'),
('PALAKOKO'),
('PATATOUKOU'),
('SALIGBE'),
('SAMA-KOPE'),
('SEREGBENE-MOOV'),
('SIYIME'),
('TADO'),
('TCHEKITA'),
('TCHINIGAN'),
('TEMEDJA'),
('TETETOU'),
('TINIPE'),
('TOHOU'),
('TOHOUN-DOUANE'),
('TOMEGBE'),
('TOVEATI'),
('TSEKO'),
('WADANYI'),
('WAHALA'),
('WAHALA-LAHE'),
('WETROPE-MOOV'),
('YANDA'),
('YOKELE-MOOV'),
('ZIWONOU'),
('ZOGBEGAN'),
('ZOMAI-MOOV'),
('ANIE-KABLEKOPE'),
('GAOUGBLE'),
('KOUGNOHOU-DJOKOUME'),
('NOTSE-NAOLO'),
('ATALO'),
('TSAVANYA'),
('OGOU-AKODESSEWA'),
('BASSAN-KOPE'),
('KOLO-MESSIWOBE'),
('DANYI-KONTA'),
('ADOUGBELAN'),
('KAVE'),
('KPETCHIHOE'),
('LANKUI-MOOV'),
('MATEKPE-ABADJENE'),
('OLIGO'),
('EKETO-ELAVAGNON'),
('TCHEKOUNI-KOPE'),
('KOUDZRAGAN'),
('TCHAGRI-TCHAKPA'),
('DANYI-DZOGBEGAN'),
('LAKIYEKOU'),
('VHE'),
('AGOTIGOME'),
('OLOUTOKOU'),
('KPEKPETA'),
('EHOUI'),
('BOCCO'),
('DZEYIBO'),
('EDIWLOU'),
('ITOKOUBE'),
('KPETA'),
('OFOUNAGBO'),
('SOGBOHOE'),
('TOBOSSE'),
('KADJAFE'),
('ABOBO-MOOV'),
('AFAGNAN'),
('AGBELOUVE'),
('AGBELOUVE-MOOV'),
('AGBODRAFO'),
('AGOEGAN'),
('AGOME-GLOZOU'),
('AGOME-SEVA'),
('AHEPE'),
('AKLAKOU'),
('AKOUMAPE'),
('ALOKOEGBE'),
('AMEGNRAN'),
('ANEHO'),
('ANEHO-JERICO'),
('ANEHO-KPOTA '),
('ANEHO-PEAGE'),
('ANEHO-YESUVITO'),
('ANFOIN'),
('ASSAHOUN'),
('ASSOME'),
('ATOETA'),
('AVEDJE'),
('AVEEVE'),
('AVOUTOKPA'),
('BADJA'),
('BADOUGBE'),
('BATOUME'),
('DAGBATI'),
('DALAVE'),
('DAVIE'),
('DAVIE-MOOV'),
('DZETA'),
('DZOLO'),
('GAME'),
('GAPE'),
('GAPE-ALOYI'),
('GAPEKPEDI'),
('GBATOPE'),
('GBOTO'),
('HAHOTOE'),
('HAHOTOE-KPODJI'),
('KEVE'),
('KOUDASSI'),
('KOUTIME-MOOV'),
('KOUVE'),
('KPEME'),
('KPEVEGO'),
('KPOME'),
('LILIKOPE'),
('MASSEDA'),
('MISSION-TOVE'),
('MOBILE-ECOLE-DE-POLICE'),
('SEVAGAN'),
('SIKAKONDJI'),
('SIKPE-AFIDENYO'),
('TABLIGBO'),
('TABLIGBO-AKOUDOKPO'),
('TOKPLI'),
('TOMETI'),
('TOVEGAN'),
('TSEKPO'),
('TSEVIE'),
('TSEVIE5-MOOV'),
('TSEVIE-AGENCE-SC'),
('TSEVIE-KPALI'),
('VOGAN'),
('VOGAN-AGBOPE'),
('WACEM'),
('WONOUGBA'),
('YOTO-KOPE'),
('ZOOTI'),
('TSEVIE-TEKANYI'),
('HAVE'),
('GBOTO-KOSSIDAME'),
('TCHEKPO-DEVE'),
('DZOGBEPEME'),
('GATI-AGODOU'),
('VOATTIVE-MOOV'),
('WOGBA-MOOV'),
('ATIKOLOE'),
('ZAFI'),
('GAPE-ATCHANVE'),
('KPETSOU'),
('ABATTOIR'),
('ABLOGAME'),
('ABOBOKOME'),
('ADAKPAME'),
('ADAMAVO'),
('ADAMAVO2'),
('ADAMAVO3'),
('ADAWLATO'),
('ADAWLATO2'),
('ADAWLATO3'),
('ADETIKOPE'),
('ADETIKOPE2'),
('ADETIKOPE3'),
('ADEWI'),
('ADEWI-TGC-IBS'),
('ADIDOADIN'),
('ADIDOGOME'),
('ADIDOGOME2'),
('ADIDOGOME3'),
('ADIDOGOME-MOOV'),
('ADJOUGBA'),
('ADJOUGBA2'),
('AEROGARE'),
('AEROGARE-IBS'),
('AEROPORT'),
('AEROPORT2'),
('AFIDENYIGBAN'),
('AGBADAHONOU'),
('AGBALEPEDO'),
('AGBALEPEDO2'),
('AGBALEPEDO-MOOV'),
('AGBODANKOPE'),
('AGODEKE'),
('AGOE'),
('AGOE-DEMAKPOE'),
('AGOE-GAKPOTO'),
('AGOE-GBONVE'),
('AGOE-SEMINAIRE'),
('AGOE-SHELL'),
('AGOE-SHELL-MOOV'),
('AGOTRANS'),
('AGUIAKOME'),
('AHADJIKPOTA'),
('AHLIGO'),
('AKODESSEWA'),
('ALINKA'),
('AMANDAHOME'),
('AMANDAHOME2'),
('AMEDENTA'),
('ANFAME'),
('ANOME'),
('APEDOKOE'),
('ASSIGOME'),
('ASSIYEYE'),
('ATTIEGOU'),
('ATTIEGOU2'),
('ATTIEGOU2-MOOV'),
('AVEDJI'),
('AVEDJI2'),
('AVEMARIA-MOOV'),
('AVENOU'),
('AVEPOZO'),
('AVEPOZO2'),
('AVINATO-MOOV'),
('AWATAME'),
('BAGUIDA'),
('BAGUIDA2'),
('BAGUIDA3'),
('BAGUIDA4'),
('BAGUIDA6'),
('BAGUIDABENA-MOOV'),
('BAGUIDA-MONUMENT'),
('BASSADJI-MOOV'),
('BEBIS'),
('BECHATEAU'),
('BECHATEAU2'),
('BEKPOTA'),
('BEKPOTA2'),
('BENIGLATO'),
('BIA'),
('CACAVELLI1'),
('CACAVELLI2'),
('CACAVELLI3'),
('CAMP-GP'),
('CAMP-POLICE'),
('CAMPUS'),
('CARREFOUR-MARGOT'),
('CASSABLANCA'),
('CERFER'),
('CERFER2'),
('CONGAT-MOOV'),
('COUR-DAPPEL'),
('DALIME'),
('DECON'),
('DEMAKPOE2'),
('DEMAKPOE3'),
('DEMAKPOE4'),
('DICAME'),
('DIDJOLE'),
('DIDJOLE2'),
('DJADOUKOPE'),
('DJAGBLE'),
('DJIFAKPOTA'),
('DJIFAKPOTA2'),
('DOGBEAVOU'),
('DOULASSAME'),
('ETAT-MAJOR'),
('FIDOKPUI'),
('FIOVI'),
('FOIRE'),
('FUCEC'),
('GAKLI'),
('GAKLI2'),
('GBADAGO'),
('GBENYEDI'),
('GBENYEDI2'),
('GBENYEDI-MOOV'),
('GBLINKOME'),
('GBONVE'),
('GBONVIE'),
('GBOSSIME'),
('GOLFCLUB'),
('GTA'),
('HANOUKOPE'),
('HEDJRANAWOE'),
('HEDJRANAWOE2'),
('HEDJRANAWOE4'),
('HEDZRANAWOE3'),
('HOLLANDO'),
('HOTEL-DUGOLFE'),
('HOTEL-FEVRIER'),
('HOUNTIGOME'),
('HOUNTIGOME2'),
('KAGNIKOPE'),
('KAGNIKOPE2'),
('KAGOME'),
('KAGOME-MOOV'),
('KEGUE'),
('KEGUE2'),
('KEGUE-MOOV'),
('KEGUE-STADE'),
('KELEGOUGAN'),
('KELEGOUGAN2'),
('KITIDJAN'),
('KLEME'),
('KLIKAME'),
('KLIKAME-MOOV'),
('KODJOVIAKOPE'),
('KODOME'),
('KODOME2'),
('KOHE'),
('KOVE'),
('KOVE2'),
('KPOGAN'),
('KPOGAN2'),
('KPONOU'),
('LAPAMPA'),
('LAROCHE'),
('LEADERPRICE'),
('LEGBASSITO'),
('LEGBASSITO3'),
('LEGBASSOKPE-MOOV'),
('LEO2000'),
('LOGOGOME'),
('LOGOPE'),
('LOGOPE2'),
('LOME2'),
('LOME2000-MOOV'),
('LOME2-CENTRE'),
('LOME-CENTRE'),
('LONATO'),
('LYCEE'),
('MATERIEL'),
('MINAMADOU'),
('MINAMADOU2'),
('MINISTERE'),
('MOBILE_AGBATTA'),
('MOBILE-CAISSE'),
('MOTOCROSS'),
('NETIME-MOOV'),
('NOEPE'),
('NUKAFU'),
('NUKAFU2'),
('NYEKONAKPOE1'),
('NYEKONAKPOE2'),
('OLD-PRESIDENCE'),
('PAL'),
('PALAIS-CONGRES'),
('PORT'),
('PORT3'),
('PORT-MOOV'),
('PRESIDENCE'),
('RAFFINERIE'),
('SAGBADO'),
('SAGBADO2'),
('SAGBADO3'),
('SAGBADO5'),
('SEGBE'),
('SEGBE2'),
('SEGBE-MOOV'),
('SEMINAIRE'),
('SNI'),
('SOGBOSSITO'),
('SOLIDARITE'),
('SOS'),
('SOTED'),
('SOUZANETIME'),
('SOVIEPE'),
('STREBLER'),
('TELESSOU'),
('TELESSOU2'),
('TGT-IBS'),
('TOGBLEKOPE'),
('TOGO2000'),
('TOGO3000'),
('TOGOTELECOM'),
('T-OIL'),
('TOTSI'),
('TOTSI2'),
('TVT'),
('UNIVERSITE'),
('UTB'),
('VAKPOSSITO'),
('WESSOME'),
('WESSOME2'),
('WONYOME'),
('WONYOME2'),
('WOUGOMEDEKPO-MOOV'),
('YOKOE'),
('YOKOE2'),
('ZANGUERA1'),
('ZANGUERA2'),
('ZANGUERA-MOOV'),
('ZANGUERA-PEAGE'),
('ZOGBEDJI'),
('ZONGO1'),
('ZONGO2'),
('ZOSSIME'),
('DJAGBLE-AGODOME'),
('ADETIKOPE-KLADJEME'),
('ALINKA2'),
('SEGBE-VIETE'),
('ZEGLE'),
('DALINKO-MOOV'),
('LAPAIX'),
('MOOV-ATIEGOU3'),
('KOURIENTRE'),
('TSEVIE6(TSEVIE WUGBA)'),
('TOKO'),
('LOKPOLI'),
('KPALIME NYVEME'),
('BASSAN COPE'),
('ADETA 2'),
('KPELE AGBAON'),
('AHOMA MOOV'),
('ATIKOLOE'),
('GAPE ATCHANVE'),
('KOUI'),
('AGENCE TOHOUN'),
('AGENCE BLITTA'),
('AGENCE-CINKASSE'),
('AGENCE-ATAKPAME'),
('AGENCE-DAPAONG'),
('AGENCE-BADOU'),
('AGENCE-SOTOUBOUA'),
('NOTSE-MOOV'),
('AGENCE-DANYI'),
('AGENCE-NOTSE'),
('AGENCE MANGO'),
('AGENCE BASSAR'),
('TINKOU'),
('AGENCE ANIE'),
('AGENCE AGOU'),
('AGENCE-AMLAME'),
('ALAOUSSO'),
('AGENCE KPALIME'),
('HIHEATRO 2'),
('NAGOUNI'),
('MAGASIN KEGUE'),
('HIHEATRO 2'),
('MEWEDE'),
('SASSANOU'),
('SITE MOBILE AFANGNA'),
('ECOLE DE POLICE'),
('AGOSSITO'),
('KPALIME 5'),
('AKEPEDO-PEAGE'),
('KPALIME 6'),
('APESSITO'),
('ATAKPAME-SADA'),
('MADJIKPETO'),
('LOME NORTH'),
('AKAMANDE 2'),
('AVINATO 2'),
('NOTSE TGT'),
('FIDOKPUI 2'),
('SOUROUTAWI I'),
('EFOUFANMI'),
('ADJOGUIDI'),
('ANYAVE'),
('ADETIKOPE-AGBEKOVI'),
('ADETIKOPE 7'),
('MONO'),
('APEDOKOE 3'),
('AGENCE AEROPORT'),
('AGOMBIO'),
('KADOGOU'),
('GAME LILI'),
('AKEPE'),
('AGENCE HEDJRANAWOE'),
('SOTOUBOUA COMMUTATION'),
('DAPAONG PRO'),
('ADZOVE'),
('SANLOAGA'),
('KLOUKPON'),
('AGENCE ANEHO'),
('AVINATO 2'),
('DEVEGO'),
('TCHALOUDE'),
('FIDOKPUI 2'),
('TCHAMBA TGT'),
('ADANYIHOHOE'),
('KOUTANGOU'),
('ZOPOMAHE'),
('SEVEHO'),
('DOUME'),
('ANOKUI'),
('TSEVIE BOLOUMODJI'),
('KPALIME 5'),
('BE APEYEME'),
('NYITA'),
('ATAKPAME-SADA'),
('WELL-CITY'),
('AKATO'),
('ASSIKO'),
('SK TELECOM'),
('KPALIME 6'),
('AKAMANDE 2'),
('FIDOKPUI 3'),
('IKOETCHONOU'),
('AMANDAHOME 3'),
('AGOSSITO'),
('DANGBESSITO'),
('AZAKPE'),
('KPANDJOUARE'),
('AKEPEDO-PEAGE'),
('DAPAONG CITE'),
('KIKPEOU'),
('HEDJRANAWOE MARCHE '),
('TOGBLEKOPE 3'),
('STATION AGBALEPEDO'),
('KELEGOUGAN 3'),
('LOME NORTH'),
('ADAKPAME 2'),
('SOTOUBOUA MARCHE'),
('DJEMEGNI'),
('AGOSSOU'),
('AKPLODJIGA'),
('KLEME AGOKANOU'),
('DJAGBLE-ZAVEDJI'),
('SOUROUTAWI 1'),
('KOUNTOUARE'),
('ADJOGUIDI'),
('DASSAGBA'),
('SOLAO'),
('MADJIKPETO'),
('KLEME YEPEME'),
('SK TELECOM'),
('MOBILE SANLOAGA'),
('ATIOME'),
('MEWEDE'),
('AGOVOUDOU'),
('BOKPOKPO'),
('KOMAH 2'),
('TCHAMBA AKPOWA'),
('ANYAVE'),
('YOBO'),
('ATAKPAM? COMMUTATION '),
('LANKOUVI'),
('KOVE HOUMBI'),
('LANKOUVI 2'),
('YOKOE-KOPEGAN'),
('AGENCE NUKAFU'),
('WAFO'),
('KPALIME TGT'),
('KAWA ABONANDA'),
('BASSAR POSTE '),
('KLEME 2'),
('TCHATAKPA DAKO'),
('DJAGBLE PERIFERIQUE'),
('DAPAONG FH'),
('SOKODE CENTRE'),
('PORT TP3'),
('AGOE LYCEE'),
('DAGUE'),
('TOGOVILLE'),
('BASSADJI 2'),
('CERFER 3'),
('HANYIGBA TODZI'),
('M\'POTI'),
('ZONGO 3'),
('OUA'),
('PIA'),
('MISSION TOVE 4'),
('DEVIKINME'),
('BE HEDJE'),
('FOLO BANDA'),
('DALINKO 2'),
('SITE MOBILE TG 1009 AU'),
('AVETA'),
('YAKA '),
('KPESSI'),
('WARKANBOU-CENTRE'),
('MOBILE-SANLOAGA'),
('MALGBONGOU'),
('WOGOU'),
('DOUMASSESSE'),
('PIA'),
('TOGBLEKOPE2'),
('ANFAME3'),
('BOCA'),
('ANFAME2'),
('NANEGBE'),
('PIA2'),
('WOUGOMEDEKPO'),
('FIL-O-PARC'),
('SEGBE3'),
('ZANGUERA3'),
('LONATO-IBS-SC'),
('T-OIL AGO? '),
('TSEVIE TGT'),
('AKOIN'),
('OKPAHOE'),
('DALAVE ROUTE'),
('ANEHO GLIDJI'),
('GLIDJI 2'),
('AGENCE KEVE'),
('ATAKPAME TGT'),
('SI?GE TOGOCOM'),
('ANEHO TGT'),
('CINKASSE BOUSSONGA TGT'),
('TABLIGBO 3'),
('EFFOUFAMI'),
('MANGO LYCEE'),
('STATION TERRIENNE KARA'),
('HEDJRANAWOE TGT'),
('VOGAN 2-(MOOV)');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Index pour la table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`site_id`);

--
-- Index pour la table `superviseur`
--
ALTER TABLE `superviseur`
  ADD PRIMARY KEY (`id_sup`);

--
-- Index pour la table `traiter`
--
ALTER TABLE `traiter`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id_ticket` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9912;

--
-- AUTO_INCREMENT pour la table `superviseur`
--
ALTER TABLE `superviseur`
  MODIFY `id_sup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `traiter`
--
ALTER TABLE `traiter`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9912;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
