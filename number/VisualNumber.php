<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 17.12.2020
 * Time: 15:44
 */

class VisualNumber
{

    private  $row = 15;
    private  $column = 26;

    public function creteArr()
    {
        $arr = [];
        for ($i = 0; $i < $this->row; $i++) {
            $arr[$i] = [];
            for ($j = 0; $j < $this->column; $j++) {
                if ($i == 0 || $i == 14) {
                    $arr[$i][$j] = "*";
                } elseif ($j == 0 || $j == 25) {
                    $arr[$i][$j] = "*";

                } else {
                    $arr[$i][$j] = " ";
                };
            }

        }

        return $arr;
    }

    function printOne(&$arr)
    {
        $start = $this->column / 2;

        for ($i = 1; $i < count($arr) - 2; $i++) {
            for ($j = 0; $j < count($arr) - 1; $j++) {
                if ($j == $start) {
                    $arr[$i][$start] = 1;

                }
                if ($i >= 2 && $i < 5) {

                    $arr[$i][$start - ($i + 1)] = 1;
                }
            }

        }

    }

    private function printFour(&$arr)
    {

        $this->vertical($arr, 1, 8, 4, null, 4);
        $this->horizontal($arr, -3, 7, 20, true, null, 4);
        $this->vertical($arr, 5, 13, 4, 6, null);
        return $arr;

    }

    private function printThree(&$arr)
    {

        $this->vertical($arr, 1, 13, 3, 3, null);
        $this->horizontal($arr, 3, 1, 4, null, true, 3);
        $this->horizontal($arr, 3, 12, 4, null, true, 3);
        $this->horizontal($arr, 3, 6, 10, null, true, 3);

        return $arr;

    }


    private function printFive(&$arr)
    {

        $this->horizontal($arr, -3, 1, 19, true, false, 5);
        $this->vertical($arr, 2, 7, 5, false, 3);
        $this->horizontal($arr, -3, 7, 19, true, false, 5);
        $this->vertical($arr, 7, 13, 5, 6, false);
        $this->horizontal($arr, 5, 12, 9, false, true, 5);
        return $arr;

    }

    private function printTwo(&$arr)
    {

        $this->horizontal($arr, -7, 1, 16, true, false, 2);
        $this->vertical($arr, 2, 4, 2, false, 7);
        $this->vertical($arr, 2, 7, 2, 2, false);
        $this->horizontal($arr, -3, 12, 20, true, false, 2);
        for ($i = 7, $k = 14; $i < 13; $i++, $k--) {
            $arr[$i][$k] = 2;
        }


    }


    private function printSeven(&$arr)
    {

        $this->horizontal($arr, -7, 1, 20, true, false, 7);
        for ($i = 1, $k = 20; $i < 13; $i++, $k--) {
            $arr[$i][$k] = 7;
        }


    }

    private function printSix(&$arr)
    {

        $this->horizontal($arr, -7, 1, 17, true, false, 6);
        $this->vertical($arr, 2, 12, 6, false, 7);
        $this->vertical($arr, 2, 4, 6, 3, false);
        $this->horizontal($arr, -7, 12, 17, true, false, 6);
        $this->vertical($arr, 8, 12, 6, 3, false);
        $this->horizontal($arr, -7, 8, 17, true, false, 6);

    }

    private function printEight(&$arr)
    {

        $this->horizontal($arr, -4, 1, 19, true, false, 8);
        $this->vertical($arr, 2, 7, 8, false, 4);
        $this->horizontal($arr, -4, 7, 19, true, false, 8);
        $this->vertical($arr, 7, 13, 8, 6, false);
        $this->horizontal($arr, 5, 12, 8, false, true, 8);
        $this->vertical($arr, 7, 12, 8, false, 4);
        $this->vertical($arr, 1, 8, 8, 6, false);
        return $arr;

    }

    private function printNine(&$arr)
    {

        $this->horizontal($arr, -4, 1, 19, true, false, 9);
        $this->vertical($arr, 2, 6, 9, false, 4);
        $this->horizontal($arr, -4, 5, 19, true, false, 9);
        $this->vertical($arr, 7, 13, 9, 6, false);
        $this->horizontal($arr, 5, 12, 8, false, true, 9);
        $this->vertical($arr, 1, 8, 9, 6, false);
        return $arr;

    }


    private function vertical(&$arr, $row, $height, $value, $right, $left)
    {


        if ($right != null) {
            $start = $this->column / 2 + $right;
            for ($i = $row; $i < $height; $i++) {
                $arr[$i][$start] = $value;

            }

        } else {
            $start = $this->column / 2 - $left;
            for ($i = $row; $i < $height; $i++) {
                $arr[$i][$start] = $value;
            }
        }


        return $arr;


    }


    private function horizontal(&$arr, $entryPoint, $row, $line, $right, $left, $value)
    {
        $start = ($entryPoint > 0) ? $this->column / 2 + $entryPoint : $this->column / 2 - (-$entryPoint);


        if ($right != null) {

            for ($i = $start; $i < $line; $i++) {
                $arr[$row][$i] = $value;

            }

        } else {

            for ($i = $start; $i > $line; $i--) {
                $arr[$row][$i] = $value;

            }
        }

    }


    public function printValue($value)
    {

        $arr = $this->creteArr();
        switch ($value) {
            case 1:
                $this->printOne($arr);
                break;
            case 2:
                $this->printTwo($arr);
                break;
            case 3:
                $this->printThree($arr);
                break;
            case 4:
                $this->printFour($arr);
                break;
            case 5:
                $this->printFive($arr);
                break;
            case 6:
                $this->printSix($arr);
                break;
            case 7:
                $this->printSeven($arr);
                break;
            case 8:
                $this->printEight($arr);
                break;
            case 9:
                $this->printNine($arr);
                break;

        }
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr[0]); $j++) {
                if ($arr[$i][$j] == ' ') {
                    printf("&nbsp" . $arr[$i][$j]);
                }
                printf($arr[$i][$j]);
            }
            echo "<br>";

        }
        return true;

    }


}