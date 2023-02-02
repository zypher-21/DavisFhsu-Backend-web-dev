<?php
print_r($_GET);
print_r($_POST);


$legal_age = 18;


if (isset($_GET['first']) && ($_GET['last'])) {
    $firstName = htmlspecialchars($_GET['first']);
    $lastName = htmlspecialchars($_GET['last']);
} 
else 
{
    echo "Names are not set!";
}

if (isset($_GET['age'])){
    $age = ($_GET['age']);
}
else
{
    echo "Age is not set!";
}



$firstName = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_SPECIAL_CHARS);
$lastName = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_NUMBER_INT);

echo "Hello, my name is " . $firstName . " " . $lastName . "."
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
  .header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 50px;
    background-color: black;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
  }
</style>

<div 
class="header">
</div>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Parameters</title>
    <link rel="stylesheet" href="/Get_parameter_assignment/main.css">
</head>

<body>
<h1>Participant Information</h1>
<p>"Today's date is: " <?php echo date("F j, Y"); ?></p>
    <form action="<?php echo $_SERVER['PHP_SELF']
                    //The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script. 
                    ?> ">
        <label for="first">First Name:</label>
        <input type="text" id="first" name="first" autocomplete="off">
        <label for="last">Last Name:</label>
        <input type="text" id="last" name="last" autocomplete="off">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" autocomplete="off">
        
        <div>
            <button type="submit">Submit</button>
            
        </div>
    </form>
    <p> 
        <?php 
        if (isset($_GET['first']) && ($_GET['last'])) 
             echo "Hello, my name is " . $firstName . " " . $lastName . "."
        
      ?>
      <br>
      <?php
        if (isset($_GET['age']))
            echo "I am " . $age . " years old!"
      ?>
      <br>
      <?php
        if (isset($_GET['age'])){
            if ($age >= $legal_age){
                echo "I am old enough to vote in the United States!";
            }
            else
            {
                echo "I am not old enough to vote in the United States!";
            }   
        }
    ?>
    </P>
    


    
</body>
</html>