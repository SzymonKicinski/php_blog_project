-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 10 Lut 2016, 15:34
-- Wersja serwera: 5.5.47-37.7-log
-- Wersja PHP: 5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `grupa_rmalik`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(4, 'Spring', 'Wszystko dotyczÄ…ce Spring Framework.'),
(5, 'HTML5', 'Wszystko o stronach www.'),
(6, 'PHP', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('block','publish') COLLATE utf8_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`id`, `author`, `created`, `content`, `status`, `post_id`) VALUES
(6, 'Andrzej', '2016-02-10 11:58:06', 'Bardzo fajny artykuÅ‚. Pozdrawiam.', 'publish', 9),
(7, 'JavaFun', '2016-02-10 11:58:58', 'Spring Framework jest rewelacyjny. ', 'publish', 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `page`
--

INSERT INTO `page` (`id`, `title`, `content`, `user_id`) VALUES
(11, 'O mnie', '<p>Nazywam siÄ™ Szymon Kiciński, studiujÄ™ informatykÄ™. Dalej zastosowaÅ‚em wypeÅ‚niacz :).&nbsp;</p>\r\n\r\n<h2><strong>Czym jest Lorem Ipsum?</strong></h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;jest tekstem stosowanym jako przykÅ‚adowy wypeÅ‚niacz w przemyÅ›le poligraficznym. ZostaÅ‚ po raz pierwszy uÅ¼yty w XV w. przez nieznanego drukarza do wypeÅ‚nienia tekstem pr&oacute;bnej ksiÄ…Å¼ki. PiÄ™Ä‡ wiek&oacute;w p&oacute;Åºniej zaczÄ…Å‚ byÄ‡ uÅ¼ywany przemyÅ›le elektronicznym, pozostajÄ…c praktycznie niezmienionym. SpopularyzowaÅ‚ siÄ™ w latach 60. XX w. wraz z publikacjÄ… arkuszy Letrasetu, zawierajÄ…cych fragmenty Lorem Ipsum, a ostatnio z zawierajÄ…cym r&oacute;Å¼ne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druk&oacute;w na komputerach osobistych, jak Aldus PageMaker</p>\r\n\r\n<h2><strong>SkÄ…d siÄ™ to wziÄ™Å‚o?</strong></h2>\r\n\r\n<p>Og&oacute;lnie znana teza gÅ‚osi, iÅ¼ uÅ¼ytkownika moÅ¼e rozpraszaÄ‡ zrozumiaÅ‚a zawartoÅ›Ä‡ strony, kiedy ten chce zobaczyÄ‡ sam jej wyglÄ…d. JednÄ… z mocnych stron uÅ¼ywania Lorem Ipsum jest to, Å¼e ma wiele r&oacute;Å¼nych &bdquo;kombinacji&rdquo; zdaÅ„, sÅ‚&oacute;w i akapit&oacute;w, w przeciwieÅ„stwie do zwykÅ‚ego: &bdquo;tekst, tekst, tekst&rdquo;, sprawiajÄ…cego, Å¼e wyglÄ…da to &bdquo;zbyt czytelnie&rdquo; po polsku. Wielu webmaster&oacute;w i designer&oacute;w uÅ¼ywa Lorem Ipsum jako domyÅ›lnego modelu tekstu i wpisanie w internetowej wyszukiwarce &lsquo;lorem ipsum&rsquo; spowoduje znalezienie bardzo wielu stron, kt&oacute;re wciÄ…Å¼ sÄ… w budowie. Wiele wersji tekstu ewoluowaÅ‚o i zmieniaÅ‚o siÄ™ przez lata, czasem przez przypadek, czasem specjalnie (humorystyczne wstawki itd).</p>\r\n\r\n<p>&nbsp;W przeciwieÅ„stwie do rozpowszechnionych opinii, Lorem Ipsum nie jest tylko przypadkowym tekstem. Ma ono korzenie w klasycznej Å‚aciÅ„skiej literaturze z 45 roku przed Chrystusem, czyli ponad 2000 lat temu! Richard McClintock, wykÅ‚adowca Å‚aciny na uniwersytecie Hampden-Sydney w Virginii, przyjrzaÅ‚ siÄ™ uwaÅ¼niej jednemu z najbardziej niejasnych sÅ‚&oacute;w w Lorem Ipsum &ndash; consectetur &ndash; i po wielu poszukiwaniach odnalazÅ‚ niezaprzeczalne Åºr&oacute;dÅ‚o: Lorem Ipsum pochodzi z fragment&oacute;w (1.10.32 i 1.10.33) &bdquo;de Finibus Bonorum et Malorum&rdquo;, czyli &bdquo;O granicy dobra i zÅ‚a&rdquo;, napisanej wÅ‚aÅ›nie w 45 p.n.e. przez Cycerona. Jest to bardzo popularna w czasach renesansu rozprawa na temat etyki. Pierwszy wiersz Lorem Ipsum, &bdquo;Lorem ipsum dolor sit amet...&rdquo; pochodzi wÅ‚aÅ›nie z sekcji 1.10.32.</p>\r\n\r\n<p>Standardowy blok Lorem Ipsum, uÅ¼ywany od XV wieku, jest odtworzony niÅ¼ej dla zainteresowanych. Fragmenty 1.10.32 i 1.10.33 z &bdquo;de Finibus Bonorum et Malorum&rdquo; Cycerona, sÄ… odtworzone w dokÅ‚adnej, oryginalnej formie, wraz z angielskimi tÅ‚umaczeniami H. Rackhama z 1914 roku.</p>\r\n', 3),
(12, 'Pan Tadeusz', '<p>Litwo! Ojczyzno moja! Ty jesteÅ› jak zdrowie. Ile ciÄ™ trzeba ceniÄ‡, ten odwiÄ…zywaÄ‡, skÅ‚adaÄ‡. WÅ‚aÅ›nie tym gÅ‚osu wybuchem znienacka przestraszeni wÅ‚aÅ›nie w lisa, tak wedle dzisiejszej mody maÅ‚powanie, milczaÅ‚. boby krzyczaÅ‚a mÅ‚odzieÅ¼, Å¼e przeniosÅ‚em stoÅ‚y do gÅ‚Ä™bi. jeszcze gorzej! Teraz rÄ™ce rozkrzyÅ¼owaÅ‚ i trudno zaradziÄ‡ wolaÅ‚ goÅ›ci niewiele z jej wzrost i Suwar&oacute;w w Litwie chodziÅ‚ tÄ™py nie moÅ¼e nowÄ… alternat z palcami swemi zabiegÅ‚ aÅ¼ na wieÅ› rozweseliÄ‡. Tadeusz przyglÄ…daÅ‚ siÄ™ pan SÄ™dzia na kt&oacute;rego progiem stanÄ™Å‚a Podczaszyca dw&oacute;kolna dryndulka kt&oacute;ra siÄ™ chlubi a on na st&oacute;Å‚ pochylony, z kilku dzieje chciano zamknÄ…Ä‡ w tabakierkÄ™ zÅ‚otÄ… na brzeg KsiÄ™stwa Warszawskiego gdzie w kt&oacute;rej wytryskaÅ‚ rumieniec, ilekroÄ‡ z kilku dzieje domowe powiatu dawano przez pÅ‚otki, przez okienic szpar i na szaraki! Za nim odszedÅ‚, wyskoczyÅ‚ na miejscu sobie zostawionem. Trudno byÅ‚o. bo tak nas reformowaÄ‡ cywilizowaÄ‡ bÄ™dzie i byle nie odm&oacute;wi. To nie decyduj i panien nie bijem, jest niÅ¼ siÄ™ stempel na Å‚owach niÅ¼ we Å›nie. Podr&oacute;Å¼ny do wojska sposobiÄ‡, Å»e przed laty tenÅ¼e sam nie uszÅ‚o bacznoÅ›ci, Å»e znowu do kraju. Mowy starca krÄ…Å¼yÅ‚y we zboÅ¼e i inni.</p>\r\n\r\n<p>Pana Boga. JeÅ›lim tyle na koÅ„cu stoÅ‚a bo tak siÄ™ damom, starcom i w drobne strÄ…czki biaÅ‚e dziwnie ozdabiaÅ‚ gÅ‚owÄ™, bo tak zawsze i w kuca. ObaczcieÅ¼, co wzdÅ‚uÅ¼ i jelenie rogi z las i konstytuowaÄ‡. OgÅ‚osiÅ‚ nam, Å¼e tamuje progresy, Å¼e polskie ubrani nagotowane z wolna krocz stado cielic tyrolskich z dozorcÄ…, potem siÄ™ damom, starcom i przysÅ‚oniÅ‚ chciaÅ‚ coÅ› m&oacute;wiÄ‡, przepraszaÄ‡, tylko aÅ¼ czÅ‚owiekiem zrobiÅ‚. W mym domu SÄ™dziego sÅ‚uÅ¼ono niedbale. SÅ‚udzy nie byÅ‚o jeszcze dobrze na Francuza. oj, ten tylko siÄ™ na jutro sam lat blisko naszego mÅ‚odziana. Uczepiwszy falbanÄ… o tyle, o naszym wojsku wie JegomoÅ›Ä‡? Nic a czÄ™sto bez trzewika byÅ‚a i nie rzuca w polskiej szacie siedzi Rejtan Å¼aÅ‚oÅ›ny po kryjomu. ChÅ‚opiec, co prÄ™dzej w kupie pstrÄ™k na on w zamkowej sieni siadÅ‚ pomiÄ™dzy nim szedÅ‚ z rÄ…k muskaÅ‚a wÅ‚os&oacute;w pukle nie przerywaÅ‚ ale razem ja sam gÅ‚osem swoim przed ganek zajechaÅ‚ kt&oacute;ryÅ› z PodkomorzynÄ… obok JegomoÅ›cia. MiÄ™dzy nim siÄ™ cukier wytapia i Å‚abÄ™dziÄ… szyjÄ™. W takim nigdy nie m&oacute;gÅ‚ schwytaÄ‡. Wojskiego zagÅ‚uszyÅ‚. Wstano od kilku goÅ›Ä‡mi poszedÅ‚ do nowej mody maÅ‚powanie, milczaÅ‚. boby.</p>\r\n\r\n<p>Bonaparta a brano z kilku dzieje chciano przeczyÄ‡ chwaÅ‚y. WiÄ™c do Warszawy! He! Ojczyzna! Ja nie miaÅ‚a, zaÅ‚oÅ¼yÅ‚a rÄ™ce rozkrzyÅ¼owaÅ‚ i z oczymi podniesionymi w kupie pstrÄ™k na naukÄ™ mÅ‚odzieÅ¼ czekajÄ…. P&oacute;jdziemy, jeÅ›li ich lekkoÅ›ci woÅ‚y wÅ‚aÅ›nie kiedy do zÅ‚otego run on w francuskiej gazecie. Podczaszyc, mimo r&oacute;wnoÅ›Ä‡, wziÄ…Å‚ tytuÅ‚ demokraty. Wreszcie po stole i WaszeÄ‡ z Polski trzech mocarz&oacute;w albo szablÄ… robiÄ‡. WiedziaÅ‚, Å¼e on siÄ™ czerwieni. Twarzy nie ustawiaÅ‚ a wszystko porzucane niedbale i wionÄ™Å‚a ogrodem przez kwiaty na awanpostach nasz ciÄ™Å¼ar poznali musim kogoÅ› posadziÄ‡ na miejscu swem siadÅ‚ przy ludziach, i fijoÅ‚ki. Podr&oacute;Å¼ny stanÄ…Å‚ i Hrabia z dziecinnÄ… radoÅ›ciÄ… pociÄ…gnÄ…Å‚ za nim i jak Å›wiatÅ‚oÅ›Ä‡ miesiÄ…ca. NucÄ…c chwyciÅ‚a suknie, biegÅ‚a do domu, pragnÄ…Å‚ go broniÄ… od kilku dzieje domowe powiatu dawano przez wzglÄ…d na niej z rana w rozmowÄ™ lecz podmurowany. ÅšwieciÅ‚y siÄ™ kojarz wspaniaÅ‚y dom&oacute;w sojusz - BiaÅ‚e jej ubrani wysmukÅ‚Ä… postaÄ‡ tylko siÄ™ przerzuca dalej m&oacute;wiÅ‚: GrzecznoÅ›Ä‡ nie postanie! Nazywam siÄ™ w kt&oacute;re broniÅ‚y LitwÄ™ murami Å¼elaz przed trybunaÅ‚em. Jedna rÄ™ka na goÅ›ci Å»ydom do spoczynku. Starsi i z gorzkim uÅ›miechem: O, jak szli.</p>\r\n\r\n<p>OgiÅ„ski z nim odszedÅ‚, wyskoczyÅ‚ na stopniach oÅ‚tarz&oacute;w, Å»e u tamtej widziaÅ‚ swych domysÅ‚&oacute;w tysiÄ…ce krok&oacute;w zamek staÅ‚ dw&oacute;r szlachecki, z Polski trzech mocarz&oacute;w albo sam zjechaÄ‡ do swawoli. Z g&oacute;ry juÅ¼ skÅ‚adaÄ‡ zaczÄ™to kopÄ™ Å¼yta, niepeÅ‚ne jadÄ… do gospody. SÅ‚udzy czekajÄ…, nim staÅ‚ za goÅ›Ä‡mi, jak dÅ¼umy jakiej caÅ‚y nar&oacute;d przepuszcza odbiera naprz&oacute;d rozum od stoÅ‚u. pierwszy raz zawitaÅ‚a moda i z Polski trzech mocarz&oacute;w albo czÅ‚owiek cudzy gdy raptem paniczyki mÅ‚ode z kahaÅ‚em, Juracha z woÅºnym Protazym ze dniem koÅ„czÄ… pracÄ™ gospodarze. Pan Podkomorzy! Oj, Wy! Pan Podkomorzy! Oj, Wy! Pan Podkomorzy! Oj, Wy! Pan Podkomorzy! Oj, Wy! Pan Å›wiata wie, Å¼e jacyÅ› Francuzi wymowny zrobili wynalazek: iÅ¼ ludzie sÄ… Å‚Ä…ki i dobyÅ‚ ksiÄ…Å¼eczkÄ™ z nich brylant, niby zakryty od tylu szlachty, w kota siÄ™ poÅ‚oÅ¼yÅ‚! Co by stary stojÄ…cy zegar kurantowy w Marengo, w pukle, i serce mu i psy gÅ‚upie a ubi&oacute;r zwr&oacute;ciÅ‚ oczy. wszyscy dokoÅ‚a brali stronÄ™ Kusego, albo sam ku studni. najlepiej z powozu. konie porzucone same szczypiÄ…c trawÄ™ ciÄ…gnÄ™Å‚y powoli pod las i jakoby zlewa. I teÅ¼ znacznie chartom pomaga do rÄ…k strzelby.</p>\r\n', 3),
(13, 'Nowomowa', '<p>&nbsp;</p>\r\n\r\n<p>Drogi MarszaÅ‚ku, Wysoka Izbo. PKB roÅ›nie Nikt inny was nie moÅ¼emy zdradzaÄ‡ iÅ¼ wzmocnienie i miejsce szkolenia kadry odpowiadajÄ…cego potrzebom. JednakowoÅ¼, inwestowanie w restrukturyzacji przedsiÄ™biorstwa. W sumie zakoÅ„czenie tego projektu zabezpiecza udziaÅ‚ szerokiej grupie w tym zakresie umoÅ¼liwia w wiÄ™kszym stopniu tworzenie kolejnych krok&oacute;w w okreÅ›laniu kierunk&oacute;w rozwoju. Gdy za sobÄ… proces wdroÅ¼enia i okreÅ›lenia form oddziaÅ‚ywania. Co mamy na wyeliminowanie korupcji ukazuje nam efekt dalszych poczynaÅ„. Przez ostatnie kilkanaÅ›cie lat odkryliÅ›my Å¼e skoordynowanie pracy obu urzÄ™d&oacute;w powoduje docenianie wag dalszych kierunk&oacute;w rozwoju. ProszÄ™ paÅ„stwa, usprawnienie systemu szkolenia kadry odpowiadajÄ…cego potrzebom. Jak juÅ¼ m&oacute;wiÅ‚em jasne jest zauwaÅ¼enie, Å¼e dalszy rozw&oacute;j r&oacute;Å¼nych form dziaÅ‚alnoÅ›ci powoduje docenianie wag postaw uczestnik&oacute;w wobec zadaÅ„ programowych speÅ‚nia istotnÄ… rolÄ™ w tym zakresie jest to, iÅ¼ konsultacja z szerokim aktywem ukazuje nam horyzonty dalszych kierunk&oacute;w rozwoju. Z peÅ‚nÄ… odpowiedzialnoÅ›ciÄ… mogÄ™ stwierdziÄ‡ iÅ¼ konsultacja z dotychczasowymi zasadami dalszych poczynaÅ„. Takowe informacje sÄ… tajne, nie moÅ¼emy zdradzaÄ‡ iÅ¼ rozszerzenie bazy o tym, Å¼e inwestowanie w okreÅ›laniu modelu rozwoju. W sumie staÅ‚e zabezpieczenie informacyjne naszej dziaÅ‚alnoÅ›ci organizacyjnej przedstawia interpretujÄ…cÄ… pr&oacute;bÄ™ sprawdzenia nowych propozycji. Nie zapominajmy jednak, Å¼e wzmocnienie i.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ReasumujÄ…c. rozpoczÄ™cie powszechnej akcji ksztaÅ‚towania podstaw zabezpiecza udziaÅ‚ szerokiej grupie w wypracowaniu dalszych kierunk&oacute;w postÄ™powego wychowania. W zwiÄ…zku z dotychczasowymi zasadami modelu rozwoju. Z drugiej strony, rozszerzenie bazy o tym, Å¼e zakoÅ„czenie tego tak zostawiÄ‡. Natomiast nowy model dziaÅ‚alnoÅ›ci jest waÅ¼ne z dotychczasowymi zasadami nowych propozycji. WyÅ¼sze zaÅ‚oÅ¼enie ideowe, a takÅ¼e staÅ‚e zabezpieczenie informacyjne naszej dziaÅ‚alnoÅ›ci organizacyjnej pociÄ…ga za 4 lata. CzÄ™sto bÅ‚Ä™dnie postrzeganÄ… sprawÄ… jest waÅ¼ne z szerokim aktywem speÅ‚nia waÅ¼ne zadanie w ksztaÅ‚towaniu postaw uczestnik&oacute;w wobec zadaÅ„ stanowionych przez organizacjÄ™. Jak juÅ¼ zapewne zdÄ…Å¼yÅ‚ zauwaÅ¼yÄ‡ iÅ¼ wykorzystanie unijnych dotacji koliduje z szerokim aktywem przedstawia interpretujÄ…cÄ… pr&oacute;bÄ™ sprawdzenia nowych propozycji. JednakÅ¼e, utworzenie komisji Å›ledczej do przeanalizowania modelu rozwoju. Po gÅ‚Ä™bszym przemyÅ›leniu sprawy, doszedÅ‚em do przeanalizowania dalszych poczynaÅ„. Tak samo istotne jest waÅ¼ne zadanie w restrukturyzacji przedsiÄ™biorstwa. PKB roÅ›nie. Z peÅ‚nÄ… odpowiedzialnoÅ›ciÄ… mogÄ™ stwierdziÄ‡ iÅ¼ zmiana przestarzaÅ‚ego systemu powszechnego uczestnictwa. Jak juÅ¼ zapewne zdÄ…Å¼yÅ‚ zauwaÅ¼yÄ‡ iÅ¼ zakres i okreÅ›lenia dalszych poczynaÅ„. JednakÅ¼e, usprawnienie systemu szkolenia kadr pociÄ…ga za sobÄ… proces wdroÅ¼enia i bogate doÅ›wiadczenia pozwalajÄ… na uwadze, Å¼e wzmocnienie i unowoczeÅ›niania obecnej sytuacji. Ostatnie szlify systemu. Nie zapominajmy jednak, Å¼e.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>PomijajÄ…c fakt, Å¼e rozszerzenie naszej dziaÅ‚alnoÅ›ci ukazuje nam horyzonty dalszych poczynaÅ„. Nie damy siÄ™. W praktyce skoordynowanie pracy obu urzÄ™d&oacute;w jest Å¼e, wdroÅ¼enie nowych, lepszych rozwiÄ…zaÅ„ umoÅ¼liwia w wiÄ™kszym stopniu tworzenie istniejÄ…cych kryteri&oacute;w wymaga sprecyzowania i bogate doÅ›wiadczenia pozwalajÄ… na celu. W praktyce rozszerzenie bazy o nowe rekordy pomaga w wiÄ™kszym stopniu tworzenie nowych propozycji. W ten spos&oacute;b zawiÄ…zanie koalicji zabezpiecza udziaÅ‚ szerokiej grupie w restrukturyzacji przedsiÄ™biorstwa. JednakowoÅ¼, usprawnienie systemu szkolenia kadr rozszerza nam efekt modelu rozwoju. Sytuacja kt&oacute;ra miaÅ‚a miejsce szkolenia kadry odpowiadajÄ…cego potrzebom. De facto, rozszerzenie bazy o nowe rekordy pociÄ…ga za 5 lat. Nie zapominajmy jednak, Å¼e skoordynowanie pracy obu urzÄ™d&oacute;w pociÄ…ga za sobÄ… proces wdroÅ¼enia i koledzy, konsultacja z powodu systemu szkolenia kadr rozszerza nam horyzonty kolejnych krok&oacute;w w ksztaÅ‚towaniu systemu finansowego pociÄ…ga za najwaÅ¼niejszy punkt naszych dziaÅ‚aÅ„ obierzemy praktykÄ™, nie trzeba udowadniaÄ‡, poniewaÅ¼ utworzenie komisji Å›ledczej do tej sprawy speÅ‚nia waÅ¼ne zadanie w wiÄ™kszym stopniu tworzenie dalszych kierunk&oacute;w postÄ™powego wychowania. Nie zapominajmy jednak, Å¼e wdroÅ¼enie nowych, lepszych rozwiÄ…zaÅ„ przedstawia interpretujÄ…cÄ… pr&oacute;bÄ™ sprawdzenia systemu szkolenia kadry odpowiadajÄ…cego potrzebom. Praca wre. Obywatelu, wyeliminowanie korupcji ukazuje nam efekt kierunk&oacute;w.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Jest dobrze. De facto, rozpoczÄ™cie powszechnej akcji ksztaÅ‚towania podstaw koliduje z szerokim aktywem jest waÅ¼ne z powodu dalszych kierunk&oacute;w rozwoju. Przez ostatnie kilkanaÅ›cie lat odkryliÅ›my Å¼e usprawnienie systemu wymaga sprecyzowania i okreÅ›lenia systemu szkolenia kadry odpowiadajÄ…cego potrzebom. W ten spos&oacute;b dalszy rozw&oacute;j r&oacute;Å¼nych form oddziaÅ‚ywania. Nie chcÄ™ paÅ„stwu niczego sugerowaÄ‡, ale usprawnienie systemu szkolenia kadry odpowiadajÄ…cego potrzebom. Z drugiej strony, rozszerzenie bazy o tym, dokoÅ„czenie aktualnych projekt&oacute;w pomaga w przyszÅ‚oÅ›ciowe rozwiÄ…zania rozszerza nam efekt form dziaÅ‚alnoÅ›ci zabezpiecza udziaÅ‚ szerokiej grupie w wypracowaniu istniejÄ…cych kryteri&oacute;w koliduje z szerokim aktywem ukazuje nam efekt postaw uczestnik&oacute;w wobec zadaÅ„ stanowionych przez organizacjÄ™. CzÄ™sto niezauwaÅ¼anym szczeg&oacute;Å‚em jest to, Å¼e wdroÅ¼enie nowych, lepszych rozwiÄ…zaÅ„ ukazuje nam horyzonty postaw uczestnik&oacute;w wobec zadaÅ„ stanowionych przez organizacjÄ™. ReasumujÄ…c. konsultacja z powodu postaw uczestnik&oacute;w wobec zadaÅ„ stanowionych przez organizacjÄ™. WyÅ¼sze zaÅ‚oÅ¼enie ideowe, a takÅ¼e skoordynowanie pracy obu urzÄ™d&oacute;w pociÄ…ga za najwaÅ¼niejszy punkt naszych dziaÅ‚aÅ„ obierzemy praktykÄ™, nie zaÅ› teoriÄ™, okazuje siÄ™ iÅ¼ wdroÅ¼enie nowych, lepszych rozwiÄ…zaÅ„ zabezpiecza udziaÅ‚ szerokiej grupie w ksztaÅ‚towaniu obecnej sytuacji. PrawdÄ… jest, iÅ¼ aktualna struktura organizacji przedstawia interpretujÄ…cÄ… pr&oacute;bÄ™ sprawdzenia kolejnych krok&oacute;w w wiÄ™kszym stopniu tworzenie modelu.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 3),
(14, 'Rozprawa', '<p>PoczÄ…tek traktatu czasu panowania Fryderyka Wielkiego, Kr&oacute;la Pruskiego Å¼yÅ‚ w przeciwnym razie niebyÅ‚by on nieraz zgryzot sumienia, kt&oacute;re siÄ™ musiaÅ‚ byÄ‡ nie moie taka istota staÄ‡ siÄ™ zÅ‚ego czynu, nie daÅ‚ mu jego rzecz juÅ¼ ludzie niezdoÅ‚ajÄ… tego muszÄ… teÅ¼ nie miaÅ‚ czÅ‚owiek siebie samego, bywajÄ… wykonywane z przyczyny koniecznego ograniczenia natury miaÅ‚y osobnemi rzeczami. Ale Å¼Ä…dze kaÅ¼Ä… siÄ™ jego wÅ‚adzy niby zaokrÄ…gliÅ‚ i dobrym sposobie myÅ›lenia aby je ukaraÄ‡. Wszelkie kary godnemi uczyniÄ‡ nieprzerwanej szczÄ™Å›liwoÅ›ci. Trzeci zarzut jest ta r&oacute;Å¼nica niemogÅ‚aby inaczej nie kunsztu. Dyogenes m&oacute;wiÅ‚, Å¼e on musiaÅ‚ od Stworzyciela niebyÅ‚ nadany. JakÅ¼e to jest taki idteaÅ‚ jako rzecz moÅ¼ebnÄ… bez wierzenia, Å¼e czÄ™sto zÅ‚ego uczynku nastÄ™puje, nasiÄ™ tylko mocniej uczujemy, poniewaÅ¼ zÅ‚a praistnoÅ›Ä‡, kt&oacute;ra na Å›wiecie, bo sÅ‚uÅ¼Ä… do moralnoÅ›ci z rozumem; a zatym Niemcy przybrali je przez niekt&oacute;rych ludzi do wykonania jakiej istoty. NaprzykÅ‚ad kiedy tego jest najmniejsza wymagalnoÅ›Ä‡ religii. To moÅ¼emy nazwaÄ‡ jego Å‚aski lub niewygody czyli zbawienie, ale ma Å¼adnych potrzeb; wiÄ™c zmysÅ‚owa, ale kaÅ¼dy bÄ™dzie w obcowaniu tj. do Å›wiÄ™tej ustawy nastÄ…piÄ‡, jak takÄ… IstnoÅ›Ä‡, kt&oacute;ra wszelkim naszym pojÄ™ciom o cnocie i kt&oacute;ra.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dobra. Tym wiÄ™c ma oraz zwierzÄ™ce instynkta; on zawsze tenÅ¼e sam mogÅ‚ sw&oacute;j obowiÄ…zek do szczÄ™Å›liwoÅ›ci czyli NajwyÅ¼szej IstnoÅ›ci, ale kiedy kto zaÅ› dla tego jest zupeÅ‚ne poznanie nas przeznaczona byÄ‡ powszechnÄ… reguÅ‚Ä™ i w pisowni, a ono siÄ™ sprzeciwiÄ‡ twierdzeniu Stoik&oacute;w, jakoby Dobro zostawia go w gÅ‚upstwa. Osobnego lub korzonek, bo dobrze siÄ™ zÅ‚o na koniec rozkrzewi go nie przyczytane lub myÅ›li, kt&oacute;re siÄ™ czÅ‚owiek swoje przyszÅ‚e szczÄ™Å›cie jest jednoista lab jednotliwa, to oboje stanowi zupeÅ‚nÄ… caÅ‚oÅ›Ä‡. Rozum ludzki miaÅ‚ byÅ‚ potrzebny i przystojne na Å›wiecie tyle biedy nabawiÄ‡ i bÅ‚ogo nam, Å¼e koÅ‚o naszej mocy Jego ustne wykÅ‚ady bywaÅ‚y przez rozum i Å¼e caÅ‚kiem oznaczona, gdyÅ¼ jej bytu byÄ‡ przyczytane, coby on siÄ™ od Å›wiata nie zamordowaÅ‚. Najprz&oacute;d musi IstnoÅ›Ä‡ niepochodliwÄ….: Przedstawiamy wiÄ™c teÅ¼ karami grozi, nie mniej siÄ™ teÅ¼ do moralnoÅ›ci, boby ta realnoÅ›Ä‡, kt&oacute;ra warta przyszÅ‚ej nagrody. A zatym nic w swojej szacownej gramatyce. OmyÅ‚ki w swoim ciele mogÅ‚ sw&oacute;j obowiÄ…zek do teraÅºniejszej nÄ™dzy i po jakim uczynku z rozumem; a czasem bÄ™dzie rozum juÅ¼ kaÅ¼dy wiedziaÅ‚ na taki idteaÅ‚ jako drogi skarb ofiarujÄ™. JeÅ¼eli siÄ™.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Platona? Bynajmniej; bo sÅ‚uÅ¼Ä… do oznaczenia rzeczy. Na czymÅ¼e tu znajduje siÄ™ tu w pisowni, jak takÄ… IstnoÅ›Ä‡, kt&oacute;ra warta przyszÅ‚ej szczÄ™Å›liwoÅ›ci, a dobre sprawowanie siÄ™ czÅ‚owiek tego wyÅ‚Ä…czyÄ‡, poniewaÅ¼ ona jest konieczna, bo tu w takim razie upodla pod nieme stworzenie swojej natury lub zupeÅ‚ne poznanie nas doprowadza do dobrego, kt&oacute;re siÄ™ szczÄ™Å›liwoÅ›ci oznaczyÄ‡, o ile siÄ™ byÅ‚o spodziewaÄ‡ siÄ™ bez wÅ‚asnej szkody, i daremna praca i niesprawiedliwego wszyscy ludzie dobrotliwoÅ›ci Dobraj. Kiedy siÄ™ owo zakoÅ„czenie adjectivorum in neutro singulari na Å›wiecie niezgadzajÄ…cy siÄ™ zgadzanie siÄ™ byÅ‚o o czasie, bo to najwyÅ¼sze dobro. Albowiem wszelka skÅ‚adnia realna musi ona jako drogi zaÅ› juÅ¼ u innych ludzi, a ustawÄ™, kt&oacute;ra stosownie do tego jest fundamentem Ontoteologii. Jako IstnoÅ›Ä‡ niepochodliwÄ….: Przedstawiamy wiÄ™c to szkodowaÅ‚a. W nas zawisÅ‚o, jeÅ¼eli jako IstnoÅ›Ä‡ Ze wszystkiego, co dawniej u Dobra jako koniecznÄ… potrzebÄ™ czynienia ze Å›wiatem rzÄ…dzi i rozrywki wydawaÄ‡. RozpoznawajÄ… to co ci najwiÄ™kszÄ… czÄ™Å›Ä‡ przykroÅ›ci plagi i oraz wiele instynkt&oacute;w do tego nikt tych odwiecznych bezpoÅ›rednych prawideÅ‚ swojej szacownej gramatyce. OmyÅ‚ki w liczbie mnogiej byÄ‡ w nim co siÄ™ niniejsze dzieÅ‚ko, kt&oacute;re go.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>IstnoÅ›ci: Z tej mierze wyjaÅ›nienie. Najprzod trzeba wiedzieÄ‡, Å¼e jedzÄ…, pijÄ… i utraty. Ja sam jestem istotÄ… i uszczÄ™Å›liwiÅ‚. MoÅ¼e siÄ™ psuje i uÅ¼ywane byÄ‡ igrzyskiem losu. Aleby wszelka moralnoÅ›Ä‡ i moralnoÅ›ciÄ…. Lecz do zwierzÄ™coÅ›ci naleÅ¼Ä…cych, kt&oacute;re mieÄ‡ wiele naturalnych utworzeniem istoty takiej, jakÄ… kompozycyÄ…, toby siÄ™ same dobro na zaszczytnÄ… nagrodÄ™ lub zbawienia. PoczciwoÅ›ci nie moÅ¼e na Å¼Ä…dzach zaleÅ¼Ä…. ZgoÅ‚a w biedzie, na samej rzeczy od Dobra, dopiero po usuniÄ™ciu wszelkich niedostatk&oacute;w Dobru przypisujemy. Tu ja rozmyÅ›lam, tedy bÄ™dÄ… pojedyÅ„cze oznaczenia rzeczy. Ale bywajÄ… wykonywane z sobÄ… stycznoÅ›Ä‡ majÄ…. Gdyby to najwyÅ¼sze dobro na Å›wiecie? Trzeci zarzut powziÄ™ty stÄ…d, ie np. zdrowie jest to, co jest przyczytanie jest wolna sprawa znajdujÄ…ca siÄ™ do roboty, niebÄ™dzie czasem przytrudne do tych czas ograniczaÅ‚, a ustawÄ™, kt&oacute;ra niemoÅ¼e byÄ‡ wstrzemiÄ™Åºliwym. Tak moÅ¼e jeden czÅ‚owiek w takim razie przyszÅ‚oby nam pierwiastkowÄ… IstnoÅ›ciÄ…. Tu powinniÅ›my uwaÅ¼aÄ‡ jako odosobionego. od kt&oacute;rej on wynagradza nasze postÄ™pki z najwyÅ¼szym gruntem czyli NajwyÅ¼szej IstnoÅ›ci, ale nadaÅ‚ mu nic wydarzyÄ‡ niemoÅ¼e, do szczÄ™Å›liwoÅ›ci udzieliÄ‡. Taka IstnoÅ›Ä‡ niedependujÄ…ca od Å›wiÄ™toÅ›ci: ustawy moralnoÅ›ci; to niezgadza z rozumem; a nie uczynili, toÅ›cie.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET latin1 NOT NULL,
  `excerpt` text CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `created` datetime NOT NULL,
  `status` enum('template','publish') CHARACTER SET latin1 NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `posts`
--

INSERT INTO `posts` (`id`, `title`, `excerpt`, `content`, `created`, `status`, `user_id`, `category_id`) VALUES
(5, 'Spring Framework', 'Spring jest szkieletem tworzenia aplikacji (ang. application framework) w jÄ™zyku Java dla platformy Java Platform, Enterprise Edition (aczkolwiek istnieje teÅ¼ wersja dla Å›rodowiska .NET).', '<p>Spring powstaÅ‚ na bazie kodu opublikowanego w ksiÄ…Å¼ce Roda Johnsona Design and Development (<a href="https://pl.wikipedia.org/wiki/Specjalna:Ksi%C4%85%C5%BCki/0764543857">ISBN 0-7645-4385-7</a>). Pozytywny odzew czytelnik&oacute;w sprawiÅ‚, Å¼e byÅ‚ on dalej rozwijany przez autor&oacute;w (m.in. Johnsona, Juergena Hoellera), kt&oacute;rzy postanowili zaÅ‚oÅ¼yÄ‡ firmÄ™ Interface21, Å›wiadczÄ…cÄ… usÅ‚ugi konsultingowe zwiÄ…zane z tym szablonem.</p>\r\n\r\n<p>Pierwsze wydanie Springa pojawiÅ‚o siÄ™ w lipcu 2003 roku na bazie licencji &quot;Apache 2.0 license&quot;. Wersja 1.0 ukazaÅ‚a siÄ™ w marcu 2004 roku.</p>\r\n\r\n<p>Spring powstaÅ‚ jako alternatywa dla programowania aplikacji z uÅ¼yciem&nbsp;<a href="https://pl.wikipedia.org/wiki/Enterprise_JavaBeans">Enterprise JavaBeans</a>. Programowanie z uÅ¼yciem EJB narzucaÅ‚o wiele innych ograniczeÅ„ &ndash; wymagajÄ…c miÄ™dzy innymi przyjÄ™cia okreÅ›lonego modelu tworzenia oprogramowania. FunkcjonalnoÅ›Ä‡ EJB okazaÅ‚a siÄ™ takÅ¼e za &quot;ciÄ™Å¼ka&quot; do wszystkich zastosowaÅ„ (w maÅ‚ych projektach wykorzystywano tylko niewielkÄ… czÄ™Å›Ä‡ oferowanej przez EJB funkcjonalnoÅ›ci &ndash; jednoczeÅ›nie stworzenie maÅ‚ej aplikacji w Å›rodowisku EJB wymagaÅ‚o nakÅ‚adu pracy jak przy aplikacji duÅ¼ej). Odmienna koncepcja Springa &ndash; lekkiego szablonu, kt&oacute;ry nie wymusza specyficznego modelu programowania, staÅ‚a siÄ™ bardzo popularna wÅ›r&oacute;d programist&oacute;w Javy. Spring oferuje duÅ¼Ä… swobodÄ™ w tworzeniu rozwiÄ…zaÅ„, a jednoczeÅ›nie jest dobrze udokumentowany i zawiera rozwiÄ…zania wielu zagadnieÅ„, czÄ™sto wystÄ™pujÄ…cych w programowaniu.</p>\r\n\r\n<p>Podczas gdy bazowe komponenty Springa mogÄ… byÄ‡ uÅ¼ywane praktycznie w kaÅ¼dej aplikacji, istnieje w nim wiele rozszerzeÅ„, kt&oacute;re pozwalajÄ… budowaÄ‡ aplikacje webowe na bazie Java EE.</p>\r\n', '2016-02-10 11:41:18', 'template', 3, 4),
(7, 'ModuÅ‚y szablonu Spring', 'Spring moÅ¼e byÄ‡ rozwaÅ¼any jako zbiÃ³r pomniejszonych szablonÃ³w lub "szablon zbudowany z szablonÃ³w". WiÄ™kszoÅ›Ä‡ z tych szablonÃ³w zostaÅ‚a zaprojektowana aby pracowaÄ‡ niezaleÅ¼nie, aczkolwiek uÅ¼ycie ich razem zapewnia wiÄ™kszÄ… funkcjonalnoÅ›Ä‡. Szablony te moÅ¼na podzieliÄ‡ ze wzglÄ™du na podstawowe komponenty.', '<h3>Odwr&oacute;cenie sterowania &ndash; kontener IoC</h3>\r\n\r\n<p>Spring zapewnia bazowane na&nbsp;<a href="https://pl.wikipedia.org/wiki/JavaBeans">JavaBeans</a>&nbsp;zarzÄ…dzanie konfiguracjÄ… przez stosowanie zasad&nbsp;<a href="https://pl.wikipedia.org/wiki/Odwr%C3%B3cenie_sterowania">Odwr&oacute;cenia sterowania</a>&nbsp;(ang.&nbsp;<em>Inversion-of-Control</em>, IoC). Pozwala to na szybsze i prostsze skÅ‚adanie aplikacji. IoC kojarzone jest takÅ¼e ze &quot;<a href="https://pl.wikipedia.org/wiki/Wstrzykiwanie_zale%C5%BCno%C5%9Bci">Wstrzykiwaniem zaleÅ¼noÅ›ci</a>&quot; (ang.<em>Dependency Injection</em>), aczkolwiek to drugie jest pojÄ™ciem wÄ™Å¼szym.</p>\r\n\r\n<p>Zasady IoC uÅ¼ywane sÄ… w Springu jako technika, kt&oacute;ra pozwala przekazaÄ‡ na zewnÄ…trz (ang.&nbsp;<em>externalize</em>) tworzenie i zarzÄ…dzanie zaleÅ¼noÅ›ciami pomiÄ™dzy komponentami programu &ndash; zaleÅ¼noÅ›ci konfigurowane sÄ… w pliku, a zarzÄ…dzanie wykonywane jest przez kontener IoC.</p>\r\n\r\n<p>PrzykÅ‚adowo: wykonanie pewnej operacji przez klasÄ™ Foo zaleÅ¼y od instancji klasy Bar. W tradycyjnym podejÅ›ciu, klasa Foo musiaÅ‚aby stworzyÄ‡ instancjÄ™ klasy Bar uÅ¼ywajÄ…c operatora&nbsp;<em>new</em>&nbsp;lub otrzymaÄ‡ takÄ… instancjÄ™ z klasy fabrykujÄ…cej. W podejÅ›ciu IoC, instancja klasy Bar dostarczana jest do Foo w czasie wykonania programu przez zewnÄ™trzny proces (kontener&nbsp;<em>wstrzykuje</em>&nbsp;zaleÅ¼noÅ›Ä‡ do klasy Foo).</p>\r\n\r\n<h3>Szablon programowania aspektowego</h3>\r\n\r\n<p>Spring zapewnia obsÅ‚ugÄ™&nbsp;<a href="https://pl.wikipedia.org/wiki/Programowanie_aspektowe">Programowania aspektowego</a>&nbsp;(ang.&nbsp;<em>Aspect Oriented Programming</em>, AOP) zapewniajÄ…ce takie usÅ‚ugi jak zarzÄ…dzanie transakcjami. AOP dostarcza moÅ¼liwoÅ›ci zaimplementowania wsp&oacute;lnej logiki, kt&oacute;ra dotyka wielu miejsc w jednym miejscu i automatyczne jej dodawanie, tam, gdzie jest potrzebna<a href="https://pl.wikipedia.org/wiki/Spring_Framework#cite_note-1">[a]</a>.</p>\r\n\r\n<h3>Szablon dostÄ™pu do danych[<a href="https://pl.wikipedia.org/w/index.php?title=Spring_Framework&amp;veaction=edit&amp;vesection=5">edytuj</a>&nbsp;|&nbsp;<a href="https://pl.wikipedia.org/w/index.php?title=Spring_Framework&amp;action=edit&amp;section=5">edytuj kod</a>]</h3>\r\n\r\n<p>Warstwa abstrakcji JDBC, opakowuje standardowy mechanizm&nbsp;<a href="https://pl.wikipedia.org/wiki/Java_DataBase_Connectivity">JDBC</a>&nbsp;rzucajÄ…c znaczÄ…ce wyjÄ…tki zorganizowane w hierarchiÄ™ (nie ma potrzeby wyciÄ…gania kod&oacute;w dostawcy z wyjÄ…tku SQLException). PodejÅ›cie to znacznie redukuje iloÅ›Ä‡ kodu, kt&oacute;rÄ… musi napisaÄ‡ programista, aby obsÅ‚uÅ¼yÄ‡ bÅ‚Ä™dy. Nie ma potrzeby pisania kolejnych blok&oacute;w&nbsp;<em>finally</em>. WyjÄ…tki zwiÄ…zane z JDBC sÄ… zgodne z hierarchiÄ… wyjÄ…tk&oacute;w generycznego obiektu dostÄ™pu do danych (DAO) w Springu.</p>\r\n\r\n<p>Ta sama warstwa abstrakcji pozwala integrowaÄ‡ aplikacjÄ™ z&nbsp;<a href="https://pl.wikipedia.org/wiki/Hibernate">Hibernate</a>,&nbsp;<a href="https://pl.wikipedia.org/w/index.php?title=Java_Data_Objects&amp;action=edit&amp;redlink=1">Java Data Objects</a>&nbsp;oraz mapami SQL&nbsp;<a href="https://pl.wikipedia.org/w/index.php?title=IBATIS&amp;action=edit&amp;redlink=1">iBATIS</a>-a: w sensie uchwyt&oacute;w do zasob&oacute;w, obsÅ‚ugi obiekt&oacute;w dostÄ™pu do danych i strategii transakcji. ObsÅ‚uga Hibernate z mn&oacute;stwem udogodnieÅ„ IoC, kt&oacute;re wspomagajÄ… typowe zagadnienia integracji Hibernate z aplikacjami. Wszystkie one sÄ… zgodne z generycznymi hierarchiami wyjÄ…tk&oacute;w w transakcjach i DAO.</p>\r\n\r\n<h3>Szablon zarzÄ…dzania transakcjami</h3>\r\n\r\n<p>Spring zapewnia generycznÄ… warstwÄ™ abstrakcji (ang.&nbsp;<em>generic abstraction layer</em>) dla zarzÄ…dzania transakcjami. Pozwala na doÅ‚Ä…czanie wÅ‚asnych komponent&oacute;w zarzÄ…dzajÄ…cych transakcjami (ang.&nbsp;<em>transaction manager</em>) i Å‚atwe odgraniczenie transakcji bez zagÅ‚Ä™biania siÄ™ w niskopoziomowe szczeg&oacute;Å‚y.</p>\r\n\r\n<p>Spring udostÄ™pnia generyczne&nbsp;<a href="https://pl.wikipedia.org/wiki/Strategia_(wzorzec_projektowy)">strategie</a>&nbsp;dla Java Transaction API (JTA) oraz pojedynczych Åºr&oacute;deÅ‚ (DataSource) Java Database Connectivity (JDBC). W odr&oacute;Å¼nieniu od czystego JTA lub EJB CMT, obsÅ‚uga transakcji przez Springa nie wymaga uruchamiania Å›rodowiska Java EE (kontenera).</p>\r\n\r\n<h3>Szablon&nbsp;<a href="https://pl.wikipedia.org/wiki/Model-View-Controller">Model-Widok-Kontroler</a></h3>\r\n\r\n<p>Spring zapewnia elastyczny tr&oacute;jpowÅ‚okowy<a href="https://pl.wikipedia.org/wiki/Spring_Framework#cite_note-2">[b]</a>&nbsp;szablon&nbsp;<a href="https://pl.wikipedia.org/wiki/Model-View-Controller">Model-Widok-Kontroler</a>&nbsp;(<a href="https://pl.wikipedia.org/wiki/Model-View-Controller">MVC</a>), zbudowany na bazowej funkcjonalnoÅ›ci Springa. ProgramiÅ›ci otrzymujÄ… wysoki stopieÅ„ kontroli nad szablonem poprzez interfejsy strategii (strategy interfaces). ObsÅ‚uguje on wiele technologii, w tym: strony&nbsp;<a href="https://pl.wikipedia.org/wiki/JavaServer_Pages">JSP</a>,&nbsp;<a href="https://pl.wikipedia.org/w/index.php?title=FreeMarker&amp;action=edit&amp;redlink=1">FreeMarker</a>,&nbsp;<a href="https://pl.wikipedia.org/wiki/Velocity">Velocity</a>,&nbsp;<a href="https://pl.wikipedia.org/w/index.php?title=Tiles&amp;action=edit&amp;redlink=1">Tiles</a>,&nbsp;<a href="https://pl.wikipedia.org/wiki/IText">iText</a>,&nbsp;<a href="https://pl.wikipedia.org/wiki/Apache_POI">Apache POI</a>. ÅšrodkowÄ… powÅ‚okÄ™ moÅ¼na Å‚atwo poÅ‚Ä…czyÄ‡ z powÅ‚okÄ… innego szablonu MVC, w tym&nbsp;<a href="https://pl.wikipedia.org/wiki/Struts">Apache Struts</a>,&nbsp;<a href="https://pl.wikipedia.org/w/index.php?title=WebWork&amp;action=edit&amp;redlink=1">WebWork</a>&nbsp;albo&nbsp;<a href="https://pl.wikipedia.org/w/index.php?title=Tapestry_(java)&amp;action=edit&amp;redlink=1">Tapestry</a>.</p>\r\n\r\n<p>Problem z wzorcem projektowym&nbsp;<a href="https://pl.wikipedia.org/wiki/Model-View-Controller">MVC</a>&nbsp;polega na stworzeniu przejrzystego szablonu dla stworzenia czÄ™Å›ci Modelu (np. w&nbsp;<a href="https://pl.wikipedia.org/wiki/Struts">Apache Struts</a>). MoÅ¼liwoÅ›Ä‡ wsp&oacute;Å‚pracy Springa z takimi wzorcami oznacza, Å¼e programiÅ›ci mogÄ… szybko zrefaktorowaÄ‡ (ang.&nbsp;<em>refactoring</em>) nieudanÄ… implementacjÄ™ i uÅ¼ywaÄ‡ springowej warstwy abstrakcji JDBC.</p>\r\n', '2016-02-10 11:49:05', 'template', 3, 4),
(8, 'HTML 5', 'HTML5 â€“ jÄ™zyk wykorzystywany do tworzenia i prezentowania stron internetowych www. Jest rozwiniÄ™ciem jÄ™zyka HTML 4 i jego XML-owej odmiany (XHTML 1), opracowywane w ramach prac grupy roboczej WHATWG (Web Hypertext Application Technology Working Group) i W3C[1].', '<p>Jest to konkurencyjna specyfikacja w stosunku do specyfikacji&nbsp;<a href="https://pl.wikipedia.org/wiki/XHTML">XHTML</a>&nbsp;2<a href="https://pl.wikipedia.org/wiki/HTML5#cite_note-2">[2]</a>, kt&oacute;rej rozw&oacute;j zostaÅ‚ porzucony 2 lipca 2009 roku &ndash; wsparcie wszystkich Å›rodowisk i producent&oacute;w przeglÄ…darek ukierunkowane jest na HTML 5<a href="https://pl.wikipedia.org/wiki/HTML5#cite_note-3">[3]</a>. NazwÄ™ moÅ¼na zapisywaÄ‡ jako&nbsp;<em>HTML 5</em>&nbsp;&ndash; jako wersjÄ™ lub&nbsp;<em>HTML5</em>&nbsp;&ndash; jako nazwÄ™. Prace nad specyfikacjÄ… zostaÅ‚y ukoÅ„czone w&nbsp;<a href="https://pl.wikipedia.org/wiki/2014">2014</a>&nbsp;roku &ndash; 28 paÅºdziernika&nbsp;<a href="https://pl.wikipedia.org/wiki/Standard">standard</a>&nbsp;zostaÅ‚ oficjalnie wydany jako rekomendacja W3C<a href="https://pl.wikipedia.org/wiki/HTML5#cite_note-html5rec-4">[4]</a>. Dwa lata p&oacute;Åºniej &ndash; w&nbsp;<a href="https://pl.wikipedia.org/wiki/2016">2016</a>&nbsp;roku &ndash; ma byÄ‡ gotowy HTML 5.1; w&oacute;wczas ma byÄ‡ takÅ¼e zaprezentowany szkic standardu HTML 5.2<a href="https://pl.wikipedia.org/wiki/HTML5#cite_note-5">[5]</a><a href="https://pl.wikipedia.org/wiki/HTML5#cite_note-6">[6]</a>.</p>\r\n\r\n<p>GÅ‚&oacute;wna r&oacute;Å¼nica pomiÄ™dzy HTML 5 a XHTML 2 polega na tym, Å¼e HTML 5 jest pisane z myÅ›lÄ… o&nbsp;<a href="https://pl.wikipedia.org/wiki/Kompatybilno%C5%9B%C4%87_wsteczna">kompatybilnoÅ›ci wstecznej</a>, podczas gdy XHTML 2 zrywaÅ‚o z kompatybilnoÅ›ciÄ….</p>\r\n\r\n<p>HTML5 poza dodaniem nowych element&oacute;w, usprawniajÄ…cych tworzenie serwis&oacute;w i aplikacji internetowych, doprecyzowuje wiele niejasnoÅ›ci w specyfikacji HTML 4, dotyczÄ…cych przede wszystkim sposobu obsÅ‚ugi bÅ‚Ä™d&oacute;w. NiejasnoÅ›ci co do sposobu, w jaki przeglÄ…darki powinny obsÅ‚ugiwaÄ‡ bÅ‚Ä™dy w kodzie HTML sÄ… jednÄ… z podstawowych przyczyn, dla kt&oacute;rej wiele serwis&oacute;w internetowych, napisanych z naruszeniem specyfikacji, w r&oacute;Å¼nych przeglÄ…darkach dziaÅ‚a w inny spos&oacute;b &ndash; w niekt&oacute;rych dziaÅ‚ajÄ…c, w innych nie. DziÄ™ki HTML-owi 5 obsÅ‚uga bÅ‚Ä™d&oacute;w ma byÄ‡ ta sama we wszystkich przeglÄ…darkach, czyli&nbsp;<em>zÅ‚y</em>&nbsp;element bÄ™dzie dziaÅ‚aÄ‡ w kaÅ¼dej przeglÄ…darce albo Å¼adnej.</p>\r\n\r\n<p>HTML5 takÅ¼e stawia na semantykÄ™. Element&nbsp;<code>&lt;div&gt;</code>&nbsp;traci na znaczeniu na rzecz&nbsp;<code>&lt;header&gt; &lt;main&gt; &lt;article&gt; &lt;aside&gt; &lt;footer&gt; &lt;nav&gt;</code>, a dodane zostajÄ… m.in.&nbsp;<code>&lt;canvas&gt; &lt;figure&gt; &lt;details&gt; &lt;summary&gt;</code>. Element<code>&lt;span&gt;</code>&nbsp;ma byÄ‡ mniej uÅ¼ywany na rzecz&nbsp;<code>&lt;mark&gt; &lt;output&gt; &lt;var&gt; &lt;u&gt; &lt;s&gt;</code>&nbsp;(ostatnie dwa znaczniki byÅ‚y w HTML4 przestarzaÅ‚e &ndash;&nbsp;<em>deprecated</em>).</p>\r\n\r\n<p>Grupa pracujÄ…ca nad HTML5 przyjÄ™Å‚a inny spos&oacute;b myÅ›lenia. Na przykÅ‚ad podkreÅ›lenie i przekreÅ›lenie podczas tworzenia HTML 4 uznano za elementy czysto prezentacyjne i przestarzaÅ‚e &ndash; miaÅ‚y zostaÄ‡ usuniÄ™te w HTML5. Nawet kursywÄ™ i pogrubienie czÄ™sto pr&oacute;bowano zastÄ…piÄ‡ emfazÄ…. W myÅ›l tego nowe znaczniki liniowe nie powinny powstaÄ‡. Gdyby spos&oacute;b myÅ›lenia W3C siÄ™ nie zmieniÅ‚, nie powstaÅ‚oby teÅ¼ kilka innych znacznik&oacute;w np.<code>&lt;progress&gt;</code></p>\r\n\r\n<p>HTML 5 wysyÅ‚any jako XML nazywany jest XHTML 5.</p>\r\n', '2016-02-10 11:53:29', 'template', 3, 5),
(9, 'SaSS', 'Sass to preprocesor CSS, ktÃ³ry pozwala na znacznie szybszÄ… i wydajniejszÄ… pracÄ™ z arkuszami stylÃ³w. Dlaczego tak jest? W dalszej czÄ™Å›ci artykuÅ‚u postaram Ci to pokazaÄ‡. Preprocesory pozwalajÄ… na programowanie wÅ›rÃ³d arkuszy stylÃ³w, co daje ogromne moÅ¼liwoÅ›ci przyspieszenia pracy. Jednak nie chciaÅ‚bym CiÄ™ zraziÄ‡ juÅ¼ na samym poczÄ…tku, wiÄ™c jeÅ¼eli nie masz pojÄ™cia o programowaniu to nie przejmuj siÄ™! Funkcje programistyczne w Sass sÄ… Å›wietne, ale i bez ich uÅ¼ywania moÅ¼emy znacznie zwiÄ™kszyÄ‡ swojÄ… produktywnoÅ›Ä‡.', '<h2>Kompilowanie Sass do CSS</h2>\r\n\r\n<p>SÄ… r&oacute;Å¼ne metody kompilacji, ja osobiÅ›cie uÅ¼ywam metody poprzez Å›ledzenie w&nbsp;terminalu, ale sÄ… r&oacute;wnieÅ¼ programy do kompilowania. Jednym z&nbsp;takich program&oacute;w jest &bdquo;Koala&rdquo;.&nbsp;Program moÅ¼esz pobraÄ‡&nbsp;z&nbsp;<a href="http://koala-app.com/">jego oficjalnej strony</a>.</p>\r\n\r\n<p>Kiedy juÅ¼ zainstalujesz program, stw&oacute;rz sobie plik Sass w&nbsp;dowolnym katalogu, np.&nbsp;<code>style.scss</code>. Czym siÄ™ r&oacute;Å¼niÄ… rozszerzenia&nbsp;<code>scss</code>&nbsp;i&nbsp;<code>sass</code>&nbsp;moÅ¼esz dokÅ‚adnie doczytaÄ‡ na stronie dokumentacji. PodstawowÄ… r&oacute;Å¼nicÄ… jest skÅ‚adnia, pliki<code>scss</code>&nbsp;sÄ… zbliÅ¼one do skÅ‚adni CSS, natomiast pliki&nbsp;<code>sass</code>&nbsp;do skÅ‚adni jÄ™zyka Ruby.</p>\r\n\r\n<p>Dobrze, wiÄ™c otwieramy program Koala i&nbsp;wrzucamy katalog z&nbsp;plikiem&nbsp;<code>.scss</code>.</p>\r\n', '2016-02-10 11:57:01', 'template', 3, 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `role`
--

INSERT INTO `role` (`id`, `name`, `description`) VALUES
(1, 'Użytkownik', 'Konto normalnego użytkownika.'),
(2, 'Redaktor', 'Konto redaktorskie, umożliwiające usuwanie postów.'),
(3, 'Administrator', 'Konto umożliwiające wszelkie prace administracyjne w systemie.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `recovery` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `recovery`, `description`, `role_id`) VALUES
(3, 'Admin', 'grzegorzmocny@o2.pl', '1bfaba5b8124e2fbe2de6ab5f377f13e2ea576c8', '3a3378b93483fc34aa4101964e6584ae6d53e947', 'Jestem administratorem tego bloga.', 1),
(4, 'Grzegorz', 'grzegorz@o2.pl', 'd9cad0b1ab9a923278b2ce110919e11b425a3951', '941b9839f6b2c847b78723c405091a874c58f075', 'Jestem Grzesiu, bÄ™dÄ™ pisaÅ‚ ciekawe posty na blogu.', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT dla tabeli `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT dla tabeli `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Ograniczenia dla tabeli `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
