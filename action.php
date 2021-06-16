<?php
if (isset($_POST["value_from"]) && isset($_POST["value_to"]))
{
    if ($_POST["value_from"] > $_POST["value_to"])
    {
        $result = [
            'status' => 'error',
            'description' => 'Значение "from" должно быть меньше чем значение "to"',
        ];
        echo json_encode($result);
        die;
    }

    $counter = 0;
    for ($i = $_POST["value_from"]; $i <= $_POST["value_to"]; $i++)
    {
        $arrNumber = str_split($i);
        if ($arrNumber[0] + $arrNumber[1] + $arrNumber[2] == $arrNumber[3] + $arrNumber[4] + $arrNumber[5])
        {
            $counter++;
        }
    }
    $result = [
        'status' => 'success',
        'number' => $counter
    ];

    echo json_encode($result);
    die;
}