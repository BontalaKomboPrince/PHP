<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo</title>
  </head>
  <body>
    <h1 class="title">Variables</h1>
    <h4 class="Exo">Exercice 1</h4>
    <p>Create a variable name and initialize it with a value of your choice
        <br> Show its content.</p>

    <?php
    // Declaring variables
    $name = "In the begining there was blackness ";
    $level = " the level was over ";
    $lvlup = 90000;

    // Displaying variables value
    echo $name;  // Output: Hello World!
    echo $level; // Output: 10
    echo $lvlup; // Output: 90000
    ?>

    <h4 class="Exo">Exercice 2</h4>
    <p>Create three variables name, firstname and age and initialize them with values of your choice. <br> age is an integer. <br>
    Show its content.</p>
    <br>

    <?php
    //DEclaring the variables values
    $nom = "Bold ";
    $prenom = " Mama Fuckaaaaz ";
    $age = " Over 900000 ";

    //Displaying the variable on the screen
    echo $nom; //display Bold
    echo $prenom; //display Mama Fuckaaaaz
    echo $age; //display Over 90000
     ?>

     <h4 class="Exo">Exercice 3 </h4>
     <p>Create a variable km. Initialize it to 1.
       <br> Show its content. <br>
       <?php

       //Declaring the var km to 1
       $km = 1;

       //Displaying the var km on the screan

       echo $km;
        ?>
     <br> Change its value to 3.
     <br> Show its content. <br>
     <?php

     //Declaring the var km to 3
     $km = 3;

     //Displaying the var km on the screan
     echo $km;
      ?>
     <br>  Change its value to 125.
     <br>Show its content.</p>
     <?php
     //Declaring the var km to 125
     $km = 125;
     //Displaying the var km on the screan
     echo $km;
      ?>

      <h4 class="Exo">Exercice 4 </h4>
    <p>Create a variable of type string, a variable of type int, a variable of type float, a variable of type boolean and initialize them with values of your choice.
      <br>
    Show them.</p>

     <h4 class="Exo">Exercice 5</h4>
    <p>Create a variable of type int.</p>
    <p>Leave it empty.</p>
    <p>Show its value.</p>
    <p>Give it a value and show it.</p>

    <?php
    $i = NULL;//Defining the variable i as NULL

    echo $i; //Displaying the variable
    $i = 12345678910; // Defining the variable as 12345678910

    echo $i; //Displaying the varialbe

    ?>



    <h4 class="Exo"> Exercice 6</h4>
    <p>Create a variable name and initialize it with a value of your choice.
    <br>Show : "Hi" + name + ", how are you ?".</p>
    <?php

    $name2= "Kombo";//Defining the variable
    echo "Hi  $name2  , how are you?"; //Displaying the var inside a string

    ?>


  <h4 class="Exo"> Exercice 7</h4>
  <p>Create three variables name, firstname and age and initialize them with values of your choice. Age is of type integer.<br>
  Show : "Hi" + name + firstname + ", you are" + age + "year old".</p>
  <?php
  $nama = KBP;
  $fn = BPL;
  $ag = 30;

  echo "Hi $nama $fn , you are  $ag  year old";

   ?>


  <h4 class="Exo"> Exercice 8</h4>
<p>Create 3 variables.</p>

<p>For the first variable, make it equal to the result of 3 + 4.</p>
<p>For the second variable, make it equal to the result of 5 * 20.</p>
<p>For the third variable, make it equal to the result of 45 / 5.</p>
<p>Show the contents of the variables.</p>
<?php

$x= 7;
$y= 100;
$z= 9;
echo "$x is equal to 3 + 4 <br>" ;
echo "$y is equal to 5 * 20 <br>" ;
echo "$z is equal to 45 / 5 <br>" ;
 ?>
  </body>
</html>
