<?php
$events[_GTD_ON_MENU]['*']=array(
    'link'   => "portal.inc.php",
    'title'  => 'External Links',
    'label'  => 'Portal',
    'where'  => 'listItems.php?type=C',
    'when'   => 'after',

// HOW TO DEFINE LINKS
// NB: Use full URL, including protocol (http://)

//    'options'=> array( 'portal_links' => array(	'YOUR HEADER HERE' 	=> array ( 'LINK_TITLE1'	=> 'link_url',
//										   'LINK_TITLE2'	=> 'link_url2'
//											//expand as needed
//											),
//
//							// for additional sections								
//							'Search'	=> array ( 	'Google'	=> 'http://www.google.com',
//											'Yahoo!'	=> 'http://www.yahoo.com'
//											) //expand as needed	 
//						)
//			)
//	);


    'options'=> array(  'portal_links' => array('PIM' 	=> array (	'Webmail'		=> 'http://webmail.korvek.com',
									'Calendar'		=> 'http://calendar.korvek.com',
									'Reference Blog'	=> 'http://blog.korvek.com',
									'News'			=> 'http://news.korvek.com'
									),
						'Search' => array (	'Google'		=> 'http://www.google.com'
									)
						)
			)
	);
