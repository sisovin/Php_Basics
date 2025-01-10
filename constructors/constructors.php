<!-- /************************
* PHP code to create constructors
***************************/ -->
<?php
class Book
{
  var $title;
  public $author;

  function __construct($title, $author)
  {
    $this->title = $title;
    $this->author = $author;
  }

  function readBook()
  {
    echo "Reading $this->title by $this->author";
  }
}

$book1 = new Book("Harry Potter", "JK Rowling");
echo $book1->title . "<br>";
