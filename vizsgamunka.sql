-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Máj 16. 22:05
-- Kiszolgáló verziója: 8.0.32
-- PHP verzió: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `vizsgamunka`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cikkek`
--

CREATE TABLE `cikkek` (
  `id` int NOT NULL,
  `cim` varchar(100) DEFAULT NULL,
  `tartalom` varchar(5000) DEFAULT NULL,
  `megjelenes_datuma` datetime DEFAULT NULL,
  `szerzo_id` int NOT NULL,
  `tag_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- A tábla adatainak kiíratása `cikkek`
--

INSERT INTO `cikkek` (`id`, `cim`, `tartalom`, `megjelenes_datuma`, `szerzo_id`, `tag_id`) VALUES
(1, 'Visszatérhet a Francia Nagydíj', 'Az egyik leggazdagabb F1-es múlttal rendelkező nagydíj 2018-ban került vissza a menetrendbe egy hosszú, tízéves kihagyás után. A Paul Ricard versenypálya viszont nem tudta megszilárdítani a helyét a versenynaptárban: a 2022-es hétvége után búcsúzott. A szervezők már akkor jelezték, a búcsút semmiképpen sem tekintik véglegesnek, és ha máshogy nem, rotációs rendszerben, egy másik országgal felváltva szívesen visszatérnének. A francia sajtóhírek szerint továbbra is van esély az ország Forma-1-es nagydíjának visszatérésére, Monacóban pedig az illetékesek tárgyalni is fognak arról a sportág vezetőivel. ', '2023-05-12 17:46:25', 1, 1),
(2, 'Lényeges év közbeni változtatás jöhet az F1-ben: új gumik Silverstone-tól?', 'Felmérések szerint az idei versenygépek nem lassultak le úgy, ahogy a padlólemezszabályok változásával lassulniuk kellett volna. A tendencia szembetűnő volt az év első versenyhétvégéin: a 2023-as autók főleg a gyors pályákon és nagy tempójú kanyarokban tűnnek jobbnak a tavalyiaknál. A Pirelli a begyűjtött szimulációs adatok alapján méri fel, milyen terhelés várhat a gumikra az új autóktól. A fejlődés idén az előrejelzettnél nagyobb mértékű lett, és a csapatok fejlesztésével várhatóan még nagyobb lesz. Úgy értesültünk, hogy az F1 gumibeszállítója emiatt a gumik számára az egyik legnagyobb terhelést jelentő pályán, Silverstone-ban olyan új gumispecifikációt fog bevezetni, ami képes kiállni a nagyobb terhelést is.    ', '2023-05-11 13:27:31', 2, 2),
(3, 'Verstappent nem érdekli Schumacher és Hamilton rekordja', 'A holland esélyei jónak tűnnek az újabb címvédésre és a harmadik bajnoki címre. Nem csoda, hogy egyre többen emlegetik, talán ő lehet a következő, aki megpróbálhatja megdönteni a sportági rekordot, amit jelenleg 7-7 bajnoki címmel Michael Schumacher és Lewis Hamilton tart. Ő azonban bevallása szerint nem tör efféle csúcsokra. „Őszintén szólva ez nem motivál. Az álom az volt, hogy egyszer világbajnok leszek. Ezt mondogattam gyerekként, nem azt, hogy nyolcszoros világbajnok akarok lenni. Forma–1-es világbajnok akartam lenni. Elértem. Ha nyernék nyolc bajnoki címet, az természetesen szép lenne, de nem kimondott célom. Egyszerűen csak ott akarok maradni, ahol vagyok: az élen” – jelentette ki Verstappen.  ', '2023-05-12 10:09:29', 3, 3),
(4, 'Leclerc: Schumacher és Todt megcsinálta, szóval nem panaszkodhatunk!', 'Dobogója már van, győzelme még mindig nincs a Ferrarinak 2023-ban. Ami azt illeti, a múlt nyári Osztrák Nagydíj óta nem nyertek futamot, és ez mindent el is mond arról, mennyire nem úgy alakult a mostani évkezdésük, ahogyan várták.\r\nLeclerc elismeri, a Ferrari helyzete sajátos, talán nem könnyű, de szerinte ez nem lehet mentség számukra. \r\n\"Ez nem lehet kifogás, boldogulnunk kell vele. Michael (Schumacher) és Jean (Todt) is elképesztő nyomás alatt álltak, ennek ellenére egymás után több bajnokságot is nyertek. Szóval mi sem panaszkodhatunk” – állapította meg Leclerc, utalva a Ferrari történetének legsikeresebb korszakára, melyben Michael Schumacher és Jean Todt 5 egyéni és 6 konstruktőri címet ünnepelt.   ', '2023-05-04 18:20:55', 3, 4),
(5, '„Legalább 3 évre van szüksége egy újoncnak” – időt ad Tost De Vriesnek', 'Hatalmas várakozás övezte Nyck de Vries első teljes évét a Formula-1-ben, miután bemutatkozásán a 2022-es Olasz Nagydíjon nagyszerűen teljesített a betegeskedő Alexander Albon helyén, és rögtön pontokat is szerzett. \r\nA holland első néhány futama azonban nem úgy sikerült, mint ahogyan azt eltervezte: öt versenyhétvége után továbbra is 0 ponttal áll a bajnokságban.\r\n\"Nycket illetően én mindig azt mondom, hogy egy F1-be érkező újoncnak legalább 3 évre van szüksége ahhoz, hogy megértse, mi folyik itt. Ez a tanulási folyamat a balesetek időszaka, hiszen ha a versenyzők nem törik össze néha az autót, nem fogják ismerni a határaikat. Ezt el kell ismerni, különben nem működik a dolog. Nincs olyan versenyző, aki ne balesetezett volna. Ez része a játéknak” – idézi Tostot a RaceFans. ', '2023-05-13 18:29:28', 4, 5),
(6, 'Egy bizonyos pályaszakaszon különösen gyenge a McLaren', 'A csapat Bakuban és Miamiban is villogott a szabadedzéseken, nagyok voltak az elvárások, az eredmény azonban csupán két pont lett Norris részéről az azeri futamon. \r\nA két helyszín jellemzői éppen a McLaren egyik fő gyengeségét domborították ki.\r\n„Kirajzolódik egy trend: amikor nagy a tapadás, akkor az autónk versenyképesebb lesz. Ennek a trendnek szerintünk ahhoz van köze, hogy mikor alacsonyabb a tapadási szint, hosszabb a se fék, se gáz szakasz a kanyarokban. Ilyen körülmények közt az autónk nem működik túl jól” – magyarázta a Motorsportnak a McLaren csapatfőnöke, Andrea Stella. Viszont emellett „látható, hogy az autó erős az egyenes vonalú fékezés során, valamint erős a nagy sebességű szakaszokon”.   ', '2023-05-13 17:41:15', 5, 6),
(38, 'új cím', 'új', '2000-01-01 00:00:00', 38, 38),
(39, 'ez egy cím', 'ez a tartalom', '2023-05-14 00:00:00', 39, 39);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `szerzo`
--

