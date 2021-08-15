<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catur Generator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Catur Generator</h2>
    <div>

        <form action="" method="post">
            <input type="text" id="size" name="size" placeholder="Masukkan panjang catur..." required>
            <button type="submit">OK</button>

        </form>
    </div>


    <?php
    if (isset($_POST['size'])) {
        $size = $_POST['size'];
    } else {
        $size = 0;
    }
    ?>

    <br />

    <div>
        <table>
            <?php for ($i = 1; $i <= $size; $i++) : ?>
                <tr>
                    <?php for ($j = 1; $j <= $size; $j++) : ?>
                        <?php if (($i % 2 == 1) && ($j % 2 == 1)) : ?>
                            <td class="coloured"></td>
                        <?php elseif (($i % 2 == 0) && ($j % 2 == 0)) : ?>
                            <td class="coloured"></td>
                        <?php else : ?>
                            <td></td>
                        <?php endif; ?>

                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </div>

</body>

</html>