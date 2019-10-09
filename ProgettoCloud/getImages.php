<?php

$directory = 'C:\Users\g.sacchet\Desktop\George W. Push\uploaded';
$images = glob($directory . "/*.jpg");

foreach($images as $image)
{
	
  echo '<img src="'.$image.'" /><br />';
}
