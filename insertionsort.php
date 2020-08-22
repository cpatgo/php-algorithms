<?php
    function insertion_Sort($my_array) {
        for($i=0;$i<count($my_array);$i++) {
            $val = $my_array[$i];
            $j = $i-1;
            while($j>=0 && $my_array[$j] > $val){
                $my_array[$j+1] = $my_array[$j];
                $j--;
            }
            $my_array[$j+1] = $val;
        }
        return $my_array;
    }

    $output_array = array(3, 0, 2, 5, -1, 4, 1);
    
    echo "Original Array :\n";
    echo implode(', ',$output_array );
    echo "\nSorted Array :\n";
    print_r(insertion_Sort($output_array));
?>
