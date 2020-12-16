<!-- Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument. -->

#<?php
#	function factorial($n)
#	{
# 		if($n ==0)
#    	{
#	   		return 1;
#    	}
#  		else 
#    	{	
#	   		return $n * factorial($n-1);
#    	}
#	}
#	print_r(factorial(4)."\n");
#?> 


<!-- ============================================================================================================ -->

#Write a function to check whether a number is prime or not

<?php
function IsPrime($n)
{
	 for($x=2; $x<$n; $x++)
  	{
      	if($n %$x ==0)
	    {
		   return 0;
		}
    }
  	return 1;
}
$a = IsPrime(11);
if ($a==0)
echo 'This is not a Prime Number.....'."\n";
else
echo 'This is a Prime Number..'."\n";
?>