<?php

    $fruits = ["Mangga", "Berry", "Kiwi"];

    // foreach($fruits as $fruit) {
    //     echo $fruit ;
    //     echo '<br>' ;

    // } this is default array

    // $dinos = [ // associative array
    //     "dinoName" => "Rex", // key and value
    //     "dinoAge" => 300,
    //     "isMarried" => "False" 
    // ];

    // foreach ($dinos as $dino) {
    //     echo $dino ;
    //     echo '<br>' ;
    // }

    $dinos = [
        [ 
            "dinoName" => "Rex", 
            "dinoAge" => 300,
        ],
        [ 
            "dinoName" => "Brasio", 
            "dinoAge" => 800,
        ],
        [ 
            "dinoName" => "Ptera", 
            "dinoAge" => 250,
        ]
    ];

    echo $dinos[0]["dinoName"];

    foreach ($dinos as $dino) {
        echo $dino["dinoName"];
        echo $dino["dinoAge"];
        echo '<br>';
    }
?>