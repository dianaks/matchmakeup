<?php

namespace App\Service;

class ColorService{
	public function hexToRGB($hex)
    {
		list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
		return [$r, $g, $b];
    }

    public function rgbToXYZ(){
    	
    }
}



