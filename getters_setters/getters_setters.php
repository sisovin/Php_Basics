<!-- /************************
* PHP code to create getters and setters
***************************/ -->
<?php
class Book
{
  private $title;
  public $author;

  function __construct($title, $author)
  {
    $this->setTitle($title);
    $this->author = $author;
  }

  function getTitle()
  {
    return $this->title;
  }

  function setTitle($title)
  {
    $this->title = $title;
  }

  function readBook()
  {
    echo "Reading $this->title by $this->author";
  }
}

$book1 = new Book("Harry Potter", "JK Rowling");
$book1->setTitle("Half-Blood Prince");
echo $book1->getTitle();
echo "<br>";
$book2 = new Book("The Da Vinci Code", "Dan Brown");
$book2->setTitle("The Da Vinci Code");
echo $book2->getTitle();
