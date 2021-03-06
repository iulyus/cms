<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * MaxSite CMS
 * (c) http://max-3000.com/
 */

if ($fn = mso_find_ts_file('main/main-start.php')) require($fn);

	echo NR . '<div class="type type_sitemap">' . NR;
	
	echo NR . '<div class="page_only"><div class="wrap">' . NR;
	
	echo  '<h1>' . tf('Карта сайта (архив)') . '</h1>';
	
	if ( function_exists('sitemap') ) echo sitemap();
		else echo mso_hook('sitemap');
	
	echo NR . '</div></div><!-- class="page_only" -->' . NR;
	echo NR . '</div><!-- class="type type_sitemap" -->' . NR;
	
	if ($f = mso_page_foreach('sitemap-posle')) require($f);
	
if ($fn = mso_find_ts_file('main/main-end.php')) require($fn);

# end file