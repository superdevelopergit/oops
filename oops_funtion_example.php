<?php 
class Foo
{
    public $bar = 'Public';
    public $isAlive = true;
	public $firstname = 'boring';
	public $lastname = 'boring'; 
	public $age = '27';
	 
    public function bar() {
        return 'method';
    }
	
	public function sum($a,$b){
		return $a+$b;
	}
	
	public function multiple($a,$b){
		return $a*$b;
		
	}
	
	public function sub($a,$b){
		return $a-$b;
	}
	
	public function divide($a,$b){
		return $a/$b;
	}
	
	public function greate(){
		return "Hello, my name is " . $this->firstname . " " . $this->lastname . " Age is " . $this->age . ". Nice to meet you! :-)";
	}
	
	
}

$obj = new Foo();
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;
echo '<br />';
echo "Sum of Two number :".$obj->sum('5','5');
echo '<br />';
echo "Multiple of Two number :".$obj->multiple('5','5');
echo '<br />';
echo "Sub of Two number :".$obj->sub('5','5');
echo '<br />';
echo "Divide of Two number :".$obj->divide('5','5');
echo '<br />';
echo '<br />';
echo $obj->greate(); 


echo '<br />';
echo '<br />';
class test {

    private $str = NULL;

    public function newTest(){

        $this->str .= 'Private';
        return $this;
    }
    public function bigTest(){

        return $this->str . ' Method';
    }
    public function smallTest($a,$b){

        return $this->str . ($a+$b);
    }
    public function scoreTest(){

        return $this->str . 'Sum to value';
    }
}

$test = new test;

echo $test->newTest()->bigTest();
echo '<br />';
echo '<br />'.$test->smallTest('2','2');
echo '<br />';
echo '<br />'.$test->scoreTest();


echo '<br />';
echo '<br />';
class SimpleClass
{                       
    function getArray( $a ) {       
        usort( $a, array( $this, 'nameSort' ) ); // pass $this for scope
        return $a;
    }                 

    private function nameSort( $a, $b )
    {
        return strcmp( $a, $b );
    }              

}

$a = ['g','a','v']; 
$sc = new SimpleClass();
print_r( $sc->getArray( $a ) );
?>