Class − This is a programmer-defined data type, which includes local functions as well as local data. You can think of a class as a template for making many instances of the same kind (or class) of object.

example  
<?php
   class Books {
      /* Member variables */
      var $price;
      var $title;
      
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
      }
   }
?>
<?php
Creating Objects in PHP
$physics = new Books;
$maths = new Books;
$chemistry = new Books;



Calling Member Functions

$physics->setTitle( "Physics for High School" );
$chemistry->setTitle( "Advanced Chemistry" );
$maths->setTitle( "Algebra" );

$physics->setPrice( 10 );
$chemistry->setPrice( 15 );
$maths->setPrice( 7 );

?>


<?php

// base class with member properties and methods
class Vegetable {

   var $edible;
   var $color;

   function __construct($edible, $color="green")
   {
       $this->edible = $edible;
       $this->color = $color;
   }

   function is_edible()
   {
       return $this->edible;
   }

   function what_color()
   {
       return $this->color;
   }

} // end of class Vegetable

// extends the base class
class Spinach extends Vegetable {

   var $cooked = false;

   function __construct()
   {
       parent::__construct(true, "green");
   }

   function cook_it()
   {
       $this->cooked = true;
   }

   function is_cooked()
   {
       return $this->cooked;
   }

} // end of class Spinach

?>
