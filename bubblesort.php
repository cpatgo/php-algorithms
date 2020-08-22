<?php
    function bubble_Sort($my_array ) {
        do {
            $swapped = false;
            for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ ) {
                if( $my_array[$i] > $my_array[$i + 1] ) {
                    list( $my_array[$i + 1], $my_array[$i] ) =
                            array( $my_array[$i], $my_array[$i + 1] );
                    $swapped = true;
                }
            }
        }
        while( $swapped );
        return $my_array;
    }

    $output_array = array(3, 0, 2, 5, -1, 4, 1);
    echo "Original Array :\n";
    echo implode(', ',$output_array );
    echo "\nSorted Array\n:";
    echo implode(', ',bubble_Sort($output_array)). PHP_EOL;
?>
