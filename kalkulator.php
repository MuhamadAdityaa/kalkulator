<?php

function tambah($a, $b) {
    return $a + $b;
}

function kurang($a, $b) {
    return $a - $b;
}

function kali($a, $b) {
    return $a * $b;
}

function bagi($a, $b) {
    if ($b == 0) {
        return "Error: Division by zero";
    }
    return $a / $b;
}

echo "Operasi disetiap indexnya <br>";

$v_first2 = [20,30,4,50];
$operator2 = ['+', '-', '*', '/'];
$v_second2 = [20,20,10,5];


foreach ($operator2 as $key_op => $op) {
    if ($op == "+") {
        echo "$v_first2[$key_op] $op $v_second2[$key_op] = " . tambah($v_first2[$key_op], $v_second2[$key_op]);
    } elseif ($op == "-") {
        echo "$v_first2[$key_op] $op $v_second2[$key_op] = " . kurang($v_first2[$key_op], $v_second2[$key_op]);
    } elseif ($op == "*") {
        echo "$v_first2[$key_op] $op $v_second2[$key_op] = " . kali($v_first2[$key_op], $v_second2[$key_op]);
    } elseif ($op == "/") {
        echo "$v_first2[$key_op] $op $v_second2[$key_op] = " . bagi($v_first2[$key_op], $v_second2[$key_op]);
    } else {
        echo "Operator tidak valid";
    }
    echo "<br>";
}
echo "<br><br><br>";

// $v_first = [2,3,4];
// $v_second = [1,2,3];
// $operator = ['+' => "Penjumlahan", '-' => "Pengurangan", '*' => "perkalian", '/' => "Pembagian"];

// echo "Operasi disetiap nilainya<br>" . str_repeat("=", 20) . "<br>";

// foreach ($operator as $key_op => $op) {
//     echo "Operator: $op<br>";

//     foreach ($v_first as $index_first => $first_value) {
//         foreach ($v_second as $index_second => $second_value) {
//             if ($key_op == '+') {
//                 echo "$first_value $key_op $second_value = " . tambah($first_value, $second_value);
//             } elseif ($key_op== '-') {
//                 echo "$first_value $key_op $second_value = " . kurang($first_value, $second_value);
//             } elseif ($key_op== '*') {
//                 echo "$first_value $key_op $second_value = " . kali($first_value, $second_value);
//             } elseif ($key_op== '/') {
//                 echo "$first_value $key_op $second_value = " . bagi($first_value, $second_value);
//             } else {
//                 $result = "Operator tidak valid";
//             }
            
//             echo "<br>";
//         }
//     }
//     echo "<br>";
// }



?>