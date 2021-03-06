<?php
    $lst = new SplDoublyLinkedList();
    foreach (array(100, 0, 2, 5, -1, 4, 1) as $v)
        $lst->push($v);
    foreach (strandSort($lst) as $v)
        echo "$v ";
    echo " ".PHP_EOL;

    function strandSort(SplDoublyLinkedList $lst) {
        $result = new SplDoublyLinkedList();
        while (!$lst->isEmpty()) {
            $sorted = new SplDoublyLinkedList();
            $remain = new SplDoublyLinkedList();
            $sorted->push($lst->shift());
            foreach ($lst as $item) {
                if ($sorted->top() <= $item) {
                    $sorted->push($item);
                } else {
                    $remain->push($item);
                }
            }
            $result = _merge($sorted, $result);
            $lst = $remain;
        }
        return $result;
    }

    function _merge(SplDoublyLinkedList $left, SplDoublyLinkedList $right) {
        $res = new SplDoublyLinkedList();
        while (!$left->isEmpty() && !$right->isEmpty()) {
            if ($left->bottom() <= $right->bottom()) {
                $res->push($left->shift());
            } else {
                $res->push($right->shift());
            }
        }
        foreach ($left as $v)  $res->push($v);
        foreach ($right as $v) $res->push($v);
        return $res;
    }
?>
