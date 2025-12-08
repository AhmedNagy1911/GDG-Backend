<?php
/* التكليف 01*/
$name="Elzero Courses";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $name ; ?>">
    <title>Welcome To <?php echo $name ; ?></title>
  </head>
  <body>
    <h1><?php echo $name ; ?></h1>
    <p>Here In $<?php echo $name ; ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div>$name Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $name ; ?></footer>
  </body>
</html>
<?php 
echo '<br>';
$name = "elzero";
$$name = "Web";
/*2------------------------*/
echo $$name;
echo '<br>';
echo   $elzero;
echo '<br>';
echo ${$name};
echo '<br>';
echo ${"elzero"};
?>

<?php 
/* 3---------------------*/
echo '<br>';
$a = 200;
$b = &$a;
$a = 100;
echo $b; // 100
?>
<?php  
/*4-------------*/
echo '<br>';
echo '<br>';
echo $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo $_SERVER['SERVER_NAME'] . "<br>";
echo $_SERVER['SystemRoot'] . "<br>";
echo $_SERVER['OPENSSL_CONF'] . "<br>";
/* 5-------------------------*/
/* 
    - PHP_VERSION
    - PHP_OS_FAMILY
    - PHP_INT_MAX
    - DEFAULT_INCLUDE_PATH
    - __LINE__
    - __FILE__
    - __DIR__
    - break
    - clone
*/
/*6------------------------*/
  echo '<br>';
  echo __LINE__;
  echo '<br>';
  echo __FILE__;
  echo '<br>';
  echo __DIR__;

?>
