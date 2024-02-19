<?php
Class Book { 
    public $title;
    public $author;
    public $blurb;
    public $imageLocation;
    public $price;
    
    public function __construct($title, $author, $blurb, $imageLocation, $price) 
    {
        $this title = $title;
        $this author = $author;
        $this blurb = $blurb;
        $this imageLocation = $imageLocation;
        $this price = $price;

}
include("books.php")
$book1 = New Book("Learning PHP, MySQL & JavaScript", "Robin Nixon.", "A step-by-step guide to creating dynamic websites", "assets/imgs/learningphp.jpg", "60");
$book2 = New Book("Learning Python", "Mark Lutz.", "Powerful Object-Oriented Programming", "assets/imgs/learningpython.jpg", "49");
$book3 = New Book("HTML & CSS 9th Ed", "Joe Casabona.", "Design and build webpages", "assets/imgs/htmlcss.jpg", "35");
$book4 = New Book("American Heritage Dictionary", "", "The English Language", "assets/imgs/dictionary.jpg", "55");

$books = array($book1, $book2, $book3, $book4);
foreach ( $books as $books) {
    echo "$books <br>";
  }
}


?>