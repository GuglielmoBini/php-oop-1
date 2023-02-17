<?php
// Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
//  - è definita una classe Movie
//    => all'interno della classe sono dichiarate delle variabili d'istanza
//    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

// Bonus 1:
// Creare un'istanza Genre e modificare la classe Movie in modo che accetti piú di un genere

// Bonus 2:
// Creare un layout completo per stampare a schermo una lista di movies.
// Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
// - creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
// - mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models
// - organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.


// ---------------------------------------------------------------------------------

// creo la classe
class Movie
{
    public $title;
    public $director;
    public $year;
    public $plot;
    public $score;

    // definisco il costruttore
    public function __construct($_title, $_director, $_year, $_plot, $_score)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->plot = $_plot;
        $this->score = $_score;
    }

    // metodi
    public function getTitle()
    {
        return $this->title;
    }

    public function getDirector()
    {
        return $this->director;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getPlot()
    {
        return $this->plot;
    }

    public function getScore()
    {
        return $this->score;
    }
}

// oggetti
$babylon = new Movie('Babylon', 'Damien Chazelle', 2022, 'Una storia di ambizioni smisurate ed eccessi oltraggiosi, ripercorre l\'ascesa e la caduta di più personaggi durante un\'era di decadenza e depravazione sfrenata nella prima Hollywood.', 60);


$parasite = new Movie('Parasite', 'Bong Joon Ho', 2019, 'L\'intera famiglia di Ki-taek è disoccupata e molto interessata allo stile di vita della ricca famiglia Park finché non sono coinvolti in un incidente inaspettato.', 96);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <title>Movie OOP</title>
</head>

<body>
    <div class="container mt-5 w-50 border">
        <div class="mb-5">
            <h3><?= $babylon->getTitle() ?></h3>
            <ul>
                <li><?= $babylon->getDirector() ?></li>
                <li><?= $babylon->getYear() ?></li>
                <li><?= $babylon->getplot() ?></li>
                <li><?= $babylon->getScore() ?></li>
            </ul>
        </div>
        <div>
            <h3><?= $parasite->getTitle() ?></h3>
            <ul>
                <li><?= $parasite->getDirector() ?></li>
                <li><?= $parasite->getYear() ?></li>
                <li><?= $parasite->getplot() ?></li>
                <li><?= $parasite->getScore() ?></li>
            </ul>
        </div>
    </div>
</body>

</html>