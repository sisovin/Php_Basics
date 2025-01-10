<!-- /************************
* PHP code to create classes and objects
***************************/ -->
<?php
class Book
{
  public $title;
  public $author;
  public static $staticAttribute = "My Static Attribute";

  function __construct($title, $author)
  {
    $this->title = $title;
    $this->author = $author;
  }

  public function readBook()
  {
    echo $this->title . "<br>";
    echo self::$staticAttribute . "<br>";
  }
}

$book1 = new Book("Harry Potter", "JK Rowling");

echo $book1->title . "<br>";
echo Book::$staticAttribute . "<br>";
$book1->readBook();

echo $book1->title . "<br>";
echo Book::$staticAttribute . "<br>";
$book2 = new Book("The Da Vinci Code", "Dan Brown");
$book2->readBook();
?>