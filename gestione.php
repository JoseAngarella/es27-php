<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $nome=$_POST['nome'];
        $prezzo=intval($_POST['prezzo']);
        $quantita=$_POST['quantita'];
        if(isset($_POST['stato'])){
            $stato='Oggetto usato';
            $prezzo=($prezzo/100)*80;

        }else{
            $stato='Oggetto nuovo';
        }
        if(isset($_POST['modalita_pagamento'])){
            $modalita_pagamento=$_POST['modalita_pagamento'];
            if(empty($nome) || empty ($prezzo)){
                echo "<a href='acquisti.html'>dati mancanti torna alla compilazione del form</a>";
            }else{
                if($modalita_pagamento=='carta'){
                    $prezzo+=2;
                }
                echo "<ul><li>Nome oggetto = $nome</li><li>Prezzo = $prezzo</li><li>Quantita = $quantita</li>
                <li>stato dell'oggetto: $stato</li><li>Modalita pagamento: $modalita_pagamento</li>
                </ul>";

            }
        }else{
            echo "<a href='acquisti.html'>dati mancanti torna alla compilazione del form</a>";
        }
    ?>
</body>
</html>

<!-- Inviare la form tramite POST alla pagina gestione.php.
La pagina di risposta deve recuperare tutti i dati e scrivere un resoconto di tutti i dati raccolti.
I dati inviati devono essere scritti all'interno di una lista non ordinata.
Nel caso dello stato dell'oggetto, mostrare la stringa "Oggetto usato" oppure "Oggetto nuovo"

Per quanto riguarda il totale:
- se l'oggetto è usato, allora l'utente ha diritto a uno sconto del 20%.
- se l'utente ha scelto come metodo di pagamento la carta, aggiungere 2 euro al prezzo finale (dopo l'eventuale sconto del 20%). -->