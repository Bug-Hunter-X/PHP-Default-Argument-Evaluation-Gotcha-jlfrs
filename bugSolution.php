function my_function($arg1, $arg2 = null) {
  if ($arg2 === null) {
    $arg2 = 'default';
  } else {
    // If a value is passed, copy it to prevent modification to the original. 
    $arg2 = $arg2;
  }
  // ... rest of the function
}