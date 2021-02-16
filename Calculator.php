<?php 

require_once 'autoload.php';

class Calculation {
   
   public function calculate($num1, $num2, $num3) 
   {
      $operator1 = $_POST['operator1'];
      $operator2 = $_POST['operator2'];
      if ($operator1 === '/') {
         $division = new Division($num1, $num2, $num3, $operator2);
         $result = $division->divide();
         return $result;
      }
      if ($operator1 === '*') {
         $multiply = new Multiplication($num1, $num2, $num3, $operator2);
         $result = $multiply->multiply();
         return $result;
      }
      if ($operator1 == '+') {
         $addition = new Addition($num1, $num2, $num3, $operator2);
         $result = $addition->add();
         return $result;
      } 
      if ($operator1 === '-') {
         $subtraction = new Subtraction($num1, $num2, $num3, $operator2);
         return $subtraction->subtract();

      }
   }
}

// Create an instance
$num1 = $_POST['first_num'];
$num2 = $_POST['second_num'];
$num3 = $_POST['third_num'];
if (empty($num1) or empty($num2) or empty($num3)) {
   echo 'All fields are required';
} else {
   $calculation = new Calculation;
   $result = $calculation->calculate($num1, $num2, $num3);
   echo $result;
}


