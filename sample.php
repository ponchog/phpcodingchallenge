<?php
/**
 *  This sample a sample program that gets the sum of all numbers cointained in the given number
 **/


// Get STDIN, strip whitespace and newlines, 
function get_input($upper = false) {
    // Return filtered STDIN input
    if($upper == TRUE) {
        return strtoupper(trim(fgets(STDIN)));
    } else {
        return trim(fgets(STDIN));
    }
}

echo "Sample code for Programming Challenge\n";

// The loop!
do {
    // Show the menu options    
    echo "Enter a number: ";

    // Get the input from user
    $input = get_input(true);
    $result = 0;

    if(is_numeric($input)){
    	for ($i=1; $i <= $input; $i++) { 
    		$result = $result + $i;
    	}
	    
	    echo "The sum of all the numbers is: " . $result . "\n";    	
    }

// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Good Bye!";

// Exit with 0 errors
exit(0);

?>	
