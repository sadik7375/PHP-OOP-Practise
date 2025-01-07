<?php 


//here i learn encapsulation and inheritance and polymorphism 

class resourse{

protected $title;
protected $author;
protected $publishYear;


public function __construct($title,$author,$publishYear)

{

$this->title=$title;
$this->author=$author;
$this->publishYear=$publishYear;


}


public function display()
{

echo "Title:$this->title,Author:$this->author,PublishYear:$this->publishYear";


}

}


class book extends resourse{

private $pageCount;



public  function __construct($title, $author, $publishedYear,$pageCount) {
    parent::__construct($title,$author,$publishedYear);
    $this->pageCount=$pageCount;

}

//here i overwrite the display function
public function display(){

parent::display();

echo "pageCount:$this->pageCount";


}


}


$mybook= new book("jungle","sadik","2010","312");

$mybook->display();


