<?php
class Book
{
    private $name;
    private $author;
    private $price;
    private $QtyInStock;

    function __construct($name,$author,$price,$QtyInStock)
    {
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;
        $this->QtyInStock = $QtyInStock;
    }

    function getName()
    {
        return $this->name;
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getPrice()
    {
        return $this->price;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    function getQtyInStock()
    {
        return $this->QtyInStock;
    }

}

$book1 = new Book('Co gai nam ay chung toi cung theo duoi','Cuu Ba Dao',30.000,20);
echo '<br/>';
echo 'Name : ' . $book1->getName();
echo '<br/>';
echo 'Author : ' . $book1->getAuthor();
echo '<br/>';
echo 'Price : ' . $book1->getPrice();
echo '<br/>';
$book1->setPrice(50.000);
echo 'New Price :' . $book1->getPrice();
echo '<br/>';
echo 'Quantity In Stock : ' . $book1->getQtyInStock();
?>