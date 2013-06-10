<?php
/**
 * Translations of UserOptionStats extension.
 *
 * @file
 * @ingroup Extensions
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$messages = array();

/** English
 * @author Nike
 * @author SPQRobin
 */
$messages['en'] = array(
	'useroptionstats' => 'User option statistics',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Special page]] for reporting on MediaWiki user option usage',
	'uos-warn' => 'PHPlot is not installed!',
	'uos-choose' => 'Choose one of the following user options: $1',
	'uos-choose-hidden' => 'Choose one of the following hidden user options: $1',
	'uos-unknown' => '*Default',
	'uos-other' => '*Other',
	'uos-title' => 'Distribution of values of user option $1',
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Fryed-peach
 * @author Nike
 * @author Purodha
 * @author SPQRobin
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'useroptionstats' => '{{doc-special|UserOptionStats}}',
	'useroptionstats-desc' => '{{desc|name=User Option Stats|url=http://www.mediawiki.org/wiki/Extension:UserOptionStats}}',
	'uos-warn' => 'Used as error message (not warning).

<code>PHPlot</code> is a graph library to create various graphs from a PHP application. See http://www.phplot.com/',
	'uos-choose' => 'Used in [[Special:UserOptionStats]]. Parameters:
* $1 - list of options (comma-separated, with links)
See also:
* {{msg-mw|Uos-choose-hidden}}',
	'uos-choose-hidden' => 'Used in [[Special:UserOptionStats]].

"hidden" refers to the options, as in "hidden preferences".

Parameters:
* $1 - list of hidden options (comma-separated, with links)
See also:
* {{msg-mw|Uos-choose}}',
	'uos-unknown' => 'See example: [[Special:UserOptionStats/ajaxsearch]]

This message is followed by number of the users using the default settings.
{{Identical|Default}}',
	'uos-other' => 'See example: [[Special:UserOptionStats/translate-editlangs]].

This message is followed by {{msg-mw|Word-separator}} and {{msg-mw|Parentheses}} (<code>$1</code> is number of users).
{{Identical|Other}}',
	'uos-title' => 'If the translation is longer than the English string, break it into multiple lines not much longer than the English text each.',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'useroptionstats' => 'Statistieke oor gebruikersinstellings',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Spesiale bladsy]] vir rapportering van Mediawiki gebruikersinstellings',
	'uos-warn' => 'PHPlot is nie geïnstalleer nie!',
	'uos-choose' => 'Kies een van die volgende gebruikersinstellings: $1',
	'uos-unknown' => '*Standaardinstelling',
	'uos-other' => '*Ander',
	'uos-title' => 'Verdeling van die waardes vir van gebruikersinstelling $1',
);

/** Gheg Albanian (Gegë)
 * @author Mdupont
 */
$messages['aln'] = array(
	'useroptionstats' => 'opsion Statistikat e përdoruesve',
	'useroptionstats-desc' => '[[Special:UserOptionStats|faqe Speciale]] për raportimin opsion përdorimin përdorues MediaWiki',
	'uos-warn' => 'PHPlot nuk është instaluar!',
	'uos-choose' => 'Zgjidhni një nga opsionet e përdoruesit e mëposhtme: $1',
	'uos-unknown' => '* Default',
	'uos-other' => '* Të tjera',
	'uos-title' => 'Shpërndarja e vlerave të opsion user $1',
);

/** Aragonese (aragonés)
 * @author Juanpabl
 */
$messages['an'] = array(
	'uos-other' => '*Atras',
);

/** Arabic (العربية)
 * @author DRIHEM
 * @author Meno25
 * @author OsamaK
 */