CREATE TABLE `szerzo` (
  `id` int NOT NULL,
  `szerzo_neve` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- A tábla adatainak kiíratása `szerzo`
--

INSERT INTO `szerzo` (`id`, `szerzo_neve`) VALUES
(1, 'Auto Hebdo'),
(2, 'Racing News 365'),
(3, 'Bild'),
(4, 'Nagyházi Anna'),
(5, 'Strommer Benjamin'),
(38, 'én'),
(39, 'valaki');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tag`
--

CREATE TABLE `tag` (
  `id` int NOT NULL,
  `tagek` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- A tábla adatainak kiíratása `tag`
--

INSERT INTO `tag` (`id`, `tagek`) VALUES
(1, '#paulricard #versenypálya #visszatérés'),
(2, '#új #gumispecifikáció #pirelli #silverstone'),
(3, '#verstappen #világbajnokság #rekord'),
(4, '#ferrari #leclerc #nehézségek'),
(5, '#tost #alphatauri #nyckdevries'),
(6, '#mclaren #erősségek #gyengeségek'),
(38, '#uj'),
(39, '#tag');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `cikkek`
--
ALTER TABLE `cikkek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cikkek_szerzo_idx` (`szerzo_id`),
  ADD KEY `fk_cikkek_tag1_idx` (`tag_id`);

--
-- A tábla indexei `szerzo`
--
ALTER TABLE `szerzo`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `cikkek`
--
ALTER TABLE `cikkek`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT a táblához `szerzo`
--
ALTER TABLE `szerzo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT a táblához `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `cikkek`
--
ALTER TABLE `cikkek`
  ADD CONSTRAINT `fk_cikkek_szerzo` FOREIGN KEY (`szerzo_id`) REFERENCES `szerzo` (`id`),
  ADD CONSTRAINT `fk_cikkek_tag1` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
