?php

const MagicSquareConstant = 15;

// Complete the formingMagicSquare function below.
function formingMagicSquare($array)
{
    $totalSums = totalSums($array);
    $diagonalTotalSums = diagonalTotalSums($array);
    $differences = differences($totalSums) + diagonalDifferences($diagonalTotalSums);



    var_dump($totalSums);
    var_dump($diagonalTotalSums);
    var_dump($differences);
}

function totalSums($array)
{
    $length = count($array[0]);
    $totalSums = ['row' => array_fill(0, $length, 0),
                 'column' => array_fill(0, $length, 0)];

    for($x = 0; $x < $length; $x++) {
        for($y = 0; $y < $length; $y++) {
            $totalSums['row'][$x] += $array[$x][$y];
        }
    }
    for($x = 0; $x < $length; $x++) {
        for($y = 0; $y < $length; $y++) {
            $totalSums['column'][$x] += $array[$y][$x];
        }
    }

    return $totalSums;
}

function differences($totalSums)
{
    $length = count($totalSums['row']);
    $differences = ['row' => [],
                    'column' => []];

    for($i = 0; $i < $length; $i++) {
        $differences['row'][] = $totalSums['row'][$i] - MagicSquareConstant;
    }
    for($i = 0; $i < $length; $i++) {
        $differences['column'][] = $totalSums['column'][$i] - MagicSquareConstant;
    }

    return $differences;
}

function diagonalTotalSums($array)
{
    $length = count($array);
    $totalSums = [0, 0];

    for($i = 0; $i < $length; $i++) {
        $totalSums[0] += $array[$i][$i];
    }
    for($i = 0; $i < $length; $i++) {
        $totalSums[1] += $array[($length-1) - $i][$i];
    }

    return $totalSums;
}

function diagonalDifferences($diagonalTotalSums)
{
    $differences = ['diagonal' => []];

    for($i = 0; $i < count($diagonalTotalSums); $i++) {
        $differences['diagonal'][] = $diagonalTotalSums[$i] - MagicSquareConstant;
    }

    return $differences;
}

///////////---

function possibilities($differences)
{
$array = ['cases' => ]
}

class Possibility
{
    $possibilities = ['' ]
    function __construct(argument)
    {
        # code...
    }
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
