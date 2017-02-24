<?php 
echo '<h2>Class Definition</h2><p>In object-oriented programming , a class is a template definition of the method s and variable s in a particular kind of object . Thus, an object is a specific instance of a class; it contains real values instead of variables.</p>

<h2>method Definition</h2><p>In object-oriented programming, a method is a programmed procedure that is defined as part of a class and included in any object of that class. A class (and thus an object) can have more than one method. A method in an object can only have access to the data known to that object, which ensures data integrity among the set of objects in an application. A method can be re-used in multiple objects.</p>

<h2>variable Definition</h2><p>In programming, a variable is a value that can change, depending on conditions or on information passed to the program. Typically, a program consists of instruction s that tell the computer what to do and data that the program uses when it is running. The data consists of constants or fixed values that never change and variable values (which are usually initialized to "0" or some default value because the actual values will be supplied by a program`s user). Usually, both constants and variables are defined as certain data type s. Each data type prescribes and limits the form of the data. Examples of data types include: an integer expressed as a decimal number, or a string of text characters, usually limited in length.</p>

<h2>object Definition</h2><p>In object-oriented programming (OOP), objects are the things you think about first in designing a program and they are also the units of code that are eventually derived from the process. In between, each object is made into a generic class of object and even more generic classes are defined so that objects can share models and reuse the class definitions in their code. Each object is an instance of a particular class or subclass with the class`s own methods or procedures and data variables. An object is what actually runs in the computer.</p>

<h5>The class is one of the defining ideas of object-oriented programming. Among the important ideas about classes are:</h5>

<p>(1) A class can have subclasses that can inherit all or some of the characteristics of the class. In relation to each subclass, the class becomes the superclass.</p>
<p>(2) Subclasses can also define their own methods and variables that are not part of their superclass.</p>
<p>(3) The structure of a class and its subclasses is called the class hierarchy.</p>

<h1>Examples(1)</h1>';

//Start Examples(1)

class Foo { 
    public $aMemberVar = 'Shopify is Member Variable'; 
    public $aFuncName = 'aMemberFunc'; 
    
    
    function aMemberFunc() { 
        echo 'Inside `aMemberFunc()`'; 
    } 
} 

$foo = new Foo; 
echo '<h4>You can access member variables in an object using another variable as name:</h4>';

$element = 'aMemberVar'; 
echo $foo->$element.'<br/>'; // prints "Shopify is Member Variable"

//Or
 
echo '<h4>or use functions:</h4>';
 
function getVarName() 
{ 
	return 'aMemberVar'; 
} 
echo $foo->{getVarName()}.'<br/>';

//Or

echo '<h4>you can use a constant or literal as well:</h4>';

define('MY_CONSTANT', 'aMemberVar');
echo $foo->{MY_CONSTANT}.'<br/>'; // Prints "aMemberVar Member Variable" 
echo $foo->{'aMemberVar'}.'<br/>'; // Prints "aMemberVar Member Variable" 

echo '<h4>You can use mathods above to access member functions as well:</h4>';

echo $foo->{'aMemberFunc'}().'<br/>'; // Prints "Inside `aMemberFunc()`" 
echo $foo->{$foo->aFuncName}().'<br/>'; // Prints "Inside `aMemberFunc()`" 

//End Examples(1)

echo '<h1>Examples(2)</h1>';

//Start Examples(2)

echo '<h4>You can create instances of classes without knowing the class name in advance, when it`s in a variable:</h4>';

$type = 'cc';
$obj = new $type; // outputs "hi!"
class cc {
    function __construct() {
        echo 'hi!';
    }
}

//End Examples(2)

echo '<h1>Examples(3)</h1>';
//Start Examples(3)
class test
  {
    public static function run() { echo "Works<br>"; }
  }
  
  echo '<h4>public static function:</h4>';
  
  $className = 'test';
  $className::run();
  
  echo '<h4>call_user_function:</h4>';
  
  $className = 'test';
  call_user_func(array($className, 'run'));
  
 //End Examples(3)
 
echo '<h1>Examples(4)</h1>';

//Start Examples(4)

echo '<h4>Maybe someone will find these classes, which simulate enumeration, useful<h4>';

class Enum {
    protected $self = array();
    public function __construct( /*...*/ ) {
        $args = func_get_args();
        for( $i=0, $n=count($args); $i<$n; $i++ )
            $this->add($args[$i]);
    }
    
    public function __get( /*string*/ $name = null ) {
        return $this->self[$name];
    }
    
    public function add( /*string*/ $name = null, /*int*/ $enum = null ) {
        if( isset($enum) )
            $this->self[$name] = $enum;
        else
            $this->self[$name] = end($this->self) + 1;
    }
}

class DefinedEnum extends Enum {
    public function __construct( /*array*/ $itms ) {
        foreach( $itms as $name => $enum )
            $this->add($name, $enum);
    }
}

class FlagsEnum extends Enum {
    public function __construct( /*...*/ ) {
        $args = func_get_args();
        for( $i=0, $n=count($args), $f=0x1; $i<$n; $i++, $f *= 0x2 )
            $this->add($args[$i], $f);
    }
}

$eFruits = new Enum("APPLE", "ORANGE", "PEACH");
echo $eFruits->APPLE . ",";
echo $eFruits->ORANGE . ",";
echo $eFruits->PEACH . "<br/>";

//$eBeers = new DefinedEnum("GUINESS" => 25, "MIRROR_POND" => 49);
//echo $eBeers->GUINESS. ",";
//echo $eBeers->MIRROR_POND . "<br/>";

$eFlags = new FlagsEnum("HAS_ADMIN", "HAS_SUPER", "HAS_POWER", "HAS_GUEST");
echo $eFlags->HAS_ADMIN . ",";
echo $eFlags->HAS_SUPER . ",";
echo $eFlags->HAS_POWER . ",";
echo $eFlags->HAS_GUEST . "<br/>";

//End Examples(4)

echo '<h1>Examples(5)</h1>';
//Start Examples(5)

echo '<h4>Here a simple class stdObject that give us the possibility to create dynamic classes and the possibility to add and execute methods thing that stdClass don`t let us do.  Very useful if you extends it to a controller on MVC Design pattern. Let users create own classes.</h4>';

class stdObject {
    public function __construct(array $arguments = array()) {
        if (!empty($arguments)) {
            foreach ($arguments as $property => $argument) {
                $this->{$property} = $argument;
            }
        }
    }

    public function __call($method, $arguments) {
        $arguments = array_merge(array("stdObject" => $this), $arguments); // Note: method argument 0 will always referred to the main class ($this).
        if (isset($this->{$method}) && is_callable($this->{$method})) {
            return call_user_func_array($this->{$method}, $arguments);
        } else {
            throw new Exception("Fatal error: Call to undefined method stdObject::{$method}()");
        }
    }
}

// Usage.

$obj = new stdObject();
$obj->name = "Nick";
$obj->surname = "Doe";
$obj->age = 20;
$obj->adresse = null;

$obj->getInfo = function($stdObject) { // $stdObject referred to this object (stdObject).
    echo '<p>'.$stdObject->name . " " . $stdObject->surname . " have " . $stdObject->age . " yrs old. And live in " . $stdObject->adresse.'</p>';
};

$func = "setAge";
$obj->{$func} = function($stdObject, $age) { // $age is the first parameter passed when calling this method.
    $stdObject->age = $age;
};

$obj->setAge(24); // Parameter value 24 is passing to the $age argument in method 'setAge()'.

// Create dynamic method. Here i'm generating getter and setter dynimically
// Beware: Method name are case sensitive.
foreach ($obj as $func_name => $value) {
    if (!$value instanceOf Closure) {

        $obj->{"set" . ucfirst($func_name)} = function($stdObject, $value) use ($func_name) {  // Note: you can also use keyword 'use' to bind parent variables.
            $stdObject->{$func_name} = $value;
        };

        $obj->{"get" . ucfirst($func_name)} = function($stdObject) use ($func_name) {  // Note: you can also use keyword 'use' to bind parent variables.
            return $stdObject->{$func_name};
        };

    }
}

$obj->setName("John");
$obj->setAdresse("Boston");

$obj->getInfo();

//End Examples(5)
