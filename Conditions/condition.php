<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Condition</title>
  </head>
  <body>
    <h1 class="title">Les conditions</h1>
    <h3 class="Exo">Exercice 1</h3>
    <p>Create a variable age and initialize it with a value.
    If age is superior or equal to 18, show You are an adult. Else, show You are minor.
  </p>

  <?php
  $age = 20;

  if($age >= 18){
      echo "$age You are an adult.";
  } else{
      echo "$age You are a minor.";
  }
  ?>

    <h3 class="Exo">Exercice 2</h3>
    <p>Create a variable IsEasy of type boolean and initialize it with a value.</p>

    <p>Show It's easy!! if this is the case. If not, show It's difficult !!!.</p>
    <?php

    $IsEasy= 4;
    if ($IsEasy <= 5) {
      echo "$IsEasy It's Easy!";
    } else {
      echo "$IsEasy It's difficult!!!!";
    }

     ?>

    <p>Bonus : Write it in 2 different ways.</p>

    <h3 class="Exo">Exercice 3</h3>
    <p>Create two variables age and gender. The variable gender is able to have these values :</p>
    <ul>
      <li>Man</li>
      <li>Woman</li>
    </ul>

  <p>In function of the age and gender, show one of the following messages :
</p>
    <ul>
      <li>You're a man and you're an adult</li>
      <li>You're a man and you're a minor</li>
      <li>You're a woman and you're an adult</li>
      <li>You're a woman and you're a minor</li>
      <li>Cover all cases.</li>
    </ul>

    <?php
    $age= 18;
    $gender= array('Man','Woman');
    if (($age >=18) && ($gender == "Man")){
      echo "You're a man and you're an adult";
    }elseif (($age <18) && ($gender == "Man")) {
      echo "You're a man and you're a minor";
    }elseif (($age >=18) && ($gender == "Woman")) {
      echo "You're a Woman and you're a major";
    }elseif (($age <18) && ($gender == "Woman")) {
      echo "You're a Woman and you're a minor";
    }

     ?>

    <h3 class="Exo">Exercice 4</h3>
    <p>The Richter magnitude scale is a way to measure the magnitude of an earthquake. This scale goes from 1 to 9.</p>

    <p>Create a variable magnitude. In function a of the value of magnitude, show one of following messages</p>
    <?php
$magnitude = 8;
switch($magnitude){
    case "1":
        echo "Microearthquakes, not felt, or felt rarely. Recorded by seismographs.";
        break;
    case "2":
        echo "Felt slightly by some people. No damage to buildings.";
        break;
    case "3":
        echo "Often felt by people, but very rarely causes damage. Shaking of indoor objects can be noticeable.";
        break;
    case "4":
        echo "Noticeable shaking of indoor objects and rattling noises. Felt by most people in the affected area. Slightly felt outside. Generally causes none to minimal damage. Moderate to significant damage very unlikely. Some objects may fall off shelves or be knocked over.";
        break;
    case "5":
        echo "Can cause damage of varying severity to poorly constructed buildings. At most, none to slight damage to all other buildings. Felt by everyone.";
        break;
    case "6":
        echo "Damage to a moderate number of well-built structures in populated areas. Earthquake-resistant structures survive with slight to moderate damage. Poorly designed structures receive moderate to severe damage. Felt in wider areas; up to hundreds of miles/kilometers from the epicenter. Strong to violent shaking in epicentral area.";
        break;
    case "7":
        echo "Causes damage to most buildings, some to partially or completely collapse or receive severe damage. Well-designed structures are likely to receive damage. Felt across great distances with major damage mostly limited to 250 km from epicenter.";
        break;
    default:
    case "8":
        echo "Major damage to buildings, structures likely to be destroyed. Will cause moderate to heavy damage to sturdy or earthquake-resistant buildings. Damaging in large areas. Felt in extremely large regions.";
        break;
    default:
    case "9":
        echo "At or near total destruction – severe damage or collapse to all buildings. Heavy damage and shaking extends to distant locations. Permanent changes in ground topography.";
        break;
    default:
        echo "No information available for that day.";
        break;
}
?>

<h3 class="Exo">Exercice 5</h3>
<p>Translate this code using 'if' and 'else' :</p>

<p>
  echo ($myVariable != 'Man') ? 'She\'s a developper' !!!' : 'He\'s a developper !!!';
</p>

<?php
$myVariable = "W";
if ($myVariable != 'Man') {
echo "She's a developper' !!!";
}else {
  echo "He's a developper !!!";
}

?>

<h3 class="Exo">Exercice 6 </h3>

<p>Translate this code using 'if' and 'else' :</p>

<p>
  echo ($myAge >= 18) ? 'You are an adult' : 'You are not an adult';
</p>

<?php
$myAge = 26;
if ($myAge >= 18) {
  echo "You are an adult";
}else {
  echo "You are not an adult";
} ?>

<h3 class="Exo">Exercice 7</h3>
<p>Translate this code using 'if' and 'else' :</p>

<p> echo ($myVariable == false) ? 'It\'s not good' !!!' : 'It\'s' ok !!';</p>

<?php
$yVariable = "Mr Eazi";

if ($myVariable == false) {
  echo "It's not good' !!!";
}else {
echo "It's' ok !!";
}
 ?>

<h3 class="Exo">Exercice 8</h3>
<p>Translate this code using 'if' and 'else' :</p>

<p>echo ($myVariable) ? 'It\'s ok !!' : 'It\'s not good !!!';</p>



  </body>
</html>
