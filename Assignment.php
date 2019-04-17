<form method="post" action="">
    <label for='numb'>Enter the number upto which prime table is to be generated
    <input type='text' name='numb' id='numb'>
        <input type='Submit' value='Generate Table'>
    </label>
    
</form>

<?php

// Print prime numbers

// A number is said to be prime if it is 
// Divisible by only 1 and itself
//We will test a number to be a prime no by dividing from all numbers less than the given number
// If we get it to be divisible by more than two numbers, i.e., 1 and itself, then it is not prime

class PrimeTable{

    
    //Test if number is prime
    
    function isPrime($number){
    
        $count=0;
    
        for($i=1;$i <=$number;$i++ ){
        
        
        $rem= $number%$i;
         if($rem==0){
            $count++;
            }
   
        }
            if($count==2){
            return true;
            }else {return false;}
    
        }


   //Get the table of primes product upto given number
    
     function getPrimeTable($num){
        echo "<table>";
        $count=$num;
         $headTd=$num;
         
    //create table header
         echo "<tr><td>&nbsp;</td>";
          for($k=2;$headTd>0;$k++){
               if($this->isPrime($k)){
              echo "<td><u>".$k."</u></td>";
                   $headTd--;
          }
          }
              echo "</tr>";
         
         //Start main table
         
        for($i=2;$count>0;$i++){
        echo "<tr>";
    
    
        if($this->isPrime($i)){
        
       echo "<td>".$i."&nbsp;|</td>";
        $count1=$num;
    for($j=2;$count1>0;$j++){
        if($this->isPrime($j)){
            
        echo "<td>".$i*$j."</td>";
        $count1--;
        }
    }
          $count--;
}
    echo "</tr>";
  
    
}
  echo "</table>"; 
    
}
}






//Get prime table
if(isset($_POST['numb'])){
//Instantiate primeTable class
$primeTable = new primeTable();
$num=$_POST['numb'];
$primeTable->getPrimeTable($num);
}

?>