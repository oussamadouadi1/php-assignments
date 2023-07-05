<?php
// *** Assignment 01 ***
$a = 100;
$b = 200;
$c = 100;

if($b > $a && $a === $c && ($a + $c) === $b) {
    echo "Yes";
}

echo "<br>";
echo "<br>";
echo "<br>";

// *** Assignment 02 ***
// Test Case 1
$a = 200;
$b = 200;
$c = 100;

if ($a > $b) {
    echo "A Is Larger Than B";
} elseif ($a > $c) {
    echo "A Is Larger Than C";
} else {
    echo "A Is Not Larger Than B Or C";
}

echo "<br>";
echo "<br>";
echo "<br>";
?>
<!-- *** Assignment 03 *** -->
<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>
<?php
echo "<br>";
echo "<br>";
echo "<br>";
$admins = ["Osama", "Ahmed", "Sayed"];
$user = $_POST['user'];
// Conferming the request Method
$key = array_search($user, $admins);
if($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($key !== false) {
        echo "The Request Method is POST and username is ". $user;
        echo "<br>";
        echo "This Username ". $user .  " Is Admin";
    } else {
        echo "The Request Method is POST and username is ". $user;
        echo "<br>";
        echo "This Username ". $user .  " Is Not an Admin";
    }
    
}


?>

<?php
// *** Assignment 04 ***
$a = 30;
$b = 20;
$c = 10;

 echo  $a + $b === $c ? "A + B = C" :
 ($a + $c === $b ? "A + C = B" :
 ($b + $c === $a ?  "B + C = A" 
 : "The End" ));


 $admins = ["Osama", "Ahmed", "Sayed"];
@$user =  $_POST['user'];

$key = array_search($user, $admins); 
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($key !== false) {
        echo "The Request Method is Post and username is ". $user;
        echo "<br>";
        echo "This username ". $user. " Is Admin";

    } else {
        echo "The Request Method is Post and username is ". $user;

    }
}


 echo "<br>";
echo "<br>";
echo "<br>";

$a = 30;
$b = 20;
$c = 10;

 echo $a + $b === $c ? "A + B = C" : ($a + $c === $b ?  "A + C = B" : ($b + $c === $a ?  "B + C = A" : "The End" ));

 echo "<br>";
 echo "<br>";
 echo "<br>"; 

 $name = "Osama";
 $age = 40;
 $country = "Egypt";
 
 if ($age > 18 || gettype($name) === "string" || $country === "Egypt") {
   echo "The Age Is Good To Go<br>";
   echo "The Name Is Good To Go<br>";
   echo "The Country Is Good To Go<br>";
     }
     
 echo "<br>";
 echo "<br>";
 echo "<br>"; 
 $genre = "Hack And Slash";

 switch ($genre) {

    case ('RPG'):   
    echo "I Recommend Ys Games";
    break;
    case ('Hack And Slash'):
    echo "I Recommend Castlevania Games";
    break;
    case ("FPS"):
    echo "I Recommend Uncharted Games";
    break;
    case ("Platform"):
    echo "I Recommend Megaman Games";
    break;
    case ("Puzzle"):
    echo "I Recommend Megaman Games";
    break;
    default;
    echo "I Recommend Shadow Of Mordor And Shadow Of War";
    break;
}

echo "<br>";
echo "<br>";
echo "<br>"; 

$num_one = 23;
$num_two = 5;
$op = "/";

if($op == "+") {
    echo $num_one + $num_two;
} elseif ($op == "-") {
    echo $num_one - $num_two;
} elseif($op == "*") {
    echo $num_one * $num_two;
} elseif($op == "/") {
    echo (int) ($num_one / $num_two);
    echo"<br>";
    echo $num_one % $num_two;
} else {
    echo "Unknown Operation";
}

echo "<br>";
echo "<br>";
echo "<br>";

$day = "Thu";




if($day == "Sat" || $day == "Sun" || $day == "Mon"): 
    echo "We Are Open All The Day";
elseif($day == "Tue" || $day == "Wed") :
    echo "We Are Open From 08:12";
elseif($day =="Thu" || $day == "Fri" ) :
        echo "We Are Closed";
else:
    echo "Unknown Day";

 endif;

    
?>

?>
