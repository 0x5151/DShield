<?php
class DShield
{

    public $key = <<<EOD
    oog$\S~>stYD%|m;FjP9"h`7]B[8H6qJpC(5,kO.T@U<l&e}34=Ez1n?+:#yM_'dA*{rIXuW^c!Kab/iv2f-xQw)0NGZVRL
    EOD;

    function randomizer($n) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
      
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
      
        return $randomString;
    }

    function encode($string) {
        $out = false;

        foreach(str_split($string, 1) as $text){
		foreach (str_split($this->key, 1) as $key => $value) {
			$added = $this->randomizer(rand(1, 3));
			if ($text == $value) {
				$out[] .= $added . $key;
                    		continue;
			}
		}
	}
	    
        return implode("", $out);
    }
    
    function decode($string) {
        $split = preg_split("/[A-Za-z]/", $string);
        $out = false;
	    
        foreach(array_filter($split) as $string_enc) {
            	foreach(str_split($this->key, "1") as $key => $value) {
                	if($key == $string_enc) {
                    		$out .= $value;
                    		continue;
                	}
            	}
        }
	    
        return $out;
    }

}
?>
