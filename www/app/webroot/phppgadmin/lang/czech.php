<?php

	/**
	 * Czech language file for phpPgAdmin. Based on Englis file.
	 * Translators: marek@manet.cz
	 *
	 * $Id: czech.php,v 1.232 2010/08/27 16:34:33 ioguix Exp $
	 */

	// Language and character set
	$lang['applang'] = 'Česky';
	$lang['appcharset'] = 'utf-8';
	$lang['applocale'] = 'cs_CZ';
	$lang['appdbencoding'] = 'UNICODE';
	$lang['applangdir'] = 'ltr';

	// Welcome
	$lang['strintro'] = 'Vítejte v phpPgAdmin.';
	$lang['strppahome'] = 'Domovská stránka phpPgAdmin';
	$lang['strpgsqlhome'] = 'Domovská stránka PostgreSQL';
	$lang['strpgsqlhome_url'] = 'http://www.postgresql.org/';
	$lang['strlocaldocs'] = 'Lokální dokumentace k PostgreSQL';
	$lang['strreportbug'] = 'Nahlásit chybu';
	$lang['strviewfaq'] = 'Přečíst si časté dotazy a odpovědi';
	$lang['strviewfaq_url'] = 'http://phppgadmin.sourceforge.net/?page=faq';
	
	// Basic strings
	$lang['strlogin'] = 'Přihlásit';
	$lang['strloginfailed'] = 'Přihlášení se nezdařilo';
	$lang['strlogindisallowed'] = 'Z bezpečnostních důvodů není přihlášení povoleno.';
	$lang['strserver'] = 'Server';
	$lang['strservers'] = 'Servery';
	$lang['strgroupservers'] = 'Servery ve skupině „%s“';
	$lang['strallservers'] = 'Všechny servery';
	$lang['strintroduction'] = 'Úvodní stránka';
	$lang['strhost'] = 'Hostitel';
	$lang['strport'] = 'Port';
	$lang['strlogout'] = 'Odhlásit';
	$lang['strowner'] = 'Vlastník';
	$lang['straction'] = 'Akce';
	$lang['stractions'] = 'Akce';
	$lang['strname'] = 'Název';
	$lang['strdefinition'] = 'Definice';
	$lang['strproperties'] = 'Vlastnosti';
	$lang['strbrowse'] = 'Procházet';
	$lang['strenable'] = 'Povolit';
	$lang['strdisable'] = 'Zakázat';
	$lang['strdrop'] = 'Odstranit';
	$lang['strdropped'] = 'Odstraněno';
	$lang['strnull'] = 'Prázdný';
	$lang['strnotnull'] = 'Neprázdný';
	$lang['strprev'] = '< Předchozí';
	$lang['strnext'] = 'Následující >';
	$lang['strfirst'] = '<< První';
	$lang['strlast'] = 'Poslední >>';
	$lang['strfailed'] = 'Nezdařilo se';
	$lang['strcreate'] = 'Vytvořit';
	$lang['strcreated'] = 'Vytvořeno';
	$lang['strcomment'] = 'Komentář';
	$lang['strlength'] = 'Délka';
	$lang['strdefault'] = 'Výchozí';
	$lang['stralter'] = 'Změnit';
	$lang['strok'] = 'OK';
	$lang['strcancel'] = 'Storno';
	$lang['strkill'] = 'Zabít';
	$lang['strac'] = 'Povolit automatické dokončení';
	$lang['strsave'] = 'Uložit';
	$lang['strreset'] = 'Resetovat';
	$lang['strrestart'] = 'Restartovat';
	$lang['strinsert'] = 'Vložit';
	$lang['strselect'] = 'Vybrat';
	$lang['strdelete'] = 'Smazat';
	$lang['strupdate'] = 'Aktualizovat';
	$lang['strreferences'] = 'Odkazy';
	$lang['stryes'] = 'Ano';
	$lang['strno'] = 'Ne';
	$lang['strtrue'] = 'PRAVDA';
	$lang['strfalse'] = 'NEPRAVDA';
	$lang['stredit'] = 'Upravit';
	$lang['strcolumn'] = 'Sloupec';
	$lang['strcolumns'] = 'Sloupce';
	$lang['strrows'] = 'řádků';
	$lang['strrowsaff'] = 'řádků změněno.';
	$lang['strobjects'] = 'objektů';
	$lang['strback'] = 'Zpět';
	$lang['strqueryresults'] = 'Výsledky dotazu';
	$lang['strshow'] = 'Zobrazit';
	$lang['strempty'] = 'Vyprázdnit';
	$lang['strlanguage'] = 'Jazyk';
	$lang['strencoding'] = 'Kódování';
	$lang['strvalue'] = 'Hodnota';
	$lang['strunique'] = 'Jedinečný';
	$lang['strprimary'] = 'Primární';
	$lang['strexport'] = 'Export';
	$lang['strimport'] = 'Import';
	$lang['strallowednulls'] = 'Povolené nulové znaky';
	$lang['strbackslashn'] = '\n';
	$lang['stremptystring'] = 'Prázdné řetězce/pole';
	$lang['strsql'] = 'SQL';
	$lang['stradmin'] = 'Správa';
	$lang['strvacuum'] = 'Uklidit';
	$lang['stranalyze'] = 'Analyzovat';
	$lang['strclusterindex'] = 'Přeskupit';
	$lang['strclustered'] = 'Přeskupeno?';
	$lang['strreindex'] = 'Přeindexovat';
	$lang['strexecute'] = 'Provést';
	$lang['stradd'] = 'Přidat';
	$lang['strevent'] = 'Událost';
	$lang['strwhere'] = 'Kde';
	$lang['strinstead'] = 'Místo původního';
	$lang['strwhen'] = 'Kdy';
	$lang['strformat'] = 'Formát';
	$lang['strdata'] = 'Data';
	$lang['strconfirm'] = 'Potvrzení';
	$lang['strexpression'] = 'Výraz';
	$lang['strellipsis'] = '…';
	$lang['strseparator'] = ': ';
	$lang['strexpand'] = 'Rozbalit';
	$lang['strcollapse'] = 'Sbalit';
	$lang['strfind'] = 'Hledat';
	$lang['stroptions'] = 'Volby';
	$lang['strrefresh'] = 'Občerstvit';
	$lang['strdownload'] = 'Stáhnout';
	$lang['strdownloadgzipped'] = 'Stáhnout komprimované pomocí gzip';
	$lang['strinfo'] = 'Informace';
	$lang['stroids'] = 'OID';
	$lang['stradvanced'] = 'Pokročilé';
	$lang['strvariables'] = 'Proměnné';
	$lang['strprocess'] = 'Proces';
	$lang['strprocesses'] = 'Procesy';
	$lang['strsetting'] = 'Nastavení';
	$lang['streditsql'] = 'Upravit SQL';
	$lang['strruntime'] = 'Celková doba běhu: %s ms';
	$lang['strpaginate'] = 'Stránkovat výsledky';
	$lang['struploadscript'] = 'nebo nahrajte skript SQL:';
	$lang['strstarttime'] = 'Čas spuštění';
	$lang['strfile'] = 'Soubor';
	$lang['strfileimported'] = 'Soubor byl importován.';
	$lang['strtrycred'] = 'Použít tato prověření pro všechny servery';
	$lang['strconfdropcred'] = 'Odpojením se z bezpečnostních důvodů smažou vaše sdílené připojovací informace. Opravdu se chcete odpojit?';
	$lang['stractionsonmultiplelines'] = 'Akce pro víc řádků';
	$lang['strselectall'] = 'Vybrat vše';
	$lang['strunselectall'] = 'Zrušit výběr';
	$lang['strlocale'] = 'Místní nastavení';
	$lang['strcollation'] = 'Řazení';
	$lang['strctype'] = 'Typ znaku';
	$lang['strdefaultvalues'] = 'Výchozí hodnoty';
	$lang['strnewvalues'] = 'Nové hodnoty';
	$lang['strstart'] = 'Spustit';
	$lang['strstop'] = 'Zastavit';
	$lang['strgotoppage'] = 'zpět nahoru';
	$lang['strtheme'] = 'Motiv';
	
	// Admin
	$lang['stradminondatabase'] = 'Následující úlohy správy použít na celou databázi %s.';
	$lang['stradminontable'] = 'Následující úlohy správy použít na tabulku %s.';
	
	// User-supplied SQL history
	$lang['strhistory'] = 'Historie';
	$lang['strnohistory'] = 'Bez historie.';
	$lang['strclearhistory'] = 'Smazat historii';
	$lang['strdelhistory'] = 'Odebrat z historie';
	$lang['strconfdelhistory'] = 'Opravdu tento požadavek odebrat z historie?';
	$lang['strconfclearhistory'] = 'Skutečně smazat historii?';
	$lang['strnodatabaseselected'] = 'Zvolte prosím databázi.';

	// Database sizes
	$lang['strnoaccess'] = 'Bez přístupu'; 
	$lang['strsize'] = 'Velikost';
	$lang['strbytes'] = 'B';
	$lang['strkb'] = 'kB';
	$lang['strmb'] = 'MB';
	$lang['strgb'] = 'GB';
	$lang['strtb'] = 'TB';

	// Error handling
	$lang['strnoframes'] = 'Tato aplikace pracuje nejlépe, pokud jsou v prohlížeči povolené rámy. Může ale pracovat i bez rámů, stačí kliknout na následující odkaz.';
	$lang['strnoframeslink'] = 'Použít bez rámů';
	$lang['strbadconfig'] = 'Váš config.inc.php je zastaralý. Potřebujete jej vygenerovat znovu z nového config.inc.php-dist.';
	$lang['strnotloaded'] = 'Vaše instalace PHP nepodporuje PostgreSQL. Potřebujete znovu přeložit PHP s použitím volby --with-pgsql.';
	$lang['strpostgresqlversionnotsupported'] = 'Verze PostgreSQL není podporovaná. Přejděte prosím na verzi %s nebo novější.';
	$lang['strbadschema'] = 'Zadáno neplatné schéma.';
	$lang['strbadencoding'] = 'Nezdařilo se nastavit kódování klienta v databázi.';
	$lang['strsqlerror'] = 'Chyba SQL:';
	$lang['strinstatement'] = 'Ve výrazu:';
	$lang['strinvalidparam'] = 'Neplatné parametry skriptu.';
	$lang['strnodata'] = 'Nenalezen žádný řádek.';
	$lang['strnoobjects'] = 'Nenalezen žádný objekt.';
	$lang['strrownotunique'] = 'Pro tento řádek neexistuje jedinečný identifikátor.';
	$lang['strnoreportsdb'] = 'Nemáte vytvořenou databázi výstupních sestav. Přečtěte si soubor INSTALL s instrukcemi.';
	$lang['strnouploads'] = 'Je zakázané nahrávání souborů.';
	$lang['strimporterror'] = 'Chyba při importu.';
	$lang['strimporterror-fileformat'] = 'Chyba při importu: Nezdařilo se automaticky zjistit formát souboru.';
	$lang['strimporterrorline'] = 'Chyba při importu na řádku %s.';
	$lang['strimporterrorline-badcolumnnum'] = 'Chyba při importu na řádku %s: Řádek nemá správný počet sloupců.';
	$lang['strimporterror-uploadedfile'] = 'Chyba při importu: Soubor nelze nahrát na server';
	$lang['strcannotdumponwindows'] = 'Ve Windows není podporovaný výpis názvů komplexních tabulek a schémat.';
	$lang['strinvalidserverparam'] = 'Pokus o připojení s neplatnými parametry serveru, možná se někdo snaží neoprávněně napojit do vašeho systému.'; 
	$lang['strnoserversupplied'] = 'Není nabízen žádný server!';
	$lang['strbadpgdumppath'] = 'Chyba při exportu: Nezdařilo se spustit pg_dump (s cestou danou ve vašem conf/config.inc.php: %s). Opravte prosím cestu ve svém nastavení a zkuste to znovu.';
	$lang['strbadpgdumpallpath'] = 'Chyba při exportu: Nezdařilo se spustit pg_dumpall (s cestou danou ve vašem conf/config.inc.php: %s). Opravte prosím cestu ve svém nastavení a zkuste to znovu.';
	$lang['strconnectionfail'] = 'Nelze se připojit k serveru.';

	// Tables
	$lang['strtable'] = 'Tabulka';
	$lang['strtables'] = 'Tabulky';
	$lang['strshowalltables'] = 'Zobrazit všechny tabulky';
	$lang['strnotables'] = 'Nenalezeny žádné tabulky.';
	$lang['strnotable'] = 'Nenalezena žádná tabulka.';
	$lang['strcreatetable'] = 'Vytvořit tabulku';
	$lang['strcreatetablelike'] = 'Vytvořit tabulku podle';
	$lang['strcreatetablelikeparent'] = 'Zdrojová tabulka';
	$lang['strcreatelikewithdefaults'] = 'Včetně výchozích';
	$lang['strcreatelikewithconstraints'] = 'Včetně omezení';
	$lang['strcreatelikewithindexes'] = 'Včetně indexů';
	$lang['strtablename'] = 'Název tabulky';
	$lang['strtableneedsname'] = 'Musíte zadat název pro tabulku.';
	$lang['strtablelikeneedslike'] = 'Musíte zvolit, z které tabulky se budou vlastnosti kopírovat.';
	$lang['strtableneedsfield'] = 'Musíte zadat nejméně jedno pole.';
	$lang['strtableneedscols'] = 'Musíte zadat platný počet sloupců.';
	$lang['strtablecreated'] = 'Tabulka byla vytvořena.';
	$lang['strtablecreatedbad'] = 'Nezdařilo se vytvořit tabulku.';
	$lang['strconfdroptable'] = 'Opravdu chcete odstranit tabulku „%s“?';
	$lang['strtabledropped'] = 'Tabulka byla odstraněna.';
	$lang['strtabledroppedbad'] = 'Nezdařilo se odstranit tabulku.';
	$lang['strconfemptytable'] = 'Opravdu chcete vyprázdnit tabulku „%s“?';
	$lang['strtableemptied'] = 'Tabulka byla vyprázdněna.';
	$lang['strtableemptiedbad'] = 'Nezdařilo se vyprázdnit tabulku.';
	$lang['strinsertrow'] = 'Vložit řádek';
	$lang['strrowinserted'] = 'Řádek byl vložen.';
	$lang['strrowinsertedbad'] = 'Nezdařilo se vložit řádek.';
	$lang['strnofkref'] = 'Cizímu klíči %s neodpovídá žádná hodnota.';
	$lang['strrowduplicate'] = 'Nezdařilo se vložení řádku, pokus o duplicitní vložení.';
	$lang['streditrow'] = 'Upravit řádek';
	$lang['strrowupdated'] = 'Řádek byl aktualizován.';
	$lang['strrowupdatedbad'] = 'Nezdařilo se aktualizovat řádek.';
	$lang['strdeleterow'] = 'Smazat řádek';
	$lang['strconfdeleterow'] = 'Opravdu chcete smazat tento řádek?';
	$lang['strrowdeleted'] = 'Řádek byl smazán.';
	$lang['strrowdeletedbad'] = 'Nezdařilo se smazat řádek.';
	$lang['strinsertandrepeat'] = 'Vloži a opakovat';
	$lang['strnumcols'] = 'Počet sloupců';
	$lang['strcolneedsname'] = 'Musíte zadat název pro sloupec';
	$lang['strselectallfields'] = 'Vybrat všechna pole';
	$lang['strselectneedscol'] = 'Musíte zvolit alespoň jeden sloupec, který se má zobrazit.';
	$lang['strselectunary'] = 'Unární operátory nemohou mít hodnoty.';
	$lang['strcolumnaltered'] = 'Změny v sloupci byly provedeny.';
	$lang['strcolumnalteredbad'] = 'Nezdařilo se provést změny v sloupci.';
	$lang['strconfdropcolumn'] = 'Opravdu chcete odstranit sloupec „%s“ z tabulky „%s“?';
	$lang['strcolumndropped'] = 'Sloupec byl odstraněn.';
	$lang['strcolumndroppedbad'] = 'Nezdařilo se odstranit sloupec.';
	$lang['straddcolumn'] = 'Přidat sloupec';
	$lang['strcolumnadded'] = 'Sloupec byl přidán.';
	$lang['strcolumnaddedbad'] = 'Nezdařilo se přidat sloupec.';
	$lang['strcascade'] = 'Kaskádovitě';
	$lang['strtablealtered'] = 'Změny v tabulce byly provedeny.';
	$lang['strtablealteredbad'] = 'Nezdařilo se provést změny v tabulce.';
	$lang['strdataonly'] = 'Pouze data';
	$lang['strstructureonly'] = 'Pouze strukturu';
	$lang['strstructureanddata'] = 'Strukturu a data';
	$lang['strtabbed'] = 'S tabulátory';
	$lang['strauto'] = 'Automaticky';
	$lang['strconfvacuumtable'] = 'Opravdu chcete provést úklid „%s“?';
	$lang['strconfanalyzetable'] = 'Opravdu chcete analyzovat „%s“?';
	$lang['strconfreindextable'] = 'Opravdu chcete přeindexovat „%s“?';
	$lang['strconfclustertable'] = 'Opravdu chcete přeskupit "%s"?';
	$lang['strestimatedrowcount'] = 'Odhadnutý počet řádků';
	$lang['strspecifytabletoanalyze'] = 'Pokud chcete analyzovat tabulky, tak musíte nejméně jednu vybrat.';
	$lang['strspecifytabletoempty'] = 'Pokud chcete vyprázdnit tabulky, tak musíte nejméně jednu vybrat.';
	$lang['strspecifytabletodrop'] = 'Pokud chcete odstranit tabulky, tak musíte nejméně jednu vybrat.';
	$lang['strspecifytabletovacuum'] = 'Pokud chcete provést úklid tabulek, tak musíte nejméně jednu vybrat.';
	$lang['strspecifytabletoreindex'] = 'Pokud chcete přeindexovat tabulku, tak musíte nejméně jednu vybrat.';
	$lang['strspecifytabletocluster'] = 'Pokud chcete přeskupit tabulku, tak musíte nejméně jednu vybrat.';
	$lang['strnofieldsforinsert'] = 'Nemůžete vložit řádek do tabulky, která nemá žádné sloupce.';

	// Columns
	$lang['strcolprop'] = 'Vlastnosti sloupce';
	$lang['strnotableprovided'] = 'Není k dispozici žádná tabulka!';
		
	// Users
	$lang['struser'] = 'Uživatel';
	$lang['strusers'] = 'Uživatelé';
	$lang['strusername'] = 'Jméno uživatele';
	$lang['strpassword'] = 'Heslo';
	$lang['strsuper'] = 'Superuživatel?';
	$lang['strcreatedb'] = 'Vytvářet DB?';
	$lang['strexpires'] = 'Ztratí platnost';
	$lang['strsessiondefaults'] = 'Výchozí hodnoty sezení';
	$lang['strnousers'] = 'Nenalezeni žádní uživatelé.';
	$lang['struserupdated'] = 'Uživatel byl aktualizován';
	$lang['struserupdatedbad'] = 'Nezdařilo se aktualizovat uživatele.';
	$lang['strshowallusers'] = 'Zobrazit všechny uživatele';
	$lang['strcreateuser'] = 'Vytvořit uživatele';
	$lang['struserneedsname'] = 'Musíte zadat jméno uživatele.';
	$lang['strusercreated'] = 'Uživatel byl vytvořen.';
	$lang['strusercreatedbad'] = 'Nezdařilo se vytvořit uživatele.';
	$lang['strconfdropuser'] = 'Opravdu chcete odstranit uživatele „%s“?';
	$lang['struserdropped'] = 'Uživatel byl odstraněn.';
	$lang['struserdroppedbad'] = 'Nezdařilo se odstranit uživatele.';
	$lang['straccount'] = 'Účet';
	$lang['strchangepassword'] = 'Změnit heslo';
	$lang['strpasswordchanged'] = 'Heslo bylo změněno.';
	$lang['strpasswordchangedbad'] = 'Nezdařilo se změnit heslo.';
	$lang['strpasswordshort'] = 'Heslo je příliš krátké.';
	$lang['strpasswordconfirm'] = 'Heslo a jeho potvrzení nejsou shodné.';
	
	// Groups
	$lang['strgroup'] = 'Skupina';
	$lang['strgroups'] = 'Skupiny';
	$lang['strshowallgroups'] = 'Zobrazit všechny skupiny';
	$lang['strnogroup'] = 'Skupina nebyla nalezena.';
	$lang['strnogroups'] = 'Nebyly nalezeny žádné skupiny.';
	$lang['strcreategroup'] = 'Vytvořit skupinu';
	$lang['strgroupneedsname'] = 'Musíte zadat název pro skupinu.';
	$lang['strgroupcreated'] = 'Skupina byly vytvořena.';
	$lang['strgroupcreatedbad'] = 'Nezdařilo se vytvořit skupinu.';	
	$lang['strconfdropgroup'] = 'Opravdu chcete odstranit skupinu „%s“?';
	$lang['strgroupdropped'] = 'Skupiny byla odstraněna.';
	$lang['strgroupdroppedbad'] = 'Nezdařilo se odstranit skupinu.';
	$lang['strmembers'] = 'Členové';
	$lang['strmemberof'] = 'Členem v';
	$lang['stradminmembers'] = 'Členové správci';
	$lang['straddmember'] = 'Přidat člena';
	$lang['strmemberadded'] = 'Člen byl přidán.';
	$lang['strmemberaddedbad'] = 'Nezdařilo se přidat člena.';
	$lang['strdropmember'] = 'Odebrat člena';
	$lang['strconfdropmember'] = 'Opravdu chcete odebrat člena „%s“ ze skupiny „%s“?';
	$lang['strmemberdropped'] = 'Člen byl odebrán.';
	$lang['strmemberdroppedbad'] = 'Nezdařilo se odebrat člena.';

	// Roles
	$lang['strrole'] = 'Role';
	$lang['strroles'] = 'Role';
	$lang['strshowallroles'] = 'Zobrazit všechny role';
	$lang['strnoroles'] = 'Nenalezena žádná role.';
	$lang['strinheritsprivs'] = 'Dědit oprávnění?';
	$lang['strcreaterole'] = 'Vytvořit roli';
	$lang['strcancreaterole'] = 'Vytvářet role?';
	$lang['strrolecreated'] = 'Role byl vytvořena.';
	$lang['strrolecreatedbad'] = 'Nezdařilo se vytvořit roli.';
	$lang['strrolealtered'] = 'Změny v roli byly provedeny.';
	$lang['strrolealteredbad'] = 'Nezdařilo se provést změny v roli.';
	$lang['strcanlogin'] = 'Přihlašovat se?';
	$lang['strconnlimit'] = 'Omezení připojení';
	$lang['strdroprole'] = 'Odstranit roli';
	$lang['strconfdroprole'] = 'Opravdu chcete odstranit roli „%s“?';
	$lang['strroledropped'] = 'Role byla odstraněna.';
	$lang['strroledroppedbad'] = 'Nezdařilo se odstranit roli.';
	$lang['strnolimit'] = 'Bez omezení';
	$lang['strnever'] = 'Nikdy';
	$lang['strroleneedsname'] = 'Musíte zadat název pro roli.';

	// Privileges
	$lang['strprivilege'] = 'Oprávnění';
	$lang['strprivileges'] = 'Oprávnění';
	$lang['strnoprivileges'] = 'Tento objekt má oprávnění výchozího vlastníka.';
	$lang['strgrant'] = 'Přidělit';
	$lang['strrevoke'] = 'Odepřít';
	$lang['strgranted'] = 'Oprávnění byla změněna.';
	$lang['strgrantfailed'] = 'Nezdařilo se změnit oprávnění.';
	$lang['strgrantbad'] = 'Musíte zvolit nejméně jednoho uživatele nebo skupinu a nejméně jedno oprávnění.';
	$lang['strgrantor'] = 'Přidělil';
	$lang['strasterisk'] = '*';

	// Databases
	$lang['strdatabase'] = 'Databáze';
	$lang['strdatabases'] = 'Databáze';
	$lang['strshowalldatabases'] = 'Zobrazit všechny databáze';
	$lang['strnodatabases'] = 'Žádné databáze nenalezeny.';
	$lang['strcreatedatabase'] = 'Vytvořit databázi';
	$lang['strdatabasename'] = 'Název databáze';
	$lang['strdatabaseneedsname'] = 'Musíte zadat název pro databázi.';
	$lang['strdatabasecreated'] = 'Databáze byla vytvořena.';
	$lang['strdatabasecreatedbad'] = 'Nezdařilo se vytvořit databázi.';
	$lang['strconfdropdatabase'] = 'Opravdu chcete odstranit databázi „%s“?';
	$lang['strdatabasedropped'] = 'Databáze byla odstraněna.';
	$lang['strdatabasedroppedbad'] = 'Nezdařilo se odstranit databázi.';
	$lang['strentersql'] = 'Zadejte dotaz SQL, který chcete provést:';
	$lang['strsqlexecuted'] = 'Dotaz SQL byl proveden.';
	$lang['strvacuumgood'] = 'Úklid byl dokončen.';
	$lang['strvacuumbad'] = 'Úklid se nezdařil.';
	$lang['stranalyzegood'] = 'Analýza byla dokončena.';
	$lang['stranalyzebad'] = 'Analýza se nezdařila.';
	$lang['strreindexgood'] = 'Přeindexace byla dokončena.';
	$lang['strreindexbad'] = 'Přeindexace se nezdařila.';
	$lang['strfull'] = 'Úplný';
	$lang['strfreeze'] = 'Zmrazit';
	$lang['strforce'] = 'Vynutit';
	$lang['strsignalsent'] = 'Signál byl odeslán.';
	$lang['strsignalsentbad'] = 'Signál se nezdařilo odeslat.';
	$lang['strallobjects'] = 'Všechny objekty';
	$lang['strdatabasealtered'] = 'Změny v databázi byly provedeny.';
	$lang['strdatabasealteredbad'] = 'Nezdařilo se provést změny v databázi.';
	$lang['strspecifydatabasetodrop'] = 'Pokud chcete odstranit databáze, tak musíte nejméně jednu vybrat.';
	$lang['strtemplatedb'] = 'Šablona';
	$lang['strconfanalyzedatabase'] = 'Opravdu chcete analyzovat všechny tabulky v databázi „%s“?';
	$lang['strconfvacuumdatabase'] = 'Opravdu chcete uklidit všechny tabulky v databázi „%s“?';
	$lang['strconfreindexdatabase'] = 'Opravdu chcete přeindexovat všechny tabulky v databázi „%s“?';
	$lang['strconfclusterdatabase'] = 'Opravdu chcete přeskupit všechny tabulky v databázi „%s“?';

	// Views
	$lang['strview'] = 'Pohled';
	$lang['strviews'] = 'Pohledy';
	$lang['strshowallviews'] = 'Zobrazit všechny pohledy';
	$lang['strnoview'] = 'Nenalezen žádný pohled.';
	$lang['strnoviews'] = 'Nenalezeny žádné pohledy.';
	$lang['strcreateview'] = 'Vytvořit pohled';
	$lang['strviewname'] = 'Název pohledu';
	$lang['strviewneedsname'] = 'Musíte zadat název pro pohled.';
	$lang['strviewneedsdef'] = 'Musíte zadat definici pro pohled.';
	$lang['strviewneedsfields'] = 'Musíte zvolit, které sloupce chcete v pohledu mít.';
	$lang['strviewcreated'] = 'Pohled vytvořen.';
	$lang['strviewcreatedbad'] = 'Pohled se nezdařilo vytvořit.';
	$lang['strconfdropview'] = 'Opravdu chcete odstranit pohled „%s“?';
	$lang['strviewdropped'] = 'Pohled byl odstraněn.';
	$lang['strviewdroppedbad'] = 'Pohled se nezdařilo odstranit.';
	$lang['strviewupdated'] = 'Pohled byl aktualizován.';
	$lang['strviewupdatedbad'] = 'Pohled se nezdařilo aktualizovat.';
	$lang['strviewlink'] = 'Propojovací klíče';
	$lang['strviewconditions'] = 'Doplňující podmínky';
	$lang['strcreateviewwiz'] = 'Vytvořit pohled pomocí průvodce';
	$lang['strrenamedupfields'] = 'Duplicitní pole přejmenovat';
	$lang['strdropdupfields'] = 'Duplicitní pole odstranit';
	$lang['strerrordupfields'] = 'V případě duplicitních polí ohlásit chybu';
	$lang['strviewaltered'] = 'Změny v pohledu byly provedeny.';
	$lang['strviewalteredbad'] = 'Nezdařilo se provést změny v pohledu.';
	$lang['strspecifyviewtodrop'] = 'Pokud chcete odstranit pohledy, tak musíte nejméně jeden vybrat.';

	// Sequences
	$lang['strsequence'] = 'Sekvence';
	$lang['strsequences'] = 'Sekvence';
	$lang['strshowallsequences'] = 'Zobrazit všechny sekvence';
	$lang['strnosequence'] = 'Nenalezena žádná sekvence.';
	$lang['strnosequences'] = 'Nenalezeny žádné sekvence.';
	$lang['strcreatesequence'] = 'Vytvořit sekvenci';
	$lang['strlastvalue'] = 'Poslední hodnota';
	$lang['strincrementby'] = 'Přírůstek';	
	$lang['strstartvalue'] = 'Počáteční hodnota';
	$lang['strrestartvalue'] = 'Nová počáteční hodnota';
	$lang['strmaxvalue'] = 'Max. hodnota';
	$lang['strminvalue'] = 'Min. hodnota';
	$lang['strcachevalue'] = 'Připraveno dopředu';
	$lang['strlogcount'] = 'Dostupných hodnot bez zápisu (log_cnt)';
	$lang['strcancycle'] = 'Cyklicky?';
	$lang['striscalled'] = 'Zvýšit před vrácením následující (is_called)?';
	$lang['strsequenceneedsname'] = 'Musíte zadat název pro sekvenci.';
	$lang['strsequencecreated'] = 'Sekvence byla vytvořena.';
	$lang['strsequencecreatedbad'] = 'Nezdařilo se vytvořit sekvenci.';
	$lang['strconfdropsequence'] = 'Opravdu chcete odstranit sekvenci „%s“?';
	$lang['strsequencedropped'] = 'Sekvence byla odstraněna.';
	$lang['strsequencedroppedbad'] = 'Nezdařilo se odstranit sekvenci.';
	$lang['strsequencerestart'] = 'Sekvence nastavena na novou počáteční hodnotu.';
	$lang['strsequencerestartbad'] = 'Nezdařilo se nastavit novou počáteční hodnotu sekvence.';
	$lang['strsequencereset'] = 'Sekvence byla nastavena na počáteční hodnotu.';
	$lang['strsequenceresetbad'] = 'Nezdařilo se nastavit počáteční hodnotu sekvence.';
 	$lang['strsequencealtered'] = 'Změny v sekvenci byly provedeny.';
 	$lang['strsequencealteredbad'] = 'Nezdařilo se provést změny v sekvenci.';
 	$lang['strsetval'] = 'Nastavit hodnotu';
 	$lang['strsequencesetval'] = 'Hodnota sekvence byla nastavena.';
 	$lang['strsequencesetvalbad'] = 'Nezdařilo se změnit hodnotu sekvence.';
 	$lang['strnextval'] = 'Zvýšit hodnotu';
 	$lang['strsequencenextval'] = 'Hodnota sekvence byla zvýšena.';
 	$lang['strsequencenextvalbad'] = 'Nezdařilo se zvýšit hodnotu sekvence.';
	$lang['strspecifysequencetodrop'] = 'Pokud chcete odstranit sekvence, tak musíte nejméně jednu vybrat.';
	
	// Indexes
	$lang['strindex'] = 'Index';
	$lang['strindexes'] = 'Indexy';
	$lang['strindexname'] = 'Název indexu';
	$lang['strshowallindexes'] = 'Zobrazit všechny indexy';
	$lang['strnoindex'] = 'Nenalezen žádný index.';
	$lang['strnoindexes'] = 'Nenalezeny žádné indexy.';
	$lang['strcreateindex'] = 'Vytvořit index';
	$lang['strtabname'] = 'Název tabulky';
	$lang['strcolumnname'] = 'Název sloupce';
	$lang['strindexneedsname'] = 'Musíte zadat název pro index.';
	$lang['strindexneedscols'] = 'Index musí obsahovat nejméně jeden sloupec.';
	$lang['strindexcreated'] = 'Index byl vytvořen.';
	$lang['strindexcreatedbad'] = 'Nezdařilo se vytvořit index.';
	$lang['strconfdropindex'] = 'Opravdu chcete odstranit index „%s“?';
	$lang['strindexdropped'] = 'Index byl odstraněn.';
	$lang['strindexdroppedbad'] = 'Nezdařilo se odstranit index.';
	$lang['strkeyname'] = 'Název klíče';
	$lang['struniquekey'] = 'Jedinečný klíč';
	$lang['strprimarykey'] = 'Primární klíč';
 	$lang['strindextype'] = 'Typ indexu';
	$lang['strtablecolumnlist'] = 'Sloupce v tabulce';
	$lang['strindexcolumnlist'] = 'Sloupce v indexu';
	$lang['strclusteredgood'] = 'Přeskupení dokončeno.';
	$lang['strclusteredbad'] = 'Přeskupení se nezdařilo.';
	$lang['strconcurrently'] = 'Souběžně';
	$lang['strnoclusteravailable'] = 'Tabulka není přeskupena podle indexu.';

	// Rules
	$lang['strrules'] = 'Pravidla';
	$lang['strrule'] = 'Pravidlo';
	$lang['strshowallrules'] = 'Zobrazit všechna pravidla';
	$lang['strnorule'] = 'Nenalezeno žádné pravidlo.';
	$lang['strnorules'] = 'Nenalezena žádná pravidla.';
	$lang['strcreaterule'] = 'Vytvořit pravidlo';
	$lang['strrulename'] = 'Název pravidla';
	$lang['strruleneedsname'] = 'Musíte zadat název pro pravidlo.';
	$lang['strrulecreated'] = 'Pravidlo bylo vytvořeno.';
	$lang['strrulecreatedbad'] = 'Nezdařilo se vytvořit pravidlo.';
	$lang['strconfdroprule'] = 'Opravdu chcete odstranit pravidlo „%s“ na „%s“?';
	$lang['strruledropped'] = 'Pravidlo bylo odstraněno.';
	$lang['strruledroppedbad'] = 'Nezdařilo se odstranit pravidlo.';

	// Constraints
	$lang['strconstraint'] = 'Omezení';
	$lang['strconstraints'] = 'Omezení';
	$lang['strshowallconstraints'] = 'Zobrazit všechna omezení';
	$lang['strnoconstraints'] = 'Nenalezena žádná omezení.';
	$lang['strcreateconstraint'] = 'Vytvořit omezení';
	$lang['strconstraintcreated'] = 'Omezení bylo vytvořeno.';
	$lang['strconstraintcreatedbad'] = 'Nezdařilo se vytvořit omezení.';
	$lang['strconfdropconstraint'] = 'Opravdu chcete odstranit omezení „%s“ na „%s“?';
	$lang['strconstraintdropped'] = 'Omezení bylo odstraněno.';
	$lang['strconstraintdroppedbad'] = 'Nezdařilo se odstranit omezení.';
	$lang['straddcheck'] = 'Přidat kontrolu';
	$lang['strcheckneedsdefinition'] = 'Musíte zadat definici kontroly.';
	$lang['strcheckadded'] = 'Kontrola byla přidána.';
	$lang['strcheckaddedbad'] = 'Nezdařilo se přidat kontrolu.';
	$lang['straddpk'] = 'Přidat primární klíč';
	$lang['strpkneedscols'] = 'Primární klíč musí obsahovat nejméně jeden sloupec.';
	$lang['strpkadded'] = 'Primární klíč byl přidán.';
	$lang['strpkaddedbad'] = 'Nezdařilo se přidat primární klíč.';
	$lang['stradduniq'] = 'Přidat jedinečný klíč';
	$lang['struniqneedscols'] = 'Jedinečný klíč musí obsahovat nejméně jeden sloupec.';
	$lang['struniqadded'] = 'Jedinečný klíč byl přidán.';
	$lang['struniqaddedbad'] = 'Nezdařilo se přidat jedinečný klíč.';
	$lang['straddfk'] = 'Přidat cizí klíč';
	$lang['strfkneedscols'] = 'Cizí klíč musí obsahovat nejméně jeden sloupec.';
	$lang['strfkneedstarget'] = 'Musíte zadat cílovou tabulku, na kterou se cizí klíč odkazuje.';
	$lang['strfkadded'] = 'Cizí klíč byl přidán.';
	$lang['strfkaddedbad'] = 'Nezdařilo se přidat cizí klíč.';
	$lang['strfktarget'] = 'Cílová tabulka';
	$lang['strfkcolumnlist'] = 'Sloupce v klíči';
	$lang['strondelete'] = 'ON DELETE';
	$lang['stronupdate'] = 'ON UPDATE';

	// Functions
	$lang['strfunction'] = 'Funkce';
	$lang['strfunctions'] = 'Funkce';
	$lang['strshowallfunctions'] = 'Zobrazit všechny funkce';
	$lang['strnofunction'] = 'Nenalezena žádná funkce.';
	$lang['strnofunctions'] = 'Nenalezeny žádné funkce.';
	$lang['strcreateplfunction'] = 'Vytvořit funkci SQL/PL';
	$lang['strcreateinternalfunction'] = 'Vytvořit interní funkci';
	$lang['strcreatecfunction'] = 'Vytvořit funkci C';
	$lang['strfunctionname'] = 'Název funkce';
	$lang['strreturns'] = 'Vrací';
	$lang['strproglanguage'] = 'Programovací jazyk';
	$lang['strfunctionneedsname'] = 'Musíte zadat název pro funkci.';
	$lang['strfunctionneedsdef'] = 'Musíte zadat definici pro funkci.';
	$lang['strfunctioncreated'] = 'Funkce byl vytvořena.';
	$lang['strfunctioncreatedbad'] = 'Nezdařilo se vytvořit funkci.';
	$lang['strconfdropfunction'] = 'Opravdu chcete odstranit funkci „%s“?';
	$lang['strfunctiondropped'] = 'Funkce byla odstraněna.';
	$lang['strfunctiondroppedbad'] = 'Nezdařilo se odstranit funkci.';
	$lang['strfunctionupdated'] = 'Funkce byla aktualizována.';
	$lang['strfunctionupdatedbad'] = 'Nezdařilo se aktualizovat funkci.';
	$lang['strobjectfile'] = 'Soubor s objektem';
	$lang['strlinksymbol'] = 'Napojený symbol';
	$lang['strarguments'] = 'Argumenty';
	$lang['strargmode'] = 'Režim';
	$lang['strargtype'] = 'Typ';
	$lang['strargadd'] = 'Přidat další argument';
	$lang['strargremove'] = 'Odebrat tento argument';
	$lang['strargnoargs'] = 'Tato funkce nepřebírá žádné argumenty.';
	$lang['strargenableargs'] = 'Povolit argumentům průchod do této funkce.';
	$lang['strargnorowabove'] = 'Nad tímto řádkem již žádný není.';
	$lang['strargnorowbelow'] = 'Pod tímto řádkem již žádný není.';
	$lang['strargraise'] = 'Přesunout výše.';
	$lang['strarglower'] = 'Přesunout níže.';
	$lang['strargremoveconfirm'] = 'Opravdu chcete odebrat tento argument? Operaci nelze vrátit zpět.';
	$lang['strfunctioncosting'] = 'Cena funkcí';
	$lang['strresultrows'] = 'Počet řádků';
	$lang['strexecutioncost'] = 'Cena provádění';
	$lang['strspecifyfunctiontodrop'] = 'Pokud chcete odstranit funkce, tak musíte nejméně jednu vybrat.';

	// Triggers
	$lang['strtrigger'] = 'Trigger';
	$lang['strtriggers'] = 'Triggery';
	$lang['strshowalltriggers'] = 'Zobrazit všechny triggery';
	$lang['strnotrigger'] = 'Nenalezen žádný trigger.';
	$lang['strnotriggers'] = 'Nenalezeny žádné triggery.';
	$lang['strcreatetrigger'] = 'Vytvořit trigger';
	$lang['strtriggerneedsname'] = 'Musíte zadat název pro trigger.';
	$lang['strtriggerneedsfunc'] = 'Musíte zvolit funkci pro trigger.';
	$lang['strtriggercreated'] = 'Trigger byl vytvořen.';
	$lang['strtriggercreatedbad'] = 'Nezdařilo se vytvořit trigger.';
	$lang['strconfdroptrigger'] = 'Opravdu chcete odstranit trigger „%s“ v „%s“?';
	$lang['strconfenabletrigger'] = 'Opravdu chcete povolit trigger „%s“ v „%s“?';
	$lang['strconfdisabletrigger'] = 'Opravdu chcete zakázat trigger „%s“ v „%s“?';
	$lang['strtriggerdropped'] = 'Trigger byl odstraněn.';
	$lang['strtriggerdroppedbad'] = 'Nezdařilo se odstranit trigger.';
	$lang['strtriggerenabled'] = 'Trigger byl povolen.';
	$lang['strtriggerenabledbad'] = 'Nezdařilo se povolit trigger.';
	$lang['strtriggerdisabled'] = 'Trigger byl zakázán.';
	$lang['strtriggerdisabledbad'] = 'Nezdařilo se zakázat trigger.';
	$lang['strtriggeraltered'] = 'Změny v triggeru byly provedeny.';
	$lang['strtriggeralteredbad'] = 'Nezdařilo se provést změny v triggeru.';
	$lang['strforeach'] = 'Pro každý';

	// Types
	$lang['strtype'] = 'Typ';
	$lang['strtypes'] = 'Typy';
	$lang['strshowalltypes'] = 'Zobrazit všechny typy';
	$lang['strnotype'] = 'Nenalezen žádný typ.';
	$lang['strnotypes'] = 'Nenalezeny žádné typy.';
	$lang['strcreatetype'] = 'Vytvořit externí typ';
	$lang['strcreatecomptype'] = 'Vytvořit složený typ';
	$lang['strcreateenumtype'] = 'Vytvořit výčtový typ';
	$lang['strtypeneedsfield'] = 'Musíte zadat nejméně jedno pole.';
	$lang['strtypeneedsvalue'] = 'Musíte zadat nejméně jednu hodnotu.';
	$lang['strtypeneedscols'] = 'Musíte zadat platný počet polí.';
	$lang['strtypeneedsvals'] = 'Musíte zadat platný počet hodnot.';
	$lang['strinputfn'] = 'Vstupní funkce';
	$lang['stroutputfn'] = 'Výstupní funkce';
	$lang['strpassbyval'] = 'Předávaný hodnotou?';
	$lang['stralignment'] = 'Zarovnání';
	$lang['strelement'] = 'Prvek';
	$lang['strdelimiter'] = 'Oddělovač';
	$lang['strstorage'] = 'Uložení';
	$lang['strfield'] = 'Pole';
	$lang['strnumfields'] = 'Počet polí';
	$lang['strnumvalues'] = 'Počet hodnot';
	$lang['strtypeneedsname'] = 'Musíte zadat název pro typ.';
	$lang['strtypeneedslen'] = 'Musíte zadat délku pro typ.';
	$lang['strtypecreated'] = 'Typ byl vytvořen.';
	$lang['strtypecreatedbad'] = 'Nezdařilo se vytvořit typ.';
	$lang['strconfdroptype'] = 'Opravdu chcete odstranit typ „%s“?';
	$lang['strtypedropped'] = 'Typ byl odstraněn.';
	$lang['strtypedroppedbad'] = 'Nezdařilo se odstranit typ.';
	$lang['strflavor'] = 'Druh';
	$lang['strbasetype'] = 'Základní';
	$lang['strcompositetype'] = 'Složený';
	$lang['strpseudotype'] = 'Pseudo';
	$lang['strenum'] = 'Výčtový';
	$lang['strenumvalues'] = 'Výčtové hodnoty';

	// Schemas
	$lang['strschema'] = 'Schéma';
	$lang['strschemas'] = 'Schémata';
	$lang['strshowallschemas'] = 'Zobrazit všechna schémata';
	$lang['strnoschema'] = 'Nebylo nalezeno žádné schéma.';
	$lang['strnoschemas'] = 'Nebyla nalezena žádná schémata.';
	$lang['strcreateschema'] = 'Vytvořit schéma';
	$lang['strschemaname'] = 'Název schématu';
	$lang['strschemaneedsname'] = 'Musíte zadat název pro schéma.';
	$lang['strschemacreated'] = 'Schéma bylo vytvořeno.';
	$lang['strschemacreatedbad'] = 'Nezdařilo se vytvořit schéma.';
	$lang['strconfdropschema'] = 'Opravdu chcete odstranit schéma „%s“?';
	$lang['strschemadropped'] = 'Schéma bylo odstraněno.';
	$lang['strschemadroppedbad'] = 'Nezdařilo se odstranit schéma.';
	$lang['strschemaaltered'] = 'Změny ve schématu byly provedeny.';
	$lang['strschemaalteredbad'] = 'Nezdařilo se provést změny ve schématu.';
	$lang['strsearchpath'] = 'Prohledávaná schémata';
	$lang['strspecifyschematodrop'] = 'Pokud chcete odstranit schémata, tak musíte nejméně jedno vybrat.';

	// Reports
	$lang['strreport'] = 'Výstupní sestava';
	$lang['strreports'] = 'Výstupní sestavy';
	$lang['strshowallreports'] = 'Zobrazit všechny výstupní sestavy';
	$lang['strnoreports'] = 'Nebyly nalezeny žádné výstupní sestava.';
	$lang['strcreatereport'] = 'Vytvořit výstupní sestavu';
	$lang['strreportdropped'] = 'Výstupní sestava byla odstraněna.';
	$lang['strreportdroppedbad'] = 'Nezdařilo se odstranit výstupní sestavu.';
	$lang['strconfdropreport'] = 'Opravdu chcete odstranit výstupní sestavu „%s“?';
	$lang['strreportneedsname'] = 'Musíte zadat název pro výstupní sestavu.';
	$lang['strreportneedsdef'] = 'Musíte zadat dotaz SQL pro výstupní sestavu.';
	$lang['strreportcreated'] = 'Výstupní sestava byla uložena.';
	$lang['strreportcreatedbad'] = 'Nezdařilo se uložit výstupní sestavu.';

	// Domains
	$lang['strdomain'] = 'Doména';
	$lang['strdomains'] = 'Domény';
	$lang['strshowalldomains'] = 'Zobrazit všechny domény';
	$lang['strnodomains'] = 'Nebyly nalezeny žádné domény.';
	$lang['strcreatedomain'] = 'Vytvořit doménu';
	$lang['strdomaindropped'] = 'Doména byla odstraněna.';
	$lang['strdomaindroppedbad'] = 'Nezdařilo se odstranit doménu.';
	$lang['strconfdropdomain'] = 'Opravdu chcete odstranit doménu „%s“?';
	$lang['strdomainneedsname'] = 'Musíte zadat název pro doménu.';
	$lang['strdomaincreated'] = 'Doména byla vytvořena.';
	$lang['strdomaincreatedbad'] = 'Nezdařilo se vytvořit doménu.';	
	$lang['strdomainaltered'] = 'Změny v doméně byly provedeny.';
	$lang['strdomainalteredbad'] = 'Nezdařilo se provést změny v doméně.';	

	// Operators
	$lang['stroperator'] = 'Operátor';
	$lang['stroperators'] = 'Operátory';
	$lang['strshowalloperators'] = 'Zobrazit všechny operátory';
	$lang['strnooperator'] = 'Nebyl nalezen žádný operátor.';
	$lang['strnooperators'] = 'Nebyly nalezeny žádné operátory.';
	$lang['strcreateoperator'] = 'Vytvořit operátor';
	$lang['strleftarg'] = 'Levý operand';
	$lang['strrightarg'] = 'Pravý operand';
	$lang['strcommutator'] = 'Komutátor';
	$lang['strnegator'] = 'Negátor';
	$lang['strrestrict'] = 'Omezení';
	$lang['strjoin'] = 'Propojení';
	$lang['strhashes'] = 'Heše';
	$lang['strmerges'] = 'Slučování';
	$lang['strleftsort'] = 'Levé řazení';
	$lang['strrightsort'] = 'Pravé řazení';
	$lang['strlessthan'] = 'Operátor <';
	$lang['strgreaterthan'] = 'Operátor >';
	$lang['stroperatorneedsname'] = 'Musíte zadat název pro operátor.';
	$lang['stroperatorcreated'] = 'Operátor byl vytvořen.';
	$lang['stroperatorcreatedbad'] = 'Nezdařilo se vytvořit operátor.';
	$lang['strconfdropoperator'] = 'Opravdu chcete odstranit operátor „%s“?';
	$lang['stroperatordropped'] = 'Operátor byl odstraněn.';
	$lang['stroperatordroppedbad'] = 'Nezdařilo se odstranit operátor.';

	// Casts
	$lang['strcasts'] = 'Přetypování';
	$lang['strnocasts'] = 'Nenalezena žádná přetypování.';
	$lang['strsourcetype'] = 'Zdrojový typ';
	$lang['strtargettype'] = 'Cílový typ';
	$lang['strimplicit'] = 'Implicitní';
	$lang['strinassignment'] = 'V přiřazení';
	$lang['strbinarycompat'] = '(Binárně zaměnitelné)';
	
	// Conversions
	$lang['strconversions'] = 'Konverze';
	$lang['strnoconversions'] = 'Nenalezeny žádné konverze.';
	$lang['strsourceencoding'] = 'Zdrojové kódování';
	$lang['strtargetencoding'] = 'Cílové kódování';
	
	// Languages
	$lang['strlanguages'] = 'Jazyky';
	$lang['strnolanguages'] = 'Nenalezeny žádné jazyky.';
	$lang['strtrusted'] = 'Důvěryhodný';
	
	// Info
	$lang['strnoinfo'] = 'Nejsou dostupné žádné informace.';
	$lang['strreferringtables'] = 'Odkazující tabulky';
	$lang['strparenttables'] = 'Rodičovské tabulky';
	$lang['strchildtables'] = 'Dceřiné tabulky';

	// Aggregates
	$lang['straggregate'] = 'Agregační funkce';
	$lang['straggregates'] = 'Agregační funkce';
	$lang['strnoaggregates'] = 'Nebyly nalezeny žádné agregační funkce.';
	$lang['stralltypes'] = '(Všechny typy)';
	$lang['strcreateaggregate'] = 'Vytvořit agregační funkci';
	$lang['straggrbasetype'] = 'Typ vstupních dat';
	$lang['straggrsfunc'] = 'Funkce stavového přechodu';
	$lang['straggrstype'] = 'Datový typ stavové hodnoty';
	$lang['straggrffunc'] = 'Finální funkce';
	$lang['straggrinitcond'] = 'Počáteční podmínka';
	$lang['straggrsortop'] = 'Operátor řazení';
	$lang['strconfdropaggregate'] = 'Opravdu chcete odstranit agregační funkci „%s“?';
	$lang['straggregatedropped'] = 'Agregační funkce byla odstraněna.';
	$lang['straggregatedroppedbad'] = 'Nezdařilo se odstranit agregační funkci.';
	$lang['straggraltered'] = 'Změny v agregační funkci byly provedeny.';
	$lang['straggralteredbad'] = 'Nezdařilo se provést změny v agregační funkci.';
	$lang['straggrneedsname'] = 'Musíte zadat název pro agregační funkci.';
	$lang['straggrneedsbasetype'] = 'Musíte zadat typ vstupních dat pro agregační funkci.';
	$lang['straggrneedssfunc'] = 'Musíte zadat název funkce stavového přechodu pro agregační funkci.';
	$lang['straggrneedsstype'] = 'Musíte zadat datový typ stavové hodnoty pro agregační funkci.';
	$lang['straggrcreated'] = 'Agregační funkce byla vytvořena.';
	$lang['straggrcreatedbad'] = 'Nezdařilo se vytvořit agregační funkci.';
	$lang['straggrshowall'] = 'Zobrazit všechny agregační funkce';

	// Operator Classes
	$lang['stropclasses'] = 'Třídy operátorů';
	$lang['strnoopclasses'] = 'Nebely nalezeny žádné třídy operátorů.';
	$lang['straccessmethod'] = 'Metoda přístupu';

	// Stats and performance
	$lang['strrowperf'] = 'Souhrn řádkových operací';
	$lang['strioperf'] = 'Souhrn V/V operací';
	$lang['stridxrowperf'] = 'Souhrn Indexových řádkových operací';
	$lang['stridxioperf'] = 'Souhrn Indexových V/V operací';
	$lang['strpercent'] = '%';
	$lang['strsequential'] = 'Sekvenčně';
	$lang['strscan'] = 'Prohledáno';
	$lang['strread'] = 'Čteno';
	$lang['strfetch'] = 'Načteno';
	$lang['strheap'] = 'Hromada';
	$lang['strtoast'] = 'TOAST';
	$lang['strtoastindex'] = 'TOAST Index';
	$lang['strcache'] = 'Mezipaměť';
	$lang['strdisk'] = 'Disk';
	$lang['strrows2'] = 'Řádků';

	// Tablespaces
	$lang['strtablespace'] = 'Prostor tabulek';
	$lang['strtablespaces'] = 'Prostory tabulek';
	$lang['strshowalltablespaces'] = 'Zobrazit všechny prostory tabulek';
	$lang['strnotablespaces'] = 'Nebyly nalezeny žádné prostory tabulek.';
	$lang['strcreatetablespace'] = 'Vytvořit prostor tabulek';
	$lang['strlocation'] = 'Umístění';
	$lang['strtablespaceneedsname'] = 'Musíte zadat název pro prostor tabulek.';
	$lang['strtablespaceneedsloc'] = 'Musíte zadat složku, ve které se má prostor tabulek vytvořit.';
	$lang['strtablespacecreated'] = 'Prostor tabulek byl vytvořen.';
	$lang['strtablespacecreatedbad'] = 'Nezdařilo se vytvořit prostor tabulek.';
	$lang['strconfdroptablespace'] = 'Opravdu chcete odstranit prostor tabulek „%s“?';
	$lang['strtablespacedropped'] = 'Prostor tabulek byl odstraněn.';
	$lang['strtablespacedroppedbad'] = 'Nezdařilo se odstranit prostor tabulek.';
	$lang['strtablespacealtered'] = 'Změny v prostoru tabulek byly provedeny.';
	$lang['strtablespacealteredbad'] = 'Nezdařilo se provést změny v prostoru tabulek.';

	// Slony clusters
	$lang['strcluster'] = 'Klastr';
	$lang['strnoclusters'] = 'Nebyly nalezeny žádné klastry.';
	$lang['strconfdropcluster'] = 'Opravdu chcete odstranit klastr „%s“?';
	$lang['strclusterdropped'] = 'Klastr byl odstraněn.';
	$lang['strclusterdroppedbad'] = 'Nezdařilo se odstranit klastr.';
	$lang['strinitcluster'] = 'Inicializovat klastr';
	$lang['strclustercreated'] = 'Klastr byl inicializován.';
	$lang['strclustercreatedbad'] = 'Nezdařilo se inicializovat klastr.';
	$lang['strclusterneedsname'] = 'Musíte zadat název pro klastr.';
	$lang['strclusterneedsnodeid'] = 'Musíte zadat ID pro lokální uzel.';

	// Slony nodes
	$lang['strnodes'] = 'Uzly';
	$lang['strnonodes'] = 'Nenalezeny žádné uzly.';
	$lang['strcreatenode'] = 'Vytvořit uzel';
	$lang['strid'] = 'ID';
	$lang['stractive'] = 'Aktivní';
	$lang['strnodecreated'] = 'Uzel byl vytvořen.';
	$lang['strnodecreatedbad'] = 'Nezdařilo se vytvořit uzel.';
	$lang['strconfdropnode'] = 'Opravdu chcete odstranit uzel „%s“?';
	$lang['strnodedropped'] = 'Uzel byl odstraněn.';
	$lang['strnodedroppedbad'] = 'Nezdařilo se odstranit uzel.';
	$lang['strfailover'] = 'Překlenout výpadek';
	$lang['strnodefailedover'] = 'Uzel překlenul výpadek.';
	$lang['strnodefailedoverbad'] = 'Uzlu se nezdařilo překlenout výpadek.';
	$lang['strstatus'] = 'Stav';	
	$lang['strhealthy'] = 'V pořádku';
	$lang['stroutofsync'] = 'Nesladěno';
	$lang['strunknown'] = 'Neznámo';	

	// Slony paths	
	$lang['strpaths'] = 'Cesty';
	$lang['strnopaths'] = 'Nenalezeny žádné cesty.';
	$lang['strcreatepath'] = 'Vytvořit cestu';
	$lang['strnodename'] = 'Název uzlu';
	$lang['strnodeid'] = 'ID uzlu';
	$lang['strconninfo'] = 'Připojovací řetězec';
	$lang['strconnretry'] = 'Čekání v sekundách před novým pokusem připojení';
	$lang['strpathneedsconninfo'] = 'Musíte zadat připojovací řetězec pro cestu.';
	$lang['strpathneedsconnretry'] = 'Musíte zadat dobu v sekundách, po kterou se bude čekat, než se zkusí znovu připojit.';
	$lang['strpathcreated'] = 'Cesta byla vytvořena.';
	$lang['strpathcreatedbad'] = 'Nezdařilo se vytvořit cestu.';
	$lang['strconfdroppath'] = 'Opravdu chcete odstranit cestu „%s“?';
	$lang['strpathdropped'] = 'Cesta byla odstraněna.';
	$lang['strpathdroppedbad'] = 'Nezdařilo se odstranit cestu.';

	// Slony listens
	$lang['strlistens'] = 'Naslouchání';
	$lang['strnolistens'] = 'Nebyla nalezena žádná naslouchání.';
	$lang['strcreatelisten'] = 'Vytvořit naslouchání';
	$lang['strlistencreated'] = 'Naslouchání bylo vytvořeno.';
	$lang['strlistencreatedbad'] = 'Nezdařilo se vytvořit naslouchání.';
	$lang['strconfdroplisten'] = 'Opravdu chcete odstranit naslouchání „%s“?';
	$lang['strlistendropped'] = 'Naslouchání bylo odstraněno.';
	$lang['strlistendroppedbad'] = 'Nezdařilo se odstranit naslouchání.';

	// Slony replication sets
	$lang['strrepsets'] = 'Replikační sady';
	$lang['strnorepsets'] = 'Nebyly nalezeny žádné replikační sady.';
	$lang['strcreaterepset'] = 'Vytvořit replikační sadu';
	$lang['strrepsetcreated'] = 'Replikační sada byla vytvořena.';
	$lang['strrepsetcreatedbad'] = 'Nezdařilo se vytvořit replikační sadu.';
	$lang['strconfdroprepset'] = 'Opravdu chcete odstranit replikační sadu „%s“?';
	$lang['strrepsetdropped'] = 'Replikační sada byla odstraněna.';
	$lang['strrepsetdroppedbad'] = 'Nezdařilo se odstranit replikační sadu.';
	$lang['strmerge'] = 'Sloučit';
	$lang['strmergeinto'] = 'Sloučit s';
	$lang['strrepsetmerged'] = 'Replikační sady byly sloučeny.';
	$lang['strrepsetmergedbad'] = 'Nezdařilo se sloučit replikační sady.';
	$lang['strmove'] = 'Přesunout';
	$lang['strneworigin'] = 'Nový počátek';
	$lang['strrepsetmoved'] = 'Replikační sada byla přesunuta.';
	$lang['strrepsetmovedbad'] = 'Nezdařilo se přesunout replikační sadu.';
	$lang['strnewrepset'] = 'Nová replikační sada';
	$lang['strlock'] = 'Zamknout';
	$lang['strlocked'] = 'Zamknuto';
	$lang['strunlock'] = 'Odemknout';
	$lang['strconflockrepset'] = 'Opravdu chcete zamknout replikační sadu „%s“?';
	$lang['strrepsetlocked'] = 'Replikační sada byla zamknuta.';
	$lang['strrepsetlockedbad'] = 'Nezdařilo se zamknout replikační sadu.';
	$lang['strconfunlockrepset'] = 'Opravdu chcete odemknout replikační sadu „%s“?';
	$lang['strrepsetunlocked'] = 'Replikační sada byla odemknuta.';
	$lang['strrepsetunlockedbad'] = 'Nezdařilo se odemknout replikační sadu.';
	$lang['stronlyonnode'] = 'Poze v uzlu';
	$lang['strddlscript'] = 'Skript DDL';
	$lang['strscriptneedsbody'] = 'Musíte zajistit, aby se skript spustil na všech uzlech.';
	$lang['strscriptexecuted'] = 'Skript DDL replikační sady byl vykonán.';
	$lang['strscriptexecutedbad'] = 'Nezdařilo se vykonat skript DDL replikační sady.';
	$lang['strtabletriggerstoretain'] = 'Následující triggery NEBUDOU replikačním systémem Slony zakázány:';

	// Slony tables in replication sets
	$lang['straddtable'] = 'Přidat tabulku';
	$lang['strtableneedsuniquekey'] = 'Přidávaná tabulka musí obsahovat primární nebo jedinečný klíč.';
	$lang['strtableaddedtorepset'] = 'Tabulka byla přidána do replikační sady.';
	$lang['strtableaddedtorepsetbad'] = 'Tabulku se nezdařilo přidat do replikační sady.';
	$lang['strconfremovetablefromrepset'] = 'Opravdu chcete odebrat tabulku „%s“ z replikační sady „%s“?';
	$lang['strtableremovedfromrepset'] = 'Tabulka byla odebrána z replikační sady.';
	$lang['strtableremovedfromrepsetbad'] = 'Tabulku se nezdařilo odebrat z replikační sady.';

	// Slony sequences in replication sets
	$lang['straddsequence'] = 'Přidat sekvenci';
	$lang['strsequenceaddedtorepset'] = 'Sekvence byla přidána do replikační sady.';
	$lang['strsequenceaddedtorepsetbad'] = 'Sekvenci se nezdařilo přidat do replikační sady.';
	$lang['strconfremovesequencefromrepset'] = 'Opravdu chcete odebrat sekvenci „%s“ z replikační sady „%s“?';
	$lang['strsequenceremovedfromrepset'] = 'Sekvence byla odebrána z replikační sady.';
	$lang['strsequenceremovedfromrepsetbad'] = 'Sekvenci se nezdařilo odebrat z replikační sady.';

	// Slony subscriptions
	$lang['strsubscriptions'] = 'Odběry';
	$lang['strnosubscriptions'] = 'Nebyly nalezeny žádné odběry.';

	// Miscellaneous
	$lang['strtopbar'] = '%s běžící na %s:%s -- Jste přihlášený jako uživatel „%s“';
	$lang['strtimefmt'] = 'j. M Y G:i';
	$lang['strhelp'] = 'Nápověda';
	$lang['strhelpicon'] = '?';
	$lang['strhelppagebrowser'] = 'Výběr stránky s nápovědou';
	$lang['strselecthelppage'] = 'Zvolte stránku s nápovědou';
	$lang['strinvalidhelppage'] = 'Neplatná stránka s nápovědou.';
	$lang['strlogintitle'] = 'Přihlášení k %s';
	$lang['strlogoutmsg'] = 'Odhlášení od %s';
	$lang['strloading'] = 'Načítá se…';
	$lang['strerrorloading'] = 'Chyba při načítání';
	$lang['strclicktoreload'] = 'Klikněte pro opětovné načtení';

	// Autovacuum
	$lang['strautovacuum'] = 'Automatický úklid';
	$lang['strturnedon'] = 'Zapnuto';
	$lang['strturnedoff'] = 'Vypnuto';
	$lang['strenabled'] = 'Povoleno';
	$lang['strnovacuumconf'] = 'Nebylo nalezeno žádné nastavení automatického úklidu.';
	$lang['strvacuumbasethreshold'] = 'VACUUM - základní práh';
	$lang['strvacuumscalefactor'] = 'VACUUM - škálovací faktor';
	$lang['stranalybasethreshold'] = 'ANALYZE - základní práh';
	$lang['stranalyzescalefactor'] = 'ANALYZE - škálovací faktor';
	$lang['strvacuumcostdelay'] = 'VACUUM - délka přestávky';
	$lang['strvacuumcostlimit'] = 'VACUUM - cenový limit';
	$lang['strvacuumpertable'] = 'Nastavení automatického uklidu jednotlivých tabulek';
	$lang['straddvacuumtable'] = 'Přidat nastavení automatického úklidu pro tabulku';
	$lang['streditvacuumtable'] = 'Upravit nastavení automatického úklidu pro tabulku %s';
	$lang['strdelvacuumtable'] = 'Smazat nastavení automatického úklidu pro tabulku %s ?';
	$lang['strvacuumtablereset'] = 'Autovacuum setup for table %s reset to default values';
	$lang['strdelvacuumtablefail'] = 'Nezdařilo se odebrat nastavení automatického úklidu pro tabulku %s';
	$lang['strsetvacuumtablesaved'] = 'Nastavení automatického úklidu pro tabulku %s bylo uloženo.';
	$lang['strsetvacuumtablefail'] = 'Nezdařilo se nastavení automatického úklidu pro tabulku %s.';
	$lang['strspecifydelvacuumtable'] = 'Musíte zadat tabulku, ze které chcete odebrat parametry automatického úklidu.';
	$lang['strspecifyeditvacuumtable'] = 'Musíte zadat tabulku, ze které chcete upravit parametry automatického úklidu.';
	$lang['strnotdefaultinred'] = 'V účtu nejsou žádné výchozí hodnoty.';

	// Table-level Locks
	$lang['strlocks'] = 'Zámky';
	$lang['strtransaction'] = 'ID transakce';
	$lang['strvirtualtransaction'] = 'ID virtuální transakce';
	$lang['strprocessid'] = 'ID procesu';
	$lang['strmode'] = 'Režim zámku';
	$lang['strislockheld'] = 'Je zámek držený?';

	// Prepared transactions
	$lang['strpreparedxacts'] = 'Připravené transakce';
	$lang['strxactid'] = 'Transakční ID';
	$lang['strgid'] = 'Globální ID';
	
	// Fulltext search
	$lang['strfulltext'] = 'Plně textové vyhledávání';
	$lang['strftsconfig'] = 'Nastavení FTS';
	$lang['strftsconfigs'] = 'Nastavení';
	$lang['strftscreateconfig'] = 'Vytvořit nastavení FTS';
	$lang['strftscreatedict'] = 'Vytvořit slovník';
	$lang['strftscreatedicttemplate'] = 'Vytvořit šablonu slovníku';
	$lang['strftscreateparser'] = 'Vytvořit analyzátor';
	$lang['strftsnoconfigs'] = 'Nebylo nalezeno žádné nastavení FTS.';
	$lang['strftsconfigdropped'] = 'Nastavení FTS bylo odstraněno.';
	$lang['strftsconfigdroppedbad'] = 'Nezdařilo se odstranit nastavení FTS.';
	$lang['strconfdropftsconfig'] = 'Opravdu chcete odstranit nastavení FTS „%s“?';
	$lang['strconfdropftsdict'] = 'Opravdu chcete odstranit slovník FTS „%s“?';
	$lang['strconfdropftsmapping'] = 'Opravdu chcete odstranit mapování „%s“ nastavení FTS „%s“?';
	$lang['strftstemplate'] = 'Šablona';
	$lang['strftsparser'] = 'Analyzátor';
	$lang['strftsconfigneedsname'] = 'Musíte zadat název pro nastavení FTS.';
	$lang['strftsconfigcreated'] = 'Nastavení FTS bylo vytvořeno.';
	$lang['strftsconfigcreatedbad'] = 'Nezdařilo se vytvořit nastavení FTS.';
	$lang['strftsmapping'] = 'Mapování';
	$lang['strftsdicts'] = 'Slovníky';
	$lang['strftsdict'] = 'Slovník';
	$lang['strftsemptymap'] = 'Vyprázdnit mapu nastavení FTS.';
	$lang['strftsconfigaltered'] = 'Byly provedeny změny nastavení FTS.';
	$lang['strftsconfigalteredbad'] = 'Nezdařilo se provést změny nastavení FTS.';
	$lang['strftsconfigmap'] = 'Mapa nastavení FTS';
	$lang['strftsparsers'] = 'Analyzátory FTS';
	$lang['strftsnoparsers'] = 'Nejsou dostupné žádné analyzátory FTS.';
	$lang['strftsnodicts'] = 'Nejsou dostupné žádné slovníky FTS.';
	$lang['strftsdictcreated'] = 'Slovník FTS byl vytvořen.';
	$lang['strftsdictcreatedbad'] = 'Nezdařilo se vytvořit slovník FTS.';
	$lang['strftslexize'] = 'Lexikální funkce';
	$lang['strftsinit'] = 'Inicializační funkce';
	$lang['strftsoptionsvalues'] = 'Volby a hodnoty';
	$lang['strftsdictneedsname'] = 'Musíte zadat název pro slovník FTS.';
	$lang['strftsdictdropped'] = 'Slovník FTS byl odstraněn.';
	$lang['strftsdictdroppedbad'] = 'Nezdařilo se odstranit slovník FTS.';
	$lang['strftsdictaltered'] = 'Byly provedeny změny slovníku FTS.';
	$lang['strftsdictalteredbad'] = 'Nezdařilo se provést změny slovníku FTS.';
	$lang['strftsaddmapping'] = 'Přidat nové mapování';
	$lang['strftsspecifymappingtodrop'] = 'Pokud chcete odstranit mapování, tak musíte nejméně jedno vybrat.';
	$lang['strftsspecifyconfigtoalter'] = 'Musíte vybrat, které nastavení FTS chcete změnit.';
	$lang['strftsmappingdropped'] = 'Mapování FTS bylo odstraněno.';
	$lang['strftsmappingdroppedbad'] = 'Nezdařilo se odstranit mapování FTS.';
	$lang['strftsnodictionaries'] = 'Nebyly nalezeny žádné slovníky.';
	$lang['strftsmappingaltered'] = 'Byly provedeny změny mapování FTS.';
	$lang['strftsmappingalteredbad'] = 'Nezdařilo se provést změny mapování FTS.';
	$lang['strftsmappingadded'] = 'Mapování FTS bylo přidáno.';
	$lang['strftsmappingaddedbad'] = 'Nezdařilo se přidat mapování FTS.';
	$lang['strftstabconfigs'] = 'Nastavení';
	$lang['strftstabdicts'] = 'Slovníky';
	$lang['strftstabparsers'] = 'Analyzátory';
	$lang['strftscantparsercopy'] = 'Při vytváření nastavení textového vyhledávání nemůžete naráz zadat analyzátor i šablonu.';
?>
