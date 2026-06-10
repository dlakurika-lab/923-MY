<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$albums = [
    [
        'id' => 1,
        'title' => 'Atom Heart Mother',
        'release_date' => '10 октября 1970',
        'labels' => 'EMI, Harvest, Capitol',
        'formats' => 'LP, CD',
        'certifications' => 'Золотой (USA)'
    ],
    [
        'id' => 2,
        'title' => 'Meddle',
        'release_date' => '30 октября 1971',
        'labels' => 'EMI, Harvest, Capitol',
        'formats' => 'Vinyl, Кассета, CD',
        'certifications' => 'Платиновый (USA)'
    ],
    [
        'id' => 3,
        'title' => 'Obscured by Clouds',
        'release_date' => '3 июня 1972',
        'labels' => 'EMI, Harvest, Capitol',
        'formats' => 'LP, Кассета, CD',
        'certifications' => 'Золотой (USA), Серебряный (GBR)'
    ],
    [
        'id' => 4,
        'title' => 'The Dark Side of the Moon',
        'release_date' => '17 марта 1973',
        'labels' => 'Harvest, Capitol, EMI',
        'formats' => 'LP, Кассета, CD, SACD',
        'certifications' => 'Платиновый (USA), Платиновый (GBR), Бриллиантовый (CAN)'
    ],
    [
        'id' => 5,
        'title' => 'Wish You Were Here',
        'release_date' => '15 сентября 1975',
        'labels' => 'Harvest, EMI, Columbia, Capitol',
        'formats' => 'LP, 8-track, Кассета, CD, SACD',
        'certifications' => 'Платиновый (USA), Золотой (GBR), Платиновый (CAN)'
    ],
    [
        'id' => 6,
        'title' => 'Animals',
        'release_date' => '23 января 1977',
        'labels' => 'Harvest, EMI, Columbia, Capitol',
        'formats' => 'LP, 8-track, Кассета, CD',
        'certifications' => 'Платиновый (USA), Золотой (GBR), Платиновый (CAN)'
    ],
    [
        'id' => 7,
        'title' => 'The Wall',
        'release_date' => '30 ноября 1979',
        'labels' => 'Harvest, EMI, Columbia, Capitol',
        'formats' => 'LP, 8-track, Кассета, CD',
        'certifications' => 'Платиновый (USA), Платиновый (GBR), Бриллиантовый (CAN), Платиновый (NLD)'
    ],
    [
        'id' => 8,
        'title' => 'The Final Cut',
        'release_date' => '21 марта 1983',
        'labels' => 'Harvest, EMI, Columbia, Capitol',
        'formats' => 'LP, 8-track, Кассета, CD',
        'certifications' => 'Платиновый (USA), Золотой (GBR), Золотой (NLD)'
    ],
    [
        'id' => 9,
        'title' => 'A Momentary Lapse of Reason',
        'release_date' => '8 сентября 1987',
        'labels' => 'EMI, Columbia',
        'formats' => 'LP, Кассета, CD',
        'certifications' => 'Платиновый (USA), Золотой (GBR), Платиновый (CAN), Золотой (NLD)'
    ],
    [
        'id' => 10,
        'title' => 'The Division Bell',
        'release_date' => '30 марта 1994',
        'labels' => 'EMI, Columbia',
        'formats' => 'LP, Кассета, CD',
        'certifications' => 'Платиновый (USA), Платиновый (GBR), Платиновый (CAN), Платиновый (NLD)'
    ]
];

echo '<pre>';
var_dump($albums);
echo '</pre>';
?>

</body>
</html>