$messages['ar'] = array(
	'useroptionstats' => 'إحصاءات خيارات المساهمين',
	'useroptionstats-desc' => '[[Special:UserOptionStats|صفحة خاصة]] للإبلاغ عن استخدام خيارات مستخدمي ميدياويكي',
	'uos-warn' => 'PHPlot غير مثبّت!',
	'uos-choose' => 'اختر واحدة من خيارات المستخدم التالية: $1',
	'uos-choose-hidden' => 'اختر واحدة من خيارات المستخدم المخفية التالية: $1',
	'uos-unknown' => '*افتراضي',
	'uos-other' => '*أخرى',
	'uos-title' => 'توزيع القيم لخيار المستخدم $1',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'useroptionstats' => 'ܚܒܝܫܘܬ ܡܢܝܢܐ ܕܓܒܝܬ̈ܐ ܕܡܦܠܚܢܐ',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Meno25
 */
$messages['arz'] = array(
	'uos-other' => '*تانى',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'useroptionstats' => "Estadístiques d'opciones d'usuariu",
	'useroptionstats-desc' => "[[Special:UserOptionStats|Páxina especial]] pa informar del usu de les opciones d'usuariu de MediaWiki",
	'uos-warn' => '¡PHPlot nun ta instaláu!',
	'uos-choose' => "Escueya una de les siguientes opciones d'usuariu: $1",
	'uos-choose-hidden' => "Escueya una de les siguientes opciones d'usuariu tapecíes: $1",
	'uos-unknown' => '*Predeterminao',
	'uos-other' => '*Otru',
	'uos-title' => 'Distribución de los valores de la opción d\'usuariu "$1"',
);

/** Bavarian (Boarisch)
 * @author Man77
 */
$messages['bar'] = array(
	'uos-choose' => 'Suach da ane vu de Eistellungen aus: $1',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 * @author Zedlik
 */
$messages['be-tarask'] = array(
	'useroptionstats' => 'Статыстыка наладаў ўдзельнікаў',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Спэцыяльная старонка]] для стварэньня справаздачы па выкарыстаньню наладаў ўдзельнікаў MediaWiki',
	'uos-warn' => 'PHPlot не ўсталяваны!',
	'uos-choose' => 'Выберыце адну з наступных наладаў удзельніка: $1',
	'uos-choose-hidden' => 'Выберыце адну з наступных схаваных наладаў удзельніка: $1',
	'uos-unknown' => '*Па змоўчваньні',
	'uos-other' => '*Іншая',
	'uos-title' => 'Разьмеркаваньне значэньняў наладаў удзельнікаў $1',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'uos-warn' => 'PHPlot не е инсталиран!',
);

/** Bengali (বাংলা)
 * @author Bellayet
 */
$messages['bn'] = array(
	'uos-unknown' => '*পূর্বনির্ধারিত',
	'uos-other' => '*অন্য',
);

/** Breton (brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'useroptionstats' => 'Stadegoù dibarzhioù an implijer',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Pajenn dibar]] da ziskwel implij an dibarzhioù implijer war MediaWiki',
	'uos-warn' => "N'eo ket staliet PHPlot !",
	'uos-choose' => 'Dibab unan eus an dibarzhioù implijer da-heul : $1',
	'uos-unknown' => '* Dre ziouer',
	'uos-other' => '* Re all',
	'uos-title' => 'Dasparzh talvoudennoù an dibarzh implijer $1',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'useroptionstats' => 'Statistike korisničkih opcija',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Posebna stranica]] za izvještaje o korištenju MediaWiki korisničkih opcija',
	'uos-warn' => 'PHPlot nije instaliran!',
	'uos-choose' => 'Izaberite jednu od slijedećih korisničkih opcija: $1',
	'uos-unknown' => '*Pretpostavljeno',
	'uos-other' => '*Ostalo',
	'uos-title' => 'Raspored vrijednosti korisničke opcije $1',
);

/** Catalan (català)
 * @author Paucabot
 */
$messages['ca'] = array(
	'uos-warn' => 'PHPlot no està instal·lat!',
	'uos-choose' => "Triau una de les següents opcions d'usuari: $1",
	'uos-unknown' => '*Per defecte',
	'uos-other' => '*Altres',
);

/** Chechen (нохчийн)
 * @author Sasan700
 */
$messages['ce'] = array(
	'useroptionstats' => 'Декъашхоша гIирс латорна хилам',
);

/** Sorani Kurdish (کوردی)
 * @author Marmzok
 */
$messages['ckb'] = array(
	'uos-unknown' => '*بنچینەیی',
	'uos-other' => '*دیکە',
);

/** Czech (česky)
 * @author Mormegil
 */
$messages['cs'] = array(
	'useroptionstats' => 'Statistika uživatelského nastavení',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Speciální stránka]] pro tvorbu přehledů o využívaných volbách v nastavení MediaWiki',
	'uos-warn' => 'Není nainstalován PHPlot!',
	'uos-choose' => 'Vyberte jednu z následujících položek uživatelského nastavení: $1',
	'uos-choose-hidden' => 'Zvolte jednu z následujících skrytých položek uživatelského nastavení: $1',
	'uos-unknown' => '*Implicitní',
	'uos-other' => '*Jiné',
	'uos-title' => 'Rozdělení hodnot uživatelského nastavení „$1“',
);

/** Danish (dansk)
 * @author Byrial
 * @author Peter Alberti
 */
$messages['da'] = array(
	'useroptionstats' => 'Statistik over brugerindstillinger',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Specialside]] til rapportering om brugen af brugerindstillinger i MediaWiki',
	'uos-warn' => 'PHPlot er ikke installeret!',
	'uos-choose' => 'Vælg en af følgende brugerindstillinger: $1',
	'uos-choose-hidden' => 'Vælg en af følgende skjulte brugerindstillinger: $1',
	'uos-unknown' => '*Standard',
	'uos-other' => '*Andet',
	'uos-title' => 'Fordeling af værdier for brugerindstilling $1',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Purodha
 * @author Umherirrender
 */
