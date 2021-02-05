<?php
    function calculate($x , $y, $op)
    {
        if($op == "add")
        {
            $z = $x + $y;
        }
        elseif($op == "sub")
        {
            $z = $x - $y;
        }
        elseif($op == "mul")
        {
            $z = $x * $y;
        }
        elseif($op == "div")
        {
            $z = $x / $y;
        }
        else
        {
            $z = "Error";
        }
        return $z;
    }

    //this block will be excuted only after submit button
    if (isset($_GET['submit']) )
    {
        $x = $_GET['x'];
        $y = $_GET['y'];
        $op = $_GET['op'];

        $result = calculate($x , $y , $op);
        echo "$x $op $y = $result";
    }
    ?>