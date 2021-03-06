<?php
    function cocktailSort($my_array) {
        if (is_string($my_array))
        $my_array = str_split(preg_replace('/\s+/','',$my_array));
    
        do {
            $swapped = false;
            for($i=0;$i<count($my_array);$i++){
                if(isset($my_array[$i+1])){
                    if($my_array[$i] > $my_array[$i+1]){
                        list($my_array[$i], $my_array[$i+1]) = array($my_array[$i+1], $my_array[$i]);
                        $swapped = true;
                    }
                }			
            }
    
            if ($swapped == false) break;
    
            $swapped = false;
            for($i=count($my_array)-1;$i>=0;$i--){
                if(isset($my_array[$i-1])){
                    if($my_array[$i] < $my_array[$i-1]) {
                        list($my_array[$i],$my_array[$i-1]) = array($my_array[$i-1],$my_array[$i]);
                        $swapped = true;
                    }
                }
            }
        } while($swapped);
    
        return $my_array;
    }

    $output_array = array(3, 0, 2, 5, -1, 4, 1);
    echo "Original Array :\n";
    echo implode(', ',$output_array );
    echo "\nSorted Array\n:";
    echo implode(', ',cocktailSort($output_array)). PHP_EOL;
?>
