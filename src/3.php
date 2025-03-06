<?php
  // Get a random number between 1 and 10
  $randomNumber = rand(1, 10);

  // Check if the number is even or odd
  if ($randomNumber % 2 == 0) {
    echo "The number is even";
  } else {
    echo "The number is odd";
  }
?>