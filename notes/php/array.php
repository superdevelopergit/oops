``````````````````````````````Array```````````````````````````````````
1)array_change_key_case()		=	Changes all keys in an array to lowercase or uppercase.
Syntax				=	array_change_key_case(array,case);
Example				=	 <?php
						$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
						print_r(array_change_key_case($age,CASE_UPPER));
					?>       
Output				=	Array ( [PETER] => 35 [BEN] => 37 [JOE] => 43 ) ;



2)array_chunk()			=	Splits an array into chunks of arrays.
Syntax				=	array_chunk(array,size,preserve_key); 
Example				=	<?php
						$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
						print_r(array_chunk($age,2,true));
					?>
Output				=	Array ( [0] => Array ( [Peter] => 35 [Ben] => 37 ) [1] => Array ( [Joe] => 43 [Harry] => 50 ) );



3)array_column()			=	Returns the values from a single column in the input array.
Syntax				=	array_column(array,column_key,index_key); 
Example				=	<?php
						// An array that represents a possible record set returned from a database
						$a = array(
  							array(
    								'id' => 5698,
    								'first_name' => 'Peter',
    								'last_name' => 'Griffin',
								  ),
  							array(
   								 'id' => 4767,
    								'first_name' => 'Ben',
    								'last_name' => 'Smith',
 								 ),
							  array(
   								 'id' => 3809,
    								'first_name' => 'Joe',
    								'last_name' => 'Doe',
 								 )
						);

						$last_names = array_column($a, 'last_name', 'id');
						print_r($last_names);
					?> 

Output				=	Array
						(
  							[5698] => Griffin
 							 [4767] => Smith
  							[3809] => Doe
						)


4)array_combine()			=		Creates an array by using the elements from one "keys" array and one "values" array
Syntax				=		array_combine(keys,values); 
Exapmple				=		<?php
							$fname=array("Peter","Ben","Joe");
							$age=array("35","37","43");
							$c=array_combine($fname,$age);
							print_r($c);
						?>	
Output				=		Array ( [Peter] => 35 [Ben] => 37 [Joe] => 43 ) ;

5)array_count_values()		=		Counts all the values of an array.
Syntax				=		array_count_values(array).
Exampe				=		<?php
							$a=array("A","Cat","Dog","A","Dog");
							print_r(array_count_values($a));
						?> 	
Output				=		Array ( [A] => 2 [Cat] => 1 [Dog] => 2 ) ;


6)array_diff()			=		Compare arrays, and returns the differences (compare values only).
Syntax				=		<?php
							$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
							$a2=array("e"=>"red","f"=>"green","g"=>"blue");

							$result=array_diff($a1,$a2);
							print_r($result);
						?> 
Output				=		Array ( [d] => yellow );

7)array_diff_assoc()			=		Compare arrays, and returns the differences (compare keys and values).
Syntax				=		<?php
							$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
							$a2=array("a"=>"red","b"=>"green","c"=>"blue");

							$result=array_diff_assoc($a1,$a2);
							print_r($result);
						?>
Output				=		Array ( [d] => yellow );

8)array_diff_key()			=		Compare arrays, and returns the differences (compare keys only).
Syntax				=		<?php
Example				=			$a1=array("a"=>"red","b"=>"green","c"=>"blue");
							$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

							$result=array_diff_key($a1,$a2);
							print_r($result);
						?> 
Output				=		Array ( [b] => green );


9)array_diff_uassoc()		=		Compare arrays, and returns the differences (compare keys and values, using a user-defined key comparison function).
Syntax				=		array_diff_uassoc(array1,array2,array3...,myfunction);
Example				=		<?php
							function myfunction($a,$b)
							{
								if ($a===$b)
  								{
  									return 0;
  								}
  								return ($a>$b)?1:-1;
							}

							$a1=array("a"=>"red","b"=>"green","c"=>"blue");
							$a2=array("d"=>"red","b"=>"green","e"=>"blue");

							$result=array_diff_uassoc($a1,$a2,"myfunction");
							print_r($result);
						?>

Output				=		Array ( [a] => red [c] => blue ) ;


10)array_diff_ukey()		=		Compare arrays, and returns the differences (compare keys only, using a user-defined key comparison function).
Syntax				=		array_diff_ukey(array1,array2,array3...,myfunction);

11)array_fill()			=		Fills an array with values
Syntax				=		array_fill(index,number,value);
Example				=		<?php
							$a1=array_fill(3,4,"blue");
							$b1=array_fill(0,1,"red");
							print_r($a1);
							echo "<br>";
							print_r($b1);
						?>
Output				=		Array ( [3] => blue [4] => blue [5] => blue [6] => blue )
						Array ( [0] => red )



12)array_fill_keys()			=		Fills an array with values, specifying keys.
Syntax				=		
Example
						<?php
							$keys=array("a","b","c","d");
							$a1=array_fill_keys($keys,"blue");
							print_r($a1);
						?> 
Output				=		Array ( [a] => blue [b] => blue [c] => blue [d] => blue );


13)array_filter()			=		Filters the values of an array using a callback function.
Syntax				=		array_filter(array,callbackfunction);
Example				=		<?php
							function test_odd($var)
							{
								return($var & 1);
							}

							$a1=array("a","b",2,3,4);
							print_r(array_filter($a1,"test_odd"));
						?>
Output				=		Array ( [3] => 3 ) ;

14)array_flip()			=		Flips/Exchanges all keys with their associated values in an array.
Syntax				=		array_flip(array);
Example				=		<?php
							$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
							$result=array_flip($a1);
							print_r($result);
						?>
Output				=		Array ( [red] => a [green] => b [blue] => c [yellow] => d ) ;


15)array_intersect()			=		Compare arrays, and returns the matches (compare values only).
Syntax				=		array_intersect(array1,array2,array3...);
Example				=		<?php
							$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
							$a2=array("e"=>"red","f"=>"black","g"=>"purple");
							$a3=array("a"=>"red","b"=>"black","h"=>"yellow");

							$result=array_intersect($a1,$a2,$a3);
							print_r($result);
						?>
Output				=		Array ( [a] => red ) 












