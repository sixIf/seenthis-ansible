<?php

// localhost/seenthis
define('_ANALYTICS', '');
define('_HOST', 'intranet.adsib.gob.bo/seenthis/');
define('_STATIC_HOST', _HOST);
define('_SHORT_HOST', 'localhost/seenli');
define('_API_HTTPS', false); # ne pas forcer https sur l'API

$GLOBALS['table_titre']['auteurs'] = 'login';

define('_URL_SEENTHIS', 'https://intranet.adsib.gob.bo/seenthis/');  # adresse de l'API
define('_SVG2PNG_SERVER','http://rezo.net/svg2png.php'); # convertisseur de SVG

// systeme pour les traductions
#define('_OPENCALAIS_APIKEY', "xxxxxxxxxxxx");
#define('_GOOGLETRANSLATE_APIKEY', "xxxxxxxxxxxxx");
# translate-shell
define('_TRANSLATESHELL_CMD', 'trans'); // /usr/local/bin/trans

// autoriser charger une copie locale des gros fichiers
// exemple http://localhost/seenthis/messages/96
define('_COPIE_LOCALE_MAX_SIZE',33554432);  # 32 Mo

// autoriser les logins de 3 lettres :
define('_LOGIN_TROP_COURT', 2);

// A titre d'exemple voici la configuration de seenthis.net
#define('_ANALYTICS', 'UA-2985608-16');
#define('_HOST', 'seenthis.net');
#define('_STATIC_HOST', 'static%s.'._HOST);

?>
