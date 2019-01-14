<?php
/**
*
* Pages extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	// Manage page
	'ACP_PAGES_MANAGE'					=> 'Halda lehekülgi',
	'ACP_PAGES_MANAGE_EXPLAIN'			=> 'Sellelt lehelt saate lisada, muuta ja kustutada kohandatud staatilisi lehti.',
	'ACP_PAGES_CREATE_PAGE'				=> 'Loo leht',
	'ACP_PAGES_CREATE_PAGE_EXPLAIN'		=> 'Alltoodud vormi abil saate oma foorumile luua uue kohandatud staatilise lehe.',
	'ACP_PAGES_EDIT_PAGE'				=> 'Muuda lehte',
	'ACP_PAGES_EDIT_PAGE_EXPLAIN'		=> 'Kasutades allolevat vormi saate värskendada oma foorumi jaoks olemasolevat kohandatud staatilist lehte.',

	// Display pages list
	'ACP_PAGES_TITLE'					=> 'Pealkiri',
	'ACP_PAGES_DESCRIPTION'				=> 'Kirjeldus',
	'ACP_PAGES_ROUTE'					=> 'Tee',
	'ACP_PAGES_TEMPLATE'				=> 'Mall',
	'ACP_PAGES_ORDER'					=> 'Järjekord',
	'ACP_PAGES_LINK'					=> 'Link',
	'ACP_PAGES_VIEW'					=> 'Vaata lehekülge',
	'ACP_PAGES_STATUS'					=> 'Staatus',
	'ACP_PAGES_PUBLISHED'				=> 'Avaldatud',
	'ACP_PAGES_PUBLISHED_NO_GUEST'		=> 'avaldatud (ainult liikmed)',
	'ACP_PAGES_PRIVATE'					=> 'Privaatne',
	'ACP_PAGES_EMPTY'					=> 'Lehte ei leitud',

	// Purge icons
	'ACP_PAGES_PURGE_ICONS'				=> 'Puhasta ikoonid',
	'ACP_PAGES_PURGE_ICONS_LABEL'		=> 'Puhasta lehekülgede ikoonide vahemälu',
	'ACP_PAGES_PURGE_ICONS_EXPLAIN'		=> 'Kohandatud lehe linki ikoonide lisamisel peate uute ikoonide nägemiseks ikooni vahemälu puhastama. Kohandatud ikoonide nimed <samp>pages_route.gif</samp>, kus <samp>tee</samp> on lehtede tee nimi phpBB-s <samp>styles/*/theme/images/</samp> kaustades.',

	// Messages shown to user
	'ACP_PAGES_DELETE_CONFIRM'			=> 'Oled kindel, et soovid selle lehe kustutada?',
	'ACP_PAGES_DELETE_SUCCESS'			=> 'Leht edukalt kustutatud.',
	'ACP_PAGES_DELETE_ERRORED'			=> 'Lehte ei saa kustutada.',
	'ACP_PAGES_ADD_SUCCESS'				=> 'Leht edukalt lisatud.',
	'ACP_PAGES_EDIT_SUCCESS'			=> 'Leht edukalt uuendatud.',

	// Add/edit page
	'ACP_PAGES_SETTINGS'				=> 'Lehe seaded',
	'ACP_PAGES_OPTIONS'					=> 'Lehe valikud',
	'ACP_PAGES_FORM_TITLE'				=> 'Lehe pealkiri',
	'ACP_PAGES_FORM_TITLE_EXPLAIN'		=> 'See on kohustuslik väli.',
	'ACP_PAGES_FORM_DESC'				=> 'Lehe kirjeldus',
	'ACP_PAGES_FORM_DESC_EXPLAIN'		=> 'Seda kuvatakse ainult AJP vaates.',
	'ACP_PAGES_FORM_ROUTE'				=> 'Lehe URL tee',
	'ACP_PAGES_FORM_ROUTE_EXPLAIN'		=> 'Lehe nime puhastatud versioon, mida kasutatakse lehe URL-i loomiseks, nt. <samp>http://www.phpbb.com/<strong>sinu-tee</strong></samp>. Lubatud on ainult tähed, numbrid, sidekriipsud ja alljooned. See on kohustuslik väli.',
	'ACP_PAGES_FORM_CONTENT'			=> 'Lehe sisu',
	'ACP_PAGES_FORM_CONTENT_EXPLAIN'	=> 'Sisu saab luua tavaliste phpBB BBkoodi, emotikonide ja URL-ide abil või lubada HTML-režiim. HTML-režiimis ei tööta BBkood, emotikonid ja URL-id, kuid teil on võimalus kasutada mis tahes kehtivat HTML-süntaksit. Pane tähele, et see sisu lisatakse olemasolevale HTML-mallile nii, et te ei tohiks lisada DOCTYPE, HTML, BODY või HEAD silte. Siiski võib kasutada kõiki teisi HTML-vormingus silte, sealhulgas IFRAME, SCRIPT, STYLE, EMBED, VIDEO jne.',
	'ACP_PAGES_FORM_TEMPLATE'			=> 'Lehe mall',
	'ACP_PAGES_FORM_TEMPLATE_EXPLAIN'	=> 'Kohandatud lehe malli nimesid <samp>pages_*.html</samp> saab lisada phpBB <samp>styles/*/template</samp> kaustadesse.',
	'ACP_PAGES_FORM_TEMPLATE_SELECT'	=> 'Vali mall',
	'ACP_PAGES_FORM_ORDER'				=> 'Lehe järjekord',
	'ACP_PAGES_FORM_ORDER_EXPLAIN'		=> 'Lehed sorteeritakse vastavalt sellele väljale, mis aitab korraldada nende linkide ilmumise järjekorda. Väiksemad numbrid on kõrgemate numbrite ees.',
	'ACP_PAGES_FORM_LINKS'				=> 'Lehekülje lingi asukohad',
	'ACP_PAGES_FORM_LINKS_EXPLAIN'		=> 'Valige üks või mitu asukohta, kus selle lehe link kuvatakse. Kasuta CTRL+CLICK (või CMD+CLICK Mac-il) valimiseks / tühistamiseks rohkem kui ühte valikut.',
	'ACP_PAGES_FORM_ICON_FONT'			=> 'Lehe lingi ikoon',
	'ACP_PAGES_FORM_ICON_FONT_EXPLAIN'	=> 'Sisestage <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Font Awesome</a> ikoon mida kasutada lehe lingiga. Jäta see väli tühjaks, et kasutada lehekülgede traditsioonilisi CSS / GIF ikoone.',
	'ACP_PAGES_FORM_DISPLAY'			=> 'Kuva leht',
	'ACP_PAGES_FORM_DISPLAY_EXPLAIN'	=> 'Kui see on seatud väärtusele ei, ei ole leht kättesaadav. (Märkus. Administraatoritel jääb endiselt lehele juurdepääs, võimaldades neil lehe arendamisel seda privaatselt eelvaadata.)',
	'ACP_PAGES_FORM_GUESTS'				=> 'Kuva leht külalistele',
	'ACP_PAGES_FORM_GUESTS_EXPLAIN'		=> 'Kui see on seatud väärtusele Ei, on leht kättesaadav ainult registreeritud kasutajatele.',
	'ACP_PAGES_FORM_VIEW_PAGE'			=> 'Lehe link',
	'PARSE_HTML'						=> 'Parse HTML',

	// Page link location names
	'NAV_BAR_LINKS_BEFORE'				=> 'Navigeerimisribal enne linke',
	'NAV_BAR_LINKS_AFTER'				=> 'Navigeerimisribal peale linke',
	'NAV_BAR_CRUMBS_BEFORE'				=> 'Navigeerimisribal Before Breadcrumbs',
	'NAV_BAR_CRUMBS_AFTER'				=> 'Navigeerimisribal After Breadcrumbs',
	'FOOTER_TIMEZONE_BEFORE'			=> 'Jaluses enne ajatsooni',
	'FOOTER_TIMEZONE_AFTER'				=> 'Jaluses peale ajatsooni',
	'FOOTER_TEAMS_BEFORE'				=> 'Jaluses enne Meeskonna linki',
	'FOOTER_TEAMS_AFTER'				=> 'Jaluses peale Meeskonna linki',
	'QUICK_LINK_MENU_BEFORE'			=> 'Kiirlinkide menüüs üleval',
	'QUICK_LINK_MENU_AFTER'				=> 'Kiirlinkide menüüd all',
));
