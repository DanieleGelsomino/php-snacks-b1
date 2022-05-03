<!-- Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$class = [
    [
        'nome' => 'Anna',
        'cognome' => 'Pannocchia',
        'voti' => [8, 7, 5, 9]

    ],
    [
        'nome' => 'Marco',
        'cognome' => 'Marconi',
        'voti' => [3, 7, 6, 8]

    ],
    [
        'nome' => 'Maccio',
        'cognome' => 'Capatonda',
        'voti' => [6, 5, 5, 9]

    ],
    [
        'nome' => 'Mimmo',
        'cognome' => 'Micidial',
        'voti' => [2, 8, 4, 7]

    ],
    [
        'nome' => 'Oscar',
        'cognome' => 'Carogna',
        'voti' => [10, 7, 4, 6]

    ],
];

echo('<h2>' . 'Elenco alunni:' . '</h2>');

for($i =0; $i < count($class); $i++) {
$alunno = $class[$i];
$media_voto = array_sum($alunno['voti']) / count($alunno['voti']);
echo ('<h3>' . $alunno['nome'] . ' ' . $alunno['cognome'] . ' - ' . 'media voto:' . ' ' . $media_voto . '</h3>');
}

?>