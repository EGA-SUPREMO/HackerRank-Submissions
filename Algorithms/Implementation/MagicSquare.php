<?php
const MAGIC_SQUARE_CONSTANT = 15;
const MAGIC_SQUARES = [[[8, 1, 6],
                        [3, 5, 7],
                        [4, 9, 2]],

                       [[6, 1, 8],
                        [7, 5, 3],
                        [2, 9, 4]],

                       [[2, 7, 6],
                        [9, 5, 1],
                        [4, 3, 8]],

                       [[4, 3, 8],
                        [9, 5, 1],
                        [2, 7, 6]],

                       [[2, 9, 4],
                        [7, 5, 3],
                        [6, 1, 8]],

                       [[4, 9, 2],
                        [3, 5, 7],
                        [8, 1, 6]],

                       [[6, 7, 2],
                        [1, 5, 9],
                        [8, 3, 4]],

                       [[8, 3, 4],
                        [1, 5, 9],
                        [6, 7, 2]]];

// Complete the formingMagicSquare function below.
function formingMagicSquare($array)
{
    $absoluteCosts = array_fill(0, count(MAGIC_SQUARES), 0);
    $minimumCost = MAGIC_SQUARE_CONSTANT*3;

    $length = count($array[0]);

    for ($i=0; $i < count(MAGIC_SQUARES); $i++) {
        for ($x = 0; $x < $length; $x++) {
            for ($y = 0; $y < $length; $y++) {
                $difference = $array[$x][$y] - MAGIC_SQUARES[$i][$x][$y];
                $absoluteCosts[$i] += abs($difference);
            }
        }
    }
    for ($i=0; $i < count(MAGIC_SQUARES); $i++) {
        if ($absoluteCosts[$i] < $minimumCost) {
            $minimumCost = $absoluteCosts[$i];
        }
    }

    return $minimumCost;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s == array();

for ($i = 0; $i < 3; $i++) {
    fscanf($stdin, "%[^\n]", $s_temp);
    $s[] = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = formingMagicSquare($s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
