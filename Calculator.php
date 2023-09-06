<?php

class Calculator
{
    public function calculate($a, $b, $operator)
    {
        switch($operator)
        {
            case '+':
                return $a+$b;
            case '-':
                return $a-$b;
            case '*':
                return $a*$b;
            case '/':
                if($b == 0)
                {
                    return "Cannot divide by 0";
                }
                else
                {
                    return $a/$b;
                }    
        }
    }
}


?>

