<!-- implementasi pengulangan $ pengkondisian-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .warna-baris {
            background-color: blue;
        }
    </style>
</head>
<body>
    <table border="1" cellpanding="10" cellspacing="0">
        <?php
            // for ($b=1; $b <= 3; $b++) { 
            //     echo "<tr>";
            //     for ($k=1; $k <= 5 ; $k++) { 
            //         echo "<td> $b, $k </td>"; 
            //     }
            //     echo "</tr>";
            // }
        ?>
        <?php for ($b=1; $b <= 5; $b++) : ?>
            <?php if( $b % 2 == 1 ) : ?>
            <tr class="warna-baris">
            <?php else: ?>
            <tr>
            <?php endif; ?>
                <?php for ($k = 1; $k <= 5; $k++) : ?>
                    <td><?= "$b, $k" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>