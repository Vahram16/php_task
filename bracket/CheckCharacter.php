<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 17.12.2020
 * Time: 22:07
 */
require_once "Stack.php";
class CheckCharacter
{
   private static function isCharsEqual($char1, $char2)
    {
        if ($char1 == '(' && $char2 == ')')
            return true;
        else if ($char1 == '{' && $char2 == '}')
            return true;
        else if ($char1 == '[' && $char2 == ']')
            return true;
        else
            return false;
    }


   public static function checkBracket($st)
    {

        $stack = new Stack();
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
                else if (!self::isCharsEqual($stack->pop(),$arr[$i])) {
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

}