$messages['de'] = array(
	'useroptionstats' => 'Statistiken zu Benutzereinstellungen',
	'useroptionstats-desc' => 'Ergänzt eine [[Special:UserOptionStats|Spezialseite]] zur Darstellung der durch die Benutzer des Wikis gewählten Einstellungen',
	'uos-warn' => 'PHPlot ist nicht installiert!',
	'uos-choose' => 'Wähle eine der folgenden Einstellungen: $1',
	'uos-choose-hidden' => 'Wähle eine der folgenden versteckten Einstellungen: $1',
	'uos-unknown' => '*Standardeinstellung',
	'uos-other' => '*Sonstige',
	'uos-title' => 'Verteilung der gewählten Werte zur Benutzereinstellung
„$1“',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Purodha
 */
$messages['de-formal'] = array(
	'uos-choose' => 'Bitte wählen Sie eine der folgenden Einstellungen aus: $1',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Mirzali
 */
$messages['diq'] = array(
	'useroptionstats' => 'İstatıstikê weçenegê karberan',
	'uos-unknown' => '*Hesıbyaye',
	'uos-other' => '*Bin',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'useroptionstats' => 'Statistika wužywarskich opcijow',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Specialny bok]] za rozpšawjenje wó wužywanju wužywarskich opcijow na MediaWiki',
	'uos-warn' => 'PHPlot njejo instalěrowany!',
	'uos-choose' => 'Jadnu ze slědujucych wužywarskich opcijow wubraś: $1',
	'uos-choose-hidden' => 'Jadnu ze slědujucych schowanych wužywarskich opcijow wubraś: $1',
	'uos-unknown' => '*Standardnu',
	'uos-other' => '*Drugu',
	'uos-title' => 'Distribucija gódnotow wužywarskeje opcije $1',
);

/** Greek (Ελληνικά)
 * @author Omnipaedista
 * @author ZaDiak
 */
$messages['el'] = array(
	'useroptionstats' => 'Προαιρετικά στατιστικά χρήστη',
	'uos-warn' => 'Το PHPlot δεν είναι εγκατεστημένο!',
	'uos-choose' => 'Επιλογή μιας από τις παρακάτω επιλογές χρήστη: $1',
	'uos-unknown' => '*Προεπιλογή',
	'uos-other' => '*Άλλο',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'uos-unknown' => '*Defaŭlta',
	'uos-other' => '*Alia',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Crazymadlover
 */
$messages['es'] = array(
	'useroptionstats' => 'Estadísticas de opción de usuario',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Página especial]] para reportes en uso de opción de usuario de Mediawiki',
	'uos-warn' => 'PHPlot no está instalado',
	'uos-choose' => 'Escoger una de las siguientes opciones de usuario: $1',
	'uos-choose-hidden' => 'Elija una de las siguientes opciones ocultas de usuario: $1',
	'uos-unknown' => '*Por defecto',
	'uos-other' => '*Otro',
	'uos-title' => 'Distribución de valores de opción de usuario $1',
);

/** Basque (euskara)
 * @author Kobazulo
 */
$messages['eu'] = array(
	'uos-unknown' => '*Lehenetsia',
	'uos-other' => '*Besterik',
);

/** Persian (فارسی)
 * @author پاناروما
 */
$messages['fa'] = array(
	'uos-unknown' => '*پیش فرض',
	'uos-other' => '*دیگر',
);

/** Finnish (suomi)
 * @author Cimon Avaro
 * @author Nedergard
 * @author Nike
 * @author Silvonen
 * @author Str4nd
 */
$messages['fi'] = array(
	'useroptionstats' => 'Käyttäjien asetusten tilastot',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Toimintosivu]] MediaWikin asetusvalintojen käyttötilastoille.',
	'uos-warn' => 'PHPlotia ei ole asennettu!',
	'uos-choose' => 'Valitse yksi seuraavista käyttäjäasetuksista: $1',
	'uos-choose-hidden' => 'Valitse yksi seuraavista piilotetuista käyttäjäasetuksista: $1',
	'uos-unknown' => '*Oletus',
	'uos-other' => '*Muu',
	'uos-title' => 'Asetuksen $1 arvojen jakauma',
);

/** French (français)
 * @author Crochet.david
 * @author IAlex
 * @author Urhixidur
 */
$messages['fr'] = array(
	'useroptionstats' => 'Statistiques des options de l’utilisateur',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Page spéciale]] pour afficher les utilisations des options utilisateurs sur MediaWiki',
	'uos-warn' => 'PHPlot n’est pas installé !',
	'uos-choose' => 'Choisissez l’une des options utilisateurs suivantes : $1',
	'uos-choose-hidden' => 'Choisissez l’une des options suivantes d’utilisateur invisible: $1',
	'uos-unknown' => '* Par défaut',
	'uos-other' => '* Autres',
	'uos-title' => 'Distribution des valeurs de l’option utilisateur $1',
);

