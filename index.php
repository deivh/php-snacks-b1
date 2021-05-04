<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>PhP Test</title>
</head>
<body>
           
    <div class="row">
    <!-- ESERCIZIO 1 -->
    <!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. 
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
    e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->
    <?php
        $matches = [
            'match1' => [
                [
                    'host' => 'Reyer Venezia',
                    'score' => '21'
                ],
                [
                    'guest' => 'Napoli Basket',
                    'scoreGuest' => '50'
                ],
                [
                    'place' => 'Venezia'
                ]

            ],
            'match2' => [
                [
                    'host' => 'Olimpia Milano',
                    'score' => '38'
                ],
                [
                    'guest' => 'Varese',
                    'scoreGuest' => '34'
                ],
                [
                    'place' => "Milano"
                ]
                ],
            'match3' => [
                 [
                    'host' => 'Virtus Bologna',
                    'score' => '32'
                ],
                [
                    'guest' => 'Mens Sana Siena',
                    'scoreGuest' => '30'
                ],
                [
                    'place' => 'Bologna'
                ]
    
                ],
                
            ];

        for ($i=0; $i < count($matches) ; $i++) { 
            $match = $matches[$i];
            echo $match['host'] . ' - ' . $match['guest'] . '|' . $match['score'] . ' - ' . $match['scoreGuest'];
            echo "<br>";
            
        }
    
    ?>
    </div>
    <div class="row">
    <!-- ESERCIZIO 2 -->
    <!-- Passare come parametri GET name, mail e age e verificare 
    (cercando i metodi che non conosciamo nella documentazione)
    che name sia più lungo di 3 caratteri,
    che mail contenga un punto e una chiocciola e che age sia un numero.
    Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->
   
    <?php
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
        if ((strlen($name)<3) ||  !str_contains($mail, '.') || !str_contains($mail, '@') || !is_int($age)) {
            echo "Accesso Negato";
        } else echo "Accesso Riuscito";


    ?>
    </div>
</body>

</html>