<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$discography = [
    "Atom Heart Mother" => [
        "id" => 1,
        "release_date" => "10 октября 1970",
        "labels" => ["EMI", "Harvest", "Capitol"],
        "formats" => ["LP", "CD"],
        "statuses" => ["Золотой (USA)"]
    ],
    "Meddle" => [
        "id" => 2,
        "release_date" => "30 октября 1971",
        "labels" => ["EMI", "Harvest", "Capitol"],
        "formats" => ["Vinyl", "Кассета", "CD"],
        "statuses" => ["Платиновый (USA)"]
    ],
    "Obscured by Clouds" => [
        "id" => 3,
        "release_date" => "3 июня 1972",
        "labels" => ["EMI", "Harvest", "Capitol"],
        "formats" => ["LP", "Кассета", "CD"],
        "statuses" => ["Золотой (USA)", "Серебряный (GBR)"]
    ],
    "The Dark Side of the Moon" => [
        "id" => 4,
        "release_date" => "17 марта 1973",
        "labels" => ["Harvest", "Capitol", "EMI"],
        "formats" => ["LP", "Кассета", "CD", "SACD"],
        "statuses" => ["Платиновый (USA)", "Платиновый (GBR)", "Бриллиантовый (CAN)"]
    ],
    "Wish You Were Here" => [
        "id" => 5,
        "release_date" => "15 сентября 1975",
        "labels" => ["Harvest", "EMI", "Columbia", "Capitol"],
        "formats" => ["LP", "8-track", "Кассета", "CD", "SACD"],
        "statuses" => ["Платиновый (USA)", "Золотой (GBR)", "Платиновый (CAN)"]
    ],
    "Animals" => [
        "id" => 6,
        "release_date" => "23 января 1977",
        "labels" => ["Harvest", "EMI", "Columbia", "Capitol"],
        "formats" => ["LP", "8-track", "Кассета", "CD"],
        "statuses" => ["Платиновый (USA)", "Золотой (GBR)", "Платиновый (CAN)"]
    ],
    "The Wall" => [
        "id" => 7,
        "release_date" => "30 ноября 1979",
        "labels" => ["Harvest", "EMI", "Columbia", "Capitol"],
        "formats" => ["LP", "8-track", "Кассета", "CD"],
        "statuses" => ["Платиновый (USA)", "Платиновый (GBR)", "Бриллиантовый (CAN)", "Платиновый (NLD)"]
    ],
    "The Final Cut" => [
        "id" => 8,
        "release_date" => "21 марта 1983",
        "labels" => ["Harvest", "EMI", "Columbia", "Capitol"],
        "formats" => ["LP", "8-track", "Кассета", "CD"],
        "statuses" => ["Платиновый (USA)", "Золотой (GBR)", "Золотой (NLD)"]
    ],
    "A Momentary Lapse of Reason" => [
        "id" => 9,
        "release_date" => "8 сентября 1987",
        "labels" => ["EMI", "Columbia"],
        "formats" => ["LP", "Кассета", "CD"],
        "statuses" => ["Платиновый (USA)", "Золотой (GBR)", "Платиновый (CAN)", "Золотой (NLD)"]
    ],
    "The Division Bell" => [
        "id" => 10,
        "release_date" => "30 марта 1994",
        "labels" => ["EMI", "Columbia"],
        "formats" => ["LP", "Кассета", "CD"],
        "statuses" => ["Платиновый (USA)", "Платиновый (GBR)", "Платиновый (CAN)", "Платиновый (NLD)"]
    ]
];

echo "<pre>";
print_r($discography);
echo "</pre>";
?>

</body>
</html>