/** Franco-Provençal (arpetan)
 * @author Cedric31
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'useroptionstats' => 'Statistiques des chouèx a l’usanciér',
	'uos-warn' => 'PHPlot est pas enstalâ !',
	'uos-choose' => 'Chouèsésséd yon de cetos chouèx a l’usanciér : $1',
	'uos-choose-hidden' => 'Chouèsésséd yon de cetos chouèx a l’usanciér envisiblos : $1',
	'uos-unknown' => '*Per dèfôt',
	'uos-other' => '* Ôtres',
	'uos-title' => 'Distribucion de les valors du chouèx a l’usanciér $1',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'useroptionstats' => 'Estatísticas das opcións de usuario',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Páxina especial]] para a informar sobre o uso das opcións de usuario de MediaWiki',
	'uos-warn' => 'PHPlot non está instalado!',
	'uos-choose' => 'Escolla unha das seguintes opcións de usuario: $1',
	'uos-choose-hidden' => 'Escolla unha das seguintes opcións de usuario agochadas: $1',
	'uos-unknown' => '*Por defecto',
	'uos-other' => '*Outras',
	'uos-title' => 'Distribución dos valores da opción de usuario "$1"',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 */
$messages['grc'] = array(
	'uos-other' => '*Ἄλλον',
);

/** Swiss German (Alemannisch)
 * @author Als-Chlämens
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'useroptionstats' => 'Benutzeroptione-Statischtik',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Spezialsyte]] zum Berichte wie d Benutzeroptione uf Mediawiki brucht wäre',
	'uos-warn' => 'PHPlot isch nit installiert!',
	'uos-choose' => 'Wehl eini vu däne Benutzeroptione: $1',
	'uos-choose-hidden' => 'Wehl eini vu däne versteckte Yystellige: $1',
	'uos-unknown' => '*Standard',
	'uos-other' => '*Anderi',
	'uos-title' => 'Wärtverteilig vu dr Benutzeroption $1',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'useroptionstats' => 'סטטיסטיקות אפשרויות המשתמש',
	'useroptionstats-desc' => '[[Special:UserOptionStats|דף מיוחד]] לדיווח על השימוש באפשרויות המשתמש במדיה־ויקי',
	'uos-warn' => 'PHPlot אינה מותקנת!',
	'uos-choose' => 'בחרו באחת מאפשרויות המשתמש הבאות: $1',
	'uos-choose-hidden' => 'נא לבחור אחת מאפשרויות המשתמש המוסתרות: $1',
	'uos-unknown' => '*ברירת מחדל',
	'uos-other' => '*אחר',
	'uos-title' => 'הפצת הערכים של אפשרות המשתמש $1',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'useroptionstats' => 'Statistika wužiwarskich opcijow',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Specialna strona]] za rozprawjenje wo wužiwanju wužiwarskich opcijow na MediaWiki',
	'uos-warn' => 'PHPlot njeje instalowany!',
	'uos-choose' => 'Jednu ze slědowacych wužiwarskich opcijow wubrać: $1',
	'uos-choose-hidden' => 'Wubjer jednu ze slědowacych schowanych wužiwarskich opcijow: $1',
	'uos-unknown' => '* Standard',
	'uos-other' => '*Druhe',
	'uos-title' => 'Distribucija hódnotow wužiwarskeje opcije $1',
);

/** Hungarian (magyar)
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'useroptionstats' => 'Felhasználói beállítások statisztikája',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Speciális lap]] a MediaWiki felhasználói beállításai használatának áttekintésére',
	'uos-warn' => 'A PHPlot nincs telepítve!',
	'uos-choose' => 'Válassz egyet a következő felhasználói beállításokból: $1',
	'uos-unknown' => '*Alapértelmezett',
	'uos-other' => '*Egyéb',
	'uos-title' => 'A(z) $1 felhasználói beállítás értékeinek eloszlása',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'useroptionstats' => 'Statisticas de optiones de usator',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Pagina special]] pro reportar le uso de optiones de usator in Mediawiki',
	'uos-warn' => 'PHPlot non es installate!',
	'uos-choose' => 'Selige un del sequente optiones de usator: $1',
	'uos-choose-hidden' => 'Selige un del sequente optiones celate de usator: $1',
	'uos-unknown' => '*Predefinition',
	'uos-other' => '*Altere',
	'uos-title' => 'Distribution de valores del option de usator $1',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 */
$messages['id'] = array(
	'useroptionstats' => 'Statistik pilihan pengguna',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Halaman istimewa]] untuk melaporkan ke MediaWiki pemakaian pilihan pengguna',
	'uos-warn' => 'PHPlot belum terpasang!',
	'uos-choose' => 'Pilih salah satu dari pilihan pengguna berikut: $1',
	'uos-unknown' => '*Baku',
	'uos-other' => '*Lain-lain',
	'uos-title' => 'Distribusi nilai pilihan pengguna $1',
);

/** Italian (italiano)
 * @author Beta16
 * @author Darth Kule
 */
