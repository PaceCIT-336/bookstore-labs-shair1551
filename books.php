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






require_once 'login.php';

try
{
  $pdo = new PDO($attr, $user, $pass, $opts);
}
catch (PDOException $e)
{
  throw new PDOException($e->getMessage(), (int)$e->getCode());
}

$query  = "SELECT * FROM bookstore";
$result = $pdo->query($query);

while ($row = $result->fetch())
{
  echo 'ID:   ' . htmlspecialchars($row['ID'])   . "<br>";
  echo 'Title:    ' . htmlspecialchars($row['Title'])    . "<br>";
  echo 'Author: ' . htmlspecialchars($row['Author']) . "<br>";
  echo 'blurb:     ' . htmlspecialchars($row['blurb'])     . "<br>";
  echo 'ImagePath:     ' . htmlspecialchars($row['Imagepath'])     . "<br><br>";
  echo 'Price:     ' . htmlspecialchars($row['Price'])     . "<br><br>";
}


}





?>