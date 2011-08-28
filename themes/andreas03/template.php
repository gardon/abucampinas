<?php

function xweb_primary_links() {
 $links = menu_primary_links();
 if ($links) {
    foreach ($links as $link) {
       $output .= '<span class=sidelink>' . $link . '</span>';
    }; 
 }
  return $output;
}	
	
?>