$messages['it'] = array(
	'useroptionstats' => 'Statistiche opzioni utente',
	'useroptionstats-desc' => "[[Special:UserOptionStats|Pagina speciale]] per la segnalazione dell'utilizzo delle opzioni degli utenti di MediaWiki",
	'uos-warn' => 'PHPlot non è installato',
	'uos-choose' => 'Scegliere una delle seguenti opzioni utente: $1',
	'uos-choose-hidden' => 'Scegliere una delle seguenti opzioni utente nascoste: $1',
	'uos-unknown' => '*Predefinito',
	'uos-other' => '*Altro',
	'uos-title' => "Distribuzione dei valori dell'opzione utente $1",
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Schu
 * @author Shirayuki
 */
$messages['ja'] = array(
	'useroptionstats' => '利用者オプション統計',
	'useroptionstats-desc' => 'MediaWiki の利用者オプションの設定状況をレポートする[[Special:UserOptionStats|特別ページ]]',
	'uos-warn' => 'PHPlot がインストールされていません!',
	'uos-choose' => '以下の利用者オプションから1つ選択: $1',
	'uos-choose-hidden' => '以下の非表示の利用者オプションから1つ選択: $1',
	'uos-unknown' => '*既定',
	'uos-other' => '*その他',
	'uos-title' => '利用者オプション $1 の設定値の分布',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'useroptionstats' => 'მომხმარებლის პარამეტრების სტატისტიკა',
	'uos-unknown' => '*სტანდარტული',
	'uos-other' => '*სხვა',
);

/** Khmer (ភាសាខ្មែរ)
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'uos-unknown' => '*លំនាំ​ដើម​',
	'uos-other' => '*ដទៃទៀត​',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'useroptionstats' => '사용자 옵션 통계',
	'useroptionstats-desc' => '미디어위키 사용자 옵션 사용에 대한 보고를 위한 [[Special:UserOptionStats|특수 문서]]',
	'uos-warn' => 'PHPlot이 설치되지 않았습니다!',
	'uos-choose' => '다음 사용자 옵션 중 하나를 선택하세요: $1',
	'uos-choose-hidden' => '다음 숨겨진 사용자 옵션 중 하나를 선택하세요: $1',
	'uos-unknown' => '*기본값',
	'uos-other' => '*기타',
	'uos-title' => '사용자 옵션 $1의 값의 분포',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'useroptionstats' => 'Schtatistike övver der Metmaacher ier Enschtällonge',
	'useroptionstats-desc' => 'En [[Special:UserOptionStats|Söndersigg]] för Bereeschte övver der Jebruch vun MediaWiki sing Ußwahle en de Metmaacher ier Enshtellunge.',
	'uos-warn' => '<i lang="en">PHPlot</i> es nit enshtalleet!',
	'uos-choose' => 'Söhk ein uß fun hee dä müjjelesche Ußwahle för de Metmaacher: $1',
	'uos-choose-hidden' => 'Söhk ein uß fun hee dä müjjelesche vershtoche Ußwahle för de Metmaacher: $1',
	'uos-unknown' => '*Schtandatt',
	'uos-other' => '*Ander',
	'uos-title' => 'De Verdeijlung vun de Entshellunge vun de Metmaacher ier Ußwahl „$1“',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Les Meloures
 * @author Robby
 */
$messages['lb'] = array(
	'useroptionstats' => 'Statistike vun de Benotzerastellungen',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Spezialsäit]], fir de Gebrauch vun de Benotzeroptiounen op MediaWiki unzeweisen',
	'uos-warn' => 'PHPlot ass net installéiert!',
	'uos-choose' => 'Wielt eng vun dëse Benotzerastellungen: $1',
	'uos-choose-hidden' => 'Wielt eng vun dëse verstoppte Benotzerastellungen: $1',
	'uos-unknown' => '*Standardastellung',
	'uos-other' => '*Anerer',
	'uos-title' => 'Verdeelung vun de Wäerter vun der Benotzerastellung $1',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'useroptionstats' => 'Статистики за корисничките прилагодувања',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Специјална страница]] за известување на прилагодувањата на МедијаВики',
	'uos-warn' => 'PHPlot не е инсталиран!',
	'uos-choose' => 'Одберете една од следниве кориснички можности: $1',
	'uos-choose-hidden' => 'Одберете една од следниве скриени кориснички можности: $1',
	'uos-unknown' => '*По основно',
	'uos-other' => '*Друго',
	'uos-title' => 'Распределба на вредности за користењето на кориснички прилагодувања, можност
$1',
);

/** Mongolian (монгол)
 * @author Chinneeb
 */
