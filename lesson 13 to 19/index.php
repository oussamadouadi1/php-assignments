<!-- Assignment 01 -->
<?php
$content ="Elzero Courses";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content= <?php echo $content ?>>
        <title>Welcome To <?php echo $content ?></title>
    </head>
    <body>
        <h1><?php echo $content ?></h1>
    <p>Here In <?php echo $content ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $content ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $content ?></footer>
</body>
</html>

<!-- Assignment 02 -->
<?php
$name = "elzero";
$$name = "Web";
echo "<br>";
echo "<br>";
// Method 01
echo $$name;
echo "<br>";

// Method 02
echo $elzero;
echo "<br>";
// Method 03
echo "${$name}";
echo "<br>";
// Method 04
echo "{$$name}";
echo "<br>";
// Method 05
echo "{$elzero}";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>
<!-- Assignment 03 -->
<?php
$a = 200; 
$b = &$a; // $b = 200 ---> adding & allows us to assign the variable not just its value
$a = 100; // $a = 100

echo $b;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
<!-- Assignment 04 -->

<?php
echo "This is the document root";
echo "<br>";
echo $_SERVER ['DOCUMENT_ROOT'];
echo "<br>";
echo "<br>";
echo "This is the server name";
echo "<br>";
echo $_SERVER ['SERVER_NAME'];
echo "<br>";
echo "<br>";
echo "This is the server root";
echo "<br>";
echo $_SERVER['SystemRoot'];
echo "<br>";
echo "<br>";
echo "This is the Open SSL Configuration";
echo "<br>";
echo $_SERVER['OPENSSL_CONF'];
echo "<br>";
echo "<br>";
?>
<!-- Assignment 05 -->
<?php
/*
The Preserved zords in php are words like:

1- function 
2- for 
3- while
4- break
5- const
6- if 
7- echo
8- get
9- post
10- return


*/
?>


<!-- Assignment 06 -->
<?php
echo "<br>";
echo "<br>";
echo __LINE__;
echo "<br>";
echo __DIR__;
echo "<br>";
echo __FILE__;

?>
