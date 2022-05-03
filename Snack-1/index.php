<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
 
<?php

$basket_match = [
    [
        'home' => 'Olimpia Milano',
        'away' => 'Cantù',
        'home_pt' => 55,
        'away_pt' => 60
    ],
    [
        'home' => 'Brescia',
        'away' => 'Varese',
        'home_pt' => 102,
        'away_pt' => 71
    ],
    [
        'home' => 'Derthona',
        'away' => 'Trieste',
        'home_pt' => 80,
        'away_pt' => 74
    ],
    [
        'home' => 'Universo Treviso',
        'away' => 'Virtus Bologna',
        'home_pt' => 76,
        'away_pt' => 113
    ],
    [
        'home' => 'Dinamo Sassari',
        'away' => 'Cremona',
        'home_pt' => 98,
        'away_pt' => 82
    ],
    [
        'home' => 'Trento',
        'away' => 'reggiana',
        'home_pt' => 69,
        'away_pt' => 77
    ],
    
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>

<div class="matches">
    <?php

    for ($i = 0; $i < count($basket_match); $i++) {
    $single_match= $basket_match[$i];
    echo('<h3>' . $single_match['home'] . ' - ' . $single_match['away'] . ' | ' . $single_match['home_pt'] . ' - ' . $single_match['away_pt'] . '</h3>');
    }

    ?>
</div>


<style>
    *{
        margin: 0;
        padding:0;
        box-sizing:border-box;
    }

    .matches {
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height:100vh;
    }

    h3 {
        margin-top:20px;
        color: red;
    }
</style>
</body>
</html>