$messages['mn'] = array(
	'uos-other' => '*Бусад',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'useroptionstats' => 'Statistik pilihan pengguna',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Laman khas]] untuk melaporkan penggunaan pilihan pengguna MediaWiki',
	'uos-warn' => 'PHPlot belum terpasang!',
	'uos-choose' => 'Pilih salah satu pilihan pengguna yang berikut: $1',
	'uos-choose-hidden' => 'Pilih salah satu pilihan pengguna tersorok yang berikut: $1',
	'uos-unknown' => '*Asali',
	'uos-other' => '*Lain-lain',
	'uos-title' => 'Taburan nilai pilihan pengguna $1',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Audun
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'useroptionstats' => 'Statistikk for brukervalg',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Spesialside]] for rapporter om bruk av MediaWiki brukervalg',
	'uos-warn' => 'PHPlot er ikke installert!',
	'uos-choose' => 'Velg et av de følgende brukervalgene: $1',
	'uos-unknown' => '*Standard',
	'uos-other' => '*Annen',
	'uos-title' => 'Fordeling av verdier for brukervalg $1',
);

/** Dutch (Nederlands)
 * @author McDutchie
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'useroptionstats' => 'Statistieken over gebruikersinstellingen',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Speciale pagina]] voor rapportage over het gebruik van gebruikersinstellingen',
	'uos-warn' => 'PHPlot is niet geïnstalleerd!',
	'uos-choose' => 'Kies een van de volgende gebruikersinstellingen: $1',
	'uos-choose-hidden' => 'Kies een van de volgende verborgen gebruikersinstellingen: $1',
	'uos-unknown' => '*Standaardinstelling',
	'uos-other' => '*Andere',
	'uos-title' => 'Verdeling van de waarden van de gebruikersinstelling $1',
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Gunnernett
 */
$messages['nn'] = array(
	'useroptionstats' => 'Statistikk for brukarval',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Spesiell side]] for rapportar om bruk av MediaWiki brukarval',
	'uos-warn' => 'PHPlot er ikkje installert!',
	'uos-choose' => 'Vel eitt av dei fylgjande brukarvala: $1',
	'uos-unknown' => '*Standard',
	'uos-other' => '*Annan',
	'uos-title' => 'Spreiing i verdiar for brukarval $1',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'useroptionstats' => 'Estatisticas de las opcions de l’utilizaire',
	'useroptionstats-desc' => "[[Special:UserOptionStats|Pagina especiala]] per afichar las utilizacions de las opcions d'utilizaire sus MediaWiki",
	'uos-warn' => 'PHPlot es pas installat !',
	'uos-choose' => "Causissètz una de las opcions d'utilizaire seguentas : $1",
	'uos-unknown' => '* Per defaut',
	'uos-other' => '* Autras',
	'uos-title' => "Distribucion de las valors de l'opcion d'utilizaire $1",
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'uos-other' => '*Annere',
);

/** Polish (polski)
 * @author BeginaFelicysym
 * @author Leinad
 * @author Sp5uhe
 * @author ToSter
 */
$messages['pl'] = array(
	'useroptionstats' => 'Statystyki opcji użytkowników',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Strona specjalna]] przedstawiająca użycie opcji dostępnych dla użytkowników MediaWiki',
	'uos-warn' => 'PHPlot nie został zainstalowany!',
	'uos-choose' => 'Wybierz jedną z następujących opcji użytkowników: $1',
	'uos-choose-hidden' => 'Wybierz jedną z następujących ukrytych opcji użytkowników: $1',
	'uos-unknown' => '*Domyślna',
	'uos-other' => '*Inna',
	'uos-title' => 'Rozkład wartości opcji użytkowników $1',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'useroptionstats' => "Statìstiche dle opsion ëd j'utent",
	'useroptionstats-desc' => "[[Special:UserOptionStats|Pàgina special]] për arporté an dzora a l'usagi dle opsoion utent MediaWiki",
	'uos-warn' => "PHPlot a l'é pa anstalà!",
	'uos-choose' => 'Sern un-a dle opsion utent sota: $1',
	'uos-choose-hidden' => "Ch'a serna un-a dj'opsion d'utent ëstërmà sì-dapress: $1",
	'uos-unknown' => '*Default',
	'uos-other' => '*Àutr',
	'uos-title' => "Distribussion ëd valor ëd l'opsion utent $1",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'uos-unknown' => '*تلواليز',
	'uos-other' => '*بل',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 * @author Lijealso
 * @author Malafaya
 */
$messages['pt'] = array(
	'useroptionstats' => 'Estatísticas das opções dos utilizadores',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Página especial]] para reportar a utilização das opções dos utilizadores do MediaWiki',
	'uos-warn' => 'PHPlot não está instalado!',
	'uos-choose' => 'Escolha uma das seguintes opções de utilizador: $1',
	'uos-choose-hidden' => 'Escolha uma das seguintes opções de utilizador ocultas: $1',
	'uos-unknown' => '*Padrão',
	'uos-other' => '*Outro',
	'uos-title' => 'Distribuição de valores da opção de utilizador $1',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Eduardo.mps
 * @author Helder.wiki
 * @author Heldergeovane
 */
