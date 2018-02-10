<?php

$tels = file_get_contents(__DIR__.'/tel.json');
$telephones = json_decode($tels,true);

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
