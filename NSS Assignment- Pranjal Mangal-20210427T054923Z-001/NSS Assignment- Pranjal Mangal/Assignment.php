

<html>
<head>
  <style>
  .home {
  	font-size:21px;
    position: relative;
    background-color: Orange;
  }

  .center {
    position: absolute;
    left: 0;
    top: 40%;
    width: 100%;
    text-align: center;
    font-size: 30px;
    font-family:"Comic Sans MS";
    color:white;
    letter-spacing:2px;
  }
  .topnav {
	font-size:20px;
  overflow: hidden;
  background-color: white;
  color:grey;
  width: 100%;
}

/* Style the topnav links */
.topnav a {
	font-size:20px;
  float: left;
  display: block;
  color: grey;
  text-align: center;
   background-color: white;
  padding: 14px 16px;
  text-decoration: none;
  border-radius:00px;

}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;}
.calculator
{

  background-color: yellow; /* Used if the image is unavailable */
font-family: Comic Sans MS;

  text-align: center;
}
.prime
{
  background-color: rgb(100,80,20);
  text-align: center;
}
.factorial
{
  background-color: grey; /* Used if the image is unavailable */
font-family: Comic Sans MS;

  text-align: center;
}
  </style>
<div class="home">
  <img src="nss.jpg" alt="NSS Poster" width="100" height="100">
  <div class="center">
<B>NSS Assignment</B>
</div>
</div>
<div class="topnav">

  <a href="#calculator" style="width:410px";>Calculator</a>

  <center><a href="#prime" style="width:410px";>Prime Number Finder</a></center>
  <a href="#factorial" style="width:410px";>Factorial Calculator</a>

</div>
<body>
  <p id="calculator"></p>
<div class="calculator">
<h2 style="color:indigo;">Calculator</h2>

<form action="Assignment.php" method="get">
  <input type="number" name="first" value="" placeholder="First Number">
  <select name="ch">
    <option>+</option>
    <option>-</option>
    <option>*</option>
    <option>/</option>
  </select>
<input type="number" name="second" value="" placeholder="Second Number">


<br><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
$num1 = '';
if( isset( $_GET['first'])) {
    $num1 = $_GET['first'];
}
$num2 = '';
if( isset( $_GET['second'])) {
    $num2 = $_GET['second'];
}
$operator = '';
if( isset( $_GET['ch'])) {
    $operator = $_GET['ch'];
}
switch($operator)
{
  case '+': echo $num1 + $num2; break;
  case '-': echo $num1 - $num2; break;
  case '*': echo $num1 * $num2; break;
  case '/': echo $num1 / $num2; break;
}
?>
</div>
<p id="prime"></p>
<div class="prime">
<h2 style="color:indigo;">Prime Number Finder</h2>

<form action="Assignment.php" method="get">
<input type="number" name="prime_number" value="" placeholder="Number">
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
function prime_finder($num)
{
  for ($i=2; $i<=$num/2 ; $i++)
    {
      if($num%$i==0)
      {
        break;
      }
      echo "The number is a prime number.";
      return;
  }
    if($num==2||$num==3)
    {
      echo "The number is a prime number";
      return;
    }
    else{
    echo "The number is not a prime number";
    return;
  }
}
$n = 0;
if( isset( $_GET['prime_number'])) {
    $n = $_GET['prime_number'];
}
  prime_finder($n);

?>
</div>
<p id="factorial"></p>
<div class="factorial">
<h2 style="color:indigo;">Factorial Calculator</h2>

<form action="Assignment.php" method="get">
<input type="number" name="fact" value="" placeholder="Number">
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
function factorial($num)
{
  for ($i=$num-1; $i>=1 ; $i--)
    {
      $num=$num*$i;
    }
    echo "The factorial of the entered number is $num ";
}
$n = 0;
if( isset( $_GET['fact'])) {
    $n = $_GET['fact'];
}
  factorial($n);

?>
</div>
</body>
</html>
</html>
