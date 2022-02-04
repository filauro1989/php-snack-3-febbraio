<?php 
    $array = [
        [
            'Nome' => 'osso buco',
            'Prezzo' => 30,
            'Immagine' => 'https://image.freepik.com/free-photo/closeup-shot-three-domesticated-pigs_181624-44776.jpg?w=1380',
            'Tipologia' => 'carne',
        ],
        [
            'Nome' => 'zucchina',
            'Prezzo' => 10,
            'Immagine' => 'https://image.freepik.com/premium-photo/fresh-whole-sliced-zucchini-isolated-from-top-view-courgette-zucchini-cut-into-slices_121234-14.jpg?w=1380',
            'Tipologia' => 'verdura',
        ],
        [
            'Nome' => 'fagioli',
            'Prezzo' => 3,
            'Immagine' => 'https://image.freepik.com/free-photo/fabada-bean_1368-5459.jpg?w=1380',
            'Tipologia' => 'legumi',
        ],
        [
            'Nome' => 'spigola',
            'Prezzo' => 45,
            'Immagine' => 'https://image.freepik.com/free-photo/two-raw-seabass-with-spices_2829-13943.jpg?w=1060',
            'Tipologia' => 'pesce',
        ],
    ];
    $filteredArray = $array;

    if (isset($_GET['select']) !== false) {
        $tipologia = $_GET['select'];
        $prezzo = $_GET['select'];
        if ($tipologia === 'all') {
            $filteredArray = $array;
        } else {
            $filteredArray = [];
            foreach ($array as $product) {
                if ($product['Tipologia'] === $tipologia || $product['Prezzo'] < $prezzo) {
                $filteredArray[] = $product;
                }
            }
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="GET">
        <select name="select" id="select">
            <option default value="all">all</option>
            <option value="carne">carne</option>
            <option value="verdura">Verdure</option>
            <option value="legumi">legumi</option>
            <option value="pesce">Pesce</option>
            <option value="5">minore di 5</option>
            <option value="15">minore di 15</option>
            <option value="30">minore di 30</option>
            <option value="50">minore di 50</option>
        </select>
        <button>Cerca</button>
    </form>
    
    <?php foreach ($filteredArray as $product) {?>
        <img src="<?= $product['Immagine'] ?>" alt="" style="width:200px">
        <p><?= $product['Nome'] ?></p>
        <p><?= $product['Prezzo'] ?></p>
        <p><?= $product['Tipologia'] ?></p>
    <?php } ?>

</body>
</html>