<?php


class Book{
    public $bookName = "Book Name";
    public $author = "author name";
    public $year = "year";

    public function read($book){
        echo "you are  read" . $book;
    }
}

class Novel extends Book{

}


$novel = new Novel();
$novel->read("juu novel");