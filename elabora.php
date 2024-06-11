<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h2>Stampo Array</h2>
    <pre>
        <?php var_dump($hotels) ?>
    </pre>

    <table class="table">
        <thead>
            <tr>
                <th>Hotel</th>
                <th>description</th>
                <th>parking</th>
                <th>vote</th>
                <th>distance</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($hotels as $hotel) {
                if ($hotel['parking'] == true) {
                     $hotel['parking'] = "yes";
                } else {
                     $hotel['parking'] = "no";
                }

                echo "<tr>" .
                    "<td>" . $hotel['name'] . "</td>" .
                    "<td>" . $hotel['description'] . "</td>" .
                    "<td>" . $hotel['parking'] . "</td>" .
                    "<td>" . $hotel['vote'] . "</td>" .
                    "<td>" . $hotel['distance_to_center'] . "</td>" .
                    "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>