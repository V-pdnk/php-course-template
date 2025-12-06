<?php

class Book
{
    public $title = 'string';
    public $author = 'string';
    protected $year = 0;
    function __construct($title, $author, $year)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }
    public function getInfo()
    {
        echo 'Название: ' . $this->title . ', Автор: ' . $this->author . ', Год: ' . $this->year . '</br>';
    }
    public function isOld()
    {
        echo $this->year < 1975 ? "Книга $this->title является старой»</br>":"Книга $this->title не является старой</br>";
    }
}

class Movie
{
    public string $title = '';
    public string $author = '';
    public int $year = 0;
    public string $genre = '';
    public int $score = 0;
    private bool $actual;

    function __construct($title, $author, $year, $genre, $score, $actual)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->genre = $genre;
        $this->score = $score;
        $this->actual = $actual;
    }
    public function getInfo()
    {
        echo 'Название: ' . $this->title . ', Автор: ' . $this->author . ', Год: ' . $this->year . ', Жанр: ' . $this->genre . '</br>';
    }
    public function isGood()
    {
        switch($this->score)
        {
            case 5:
                echo "$this->title - шедевр кинематографа. Если бы существовал Лувр для кинокартин, то $this->title точно был бы в нем экспонатом!</br>";
            break;
            case 4:
                echo "$this->title очень даже неплох! Уделите ему время!</br>";
            break;
            case 3:
                echo "$this->title - проходной фильм. Можно поставить фоном и заняться своими делами</br>";
            break;
            case 2:
                echo "Не тратьте сове время на \"$this->title\"</br>";
            break;
            case 1:
                echo "\"$this->title\" не достоен существовать. Как вообще можно снять настолько плохо?</br>";
            break;
        }
    }
    public function isYoung()
    {
        if($this->year < 2000) {
            echo "Фильм $this->title довольно старый»</br>";
        }elseif($this->year > 2015) {
            echo "Фильм $this->title является новинкой!</br>";
        }else {
            "Фильм $this->title относительно свежий</br>";
        }
    }
    public function check()
    {
        echo $this->actual ? "</br>Править можно</br></br>":"</br>Правки запрещены!</br></br>";
    }
}

$books = [];
$films =[];

$books[] = new Book('Дом листьев', 'Марк Z. Данилевский', 2000);
$books[] = new Book('Дом в котором', 'Мариам Петросян', 2009);
$books[] = new Book('Дураков нет', 'Ричард Руссо', 1993);
$books[] = new Book('Червь', 'Джон Маккрей', 2013);
$books[] = new Book('Маленький принц', 'Антуан де Сент-Экзюпери', 1943);

$films[] = new Movie('Дом, который построил Джек', 'Ларс фон Триер', 2018, 'Триллер', 5, false);
$films[] = new Movie('Три билборда на границе Эббинга, Миссури', 'Мартин Макдонах', 2017, 'драма', 4, false);
$films[] = new Movie('Очень плохое и старое кино', 'Автору стыдно назвать себя', 1990, 'киномусор', 1, true);

foreach($books as $n){
    $n->getInfo();
    $n->isOld();
}

foreach($films as $n){
    $n->getInfo();
    $n->isGood();
    $n->isYoung();
    $n->check();
}


?>

<html lang="ru">

</html>