<?php
$telnumbers = [
    [
        'firstName' => 'Иван',
        'lastName' => 'Иванов',
        'address' => 'г.Москва, ул. Алиева,2',
        'phoneNumber' => '812 123-1234'
    ],
    [
        'firstName' => 'Максим',
        'lastName' => 'Максимов',
        'address' => 'г.Тверь, ул. Омская,2',
        'phoneNumber' => '123 346-8946'
    ],
    [
        'firstName' => 'Петр',
        'lastName' => 'Петров',
        'address' => 'г.Псков, ул. Жукова,2',
        'phoneNumber' => '321 578-9875'
    ],
    [
        'firstName' => 'Виктор',
        'lastName' => 'Викторов',
        'address' => 'г.Уфа, ул. Думская,2',
        'phoneNumber' => '567 235-1068'
    ],
    [
        'firstName' => 'Мария',
        'lastName' => 'Марьева',
        'address' => 'г.Иркутск, ул. Ленина,2',
        'phoneNumber' => '789 567-8755'
    ],
    [
        'firstName' => 'Сергей',
        'lastName' => 'Сергеев',
        'address' => 'г.Киров, ул. Сенная,2',
        'phoneNumber' => '853 064-4578'
    ],
];

$numbers = json_encode($telnumbers,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

$tels = file_get_contents(__DIR__.'/tel.json');
$telephones = json_decode($tels,true);

echo '<pre>';
print_r($telephones);

?>

<html>
<head>
    <title> Json example</title>
</head>
<body>
<table border="1">
    <tr>
        <td>firstName</td>
        <td>lastName</td>
        <td>address</td>
        <td>phoneNumber</td>
    </tr>

    <?php foreach ($telephones as $telephone) : ?>
        <tr>
            <td><?php echo $telephone['firstName']?></td>
            <td><?php echo $telephone['lastName']?></td>
            <td><?php echo $telephone['address']?></td>
            <td><?php echo $telephone['phoneNumber']?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
