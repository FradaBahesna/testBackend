<?php
// CASE1
// $data = "jika input yang dimasukkan";
// $output = str_replace(
//     ["a","u"],
//     ["i","i"],
//     $data
// );
// print_r($output);


// CASE2
// $nilaiRudi = [
//     "sejarah" => 8,
//     "matematika" => 7,
//     "sosiologi" => 6,
//     "kewarganegaraan" => 9
// ];
// $nilaiAni = [
//     "sejarah" => 5,
//     "matematika" => 8,
//     "sosiologi" => 9,
//     "kewarganegaraan" => 6
// ];

// $resultRudi = 0;
// $resultAni = 0;
// foreach($nilaiRudi as $key => $val){
//     if($val > $nilaiAni[$key]){
//         $resultRudi += 1;
//     }elseif($nilaiAni[$key] > $val){
//         $resultAni += 1;
//     }else{
//         $resultRudi = 0;
//         $resultAni = 0;
//     }
// }

// $nilai = [
//     "rudi" => $resultRudi,
//     "ani" => $resultAni
// ];
// print_r($nilai);



// CASE3
// $input = "kodok";
// $input = "kaca";
// $result1 = strrev($input);
// if($input == $result1){
//     echo "input" ." ". $input ." ". "=>"." " ."output"." ". "Benar";
// }else{
//     echo "input" ." ". $input ." ". "=>"." " ."output"." ". "Salah";
// }
// print_r($a);


// CASE4
// $data = [23,45,67,90,23,1,6,90,12,43,90,67];
// print_r(array_unique($data));


// CASE5
// $data = [4,5,8,9,0,2,8,2,11,15,2,9,0];
// $unique = array_unique($data);
// sort($unique);
// print_r($unique);


// CASE6
// $bookingSeat = "5I";

// $data = [
//     ["1A","2A","3A","4A","5A","6A","7A","8A","9A","10A"],
//     ["1B","2B","3B","4B","5B","6B","7B","8B","9B","10B"],
//     ["1C","2C","3C","4C","5C","6C","7C","8C","9C","10C"],
//     ["1D","2D","3D","4D","5D","6D","7D","8D","9D","10D"],
//     ["1E","2E","3E","4E","5E","6E","7E","8E","9E","10E"],
//     ["1F","2F","3F","4F","5F","6F","7F","8F","9F","10F"],
//     ["1G","2G","3G","4G","5G","6G","7G","8G","9G","10G"],
//     ["1G","2H","3H","4H","5H","6H","7H","8H","9H","10H"],
//     ["1G","2H","3I","4I","5I","6I","7I","8I","9I"],
// ];


// $alphabet = range('A','Z');
// $arraySeat = str_split($bookingSeat);

// $numberRow = array_search($bookingSeat[1] , $alphabet) + 1;
// $numberColumn = $arraySeat[0];

// //UpdateBooking
// $data[$numberRow -1][$numberColumn -1] = $bookingSeat . "-booked";

// echo $data[$numberRow -1][$numberColumn -1];


// CASE7
// $duit = array(50000, 20000 , 2000, 1000, 500, 200, 100);
// $nom = 72500;
// echo "<h4>Nominal : " . $nom . "</h4>";

// for ($i = 0; $i < count($duit); $i++) {
//     if ($nom % $duit[$i] < $nom) {
//         echo floor($nom / $duit[$i]) . " -> " . $duit[$i] . "<br/>";
//         $nom = $nom % $duit[$i];
//  }
// }

// $input = 72500;

// $str = (string)$input;
// $a = $str[0];
// $a = $str[1];
// $a = $str[2];

// print_r($a);




// echo json_encode($data);


// CASE8
/*
    1.Button start clicked 
    2.Masuk ke permainan, terdapat 3 colom berisi angka.
    3.Button spin, clicked
    4.3 colom random berputar
    5.if stop && 3 colom bernilai sama maka dapat HADIAH
    6.else "Maaf anda belum beruntung"
*/


// CASE9
// SELECT * FROM user
// UNION
// SELECT * FROM profile
// UNION
// SELECT * FROM jabatan

// CASE10
// SELECT * FROM user as u 
// JOIN jabatan as j ON u.id = j.user_id 
// WHERE u.id = 1
?>




