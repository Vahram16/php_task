<?php

require_once "Stack.php";
//
//
//
//
//
//// $stack->top();
//$stack->push(99);
//$stack->push(9);
//$stack->push(9);
//$stack->push(9);
//$stack->push(1);
//$stack->push(87);
//$stack->pop();
//echo  $stack->top();
////$stack->push(9);
//
//
////echo $stack->top();


$string = "(){}";
function bracket($st)
{


    $stack = new Stack();


    function isMatchingPair($character1, $character2)
    {
        if ($character1 == '(' && $character2 == ')')
            return true;
        else if ($character1 == '{' && $character2 == '}')
            return true;
        else if ($character1 == '[' && $character2 == ']')
            return true;
        else
            return false;
    }

    $arr = str_split($st);
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == '{' || $arr[$i] == '('
            || $arr[$i] == '[')
            $stack->push($arr[$i]);

        if ($arr[$i] == '}' || $arr[$i] == ')'
            || $arr[$i] == ']') {
            if ($stack->isEmpty()) {
                return false;
            }
         else if (!isMatchingPair($stack->pop(),$arr[$i])) {
             return false;
         }
        }
    }
    if ($stack->isEmpty())
        return true;
    else
    {
        return false;
    }
}

$t = bracket('({}');

 var_dump($t);
