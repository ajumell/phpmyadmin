<?php
/* $Id$ */

/**
 * Translated by:
 *     Igor Mladenovic <mligor@zimco.com>, David Trajkovic <tdavid@ptt.yu>
 *     Mihailo Stefanovic <mikis@users.sourceforge.net>, Branislav Jovanovic <fangorn@eunet.yu>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bajtova', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ned', 'Pon', 'Uto', 'Sre', 'Čet', 'Pet', 'Sub');
$month = array('jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'avg', 'sep', 'okt', 'nov', 'dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y. u %H:%M';
$timespanfmt = '%s dana, %s sati, %s minuta i %s sekundi';

$strAPrimaryKey = 'Primarni ključ je upravo dodat %s';
$strAbortedClients = 'Prekinuto';
$strAbsolutePathToDocSqlDir = 'Unesite kompletnu putanju do direktorijuma docSQL na veb serveru';
$strAccessDenied = 'Pristup odbijen';
$strAccessDeniedExplanation = 'phpMyAdmin je pokušao da se poveže na MySQL server, ali je server odbio povezivanje. Proverite naziv domaćina, korisničko ime i lozinku u config.inc.php i uverite se da odgovaraju podacima koje ste dobili od administratora MySQL servera.';
$strAction = 'Akcija';
$strAddAutoIncrement = 'Dodaj AUTO_INCREMENT vrednost';
$strAddConstraints = 'Dodaj ograničenja';
$strAddDeleteColumn = 'Dodaj/obriši kolonu';
$strAddDeleteRow = 'Dodaj/obriši polje za kriterijum';
$strAddDropDatabase = 'Dodaj DROP DATABASE';
$strAddHeaderComment = 'Dodaj komentar u zaglavlje (\\n razdvaja linije)';
$strAddIfNotExists = 'Dodaj \'IF NOT EXISTS\'';
$strAddIntoComments = 'Dodaj u komentare';
$strAddNewField = 'Dodaj novo polje';
$strAddPrivilegesOnDb = 'Dodaj privilegije na sledećoj bazi';
$strAddPrivilegesOnTbl = 'Dodaj privilegije na sledećoj tabeli';
$strAddSearchConditions = 'Dodaj uslove pretraživanja (deo "WHERE" upita):';
$strAddToIndex = 'Dodaj u ključ &nbsp;%s&nbsp;kolona(e)';
$strAddUser = 'Dodaj novog korisnika';
$strAddUserMessage = 'Dodali ste novog korisnika.';
$strAddedColumnComment = 'Dodat je komentar koloni';
$strAddedColumnRelation = 'Dodata je relacija koloni';
$strAdministration = 'Administracija';
$strAffectedRows = 'Obuhvaćeno redova:';
$strAfter = 'Posle %s';
$strAfterInsertBack = 'Nazad na prethodnu stranu';
$strAfterInsertNewInsert = 'Dodaj još jedan novi red';
$strAfterInsertSame = 'Vrati se na ovu stranu';
$strAll = 'Sve';
$strAllTableSameWidth = 'Prikaz svih tabela iste širine?';
$strAlterOrderBy = 'Promeni redosled u tabeli';
$strAnIndex = 'Ključ je upravo dodat %s';
$strAnalyzeTable = 'Analiziraj tabelu';
$strAnd = 'i';
$strAny = 'Bilo koji';
$strAnyHost = 'Bilo koji domaćin';
$strAnyUser = 'Bilo koji korisnik';
$strArabic = 'Arapski';
$strArmenian = 'Jermenski';
$strAscending = 'Rastući';
$strAtBeginningOfTable = 'Na početku tabele';
$strAtEndOfTable = 'Na kraju tabele';
$strAttr = 'Atributi';
$strAutodetect = 'automatski';
$strAutomaticLayout = 'Automatski raspored';

$strBack = 'Nazad';
$strBaltic = 'Baltički';
$strBeginCut = 'POČETAK REZ';
$strBeginRaw = 'POČETAK SIROVO';
$strBinary = 'Binarni';
$strBinaryDoNotEdit = 'Binarni - ne menjaj';
$strBookmarkAllUsers = 'Dozvoli svakom korisniku da pristupa ovom markeru';
$strBookmarkDeleted = 'Obeleživač je upravo obrisan.';
$strBookmarkLabel = 'Naziv';
$strBookmarkOptions = 'Opcije obeleživača';
$strBookmarkQuery = 'Upamćen SQL-upit';
$strBookmarkThis = 'Upamti SQL-upit';
$strBookmarkView = 'Vidi samo';
$strBrowse = 'Pregled';
$strBrowseForeignValues = 'Pregledaj strane vrednosti';
$strBulgarian = 'Bugarski';
$strBzError = 'phpMyAdmin nije mogao da kompresuje sadržaj baze zbog neispravne BZ2 ekstenzije u ovoj verziji PHP-a. Preporučuje se da podesite <code>$cfg[\'BZipDump\']</code> direktivu u vašoj phpMyAdmin konfiguracionoj datoteci na <code>FALSE</code>. Ako želite da koristite mogućnosti BZ2 kompresije, trebalo bi da pređete na noviju verziju PHP-a. Vidite PHP izveštaj o greškama %s za detalje.';
$strBzip = '"bzip-ovano"';

$strCSVOptions = 'CSV opcije';
$strCalendar = 'Kalendar';
$strCannotLogin = 'Ne mogu da se prijavim na MySQL server';
$strCantLoad = 'ne mogu da učitam ekstenziju %s,<br />molim proverite PHP konfiguraciju';
$strCantLoadRecodeIconv = 'Ne mogu da učitam iconv ili recode ekstenzije potrebne za konverziju skupova znakova, podesite PHP da dozvoli korišćenje ovih ekstenzija ili onemogućite konverziju skupova znakova u phpMyAdmin-u.';
$strCantRenameIdxToPrimary = 'Ne mogu da promenim ključ u PRIMARY (primarni) !';
$strCantUseRecodeIconv = 'Ne mogu da koristim iconv ili libiconv ili recode_string funkcije iako ekstenzija prijavljuje da je učitana. Proverite vašu PHP konfiguraciju.';
$strCardinality = 'Kardinalnost';
$strCarriage = 'Novi red (carriage return): \\r';
$strCaseInsensitive = 'Ne razlikuje mala i velika slova';
$strCaseSensitive = 'Razlikuje mala i velika slova';
$strCentralEuropean = 'Centralnoevropski';
$strChange = 'Promeni';
$strChangeCopyMode = 'Napravi novog korisnika sa istim privilegijama i ...';
$strChangeCopyModeCopy = '... sačuvaj stare.';
$strChangeCopyModeDeleteAndReload = ' ... obriši starog iz tabele korisnika i zatim ponovo učitaj privilegije.';
$strChangeCopyModeJustDelete = ' ... obriši stare iz tabela korisnika.';
$strChangeCopyModeRevoke = ' ... obustavi sve privilegije starog korisnika i zatim ga obriši.';
$strChangeCopyUser = 'Promeni informacije o prijavi / Kopiraj korisnika';
$strChangeDisplay = 'Izaberi polja za prikaz';
$strChangePassword = 'Promeni lozinku';
$strCharset = 'Karakter set';
$strCharsetOfFile = 'Karakter set datoteke:';
$strCharsets = 'Kodne strane';
$strCharsetsAndCollations = 'Karakter setovi i sortiranje';
$strCheckAll = 'Označi sve';
$strCheckOverhead = 'Proveri prekoračenja';
$strCheckPrivs = 'Proveri privilegije';
$strCheckPrivsLong = 'Proveri privilegije za bazu &quot;%s&quot;.';
$strCheckTable = 'Proveri tabelu';
$strChoosePage = 'Izaberite stranu koju menjate';
$strColComFeat = 'Prikazujem komentare kolone';
$strCollation = 'Sortiranje';
$strColumnNames = 'Imena kolona';
$strColumnPrivileges = 'Privilegije vezane za kolone';
$strCommand = 'Naredba';
$strComments = 'Komentari';
$strCommentsForTable = 'KOMENTARI TABELE';
$strCompleteInserts = 'Kompletan INSERT (sa imenima polja)';
$strCompression = 'Kompresija';
$strConfigFileError = 'phpMyAdmin nije mogao da pročita vašu konfiguracionu datoteku!<br />Ovo se može desiti ako PHP nađe grešku u procesiranju ili ne može da pronađe datoteku.<br />Pozovite konfiguracionu datoteku direktno koristeći donji link i pročitajte poruke o grešci koje dobijate. U većini slučajeve negde nedostaje navodnik ili tačka-zarez.<br />Ako dobijete praznu stranu, sve je u redu.';
$strConfigureTableCoord = 'Podesite koordinate za tabelu %s';
$strConnectionError = 'Ne mogu da se povežem: neispravna podešavanja.';
$strConnections = 'Konekcije';
$strConstraintsForDumped = 'Ograničenja za izvezene tabele';
$strConstraintsForTable = 'Ograničenja za tabele';
$strCookiesRequired = 'Kolačići (Cookies) moraju u ovom slučaju biti aktivni.';
$strCopyTable = 'Kopiraj tabelu u (baza<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s je kopirana u %s.';
$strCopyTableSameNames = 'Ne mogu da kopiram tabelu u samu sebe!';
$strCouldNotKill = 'phpMyAdmin nije mogao da prekine proces %s. Verovatno je već zatvoren.';
$strCreate = 'Napravi';
$strCreateIndex = 'Napravi ključ na&nbsp;%s&nbsp;kolona';
$strCreateIndexTopic = 'Napravi novi ključ';
$strCreateNewDatabase = 'Napravi novu bazu podataka';
$strCreateNewTable = 'Napravi novu tabelu u bazi %s';
$strCreatePage = 'Napravi novu stranu';
$strCreatePdfFeat = 'Pravljenje PDF-ova';
$strCreationDates = 'Datumi kreiranja/ažuriranja/provere';
$strCriteria = 'Kriterijum';
$strCroatian = 'Hrvatski';
$strCyrillic = 'Ćirilični';
$strCzech = 'Češki';
$strCzechSlovak = 'Češko-slovački';

$strDBComment = 'Komentar baze:';
$strDBGContext = 'Kontekst';
$strDBGContextID = 'Kontekst ID';
$strDBGHits = 'Pogodaka';
$strDBGLine = 'Linija';
$strDBGMaxTimeMs = 'Max vreme, ms';
$strDBGMinTimeMs = 'Min vreme, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = 'Vreme/pogodak, ms';
$strDBGTotalTimeMs = 'Ukupno vreme, ms';
$strDBRename = 'Preimenuj bazu u';
$strDanish = 'Danski';
$strData = 'Podaci';
$strDataDict = 'Rečnik podataka';
$strDataOnly = 'Samo podaci';
$strDatabase = 'Baza podataka';
$strDatabaseEmpty = 'Ime baze nije zadato!';
$strDatabaseExportOptions = 'Opcije za izvoz baze';
$strDatabaseHasBeenDropped = 'Baza %s je odbačena.';
$strDatabaseNoTable = 'Baza ne sadrži tabele!';
$strDatabases = 'Baze';
$strDatabasesDropped = '%s baza je uspešno odbačeno.';
$strDatabasesStats = 'Statistika baze';
$strDatabasesStatsDisable = 'Isključi statistike';
$strDatabasesStatsEnable = 'Uključi statistike';
$strDatabasesStatsHeavyTraffic = 'Napomena: uključivanje statistika može prouzrokovati veliki saobraćaj između veb i MySQL servera.';
$strDbPrivileges = 'Privilegije vezane za bazu';
$strDbSpecific = 'Specifično za bazu';
$strDefault = 'Podrazumevano';
$strDefaultValueHelp = 'Za podrazumevanu vrednost, unesite samo jednu vrednost, bez kosih crta ili navodnika u ovom obliku: a';
$strDefragment = 'Defragmentiraj tabelu';
$strDelOld = 'Trenutna strana ima reference na tabele koje više ne postoje. Želite li da obrišete te reference?';
$strDelayedInserts = 'Koristi odložena umetanja';
$strDelete = 'Obriši';
$strDeleteAndFlush = 'Obriši korisnike i ponovo učitaj privilegije.';
$strDeleteAndFlushDescr = 'Ovo je najčistiji način, ali ponovno učitavanje privilegina može da potraje.';
$strDeleted = 'Red je obrisan';
$strDeletedRows = 'Obrisani redovi:';
$strDeleting = 'Brišem %s';
$strDescending = 'Opadajući';
$strDescription = 'Opis';
$strDictionary = 'rečnik';
$strDisableForeignChecks = 'Isključi provere spoljnih ključeva';
$strDisabled = 'Onemogućeno';
$strDisplayFeat = 'Prikaži osobine';
$strDisplayOrder = 'Redosled prikaza:';
$strDisplayPDF = 'Prikaži PDF shemu';
$strDoAQuery = 'Napravi "upit po primeru" (džoker: "%")';
$strDoYouReally = 'Da li stvarno hoćete da ';
$strDocu = 'Dokumentacija';
$strDrop = 'Odbaci';
$strDropDatabaseStrongWarning = 'Ovim ćete UNIŠTITI kompletnu bazu podataka!';
$strDropSelectedDatabases = 'Odbaci izabrane baze';
$strDropUsersDb = 'Odbaci baze koje se zovu isto kao korisnici.';
$strDumpSaved = 'Sadržaj baze je sačuvan u datoteku %s.';
$strDumpXRows = 'Prikaži %s redova počevši od reda %s.';
$strDumpingData = 'Prikaz podataka tabele';
$strDynamic = 'dinamički';

$strEdit = 'Promeni';
$strEditPDFPages = 'Uređivanje PDF strana';
$strEditPrivileges = 'Promeni privilegije';
$strEffective = 'Efektivne';
$strEmpty = 'Isprazni';
$strEmptyResultSet = 'MySQL je vratio prazan rezultat (nula redova).';
$strEnabled = 'Omogućeno';
$strEncloseInTransaction = 'Obavi izvoz u transakciji';
$strEnd = 'Kraj';
$strEndCut = 'KRAJ REZ';
$strEndRaw = 'KRAJ SIROVO';
$strEnglish = 'Engleski';
$strEnglishPrivileges = ' Napomena: MySQL imena privilegija moraju da budu na engleskom ';
$strError = 'Greška';
$strEstonian = 'Estonski';
$strExcelEdition = 'Excel izdanje';
$strExcelOptions = 'Excel opcije';
$strExecuteBookmarked = 'Izvrši upamćen upit';
$strExplain = 'Objasni SQL';
$strExport = 'Izvoz';
$strExtendedInserts = 'Prošireni INSERT';
$strExtra = 'Dodatno';

$strFailedAttempts = 'Neuspelih pokušaja';
$strField = 'Polje';
$strFieldHasBeenDropped = 'Polje %s je obrisano';
$strFields = 'Polja';
$strFieldsEmpty = ' Broj polja je nula! ';
$strFieldsEnclosedBy = 'Polja ograničena sa';
$strFieldsEscapedBy = 'Escape karakter &nbsp; &nbsp; &nbsp;';
$strFieldsTerminatedBy = 'Polja razdvojena sa';
$strFileAlreadyExists = 'Datoteka %s već postoji na serveru, promenite ime datoteke ili uključite opciju prepisivanja.';
$strFileCouldNotBeRead = 'Datoteku nije moguće pročitati';
$strFileNameTemplate = 'Šablon imena datoteke';
$strFileNameTemplateHelp = 'Koristi __DB__ za ime baze, __TABLE__ za ime tabele  i %sbilo koju strftime%s opciju za specifikaciju vremena, i ekstenzija će automatski biti dodata. Sav ostali tekst biće sačuvan.';
$strFileNameTemplateRemember = 'zapamti šablon';
$strFixed = 'sređeno';
$strFlushPrivilegesNote = 'Napomena: phpMyAdmin uzima privilegije korisnika direktno iz MySQL tabela privilegija. Sadržaj ove tabele može se razlikovati od privilegija koje server koristi ako su vršene ručne izmene. U tom slučaju %sponovo učitajte privilegije%s pre nego što nastavite.';
$strFlushTable = 'Osveži tabelu ("FLUSH")';
$strFormEmpty = 'Nedostaje vrednost u obrascu!';
$strFormat = 'Format';
$strFullText = 'Pun tekst';
$strFunction = 'Funkcija';

$strGenBy = 'Generisao';
$strGenTime = 'Vreme kreiranja';
$strGeneralRelationFeat = 'Opšte osobine relacija';
$strGeorgian = 'Gruzijski';
$strGerman = 'Nemački';
$strGlobal = 'globalno';
$strGlobalPrivileges = 'Globalne privilegije';
$strGlobalValue = 'Globalna vrednost';
$strGo = 'Kreni';
$strGrantOption = 'Omogući';
$strGreek = 'Grčki';
$strGzip = '"gzip-ovano"';

$strHasBeenAltered = 'je promenjen(a).';
$strHasBeenCreated = 'je kreiran(a).';
$strHaveToShow = 'Morate izabrati bar jednu kolonu za prikaz';
$strHebrew = 'Hebrejski';
$strHexForBinary = 'Koristi heksadecimalno za binarna polja';
$strHome = 'Početna strana';
$strHomepageOfficial = 'phpMyAdmin veb sajt';
$strHost = 'Domaćin';
$strHostEmpty = 'Ime domaćina je prazno!';
$strHungarian = 'Mađarski';

$strIcelandic = 'Islandski';
$strId = 'ID';
$strIdxFulltext = 'Tekst ključ';
$strIfYouWish = 'Ako želite da izlistate samo neke kolone u tabeli, navedite ih razdvojene zarezom';
$strIgnore = 'Ignoriši';
$strIgnoreInserts = 'Ignoriši duplikate pri umetanju';
$strIgnoringFile = 'Ignorišem datoteku %s';
$strImportDocSQL = 'Uvoz docSQL datoteka';
$strImportFiles = 'Uvoz datoteka';
$strImportFinished = 'Uvoz završen';
$strInUse = 'se koristi';
$strIndex = 'Ključ';
$strIndexHasBeenDropped = 'Ključ %s je obrisan';
$strIndexName = 'Ime ključa :';
$strIndexType = 'Tip ključa :';
$strIndexes = 'Ključevi';
$strInnodbStat = 'InnoDB status';
$strInsecureMySQL = 'Vaša konfiguraciona datoteka sadrži podešavanja (root bez lozinke) koja odgovaraju standardnom MySQL privilegovanom nalogu. Vaš MySQL server radi sa ovim podešavanjima, otvoren je za upade, i zaista treba da ispravite ovaj sigurnosni rizik.';
$strInsert = 'Novi zapis';
$strInsertAsNewRow = 'Unesi kao novi red';
$strInsertNewRow = 'Unesi novi red';
$strInsertTextfiles = 'Uvezi podatke iz tekstualne datoteke';
$strInsertedRowId = 'ID umetnutih redova:';
$strInsertedRows = 'Uneseno redova:';
$strInstructions = 'Uputstva';
$strInternalNotNecessary = '* Unutrašnja relacija nije neophodna kada postoji i u InnoDB.';
$strInternalRelations = 'Unutrašnje relacije';

$strJapanese = 'Japanski';
$strJumpToDB = 'Pređi na bazu &quot;%s&quot;.';
$strJustDelete = 'Samo obriši korisnike iz tabele privilegija.';
$strJustDeleteDescr = '&quot;Obrisani&quot; korisnici će i dalje imati pristup serveru dok privilegije ne budu ponovo učitane.';

$strKeepPass = 'Nemoj da menjaš lozinku';
$strKeyname = 'Ime ključa';
$strKill = 'Obustavi';
$strKorean = 'Korejski';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX opcije';
$strLandscape = 'Položeno';
$strLatexCaption = 'Komentar tabele';
$strLatexContent = 'Sadržaj tabele __TABLE__';
$strLatexContinued = '(nastavljeno)';
$strLatexContinuedCaption = 'Nastavljen komentar tabele';
$strLatexIncludeCaption = 'Uključi komentar tabele';
$strLatexLabel = 'Oznaka ključa';
$strLatexStructure = 'Struktura tabele __TABLE__';
$strLatvian = 'Letonski';
$strLengthSet = 'Dužina/Vrednost*';
$strLimitNumRows = 'Broj redova po strani';
$strLineFeed = 'Oznaka za kraj linije: \\n';
$strLinesTerminatedBy = 'Linije se završavaju sa';
$strLinkNotFound = 'Veza nije pronađena';
$strLinksTo = 'Veze ka';
$strLithuanian = 'Litvanski';
$strLoadExplanation = 'Najbolji metod je već izabran, ali ga možete promeniti ako ne radi.';
$strLoadMethod = 'LOAD metod';
$strLocalhost = 'Lokalni';
$strLocationTextfile = 'Lokacija tekstualne datoteke';
$strLogPassword = 'Lozinka:';
$strLogServer = 'Server';
$strLogUsername = 'Korisničko ime:';
$strLogin = 'Prijavljivanje';
$strLoginInformation = 'Podaci o prijavi';
$strLogout = 'Odjavljivanje';

$strMIMETypesForTable = 'MIME TIPOVI ZA TABELU';
$strMIME_MIMEtype = 'MIME-tipovi';
$strMIME_available_mime = 'Dostupni MIME-tipovi';
$strMIME_available_transform = 'Dostupne transformacije';
$strMIME_description = 'Opis';
$strMIME_nodescription = 'Nema opisa za ovu transformaciju.<br />Molimo pitajte autora šta %s radi.';
$strMIME_transformation = 'Tranformacije čitača';
$strMIME_transformation_note = 'Za listu dostupnih opcija transformacije i njihove transformacije MIME-tipova, kliknite na %sopise transformacija%s';
$strMIME_transformation_options = 'Opcije transformacije';
$strMIME_transformation_options_note = 'Molimo unesite vrednosti za opcije transformacije koristeći ovaj oblik: \'a\',\'b\',\'c\'...<br />Ako treba da unesete obrnutu kosu crtu ("\\") ili apostrof ("\'") u te vrednosti, stavite obrnutu kosu crtu ispred njih (na primer \'\\\\xyz\' ili \'a\\\'b\').';
$strMIME_without = 'MIME-tipovi prikazani u kurzivu nemaju odvojene funkcije transformacije.';
$strMaximumSize = 'Maksimalna večičina: %s%s';
$strModifications = 'Izmene su sačuvane';
$strModify = 'Promeni';
$strModifyIndexTopic = 'Izmeni ključ';
$strMoreStatusVars = 'Još statusnih promenljivih';
$strMoveTable = 'Pomeri tabelu u (baza<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s je pomerena u %s.';
$strMoveTableSameNames = 'Ne mogu da premestim tabelu u samu sebe!';
$strMultilingual = 'višejezički';
$strMustSelectFile = 'Morate izabrati datoteku koju želite da umetnete.';
$strMySQLCharset = 'MySQL set karaktera';
$strMySQLConnectionCollation = 'Sortiranje za MySQL vezu';
$strMySQLReloaded = 'MySQL ponovo pokrenut.';
$strMySQLSaid = 'MySQL reče: ';
$strMySQLServerProcess = 'MySQL %pma_s1% pokrenut na %pma_s2%, prijavljen kao %pma_s3%';
$strMySQLShowProcess = 'Prikaži listu procesa';
$strMySQLShowStatus = 'Prikaži MySQL informacije o toku rada';
$strMySQLShowVars = 'Prikaži MySQL sistemske promenljive';

$strName = 'Ime';
$strNeedPrimaryKey = 'Trebalo bi da definišete primarni ključ za ovu tabelu.';
$strNext = 'Sledeći';
$strNo = 'Ne';
$strNoDatabases = 'Baza ne postoji';
$strNoDatabasesSelected = 'Nije izabrana ni jedna baza.';
$strNoDescription = 'nema opisa';
$strNoDropDatabases = '"DROP DATABASE" komanda je onemogućena.';
$strNoExplain = 'Preskoči objašnjavanje SQL-a';
$strNoFrames = 'phpMyAdmin preferira čitače koji podržavaju okvire.';
$strNoIndex = 'Ključ nije definisan!';
$strNoIndexPartsDefined = 'Delovi ključa nisu definisani!';
$strNoModification = 'Nema izmena';
$strNoOptions = 'Ne postoje opcije za ovaj format';
$strNoPassword = 'Nema lozinke';
$strNoPermission = 'Veb serveru nije dozvoljeno da sačuva datoteku %s.';
$strNoPhp = 'bez PHP koda';
$strNoPrivileges = 'Nema privilegija';
$strNoQuery = 'Nema SQL upita!';
$strNoRights = 'Nije Vam dozvoljeno da budete ovde!';
$strNoRowsSelected = 'Nema odabranih redova';
$strNoSpace = 'Nedovoljno prostora za snimanje datoteke %s.';
$strNoTablesFound = 'Tabele nisu pronađene u bazi.';
$strNoUsersFound = 'Korisnik nije nađen.';
$strNoValidateSQL = 'Preskoči proveru SQL-a';
$strNone = 'nema';
$strNotNumber = 'Ovo nije broj!';
$strNotOK = 'nije u redu';
$strNotSet = '<b>%s</b> tabela nije pronađena ili nije postavljena u %s';
$strNotValidNumber = 'nije odgovarajući broj kolone!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s pogodaka unutar tabele <i>%s</i>';
$strNumSearchResultsTotal = '<b>Ukupno:</b> <i>%s</i> pogodaka';
$strNumTables = 'Tabele';

$strOK = 'U redu';
$strOftenQuotation = 'Navodnici koji se koriste. OPCIONO se misli da neka polja mogu, ali ne moraju da budu pod znacima navoda.';
$strOperations = 'Operacije';
$strOperator = 'Operator';
$strOptimizeTable = 'Optimizuj tabelu';
$strOptionalControls = 'Opciono. Znak koji prethodi specijalnim znacima.';
$strOptionally = 'OPCIONO';
$strOr = 'ili';
$strOverhead = 'Prekoračenje';
$strOverwriteExisting = 'Prepiši postojeće datoteke';

$strPHP40203 = 'Koristite PHP 4.2.3, koji ima ozbiljan bag sa višebajtnim stringovima (mbstring). Pogledajte izveštaj o grešci br. 19404. Ova verzija PHP-a se ne preporučuje za korišćenje sa phpMyAdmin.';
$strPHPVersion = 'verzija PHP-a';
$strPageNumber = 'Broj strane:';
$strPaperSize = 'Dimenzije papira';
$strPartialText = 'Deo teksta';
$strPassword = 'Lozinka';
$strPasswordChanged = 'Lozinka za %s je uspešno promenjena.';
$strPasswordEmpty = 'Lozinka je prazna!';
$strPasswordNotSame = 'Lozinke nisu identične!';
$strPdfDbSchema = 'Shema baze "%s" - Strana %s';
$strPdfInvalidTblName = 'Tabela "%s" ne postoji!';
$strPdfNoTables = 'Nema tabela';
$strPerHour = 'na sat';
$strPerMinute = 'u minutu';
$strPerSecond = 'u sekundi';
$strPersian = 'Persijski';
$strPhoneBook = 'telefonski imenik';
$strPhp = 'Napravi PHP kod';
$strPmaDocumentation = 'phpMyAdmin dokumentacija';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direktiva MORA biti podešena u konfiguracionoj datoteci!';
$strPolish = 'Poljski';
$strPortrait = 'Uspravno';
$strPos1 = 'Početak';
$strPrevious = 'Prethodna';
$strPrimary = 'Primarni';
$strPrimaryKeyHasBeenDropped = 'Primarni ključ je obrisan';
$strPrimaryKeyName = 'Ime primarnog ključa mora da bude... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mora</b> biti ime <b>samo</b> primarnog ključa!)';
$strPrint = 'Štampaj';
$strPrintView = 'Za štampu';
$strPrintViewFull = 'Pogled za štampu (sa punim tekstom)';
$strPrivDescAllPrivileges = 'Uključuje sve privilegije osim GRANT.';
$strPrivDescAlter = 'Dozvoljava izmenu struktura postojećih tabela.';
$strPrivDescCreateDb = 'Dozvoljava kreiranje novih baza i tabela.';
$strPrivDescCreateTbl = 'Dozvoljava kreiranje novih tabela.';
$strPrivDescCreateTmpTable = 'Dozvoljava kreiranje privremenih tabela..';
$strPrivDescDelete = 'Dozvoljava brisanje podataka.';
$strPrivDescDropDb = 'Dozvoljava odbacivanje baza i tabela.';
$strPrivDescDropTbl = 'Dozvoljava odbacivanje tabela.';
$strPrivDescExecute = 'Dozvoljava pokretanje sačuvanih procedura. Nema efekta u ovoj verziji MySQL-a.';
$strPrivDescFile = 'Dozvoljava uvoz podataka i njihov izvoz u datoteke.';
$strPrivDescGrant = 'Dozvoljava dodavanje korisnika i privilegija bez ponovnog učitavanja tabela privilegija.';
$strPrivDescIndex = 'Dozvoljava kreiranje i brisanje ključeva.';
$strPrivDescInsert = 'Dozvoljava umetanje i zamenu podataka.';
$strPrivDescLockTables = 'Dozvoljava zaključavanje tabela tekućim procesima.';
$strPrivDescMaxConnections = 'Ograničava broj novih konekcija koje korisnik može ta otvori na sat.';
$strPrivDescMaxQuestions = 'Ograničava broj upita koje korisnik može da uputi serveru za sat.';
$strPrivDescMaxUpdates = 'Ograničava broj komandi koje menjaju tabele ili baze koje korisnik može da izvrši na sat.';
$strPrivDescProcess3 = 'Dozvoljava prekidanje procesa drugih korisnika.';
$strPrivDescProcess4 = 'Dozvoljava pregled kompletnih upita u listi procesa.';
$strPrivDescReferences = 'Nema efekta u ovoj verziji MySQL-a.';
$strPrivDescReload = 'Dozvoljava ponovno učitavanje podešavanja servera i pražnjenje keša servera.';
$strPrivDescReplClient = 'Daje pravo korisniku da pita gde su glavni/pomoćni serveri.';
$strPrivDescReplSlave = 'Potrebno zbog pomoćnih servera za replikaciju.';
$strPrivDescSelect = 'Dozvoljava čitanje podataka.';
$strPrivDescShowDb = 'Daje pristup kompletnoj listi baza.';
$strPrivDescShutdown = 'Dozvoljava gašenje servera.';
$strPrivDescSuper = ' Dozvoljava povezivanje iako je dostignut maksimalan broj dozvoljenih veza; Neophodno za većinu administrativnih opcija kao što su podešavanje globalnih promenljivih ili prekidanje procesa ostalih korisnika.';
$strPrivDescUpdate = 'Dozvoljava izmenu podataka.';
$strPrivDescUsage = 'Nema privilegija.';
$strPrivileges = 'Privilegije';
$strPrivilegesReloaded = 'Privilegije su uspešno ponovo učitane.';
$strProcesslist = 'Lista procesa';
$strProperties = 'Svojstva';
$strPutColNames = 'Stavi imena polja u prvi red';

$strQBE = 'Upit po primeru';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryFrame = 'Prozor za upite';
$strQueryOnDb = 'SQL upit na bazi <b>%s</b>:';
$strQuerySQLHistory = 'SQL istorijat';
$strQueryStatistics = '<b>Statistike upita</b>: %s upita je postavljeno serveru od njegovog pokretanja.';
$strQueryTime = 'Upit je trajao %01.4f sekundi';
$strQueryType = 'Vrsta upita';
$strQueryWindowLock = 'Ne prepisuj ovaj upit izvan prozora';

$strReType = 'Ponovite unos';
$strReceived = 'Primljeno';
$strRecords = 'Zapisi';
$strReferentialIntegrity = 'Proveri referencijalni integritet:';
$strRefresh = 'Osveži';
$strRelationNotWorking = 'Dodatne mogućnosti za rad sa povezanim tabelama su isključene. Da biste saznali zašto, kliknite %sovde%s.';
$strRelationView = 'Relacioni pogled';
$strRelationalSchema = 'Relaciona shema';
$strRelations = 'Relacije';
$strRelationsForTable = 'RELACIJE TABELE';
$strReloadFailed = 'Ponovno pokretanje MySQL-a nije uspelo.';
$strReloadMySQL = 'Ponovo pokreni MySQL';
$strReloadingThePrivileges = 'Ponovo učitavam privilegije';
$strRemoveSelectedUsers = 'Ukloni izabrane korisnike';
$strRenameDatabaseOK = 'Baza %s je preimenovana u %s';
$strRenameTable = 'Promeni ime tabele u ';
$strRenameTableOK = 'Tabeli %s promenjeno ime u %s';
$strRepairTable = 'Popravi tabelu';
$strReplace = 'Zameni';
$strReplaceNULLBy = 'Zameni NULL sa';
$strReplaceTable = 'Zameni podatke u tabeli sa podacima iz datoteke';
$strReset = 'Poništi';
$strResourceLimits = 'Ograničenja resursa';
$strRevoke = 'Zabrani';
$strRevokeAndDelete = 'Obustavi sve aktivne privilegije korisnika i zatim ih obriši.';
$strRevokeAndDeleteDescr = 'Korisnici će i dalje imati USAGE privilegije dok se privilegije ponovo ne učitaju.';
$strRevokeMessage = 'Zabranili ste privilegije za %s';
$strRomanian = 'Rumunski';
$strRowLength = 'Dužina reda';
$strRowSize = 'Veličina reda';
$strRows = 'Redova';
$strRowsFrom = ' redova počev od reda';
$strRowsModeFlippedHorizontal = 'horizontalnom (rotirana zaglavlja)';
$strRowsModeHorizontal = 'horizontalnom';
$strRowsModeOptions = 'u %s modu i ponovi zaglavlje posle svakog %s reda';
$strRowsModeVertical = 'vertikalnom';
$strRowsStatistic = 'Statistike reda';
$strRunQuery = 'Izvrši SQL upit';
$strRunSQLQuery = 'Izvrši SQL upit(e) na bazi %s';
$strRunning = 'na serveru %s';
$strRussian = 'Ruski';

$strSQL = 'SQL';
$strSQLExportType = 'Tip izvoza';
$strSQLOptions = 'SQL opcije';
$strSQLParserBugMessage = 'Postoji mogućnost da ste pronašli bag u SQL parseru. Molimo ispitajte svoj upit pažljivo, i proverite da su navodnici ispravni i da ne nedostaju. Ostali mogući razlozi greške mogu biti da ste poslali binarnu datoteku van oblasti za običan tekst. Možete probati svoj upit u MySQL sučelju komandne linije. Donja poruka o grešci MySQL servera, ako je ima, može vam pomoći u otkrivanju problema. Ako i dalje imate probleme ili ako parser ne uspeva tamo gde uspeva sučelje komandne linije, svedite svoj SQL upit na jedan jedini upit koji stvara probleme i pošaljite nam izveštaj o grešci sa delom koda u donjoj REZ sekciji:';
$strSQLParserUserError = 'Izgleda da postoji greška u vašem SQL upitu. Ovde je poruka o greški MySQL servera, koja vam može pomoći u otkrivanju problema';
$strSQLQuery = 'SQL upit';
$strSQLResult = 'SQL rezultat';
$strSQPBugInvalidIdentifer = 'Neispravan identifikator';
$strSQPBugUnclosedQuote = 'Navodnik nije zatvoren';
$strSQPBugUnknownPunctuation = 'Nepoznat string interpunkcije';
$strSave = 'Sačuvaj';
$strSaveOnServer = 'Sačuvaj na server u direktorijum %s';
$strScaleFactorSmall = 'Faktor umanjenja je premali da bi shema stala na jednu stranu';
$strSearch = 'Pretraživanje';
$strSearchFormTitle = 'Pretraživanje baze';
$strSearchInTables = 'Unutar tabela:';
$strSearchNeedle = 'Reči ili vrednosti koje se traže (džoker: "%"):';
$strSearchOption1 = 'bar jednu od reči';
$strSearchOption2 = 'sve reči';
$strSearchOption3 = 'tačan izraz';
$strSearchOption4 = 'kao regularni izraz';
$strSearchResultsFor = 'Rezultati pretrage za "<i>%s</i>" %s:';
$strSearchType = 'Traži:';
$strSecretRequired = 'Konfiguraciona datoteka zahteva tajnu lozinku (blowfish_secret).';
$strSelectADb = 'Izaberite bazu';
$strSelectAll = 'Izaberi sve';
$strSelectFields = 'Izaberi polja (najmanje jedno)';
$strSelectNumRows = 'u upitu';
$strSelectTables = 'Izaberi tabele';
$strSend = 'Sačuvaj kao datoteku';
$strSent = 'Poslato';
$strServer = 'Server';
$strServerChoice = 'Izbor servera';
$strServerNotResponding = 'Server ne odgovara';
$strServerStatus = 'Informacije o toku rada';
$strServerStatusUptime = 'Ovaj MySQL server radi već %s. Pokrenut je %s.';
$strServerTabProcesslist = 'Procesi';
$strServerTabVariables = 'Promenljive';
$strServerTrafficNotes = '<b>Saobraćaj servera</b>: Tabele pokazuju statistike mrežnog saobraćaja na ovom MySQL serveru od njegovog pokretanja.';
$strServerVars = 'Serverske promenljive i podešavanja';
$strServerVersion = 'Verzija servera';
$strSessionValue = 'Vrednost sesije';
$strSetEnumVal = 'Ako je polje "enum" ili "set", unesite vrednosti u formatu: \'a\',\'b\',\'c\'...<br />Ako vam treba obrnuta kosa crta ("\\") ili apostrof ("\'") koristite ih u "izbegnutom" (escaped) obliku (na primer \'\\\\xyz\' ili \'a\\\'b\').';
$strShow = 'Prikaži';
$strShowAll = 'Prikaži sve';
$strShowColor = 'Prikaži boju';
$strShowDatadictAs = 'Format rečnika podataka';
$strShowFullQueries = 'Prikaži kompletne upite';
$strShowGrid = 'Prikaži mrežu';
$strShowPHPInfo = 'Prikaži informacije o PHP-u';
$strShowTableDimension = 'Prikaži dimenzije tabele';
$strShowTables = 'Prikaži tabele';
$strShowThisQuery = 'Prikaži ponovo ovaj upit';
$strShowingRecords = 'Prikaz zapisa';
$strSimplifiedChinese = 'Pojednostavljeni kineski';
$strSingly = '(po jednom polju)';
$strSize = 'Veličina';
$strSlovak = 'Slovački';
$strSlovenian = 'Slovenački';
$strSort = 'Sortiranje';
$strSortByKey = 'Sortiraj po ključu';
$strSpaceUsage = 'Zauzeće';
$strSpanish = 'Španski';
$strSplitWordsWithSpace = 'Reči se odvajaju razmakom (" ").';
$strStatCheckTime = 'Poslednja provera';
$strStatCreateTime = 'Napravljeno';
$strStatUpdateTime = 'Poslednja izmena';
$strStatement = 'Ime';
$strStatus = 'Status';
$strStrucCSV = 'CSV format';
$strStrucData = 'Struktura i podaci';
$strStrucDrop = 'Dodaj \'DROP TABLE\'';
$strStrucExcelCSV = 'CSV za MS Excel';
$strStrucNativeExcel = 'Izvorni MS Excel podaci';
$strStrucOnly = 'Samo struktura';
$strStructPropose = 'Predloži strukturu tabele';
$strStructure = 'Struktura';
$strSubmit = 'Pošalji';
$strSuccess = 'Vaš SQL upit je uspešno izvršen';
$strSum = 'Ukupno';
$strSwedish = 'Švedski';
$strSwitchToTable = 'Pređi na kopiranu tabelu';

$strTable = 'Tabela';
$strTableComments = 'Komentari tabele';
$strTableEmpty = 'Ima tabele je prazno!';
$strTableHasBeenDropped = 'Tabela %s je odbačena';
$strTableHasBeenEmptied = 'Tabela %s je ispražnjena';
$strTableHasBeenFlushed = 'Tabela %s je osvežena';
$strTableMaintenance = 'Radnje na tabeli';
$strTableOfContents = 'Sadržaj';
$strTableOptions = 'Opcije tabele';
$strTableStructure = 'Struktura tabele';
$strTableType = 'Tip tabele';
$strTables = '%s tabela';
$strTakeIt = 'preuzmi';
$strTblPrivileges = 'Privilegije vezane za tabele';
$strTextAreaLength = 'Zbog njehove veličine, polje<br />možda nećete moći da izmenite';
$strThai = 'Tajski';
$strTheContent = 'Sadržaj datoteke je dodat u bazu.';
$strTheContents = 'Podatke sadržane u tabeli zameni sa podacima iz datoteke koji imaju identične primarne i jedinstvene (unique) ključeve.';
$strTheTerminator = 'Separator polja u datoteci.';
$strTheme = 'Tema / stil';
$strThisHost = 'Ovaj server';
$strThisNotDirectory = 'Ovo nije direktorijum';
$strThreadSuccessfullyKilled = 'Proces %s je uspešno prekinut.';
$strTime = 'Vreme';
$strToggleScratchboard = 'Uključi/isključi radnu tablu';
$strTotal = 'ukupno';
$strTotalUC = 'Ukupno';
$strTraditionalChinese = 'Tradicionalni kineski';
$strTraditionalSpanish = 'Tradicionalni španski';
$strTraffic = 'Saobraćaj';
$strTransformation_application_octetstream__download = 'Prikazuje vezu za preuzimanje binarnih podataka za polje. Prva opcija je naziv binarne datoteke. Druga opcija je moguće ime polja reda tabele koji sadrži ime datoteke. Ako zadate drugu opciju, prva mora biti postavljena na prazan string.';
$strTransformation_image_jpeg__inline = 'Prikazuje umanjenu sliku na koju je moguće kliknuti; opcije: širina, visina u pikselima (čuva originalni odnos)';
$strTransformation_image_jpeg__link = 'Prikazuje link ka ovoj slici (npr. direktno preuzimanje iz BLOB-a).';
$strTransformation_image_png__inline = 'Prikaži JPEG slike na strani';
$strTransformation_text_plain__dateformat = 'Uzima TIME, TIMESTAMP ili DATETIME polje i formatira ga koristeći lokalni oblik prikazivanja datuma. Prva opcija je ofset (u satima) koji se dodaje vremenskoj oznaci (podrazumevano: 0). Druga opcija je različit format datuma prema parametrima koji su dostupni za PHP-ov strftime().';
$strTransformation_text_plain__external = 'SAMO LINUX: Pokreće eksternu aplikaciju i popunjava podatke u poljima preko standardnog ulaza. Vraća standardni izlaz aplikacije. Podrazumevano je Tidy, za lepši prikaz HTML koda. Zbog sigurnosnih razloga, morate ručno izmeniti datoteku libraries/transformations/text_plain__external.inc.php i dodati alate koje želite da koristite. Prva opcija je broj programa koje želite da koristite, a druga su parametri programa. Ako se treći parametar postavi na 1 izlaz će biti konvertovan koristeći htmlspecialchars() (podrazumevano je 1). Ako je četvrti parametar postavljen na 1, NOWRAP će biti dodato ćeliji sa sadržajem tako da će izlaz biti prikazan bez izmena. (podrazumevano 1)';
$strTransformation_text_plain__formatted = 'Čuva originalno formatiranje polja. Escaping se ne vrši.';
$strTransformation_text_plain__imagelink = 'Prikazuje sliku i link, polje sadrži naziv datoteke; prva opcija je prefiks kao "http://domain.com/", druga opcija je širina u pikselima, treća je visina.';
$strTransformation_text_plain__link = 'Prikazuje link, polje sadrži naziv datoteke; prva opcija je prefiks kao "http://domain.com/", druga opcija je naslov za link.';
$strTransformation_text_plain__substr = 'Pokazuje samo deo stringa. Prva opcija je ofset koji definiše gde počinje izlaz vašeg teksta (podrazumevano 0). Druga opcija je ofset koji pokazuje koliko će teksta biti prikazano. Ako je nema, sav preostali tekst će biti prikazan. Treća opcija određuje koji će znaci biti dodati izlazu kada se prikaže podstring (podrazumevano: ...) .';
$strTransformation_text_plain__unformatted = 'Prikazuje HTML kod kao HTML entitete. HTML formatiranje se ne prikazuje.';
$strTruncateQueries = 'Prikaži skraćene upite';
$strTurkish = 'Turski';
$strType = 'Tip';

$strUkrainian = 'Ukrajinski';
$strUncheckAll = 'nijedno';
$strUnicode = 'Unikod';
$strUnique = 'Jedinstveni';
$strUnknown = 'nepoznat';
$strUnselectAll = 'ništa';
$strUpdComTab = 'Molimo pogledajte u dokumentaciji kako se ažurira tabela Column_comments';
$strUpdatePrivMessage = 'Ažurirali ste privilegije za %s.';
$strUpdateProfileMessage = 'Profil je promenjen.';
$strUpdateQuery = 'Ažuriraj upit';
$strUpgrade = 'Trebalo bi da unapredite vaš %s server na verziju %s ili noviju.';
$strUsage = 'Zauzeće';
$strUseBackquotes = 'Koristi \' za ograničavanje imena polja';
$strUseHostTable = 'Koristi tabelu domaćina';
$strUseTables = 'Koristi tabele';
$strUseTextField = 'Koristi tekst polje';
$strUseThisValue = 'Koristi ovu vrednost';
$strUser = 'Korisnik';
$strUserAlreadyExists = 'Korisnik %s već postoji!';
$strUserEmpty = 'Ime korisnika nije uneto!';
$strUserName = 'Ime korisnika';
$strUserNotFound = 'Izabrani korisnik nije pronađen u tabeli privilegija.';
$strUserOverview = 'Pregled korisnika';
$strUsersDeleted = 'Izabrani korisnici su uspešno obrisani.';
$strUsersHavingAccessToDb = 'Korisnici koji imaju pristup &quot;%s&quot;';

$strValidateSQL = 'Proveri SQL';
$strValidatorError = 'SQL validator nije mogao da bude pokrenut. Proverite da li su instalirane neophodne PHP ekstenzije opisane u  %sdokumentaciji%s.';
$strValue = 'Vrednost';
$strVar = 'Promenljiva';
$strViewDump = 'Prikaži sadržaj (shemu) tabele';
$strViewDumpDB = 'Prikaži sadržaj (shemu) baze';
$strViewDumpDatabases = 'Prikaži sadržaj (shemu) baze';

$strWebServerUploadDirectory = 'direktorijum za slanje veb servera ';
$strWebServerUploadDirectoryError = 'Direktorijum koji ste izabrali za slanje nije dostupan';
$strWelcome = 'Dobrodošli na %s';
$strWestEuropean = 'Zapadnoevropski';
$strWildcard = 'džoker';
$strWindowNotFound = 'Odredišni prozor pretraživača nije mogao da bude ažuriran. Možda ste zatvorili matični prozor, ili vaš pretraživač onemogućava ažuriranje među prozorima zbog sigurnosnih podešavanja';
$strWithChecked = 'Označeno:';
$strWritingCommentNotPossible = 'Pisanje komentara nije moguće';
$strWritingRelationNotPossible = 'Upisivanje relacije nije moguće';
$strWrongUser = 'Pogrešno korisničko ime/lozinka. Pristup odbijen.';

$strXML = 'XML';

$strYes = 'Da';

$strZeroRemovesTheLimit = 'Napomena: Postavljanje ovih opcija na 0 (nulu) uklanja limite.';
$strZip = '"zipovano"';

$strAddFields = 'Add %s field(s)';  //to translate
$strInsertBookmarkTitle = 'Please insert bookmark title';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';  //to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
$strBinLogName = 'Log name';  //to translate
$strBinLogPosition = 'Position';  //to translate
$strBinLogEventType = 'Event type';  //to translate
$strBinLogServerId = 'Server ID';  //to translate
$strBinLogOriginalPosition = 'Original position';  //to translate
$strBinLogInfo = 'Information';  //to translate
$strBinaryLog = 'Binary log';  //to translate
$strSelectBinaryLog = 'Select binary log to view';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strSwitchToDatabase = 'Switch to copied database';  //to translate
?>
