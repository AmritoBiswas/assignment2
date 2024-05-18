<?php
class Book { 
 // TODO: Add properties as Private 
 private $title;
 private $availableCopies;

 public function __construct($title, $availableCopies) { 
     // TODO: Initialize properties
     $this->title = $title;
     $this->availableCopies = $availableCopies;
     }


// TODO: Add getTitle method
public function getTitle(){
    return  $this->title;
}

 //Add TODO:  getAvailableCopies method
 
public function getAvailableCopies(){
    return $this->availableCopies;
}


 // TODO: Add borrowBook ​​method
 public function borrowBook() {
    if ($this->availableCopies > 0) {
        $this->availableCopies--;
        return true;
    } else {
        echo "No copies available for '{$this->title}'." . PHP_EOL;
        return false;
    }
}


 // TODO: Add returnBook method 
 public function  returnBook(){
    $this->availableCopies +=1;
 }
}


class Member { 
 // TODO: Add properties as Private
 private $name;

 public function __construct($name) { 
      // TODO: Initialize properties
      $this->name = $name;
     }



 // TODO: Add getName method 
 public function getName(                                                                   ){
    return $this->name;                                                                                                                                                                             
 }

 // TODO: Add borrowBook ​​method
 
 public function borrowBook($book) {
    return $book->borrowBook();
}

 

public function returnBook($book) {
    $book->returnBook();
}

 
}



$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrow books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print Available Copies
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}" . PHP_EOL;
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}" . PHP_EOL;

