<?php

/** Function */

function run() {
    return "I am function \n";
};

function add($x, $y) {
    return $x + $y;
};

function some() {
    $x = 50;
    $y = 50; 
    // echo $x + $y;
};

print(run());
print (add(5, 10));
print(some());
var_dump(some());

$array = ["a", "b", "c"];
$myName = "Myat Min Aung";

echo count($array);
echo strtoupper($myName);

$add = fn($x, $y) => $x + $y;

echo $add(12, 23);

// Conditional => if & switch
if (true) {
    echo "This is true";
} else {
    echo "This is false";
}

$mark = 35;

if ($mark < 40) {
    echo "Fail Exam";
} else if ($mark >= 40) {
    echo "Pase Exam";
} else if ($mark >= 80) {
    echo "Pass with destination";
}

switch ($mark) {
    case $mark >= 80;
        echo "Pass with destination";
        break;
       
    case $mark >= 40;
        echo "Pass Exam";
        break;
    
    case $mark < 40;
        echo "Fail Exam";
        break;
}

// For loop
for ($i = 1; $i <= 10; $i++) {
    if ($i === 5) {
        // continue; skip 5
        break; // break at 5
    }
    echo "Loop $i \n";
};

$mySelf = [
    "name" => "Myatmin Aung",
    "age" => 21,
    "weight" => 130.45,
    "skills" => ["html", "css", "js"],
];

foreach($mySelf as $key => $value) {
    echo $key."\n";
    var_dump($value);
}

$students = ["mg mg", "kyaw kyaw", "zaw zaw"];

for ($i = 0; $i < count($students); $i++) {
    echo ($i+1).$students[$i]. "\n";
}

// For Each
foreach($students as $student) {
    echo $student. "\n";
}

foreach($students as $key => $value) {
    echo $key." ".$value. "\n";
}

$i = 0;

// While & Do while
while($i <= 10) {
    $i++;
    print("While Loop $i \n");
}

do {
    print("While Loop $i \n");
    $i++;
} while($i <= 10);