$messages['pt-br'] = array(
	'useroptionstats' => 'Estatísticas de opções de utilizador',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Special page]] para reportar o uso de opção de usuário do MediaWiki',
	'uos-warn' => 'PHPlot não está instalado!',
	'uos-choose' => 'Escolha uma das seguintes opções de usuário: $1',
	'uos-unknown' => '*Padrão',
	'uos-other' => '*Outro',
	'uos-title' => 'Distribuição de valores da opção de usuário $1',
);

/** Romanian (română)
 * @author Firilacroco
 * @author KlaudiuMihaila
 */
$messages['ro'] = array(
	'uos-warn' => 'PHPlot neinstalat!',
	'uos-unknown' => '*Implicit',
	'uos-other' => '*Altul',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'useroptionstats' => "Statisteche sus a le opziune de l'utende",
	'useroptionstats-desc' => "[[Special:UserOptionStats|Pàgena speciale]] pe segnalà l'ause de le opziune de l'utende sus a MediaUicchi",
	'uos-warn' => "PHPlot non g'è installate!",
	'uos-choose' => "Scacchie une de le opziune de l'utende seguende: $1",
	'uos-choose-hidden' => "Scacchie une de le opziune de l'utende scunnute ca seguone: $1",
	'uos-unknown' => '*De base',
	'uos-other' => '*Otre',
	'uos-title' => 'Distribuzzione de le valore de le opzione utende $1',
);

/** Russian (русский)
 * @author Ferrer
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'useroptionstats' => 'Статистика настроек участников',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Служебная страница]] отчетности по использованию участниками настроек MediaWiki',
	'uos-warn' => 'PHPlot не установлен!',
	'uos-choose' => 'Выберите одну из следующих пользовательских настроек: $1',
	'uos-choose-hidden' => 'Выберите одну из следующих скрытых пользовательских настроек: $1',
	'uos-unknown' => '* По умолчанию',
	'uos-other' => '* Другие',
	'uos-title' => 'Распределение значений пользовательской настройки $1',
);

/** Rusyn (русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'uos-other' => '*Іншы',
);

/** Sinhala (සිංහල)
 * @author Calcey
 */
$messages['si'] = array(
	'useroptionstats' => 'පරිශීලක විකල්ප සංඛ්‍යා දත්ත',
	'useroptionstats-desc' => '[[Special:UserOptionStats|විශේෂ පිටුව]] මීඩියාවිකි පරිශීලක විකල්ප භාවිතය වාර්තා කිරීම සඳහා',
	'uos-warn' => 'PHPlot ස්ථාපනය නොකරන ලදී!',
	'uos-choose' => 'පහත පරිශීලක විකල්පයන් අතරින් එකක් තෝරාගන්න: $1',
	'uos-unknown' => '*පෙරනිමිය',
	'uos-other' => '*වෙනත්',
	'uos-title' => '$1 පරිශිලක විකල්පයේ අගයන් ව්‍යාප්තිය',
);

/** Slovak (slovenčina)
 * @author Helix84
 * @author Teslaton
 */
$messages['sk'] = array(
	'useroptionstats' => 'Štatistiky volieb používateľov',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Špeciálna stránka]] na tvorbu správ používania volieb používateľov MediaWiki',
	'uos-warn' => 'PHPlot nie je nainštalované!',
	'uos-choose' => 'Vyberte jednu z nasledovných položiek používateľského nastavenia: $1',
	'uos-choose-hidden' => 'Vyberte jednu z nasledovných skrytých položiek používateľského nastavenia: $1',
	'uos-unknown' => '*Predvolené',
	'uos-other' => '*Iné',
	'uos-title' => 'Rozdelenie hodnôt používateľskej voľby $1',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'uos-warn' => 'PHPlot није инсталиран!',
	'uos-choose' => 'Изаберите једну од следећих корисничких опција: $1',
	'uos-unknown' => '*Подразумевано',
	'uos-other' => '*Друго',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Michaello
 */
$messages['sr-el'] = array(
	'uos-warn' => 'PHPlot nije instaliran!',
	'uos-choose' => 'Izaberite jednu od sledećih korisničkih opcija: $1',
	'uos-unknown' => '*Podrazumevano',
	'uos-other' => '*Drugo',
);

