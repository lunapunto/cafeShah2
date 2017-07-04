<?php
/*
** Admin site template
** Luna Punto Junio, 2017
**
** Archivo de configuración del sitio.
**
*/

// Nombre del sitio
define('SITENAME', 'Café Shah');

// Separador de título, ex. Título - LP Template
define('GLOBAL_SEP', '-');

// Nombre simplificado del sitio
define('SLUG','cafeshah');


// Versión del sitio
define('currentVersion', '0.1');


// Postmark
define('postmark_api_key', '784821e0-3ab7-443e-b5c0-9e8507ef52cb');
define('postmark_template_id', '2141206');

// Descripción <meta />
$description = '';
// Descripción OG FB
$quickdescription = '';

// Keywords <meta />
$keywords = array(
  // Keywords cliente

  // Keywords Luna Punto
  'Luna Punto',
  'Diseño Mexicano',
  'Tecnología',
  'Tech and design',
  'LP Worldwide',
  'Mauricio Martínez Robles',
  'Luis Luna',
  'Nicolás Franky',
  'Carlos Nevarez',
  'tech',
  'design',
  'websites',
  'apps',
  'sitios web',
  'Ibero',
  'UNAM',
  'empresarios',
  'Nápoles',
  'Condesa',
  'Roma Norte',
  'Roma Sur',
  'Roma',
  'iOS',
  'Android',
  'Windows'
);

/*


MMMMMMMMMMMMMMMMMMMMMMMMMMMNdyo+/-.```````..-:/oshmMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMds/.`````````````````````````-+sdMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMh/`````````````.------.``````````````:smMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMNo.````````:+shmNMMMMMMMMMMMmdyo/-`````````.+dMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMN+```````:sdMMMMMMMMMMMMMMMMMMMMMMMMMds/.```````.sNMMMMMMMMMMMMMM
MMMMMMMMMMMMMMh.`````.sNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMdo-```````/mMMMMMMMMMMMM
MMMMMMMMMMMMMh``````sMMMMMMMMNho+/::/+smMMMMMMMMMMMMMMMMMMMdo.``````/mMMMMMMMMMM
MMMMMMMMMMMMm`````.mMMMMMMMd/```````````-yMMMMMMMMMMMMMMMMMMMMy-``````+NMMMMMMMM
MMMMMMMMMMMM+`````mMMMMMMM+```````````````-mMMMMMMMMMMMMMMMMMMMMh-`````.yMMMMMMM
MMMMMMMMMMMM.````:MMMMMMMs`````-ymMNd+`````.mMMMMMMMMMMMMMMMMMMMMMy.`````+NMMMMM
MMMMMMMMMMMM-````:MMMMMMM`````-MMMMMMMh`````/MMMMMMMMMMMMMMMMMMMMMMN/`````-NMMMM
MMMMMMMMMMMMo`````yMMMMMN`````+MMMMMMMM/`````MMMMMMMMMMMMMMMMMMMMMMMMs`````.NMMM
MMMMMMMMMMMMN.`````oNMMMN`````/MMMMMMMM:`````MMMMMMMMMMMMMMMMMMMMMMMMMy`````-NMM
MMho/--/sNMMMm-`````.+hNM:`````NMMMMmy:`````oMMMMMMMMMMMMMMMMMMMMMMMMMMy`````/MM
m.```````:MMMMMo````````.://::///:.````````+MMMMMMMMMMMMMMMMMMMMMMMMMMMM+`````yM
s`````````MMMMMMNs-``````````````````````:hMMMMMMMMmhsoooshmMMMMMMMMMMMMN.````.M
Mo//os.``/MMMMMMMMMNyo:.````````````.:ohNMMMMMMMh/```````````:yNMMMMMMMMMs`````h
MMM+`````mMMMMMMMMMMMMMMMmds/////sNMMMMMMMMMMMd-````````````````sMMMMMMMMN`````/
MMh`````yMMMMMMMMMMMMMMMMMMM-`````mMMMMMMMMMMh``````-oyhhy+.`````:NMMMMMMM.````-
MN.````/MMMMMMMMMMMMMMMMMMMMm`````-MMMMMMMMMN`````.dMMMMMMMM+`````/MMMMMMM-`````
Mo`````NMMMMMMMMMMMMMMMMMMMMMy`````+MMMMMMMMh`````oMMMMMMMMMM/`````mMMMMMM.`````
m`````oMMMMMMMMMMMMMMMMMMMMMMM/`````hMMMMMMMy`````oMMMMMMMMMMd`````yMMMMMN`````.
o`````mMMMMMMMMMMMMMMNhs+/:---h.````.NMMMMMMh`````:MMMMMMMMMMh`````hMMMMMy`````/
-````-MMMMMMMMMMMMMh:`````````-y`````o::+shmN:`````NMMMMMMMMN:`````NMMMMM-`````y
.````:MMMMMMMMMMMN:````````````s:`````h``````-/++++hMMMMMMNy.`````yMMMMMy`````.M
`````/MMMMMMMMMMM-`````/hmNMMNNNd`````o-````````````-://:-```````yMMMMMm``````yM
-````:MMMMMMMMMMs`````yMMMMMMMMMM:````.do/-````````````````````+NMMMMMM/`````:MM
/`````MMMMMMMMMM:````.MMMMMMMMMMMs`````mMMMMmhs+/-.```````.:+hNMMMMMMMMy.```:NMM
h`````hMMMMMMMMM:````.MMMMMMMMMMMh`````mMMMMMMMs.-/++sNNNMMMMMMMMMMMMMMMMmdNMMMM
M.````-MMMMMMMMMs`````sMMMMMMMMMM+`````NMMMMMMMM.````.MMMMMMMMMMMMMMMMMMMMMMMMMM
My`````oMMMMMMMMN-`````+NMMMMMMNo`````+MMMMMMMMMo`````hMMMMMMMMMdddNMMMMMMMMMMMM
MM/`````yMMMMMMMMm-``````:+oo/-``````:MMMMMMMMMMd`````oMMMMMMMo`````/NMMMMMMMMMM
MMM:`````yMMMMMMMMMo```````````````.sMMMMMMMMMMMN`````/MMMMMMh```````+MMMMMMMMMM
MMMN:`````+MMMMMMMMMNy/.````````-+hMMMMMMMMMMMMMm`````+MMMMMMm```````sMMMMMMMMMM
MMMMM+`````.hMMMMMMMMMMMNdddddmMMMMMMMMMMMMMMMMMs`````yMMMMMMMm+-../hMMMMMMMMMMM
MMMMMMh.`````:dMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMd`````.MMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMNo``````-yNMMMMMMMMMMMMMMMMMMMMMMMMMMMMs``````dMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMm+```````/yNMMMMMMMMMMMMMMMMMMMMMMNy-`````.dMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMNs-```````-+ydNMMMMMMMMMMMMMmho:```````+NMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMdo-``````````-:/+++++/:.`````````.omMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMmy+-```````````````````````-odMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMNdyo/:-.```````.-:/oydMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM

*/
