<?php
// index array
$numbers=array(1, 2, 3, 4, 5);
$names=array("dirushan", "sachin", "nishan", "nimesh", "nishan");

$numbers1=[1, 2, 3, 4, 5];
$names1=["dirushan", "sachin", "nishan", "nimesh", "nishan"];
$shan=[];
// print(count($shan));
// foreach($numbers as $index=>$number){
//     echo $index ."\n";
//     echo $number ."\n";
// }

// associative array
$students=[
    "name"=>"dirushan",
    "age"=>25,
    "address"=>"kandy",
    "phone"=>"0771234567",
];
// foreach($students as $key=>$value){
//     echo $key ."\n";
//     echo $value ."\n";
// }
 //mulitdimensional array
$students=[
    [
        "name"=>"dirushan",
        "age"=>25,
        "address"=>"kandy"
    ],
    [
        "name"=>"sachin",
        "age"=>25,
        "address"=>"kandy",
        "phone"=>"0771234567",
    ],
    [
        "name"=>"nishan",
        "age"=>25,
        "address"=>"kandy",
        "phone"=>"0771234567",
    ],
    [
        "name"=>"nimesh",
        "age"=>25,
        "address"=>"kandy"
        
    ]
    ];

    print(count($students[0]));
// foreach($students as $index => $student){
//     echo $index ."\n";
//     foreach($student as $key=>$value){
//         echo $key ."\n";
//         echo $value ."\n";
//     }
// }


$diru = [1, 2, 3, 4];
$shan = ["dirushan", "sachin", "nishan", "nimesh"];

// Merging the two arrays
$merged = array_merge($diru, $shan,$students);

// Printing the merged array
print_r($merged);

?>