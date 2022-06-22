<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->

<?php
$matches = [
    [
        'home' => [
            'name' => 'BERGAMO',
            'points' => 100,
        ],
        'away' => [
            'name' => 'BRESCIA',
            'points' => 20,
        ],
    ],
    [
        'home' => [
            'name' => 'MILAN',
            'points' => 140,
        ],
        'away' => [
            'name' => 'INTER',
            'points' => 105,
        ],
    ],
    [
        'home' => [
            'name' => 'SAMPDORIA',
            'points' => 78,
        ],
        'away' => [
            'name' => 'GENOVA',
            'points' => 90,
        ],
    ],
];

$matches = array_map(function ($match) {
    $teams = "{$match['home']['name']} - {$match['away']['name']}";
    $scores = "{$match['home']['points']} - {$match['away']['points']}";
    return "$teams | $scores";
}, $matches);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket Matches</title>
</head>

<body>
    <main>
        <ul>
            <?php foreach ($matches as $match) : ?>
                <li><?= $match ?></li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>

</html>