/** Swedish (svenska)
 * @author Fluff
 * @author Per
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'useroptionstats' => 'Statistik för användarinställningar',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Specialsida]] för rapportering om användandet av MediaWiki:s användarinställningar',
	'uos-warn' => 'PHPlot är inte installerat!',
	'uos-choose' => 'Välj en av följande inställningar: $1',
	'uos-unknown' => '*Standard',
	'uos-other' => '*Annat',
	'uos-title' => 'Fördelning av värden för användarinställningar $1',
);

/** Tamil (தமிழ்)
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'useroptionstats' => 'பயனர் தெரிவுப் புள்ளிவிபரங்கள்',
	'uos-unknown' => '*இயல்புநிலை',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'useroptionstats' => 'వాడుకరి ఎంపికల గణాంకాలు',
	'uos-unknown' => '*అప్రమేయం',
	'uos-other' => '*ఇతర',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'useroptionstats' => 'Estadistika ng pagpili ng tagagamit',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Natatanging pahina]] para sa pag-uulat sa paggamit ng pampili ng tagagamit ng MediaWiki',
	'uos-warn' => 'Hindi nakalagay ang PHPlot!',
	'uos-choose' => 'Pumili ng isa sa sumusunod na mga pagpipiliang pangtagagamit: $1',
	'uos-choose-hidden' => 'Pumili ng isa sa sumusunod na nakakubling mga pagpipiliang pangtagagamit: $1',
	'uos-unknown' => '*Likas na nakatakda',
	'uos-other' => '*Iba pa',
	'uos-title' => 'Pamamahagi ng mga halaga ng pampili na pangtagagamit na $1',
);

/** Turkish (Türkçe)
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'useroptionstats' => 'Kullanıcı seçenek istatistikleri',
	'useroptionstats-desc' => 'MediaWiki kullanıcı seçenek kullanımında bildirim için [[Special:UserOptionStats|özel sayfa]]',
	'uos-warn' => 'PHPlot kurulu değil!',
	'uos-choose' => 'Aşağıdaki kullanıcı seçeneklerinden birini seçin: $1',
	'uos-unknown' => '*Varsayılan',
	'uos-other' => '*Diğer',
	'uos-title' => 'Kullanıcı seçeneği $1 için değer dağılımı',
);

/** Tatar (Cyrillic script) (татарча)
 * @author Ерней
 */
$messages['tt-cyrl'] = array(
	'uos-unknown' => '*Килешү буенча',
);

/** Ukrainian (українська)
 * @author Base
 * @author Prima klasy4na
 */
$messages['uk'] = array(
	'useroptionstats' => 'Статистика користувацьких налаштувань',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Спеціальна стоірка]] для звітування про використання користувачами налаштувань MediaWiki',
	'uos-warn' => 'PHPlot не встановлено!',
	'uos-choose' => 'Оберіть одне із наступних користувацьких налаштувань: $1',
	'uos-choose-hidden' => 'Оберіть одне із наступних прихованих користувацьких налаштувань: $1',
	'uos-unknown' => '*За умовчанням',
	'uos-other' => '*Інші',
	'uos-title' => 'Розподіл значень користувацького налаштування $1',
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'useroptionstats' => 'Kävutajiden järgendusiden statistik',
	'useroptionstats-desc' => "[[Special:UserOptionStats|Specialine lehtpol']], kus om satesenladindad MediaWikin järgendusiden kävutamižes ühtnijoil",
	'uos-warn' => 'PHPlot ei ole azotadud!',
	'uos-choose' => "Valikat üks' neniš kävutajanjärgendusišpäi: $1",
	'uos-choose-hidden' => "Valikat üks' neniš peittud kävutajanjärgendusišpäi: $1",
	'uos-unknown' => '*Augotižjärgendusen mödhe',
	'uos-other' => '*Toine',
	'uos-title' => 'Muga jagadas kävutajidenjärgendused $1',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'useroptionstats' => 'Thống kê tùy chọn người dùng',
	'useroptionstats-desc' => '[[Special:UserOptionStats|Trang đặc biệt]] báo cáo thống kê về tùy chọn cá nhân trong MediaWiki',
	'uos-warn' => 'Chưa cài đặt PHPlot!',
	'uos-choose' => 'Hãy chọn một trong những tùy chọn cá nhân sau: $1',
	'uos-unknown' => '*Mặc định',
	'uos-other' => '*Khác',
	'uos-title' => 'Phân phối giá trị tùy chọn cá nhân $1',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'uos-other' => '*אנדער',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Liangent
 * @author PhiLiP
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'useroptionstats' => '用户选项统计',
	'useroptionstats-desc' => '[[Special:UserOptionStats|特殊页面]]报告MediaWiki用户选项使用率',
	'uos-warn' => '尚未安装PHPlot！',
	'uos-choose' => '选择下列的用户选项之一：$1',
	'uos-choose-hidden' => '选择下列隐藏的用户选项之一：$1',
	'uos-unknown' => '*默认',
	'uos-other' => '*其他',
	'uos-title' => '用户选项 $1 的值的分布',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Justincheng12345
 * @author Mark85296341
 * @author Wrightbus
 */
$messages['zh-hant'] = array(
	'useroptionstats' => '用戶選項統計',
	'useroptionstats-desc' => '[[Special:UserOptionStats|特殊頁面]]報告MediaWiki用戶使用率',
	'uos-warn' => '尚未安裝 PHPlot！',
	'uos-choose' => '選擇一項下列用戶選項：$1',
	'uos-choose-hidden' => '選擇一項下列的隱藏用戶選項：$1',
	'uos-unknown' => '*預設',
	'uos-other' => '*其他',
	'uos-title' => '用戶選項$1的數值分布',
);
