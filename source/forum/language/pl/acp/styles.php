<?php
/**
*
* acp_styles [Polski]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Polish locale 2012-06-16 20:14:11  Zespół Olympus.pl $
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_IMAGESETS_EXPLAIN'	=> 'Zestawy obrazków zawierają wszystkie przyciski, ikony i inne niezależne od stylu obrazki używane przez witrynę. Tutaj można edytować, eksportować lub usuwać istniejące zestawy obrazków i importować, lub aktywować nowe.',
	'ACP_STYLES_EXPLAIN'	=> 'Tutaj można zarządzać dostępnymi stylami. Styl składa się z szablonu, motywu oraz zestawu obrazków. Istniejące style można usuwać, dezaktywować czy reaktywować. Można także tworzyć lub importować nowe style. Dzięki funkcji podglądu można zobaczyć, jak styl będzie wyglądał. Domyślny styl jest oznaczony gwiazdką (*). Uwidoczniona jest tu również liczba użytkowników korzystających z danego stylu – nie uwzględniona jest w niej jednak funkcja ignorowania stylów.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Szablon to kod zawarty w plikach *.html użyty do wygenerowania wyglądu witryny. Tutaj można edytować obecny szablon – usuwać, eksportować, importować i przeglądać jego ustawienia. Można również modyfikować kod szablonu używanego do generowania BBCode.',
	'ACP_THEMES_EXPLAIN'	=> 'Z tego miejsca można tworzyć, instalować, zmieniać, usuwać oraz eksportować motywy. Motyw jest kombinacją kolorów i obrazków zastosowanych w szablonach do zdefiniowania podstawowego wyglądu witryny. Zakres dostępnych funkcji zależy od konfiguracji serwera oraz instalacji phpBB. Aby dowiedzieć się więcej, zobacz podręcznik użytkownika. Tworzenie nowych motywów na podstawie istniejącego motywu jest opcjonalne.',
	'ADD_IMAGESET'			=> 'Utwórz zestaw obrazków',
	'ADD_IMAGESET_EXPLAIN'	=> 'Tutaj można utworzyć nowy zestaw obrazków. W zależności od konfiguracji serwera i dostępu do plików możesz mieć dodatkowe możliwości, takie jak możliwość utworzenia zestawu obrazków na podstawie istniejącego zestawu, a także wgrania lub zaimportowania archiwum zawierającego zestaw. Wgrywając, bądź importując zestaw, można pole nazwy zestawu pozostawić puste. Wówczas nazwa zestawu będzie identyczna z nazwą archiwum.',
	'ADD_STYLE'				=> 'Utwórz styl',
	'ADD_STYLE_EXPLAIN'		=> 'Tutaj można utworzyć nowy styl. W zależności od konfiguracji serwera i dostępu do plików możesz mieć dodatkowe możliwości, takie jak możliwość utworzenia stylu na podstawie już istniejącego, a także wgrania lub zaimportowania archiwum ze stylem. Wgrywając, bądź importując zestaw można pole nazwy stylu pozostawić puste. Wówczas nazwa stylu będzie identyczna z nazwą archiwum.',
	'ADD_TEMPLATE'			=> 'Utwórz szablon',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Tutaj można dodać nowy szablon. W zależności od konfiguracji serwera i dostępu do plików możesz mieć dodatkowe możliwości, takie jak możliwość utworzenia szablonu na podstawie już istniejącego, a także wgrania lub zaimportowania archiwum z szablonem. Wgrywając, bądź importując szablon można pole nazwy szablonu pozostawić puste. Wówczas nazwa stylu będzie identyczna z nazwą archiwum.',
	'ADD_THEME'				=> 'Utwórz motyw',
	'ADD_THEME_EXPLAIN'		=> 'Tutaj można dodać nowy motyw. W zależności od konfiguracji serwera i dostępu do plików możesz mieć dodatkowe możliwości, takie jak możliwość utworzenia motywu na podstawie już istniejącego, a także wgrania lub zaimportowania archiwum z motywem. Wgrywając, bądź importując motyw można pole nazwy motywu pozostawić puste. Wówczas nazwa stylu będzie identyczna z nazwą archiwum.',
	'ARCHIVE_FORMAT'		=> 'Typ pliku archiwum',
	'AUTOMATIC_EXPLAIN'		=> 'Pozostaw pole puste, aby automatycznie wykryć wymiary obrazka.',

	'BACKGROUND'			=> 'Tło',
	'BACKGROUND_COLOUR'		=> 'Kolor tła',
	'BACKGROUND_IMAGE'		=> 'Obrazek tła',
	'BACKGROUND_REPEAT'		=> 'Powtarzanie tła',
	'BOLD'					=> 'Pogrubienie',

	'CACHE'							=> 'Bufor',
	'CACHE_CACHED'					=> 'Zapisane w buforze',
	'CACHE_FILENAME'				=> 'Plik szablonu',
	'CACHE_FILESIZE'				=> 'Rozmiar pliku',
	'CACHE_MODIFIED'				=> 'Zmodyfikowany',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Czy na pewno chcesz odświeżyć wszystkie dane zestawu obrazków? Wszystkie modyfikacje zestawu obrazków wykonane za pomocą edytora zestawu zostaną zastąpione ustawieniami zapisanymi w pliku konfiguracyjnym zestawu obrazków.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Czy na pewno chcesz usunąć wszystkie wersje plików szablonu przechowywane w buforze?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Czy na pewno chcesz zastąpić wszystkie dane szablonu zapisane w bazie danych, danymi zawartymi w plikach szablonu zapisanymi w katalogu witryny? Ta operacja zastąpi zapisane w bazie danych wszystkie modyfikacje przeprowadzone za pomocą edytora szablonu.',
	'CONFIRM_THEME_REFRESH'			=> 'Czy na pewno chcesz zastąpić wszystkie dane motywu zapisane w bazie danych, danymi zawartymi w plikach motywu zapisanymi w katalogu witryny? Ta operacja zastąpi zapisane w bazie danych wszystkie modyfikacje przeprowadzone za pomocą edytora motywu.',
	'COPYRIGHT'						=> 'Autor',
	'CREATE_IMAGESET'				=> 'Utwórz zestaw obrazków',
	'CREATE_STYLE'					=> 'Utwórz styl',
	'CREATE_TEMPLATE'				=> 'Utwórz szablon',
	'CREATE_THEME'					=> 'Utwórz motyw',
	'CURRENT_IMAGE'					=> 'Aktualny obrazek',

	'DEACTIVATE_DEFAULT'		=> 'Nie można dezaktywować domyślnego stylu.',
	'DELETE_FROM_FS'			=> 'Usuń z katalogu witryny',
	'DELETE_IMAGESET'			=> 'Usuń zestaw obrazków',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Tutaj można usunąć wybrany zestaw obrazków z bazy danych. Proszę pamiętać, że operacja usunięcia z katalogu witryny jest nieodwracalna. Po usunięciu zestawu obrazków nie będzie możliwości jego przywrócenia. Zaleca się przed wykonaniem operacji usuwania wyeksportowanie zestawu w celach archiwalnych.',
	'DELETE_STYLE'				=> 'Usuń styl',
	'DELETE_STYLE_EXPLAIN'		=> 'Tutaj można usunąć wybrany styl. Podczas usuwania stylów, należy zachować ostrożność, ponieważ operacja ta jest nieodwracalna.',
	'DELETE_TEMPLATE'			=> 'Usuń szablon',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Tutaj można usunąć wybrany szablon z bazy danych. Proszę pamiętać, że operacja usunięcia z katalogu witryny jest nieodwracalna. Po usunięciu szablonu nie będzie możliwości jego przywrócenia. Zaleca się przed wykonaniem operacji usuwania wyeksportowanie zestawu w celach archiwalnych.',
	'DELETE_THEME'				=> 'Usuń motyw',
	'DELETE_THEME_EXPLAIN'		=> 'Tutaj można usunąć wybrany motyw z bazy danych. Proszę pamiętać, że operacja usunięcia z katalogu witryny jest nieodwracalna. Po usunięciu motywu nie będzie możliwości jego przywrócenia. Zaleca się przed wykonaniem operacji usuwania wyeksportowanie motywu w celach archiwalnych.',
	'DETAILS'					=> 'Szczegóły',
	'DIMENSIONS_EXPLAIN'		=> 'Wybranie „Tak”, spowoduje załączenie parametrów wysokości/szerokości.',


	'EDIT_DETAILS_IMAGESET'				=> 'Edytowanie szczegółów zestawu obrazków',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Tutaj można zmieniać dane dotyczące zestawu obrazków, np. nazwę.',
	'EDIT_DETAILS_STYLE'				=> 'Edytowanie stylów',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Poniższy formularz pozwala na modyfikację istniejącego stylu. Można tutaj zmienić kombinację szablonu, motywu i zestawu obrazków, składających się na styl. Można także ustawić ten styl jako domyślny.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Edytowanie szczegółów szablonu',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Tutaj można edytować niektóre elementy szablonu, jak np. jego nazwę. Można również zdecydować o przeniesieniu arkusza stylu z katalogu witryny do bazy danych i na odwrót. Ta funkcja zależy od konfiguracji PHP oraz od tego, czy szablon może być zapisany przez serwer sieciowy.',
	'EDIT_DETAILS_THEME'				=> 'Edytowanie szczegółów motywu',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Tutaj można zmienić niektóre elementy motywu, jak np. jego nazwę. Można również zdecydować o przeniesieniu arkusza stylu z katalogu witryny do bazy danych i odwrotnie. Ta funkcja zależy od konfiguracji PHP oraz od tego, czy arkusz stylu może być zapisany przez serwer.',
	'EDIT_IMAGESET'						=> 'Edytowanie zestawu obrazków',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Tutaj można edytować pojedyncze obrazki zestawu oraz określić ich wymiary. Nie jest to wymagane, lecz określając wymiary można uniknąć problemów występujących w niektórych przeglądarkach. Niepodanie wymiarów pozwala w niewielkim stopniu zredukować rozmiar rekordu w bazie danych.',
	'EDIT_TEMPLATE'						=> 'Edytowanie szablonu',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Tutaj można bezpośrednio edytować swój szablon. Należy pamiętać, że dokonane zmiany są nieodwracalne. Jeśli PHP może zapisywać pliki szablonu w katalogu ze stylami, zmiany dokonane tutaj zostaną zapisane w tych plikach. Jeśli PHP nie ma takiej możliwości, zostaną one skopiowane do bazy danych i tylko tam będą wprowadzane wszelkie zmiany. Podczas edycji szablonu, należy zwrócić uwagę na domykanie kodu zmiennych {XXXX} oraz instrukcji warunkowych.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'Plik szablonu nie mógł zostać zapisany. Szablon zawierający zmodyfikowany plik został zapisany w bazie danych.',
	'EDIT_THEME'						=> 'Edytowanie motywów',
	'EDIT_THEME_EXPLAIN'				=> 'Tutaj można edytować wybrany motyw, zmieniać kolory, obrazki, itp.',
	'EDIT_THEME_STORED_DB'				=> 'Plik arkusza stylów nie mógł zostać zapisany. Arkusz stylów zwierający twoje modyfikacje został zapisany w bazie danych.',
	'EDIT_THEME_STORE_PARSED'			=> 'Ten motyw wymaga dynamicznego generowania jego arkusza stylów. Jest to możliwe jedynie, jeśli jest on przechowywany w bazie danych.',
	'EDITOR_DISABLED'					=> 'Edytor szablonów jest wyłączony.',
	'EXPORT'							=> 'Eksportuj',

	'FOREGROUND'			=> 'Pierwszy plan',
	'FONT_COLOUR'			=> 'Kolor czcionki',
	'FONT_FACE'				=> 'Czcionka',
	'FONT_FACE_EXPLAIN'		=> 'Można podać wiele czcionek oddzielonych przecinkami. Jeśli użytkownik nie ma zainstalowanej pierwszej z nich, zostanie użyta kolejna.',
	'FONT_SIZE'				=> 'Rozmiar czcionki',

	'GLOBAL_IMAGES'			=> 'Globalne',

	'HIDE_CSS'				=> 'Ukryj surowy CSS',

	'IMAGE_WIDTH'				=> 'Szerokość obrazka',
	'IMAGE_HEIGHT'				=> 'Wysokość obrazka',
	'IMAGE'						=> 'Obrazek',
	'IMAGE_NAME'				=> 'Nazwa obrazka',
	'IMAGE_PARAMETER'			=> 'Parametr',
	'IMAGE_VALUE'				=> 'Wartość',
	'IMAGESET_ADDED'			=> 'Zestaw obrazków został dodany do katalogu witryny.',
	'IMAGESET_ADDED_DB'			=> 'Zestaw obrazków został dodany do bazy danych.',
	'IMAGESET_DELETED'			=> 'Zestaw obrazków został usunięty.',
	'IMAGESET_DELETED_FS'		=> 'Zestaw obrazków został usunięty z bazy danych, ale niektóre pliki mogły pozostać w katalogu witryny.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Elementy zestawu obrazków zostały zaktualizowane.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Proszę wybrać metodę archiwizacji.',
	'IMAGESET_ERR_COPY_LONG'	=> 'Informacja o prawach autorskich nie powinna zawierać więcej niż 60 znaków.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Nazwa zestawu obrazków może zawierać tylko znaki alfanumeryczne, -, +, _ i spacje.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Zestaw obrazków o takiej nazwie już istnieje.',
	'IMAGESET_ERR_NAME_LONG'	=> 'Nazwa zestawu obrazków nie powinna zawierać więcej niż 30 znaków.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Wybrane archiwum nie zawiera prawidłowego zestawu obrazków.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Należy określić nazwę tego zestawu obrazków.',
	'IMAGESET_EXPORT'			=> 'Eksportuj zestaw obrazków',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Tutaj można wyeksportować zestaw obrazków w formie archiwum. Będzie ono zawierało wszystkie dane niezbędne do zainstalowania zestawu na innej witrynie. Można pobrać plik bezpośrednio lub zachować go na serwerze i pobrać później przez witrynę, lub FTP.',
	'IMAGESET_EXPORTED'			=> 'Zestaw obrazków został wyeksportowany i zachowany w %s.',
	'IMAGESET_NAME'				=> 'Nazwa zestawu obrazków',
	'IMAGESET_REFRESHED'		=> 'Zestaw obrazków został odświeżony',
	'IMAGESET_UPDATED'			=> 'Zestaw obrazków został zaktualizowany.',
	'ITALIC'					=> 'Pochyła',

	'IMG_CAT_BUTTONS'		=> 'Zlokalizowane przyciski',
	'IMG_CAT_CUSTOM'		=> 'Dodatkowe przyciski',
	'IMG_CAT_FOLDERS'		=> 'Ikony tematu',
	'IMG_CAT_FORUMS'		=> 'Ikony forum',
	'IMG_CAT_ICONS'			=> 'Ikony główne',
	'IMG_CAT_LOGOS'			=> 'Loga',
	'IMG_CAT_POLLS'			=> 'Obrazki ankiet',
	'IMG_CAT_UI'			=> 'Główne elementy interfejsu użytkownika',
	'IMG_CAT_USER'			=> 'Dodatkowe obrazki',

	'IMG_SITE_LOGO'			=> 'Logo główne',
	'IMG_UPLOAD_BAR'		=> 'Pasek postępu wysyłania',
	'IMG_POLL_LEFT'			=> 'Lewy koniec ankiety',
	'IMG_POLL_CENTER'		=> 'Środek ankiety',
	'IMG_POLL_RIGHT'		=> 'Prawy koniec ankiety',
	'IMG_ICON_FRIEND'		=> 'Dodaj przyjaciela',
	'IMG_ICON_FOE'			=> 'Dodaj wroga',

	'IMG_FORUM_LINK'			=> 'Odnośnik forum',
	'IMG_FORUM_READ'			=> 'Forum',
	'IMG_FORUM_READ_LOCKED'		=> 'Zamknięte forum',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Subforum',
	'IMG_FORUM_UNREAD'			=> 'Forum – nieprzeczytane posty',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Zamknięte forum – nieprzeczytane posty',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Subforum – nieprzeczytane posty',
	'IMG_SUBFORUM_READ'			=> 'Legenda subforum',
	'IMG_SUBFORUM_UNREAD'		=> 'Legenda subforum – nieprzeczytane posty ',

	'IMG_TOPIC_MOVED'			=> 'Przesunięty temat',

	'IMG_TOPIC_READ'				=> 'Temat',
	'IMG_TOPIC_READ_MINE'			=> 'Temat – użytkownik zamieścił post w tym temacie',
	'IMG_TOPIC_READ_HOT'			=> 'Popularny temat',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Popularny temat – użytkownik zamieścił post w tym temacie',
	'IMG_TOPIC_READ_LOCKED'			=> 'Zamknięty temat',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Zamknięty temat – użytkownik zamieścił post w tym temacie',

	'IMG_TOPIC_UNREAD'				=> 'Temat – nieprzeczytane posty',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Temat – nieprzeczytane posty; użytkownik zamieścił post w tym temacie',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Popularny temat – nieprzeczytane posty',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Popularny temat – nieprzeczytane posty; użytkownik zamieścił post w tym temacie',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Zamknięty temat – nieprzeczytane posty',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Zamknięty temat – nieprzeczytane posty; użytkownik zamieścił post w tym temacie',

	'IMG_STICKY_READ'				=> 'Przyklejony temat ',
	'IMG_STICKY_READ_MINE'			=> 'Przyklejony temat – użytkownik zamieścił post w tym temacie',
	'IMG_STICKY_READ_LOCKED'		=> 'Zamknięty przyklejony temat',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Zamknięty przyklejony temat – użytkownik zamieścił post w tym temacie',
	'IMG_STICKY_UNREAD'				=> 'Przyklejony temat – nieprzeczytane posty',
	'IMG_STICKY_UNREAD_MINE'		=> 'Przyklejony temat – nieprzeczytane posty; użytkownik zamieścił post w tym temacie',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Zamknięty przyklejony temat – nieprzeczytane posty',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Zamknięty przyklejony temat – nieprzeczytane posty; użytkownik zamieścił post w tym temacie',

	'IMG_ANNOUNCE_READ'					=> 'Ogłoszenie',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Ogłoszenie – użytkownik zamieścił post w tym ogłoszeniu',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Zamknięte ogłoszenie',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Zamknięte ogłoszenie – użytkownik zamieścił post w tym ogłoszeniu',
	'IMG_ANNOUNCE_UNREAD'				=> 'Ogłoszenie – nieprzeczytane posty',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Ogłoszenie – nieprzeczytane posty; użytkownik zamieścił post w tym ogłoszeniu',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Zamknięte ogłoszenie – nieprzeczytane posty',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Zamknięte ogłoszenie – nieprzeczytane posty; użytkownik zamieścił post w tym ogłoszeniu',

	'IMG_GLOBAL_READ'					=> 'Ogłoszenie globalne',
	'IMG_GLOBAL_READ_MINE'				=> 'Ogłoszenie globalne – użytkownik zamieścił post w tym ogłoszeniu',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Zamknięte ogłoszenie globalne – przeczytane posty',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Zamknięte ogłoszenie globalne – użytkownik zamieścił post w tym ogłoszeniu',
	'IMG_GLOBAL_UNREAD'					=> 'Ogłoszenie globalne – nieprzeczytane posty',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Ogłoszenie globalne – nieprzeczytane posty; użytkownik zamieścił post w tym ogłoszeniu',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Zamknięte ogłoszenie globalne – nieprzeczytane posty',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Zamknięte ogłoszenie globalne – nieprzeczytane posty; użytkownik zamieścił post w tym ogłoszeniu',

	'IMG_PM_READ'		=> 'Przeczytana prywatna wiadomość',
	'IMG_PM_UNREAD'		=> 'Nieprzeczytana prywatna wiadomość',

	'IMG_ICON_BACK_TOP'		=> 'Przejdź do góry',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Wyślij e-mail',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'Wyślij wiadomość',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Witryna internetowa',

	'IMG_ICON_POST_DELETE'			=> 'Usuń post',
	'IMG_ICON_POST_EDIT'			=> 'Edytuj post',
	'IMG_ICON_POST_INFO'			=> 'Wyświetl szczegóły postu',
	'IMG_ICON_POST_QUOTE'			=> 'Cytuj post',
	'IMG_ICON_POST_REPORT'			=> 'Zgłoś post',
	'IMG_ICON_POST_TARGET'			=> 'Post – mała ikona',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Post – nieprzeczytany, mała ikona',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Załącznik',
	'IMG_ICON_TOPIC_LATEST'			=> 'Ostatni post',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Ostatni nieprzeczytany post',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Zgłoszony post',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Niezaakceptowany post',

	'IMG_ICON_USER_ONLINE'		=> 'Użytkownik jest online',
	'IMG_ICON_USER_OFFLINE'		=> 'Użytkownik jest offline',
	'IMG_ICON_USER_PROFILE'		=> 'Wyświetl profil',
	'IMG_ICON_USER_SEARCH'		=> 'Przeszukaj posty',
	'IMG_ICON_USER_WARN'		=> 'Udziel ostrzeżenie',

	'IMG_BUTTON_PM_FORWARD'		=> 'Przekaż dalej prywatną wiadomość',
	'IMG_BUTTON_PM_NEW'			=> 'Nowa prywatna wiadomość',
	'IMG_BUTTON_PM_REPLY'		=> 'Odpowiedz na prywatną wiadomość',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Temat zamknięty',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Nowy temat',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Odpowiedz',

	'IMG_USER_ICON1'		=> 'Obrazek zdefiniowany przez użytkownika #1',
	'IMG_USER_ICON2'		=> 'Obrazek zdefiniowany przez użytkownika #2',
	'IMG_USER_ICON3'		=> 'Obrazek zdefiniowany przez użytkownika #3',
	'IMG_USER_ICON4'		=> 'Obrazek zdefiniowany przez użytkownika #4',
	'IMG_USER_ICON5'		=> 'Obrazek zdefiniowany przez użytkownika #5',
	'IMG_USER_ICON6'		=> 'Obrazek zdefiniowany przez użytkownika #6',
	'IMG_USER_ICON7'		=> 'Obrazek zdefiniowany przez użytkownika #7',
	'IMG_USER_ICON8'		=> 'Obrazek zdefiniowany przez użytkownika #8',
	'IMG_USER_ICON9'		=> 'Obrazek zdefiniowany przez użytkownika #9',
	'IMG_USER_ICON10'		=> 'Obrazek zdefiniowany przez użytkownika #10',

	'INACTIVE_STYLES'			=> 'Nieaktywne style',
	'INCLUDE_DIMENSIONS'		=> 'Dołącz wymiary obrazka',
	'INCLUDE_IMAGESET'			=> 'Dołącz zestaw obrazków',
	'INCLUDE_TEMPLATE'			=> 'Dołącz szablon',
	'INCLUDE_THEME'				=> 'Dołącz motyw',
	'INHERITING_FROM'			=> 'Dziedziczy z',
	'INSTALL_IMAGESET'			=> 'Zainstaluj zestaw obrazków',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Tutaj można zainstalować wybrany zestaw obrazków. Można dokonać pewnych zmian lub użyć ustawień domyślnych.',
	'INSTALL_STYLE'				=> 'Zainstaluj styl',
	'INSTALL_STYLE_EXPLAIN'		=> 'Tutaj można zainstalować nowy styl i odpowiednie dla niego elementy stylu. Jeśli są one już zainstalowane, nie zostaną zastąpione. Niektóre style wymagają, żeby inne elementy stylów były już zainstalowane. Jeśli podczas instalacji takiego stylu potrzebne elementy nie zostaną znalezione, zostanie wyświetlone stosowne powiadomienie.',
	'INSTALL_TEMPLATE'			=> 'Zainstaluj szablon',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Tutaj można zainstalować nowy szablon. W zależności od konfiguracji twojego serwera możesz mieć możliwość dokonania pewnych zmian.',
	'INSTALL_THEME'				=> 'Zainstaluj motyw',
	'INSTALL_THEME_EXPLAIN'		=> 'Tutaj można zainstalować wybrany motyw. Można dokonać pewnych zmian lub skorzystać z ustawień domyślnych.',
	'INSTALLED_IMAGESET'		=> 'Zainstalowany zestaw obrazków',
	'INSTALLED_STYLE'			=> 'Zainstalowane style',
	'INSTALLED_TEMPLATE'		=> 'Zainstalowane szablony',
	'INSTALLED_THEME'			=> 'Zainstalowane motywy',

	'KEEP_IMAGESET'				=> 'Pozostaw zestaw obrazków „%s”',
	'KEEP_TEMPLATE'				=> 'Pozostaw szablon „%s”',
	'KEEP_THEME'				=> 'Pozostaw motyw „%s”',

	'LINE_SPACING'				=> 'Odstępy między wierszami',
	'LOCALISED_IMAGES'			=> 'Zlokalizowane',
	'LOCATION_DISABLED_EXPLAIN'	=> 'To ustawienie jest dziedziczone i nie może być zmieniane.',

	'NO_CLASS'					=> 'Nie można znaleźć klasy w arkuszu stylów.',
	'NO_IMAGESET'				=> 'Nie można znaleźć zestawu obrazków w katalogu witryny.',
	'NO_IMAGE'					=> 'Brak obrazka',
	'NO_IMAGE_ERROR'			=> 'Nie można odnaleźć obrazka w katalogu witryny.',
	'NO_STYLE'					=> 'Nie można odnaleźć stylu w katalogu witryny.',
	'NO_TEMPLATE'				=> 'Nie można odnaleźć szablonu w katalogu witryny.',
	'NO_THEME'					=> 'Nie można odnaleźć szablonu w katalogu witryny.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Nie ma żadnego zestawu obrazków do zainstalowania.',
	'NO_UNINSTALLED_STYLE'		=> 'Nie ma żadnego stylu do zainstalowania.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Nie ma żadnego szablonu do zainstalowania.',
	'NO_UNINSTALLED_THEME'		=> 'Nie ma żadnego motywu do zainstalowania.',
	'NO_UNIT'					=> 'Brak',

	'ONLY_IMAGESET'			=> 'To jest jedyny pozostały zestaw obrazków – nie można go usunąć.',
	'ONLY_STYLE'			=> 'To jest jedyny pozostały styl – nie można go usunąć.',
	'ONLY_TEMPLATE'			=> 'To jest jedyny pozostały szablon – nie można go usunąć.',
	'ONLY_THEME'			=> 'To jest jedyny pozostały motyw – nie można go usunąć.',
	'OPTIONAL_BASIS'		=> 'elementów bazowych',

	'REFRESH'					=> 'Odśwież',
	'REPEAT_NO'					=> 'Brak',
	'REPEAT_X'					=> 'Tylko w poziomie',
	'REPEAT_Y'					=> 'Tylko w pionie',
	'REPEAT_ALL'				=> 'Oba kierunki',
	'REPLACE_IMAGESET'			=> 'Zamień zestaw obrazków na',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Ten zestaw obrazków zastąpi usuwany zestaw we wszystkich stylach, które go używają.',
	'REPLACE_STYLE'				=> 'Zamień styl na',
	'REPLACE_STYLE_EXPLAIN'		=> 'Ten styl zastąpi usuwany styl u wszystkich użytkowników, którzy go używają.',
	'REPLACE_TEMPLATE'			=> 'Zamień szablon na',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Ten szablon zastąpi usuwany szablon we wszystkich stylach, które go używają.',
	'REPLACE_THEME'				=> 'Zamień motyw na',
	'REPLACE_THEME_EXPLAIN'		=> 'Ten motyw zastąpi usuwany motyw we wszystkich stylach, które go używają.',
	'REPLACE_WITH_OPTION'		=> 'Zamień z „%s”',
	'REQUIRES_IMAGESET'			=> 'Ten styl wymaga, aby był zainstalowany zestaw obrazków %s.',
	'REQUIRES_TEMPLATE'			=> 'Ten styl wymaga, aby był zainstalowany szablon %s.',
	'REQUIRES_THEME'			=> 'Ten styl wymaga, aby był zainstalowany motyw %s.',

	'SELECT_IMAGE'				=> 'Wybierz obrazek',
	'SELECT_TEMPLATE'			=> 'Wybierz plik szablonu',
	'SELECT_THEME'				=> 'Wybierz plik motywu',
	'SELECTED_IMAGE'			=> 'Wybrany obrazek',
	'SELECTED_IMAGESET'			=> 'Wybrany zestaw obrazków',
	'SELECTED_TEMPLATE'			=> 'Wybrany szablon',
	'SELECTED_TEMPLATE_FILE'	=> 'Wybrany plik szablonu',
	'SELECTED_THEME'			=> 'Wybrany motyw',
	'SELECTED_THEME_FILE'		=> 'Wybrany plik motywu',
	'STORE_DATABASE'			=> 'Baza danych',
	'STORE_FILESYSTEM'			=> 'Katalog witryny',
	'STYLE_ACTIVATE'			=> 'Aktywuj',
	'STYLE_ACTIVE'				=> 'Aktywny',
	'STYLE_ADDED'				=> 'Styl został dodany.',
	'STYLE_DEACTIVATE'			=> 'Dezaktywuj',
	'STYLE_DEFAULT'				=> 'Ustaw jako domyślny',
	'STYLE_DELETED'				=> 'Styl został usunięty.',
	'STYLE_DETAILS_UPDATED'		=> 'Styl został zmieniony.',
	'STYLE_ERR_ARCHIVE'			=> 'Proszę wybrać metodę archiwizacji.',
	'STYLE_ERR_COPY_LONG'		=> 'Informacja o prawach autorskich nie może być dłuższa niż 60 znaków.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Należy wybrać co najmniej jeden element stylu.',
	'STYLE_ERR_NAME_CHARS'		=> 'Nazwa stylu może zawierać tylko cyfry, litery oraz -, +, _ i spacje.',
	'STYLE_ERR_NAME_EXIST'		=> 'Styl o takiej nazwie już istnieje.',
	'STYLE_ERR_NAME_LONG'		=> 'Nazwa stylu nie może być dłuższa niż 30 znaków.',
	'STYLE_ERR_NO_IDS'			=> 'Należy wybrać szablon, motyw i zestaw obrazków dla tego stylu.',
	'STYLE_ERR_NOT_STYLE'		=> 'Zaimportowany lub wgrany plik nie zawiera poprawnego archiwum stylu.',
	'STYLE_ERR_STYLE_NAME'		=> 'Należy podać nazwę dla tego stylu.',
	'STYLE_EXPORT'				=> 'Eksportuj styl',
	'STYLE_EXPORT_EXPLAIN'		=> 'Tutaj można wyeksportować styl w formie archiwum. Styl musi zawierać co najmniej jeden element – nie musi zawierać wszystkich elementów. Na przykład, jeśli jest utworzony nowy motyw i zestaw obrazków dla często używanego szablonu, można wyeksportować tylko motyw i zestaw obrazków, pomijając szablon. Możesz pobrać pliki bezpośrednio lub zapisać je w katalogu, gdzie przechowujesz pliki i pobrać go później przez FTP.',

	'STYLE_EXPORTED'			=> 'Styl został wyeksportowany i zachowany w %s.',
	'STYLE_IMAGESET'			=> 'Zestaw obrazków',
	'STYLE_NAME'				=> 'Nazwa stylu',
	'STYLE_TEMPLATE'			=> 'Szablon',
	'STYLE_THEME'				=> 'Motyw',
	'STYLE_USED_BY'				=> 'Liczba używających (z robotami)',

	'TEMPLATE_ADDED'			=> 'Szablon został dodany i zachowany w katalogu witryny.',
	'TEMPLATE_ADDED_DB'			=> 'Szablon został dodany i zachowany w bazie danych.',
	'TEMPLATE_CACHE'			=> 'Bufor szablonu',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'Skrypt phpBB domyślnie buforuje skompilowane wersje swoich szablonów. Zmniejsza to obciążenie serwera przy każdym wyświetleniu, a dzięki temu może zmniejszyć czas generowania strony. Tutaj możesz zobaczyć stan bufora każdego pliku oraz usunąć poszczególne pliki bądź też całkowicie wyczyścić bufor.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Bufor szablonu został wyczyszczony.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Nie ma żadnych szablonów w buforze.',
	'TEMPLATE_DELETED'			=> 'Szablon został usunięty.',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'Szablon nie może zostać usunięty, ponieważ inne szablony dziedziczą z niego:',
	'TEMPLATE_DELETED_FS'		=> 'Szablon został usunięty z bazy danych, ale niektóre pliki mogły pozostać w katalogu witryny.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Szczegóły szablonu zostały zaktualizowane.',
	'TEMPLATE_EDITOR'			=> 'Edytor szablonów',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Wysokość okna edytora',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Wybierz metodę archiwizacji.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Nie można otworzyć katalogu bufora używanego do przechowania zbuforowanych wersji plików szablonu.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Informacja o prawach autorskich nie może być dłuższa niż 60 znaków.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Nazwa szablonu może zawierać tylko znaki alfanumeryczne, -, +, _ oraz spację.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Szablon o takiej nazwie już istnieje.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Nazwa szablonu nie może zawierać więcej niż 30 znaków.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Podane archiwum nie zawiera prawidłowego szablonu.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'Nowy szablon wymaga zainstalowania szablonu %s, niedziedziczącego z innymi szablonami.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Należy podać nazwę tego szablonu.',
	'TEMPLATE_EXPORT'			=> 'Eksportuj szablony',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Tutaj można wyeksportować szablon w formie archiwum. Archiwum to zawierać będzie wszystkie niezbędne pliki do instalacji szablonu na innej witrynie. Można pobrać ten plik teraz lub zapisać archiwum w katalogu przechowywania i pobrać go później poprzez FTP.',
	'TEMPLATE_EXPORTED'			=> 'Szablon został wyeksportowany i zachowany w %s.',
	'TEMPLATE_FILE'				=> 'Plik szablonu',
	'TEMPLATE_FILE_UPDATED'		=> 'Plik szablonu został zaktualizowany.',
	'TEMPLATE_INHERITS'			=> 'Ten szablon dziedziczy z %s i w związku z tym nie może być umieszczony w innym miejscu niż szablon, z którego dziedziczy.',
	'TEMPLATE_LOCATION'			=> 'Zapisuj szablony w',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Obrazki są zawsze przechowywane w katalogu witryny.',
	'TEMPLATE_NAME'				=> 'Nazwa szablonu',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'Nie można zapisać do pliku szablonu %s. Proszę sprawdzić uprawnienia dla katalogu i plików.',
	'TEMPLATE_REFRESHED'		=> 'Szablon został odświeżony.',

	'THEME_ADDED'				=> 'Motyw został dodany do katalogu witryny.',
	'THEME_ADDED_DB'			=> 'Motyw został dodany do bazy danych.',
	'THEME_CLASS_ADDED'			=> 'Własna klasa została dodana.',
	'THEME_DELETED'				=> 'Motyw został usunięty.',
	'THEME_DELETED_FS'			=> 'Motyw został usunięty z bazy danych, ale jego pliki pozostały w katalogu witryny.',
	'THEME_DETAILS_UPDATED'		=> 'Szczegóły motywu zostały zaktualizowane.',
	'THEME_EDITOR'				=> 'Edytor motywów',
	'THEME_EDITOR_HEIGHT'		=> 'Wysokość okna edytora',
	'THEME_ERR_ARCHIVE'			=> 'Wybierz metodę archiwizacji.',
	'THEME_ERR_CLASS_CHARS'		=> 'Nazwa klasy może zawierać tylko znaki alfanumeryczne oraz ., :, -, _, #',
	'THEME_ERR_COPY_LONG'		=> 'Informacja o prawach autorskich nie może zawierać więcej niż 60 znaków.',
	'THEME_ERR_NAME_CHARS'		=> 'Nazwa motywu może zawierać tylko znaki alfanumeryczne, -, +, _ oraz spację.',
	'THEME_ERR_NAME_EXIST'		=> 'Motyw o takiej nazwie już istnieje.',
	'THEME_ERR_NAME_LONG'		=> 'Nazwa motywu nie może zawierać więcej niż 30 znaków.',
	'THEME_ERR_NOT_THEME'		=> 'Podane archiwum nie zawiera prawidłowego motywu.',
	'THEME_ERR_REFRESH_FS'		=> 'Ten motyw jest zapisywany w katalogu witryny, więc nie ma potrzeby go odświeżać.',
	'THEME_ERR_STYLE_NAME'		=> 'Należy podać nazwę tego motywu.',
	'THEME_FILE'				=> 'Plik motywu',
	'THEME_EXPORT'				=> 'Eksportuj motyw',
	'THEME_EXPORT_EXPLAIN'		=> 'Tutaj można wyeksportować motyw w formie archiwum. Archiwum to zawierać będzie wszystkie niezbędne pliki do instalacji motywu na innej witrynie. Można pobrać ten plik bezpośrednio lub zapisać go w katalogu przechowywania i pobrać go później przez FTP.',
	'THEME_EXPORTED'			=> 'Motyw został wyeksportowany i zachowany w %s.',
	'THEME_LOCATION'			=> 'Zapisz arkusz stylów w',
	'THEME_LOCATION_EXPLAIN'	=> 'Obrazki są zawsze zapisywane w katalogu witryny.',
	'THEME_NAME'				=> 'Nazwa motywu',
	'THEME_REFRESHED'			=> 'Motyw został odświeżony.',
	'THEME_UPDATED'				=> 'Motyw został zaktualizowany.',

	'UNDERLINE'				=> 'Podkreślenie',
	'UNINSTALLED_IMAGESET'	=> 'Niezainstalowane zestawy obrazków',
	'UNINSTALLED_STYLE'		=> 'Niezainstalowane style',
	'UNINSTALLED_TEMPLATE'	=> 'Niezainstalowane szablony',
	'UNINSTALLED_THEME'		=> 'Niezainstalowane motywy',
	'UNSET'					=> 'Niezdefiniowane',

));

?>