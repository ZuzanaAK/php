<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $characterName = "Tom";
    $characterAge = "24";

    

      /*echo("Hello World");*/
      echo "<h1>My Site</h1>"; 
      echo "<hr>";
      echo "<p>My fab day</p>";
      echo "<p>Your name is $characterName</p>";

    $characterName = "Mike";

      echo "<p>Your age is $characterAge</p>";
      echo "<p>Your name is now $characterName</p>";

    $phrase = "to be or not to be";
    $age = 30;

    echo "my text";
    echo "</br>";

    echo strtolower($characterName);
    echo "</br>";
    echo strtolower($characterName[0]);
    echo "</br>";
    $phrase = "Giraffe Academy";
    // $phrase[0] = "B";
    // echo $phrase;
    echo "</br>";

    /*this replace Giraffe with Panda in the phrase*/
    echo str_replace("Giraffe", "Panda", $phrase);
    
    echo "</br>";
    /*substr gets the string that begins with the character number 8 */
    echo substr($phrase, 8); /*prints out only Academy*/
    echo "</br>";
     /*substr gets the string that begins with the character number 8 and 3 characters*/
    echo substr($phrase, 8, 3); /*prints out only Aca*/

    echo "</br>";
    echo 40-15;
    echo "</br>";

    $num=10;
    $num++;
    echo $num;

    echo "</br>";

    $num+=2;
    echo $num;
    echo "</br>";

    /*functions*/

    echo abs(-100);
    echo "</br>";
    echo pow(2,4);
    echo "</br>";
    echo sqrt(144);
    echo "</br>";
    echo max(2, 10);
    echo "</br>";
    echo min(2, 10);
    echo "</br>";
    echo round(3.2);
    echo "</br>";
    echo ceil(3.2); /*always rounds up*/
    echo "</br>";
    echo floor(3.2);/*always rounds down*/
    echo "</br>";
    
    ?>

    <h4>Enter you name and age</h4>

    <form action="site.php" method="post"> 
        Name: <input type="text" name="username">
        </br>
        Age: <input type="number" name="age">
        <input type="submit">
    </form>

    </br>

    Your name is <?php echo $_POST["username"] ?>
    </br>
    Your name is <?php echo $_POST["age"] ?>

    <h4>Calculator</h4>

    <form action="site.php" method="get"> 
        Enter Number: <input type="number" name="num1">
        </br>
        Enter Number: <input type="number" name="num2">
        <input type="submit">
    </form>
    </br>

    Answer <?php echo $_GET["num1"] + $_GET["num2"]?>

    <form action="site.php" method="get"> 
        color: <input type="text" name="color">
        </br>
        plural noun: <input type="text" name="pluralNoun">
        </br>
        celebrity: <input type="text" name="celebrity">
        <input type="submit">
    </form>
    </br>


    <?php 
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];

        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>"
    ?>

    <?php
        $friends = array("Kevin", "Oscar", "Lucas", "Jimmy");
        $friends[2] = "Sam";
        echo $friends[2];
        echo "</br>";
        $friends[4] = "Julie";
        echo $friends[4];
    ?>

    </br>
    </br>

    <form action="site.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"></br>
        Bananas: <input type="checkbox" name="fruits[]" value="bananas"></br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"></br>
        <input type="submit">
    </form>

    <?php
      $fruits = $_POST["fruits"];
        echo $fruits[1]
    ?>

    </br>
    </br>

    <form action="site.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>

    <?php 
        /*array with key value pairs*/

        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");

        // $grades["Jim"]="F";
        // echo $grades["Oscar"];
        // echo "</br>";
        // echo count($grades);

        echo $grades[$_POST["student"]];
  
    ?>

    </br>
    </br>

    <!--***************FUNCTIONS*************** -->

    <?php 
       function sayHi01(){
           echo "Hello, Life is Beautiful!";
       } 

       sayHi01();

       echo "</br>";
       echo "</br>";

       function sayHi02($name, $age){
        echo "Hello $name, the sun is shining! Your age is $age";
    } 

    sayHi02("Mike", 40);
    echo "</br>";
    sayHi02("Oscar", 12);
    echo "</br>";
    sayHi02("Mindy", 86);

    ?>

    </br>
    </br>

    <?php
        // 2^3 -> 2*2*2

        function cube($num){
            echo "Hello";
            return $num*$num*$num;
        }

        echo cube(4);
    ?>

    </br>
    </br>
    
    <?php

        function greet($name) {
        return "Hello, $name how are you doing today?";
        };

        echo greet("Rian");
    ?>

    </br>
    </br>

    <!--***************IF STATEMENTS*************** -->

    <?php
    
        $isMale = false;
        $isTall = false;
        if ($isMale && $isTall) {
            echo "You are a tall male";
        } elseif ($isMale && !$isTall) {
            echo "You are a short male";
        } elseif (!$isMale && $isTall) {
            echo "You are not male but you are tall";
        } else {
            echo "You are not male and you are not tall";
        }
    
        /* || is or like in JavaScript*/

    ?>

    </br>
    </br>

    <?php
        echo max(3,6);

        echo "</br>";
        echo "</br>";

        function getMax($first, $second, $third) {
            if ($first >= $second && $first >= $third ) {
                return $first;
            } elseif ($second >= $first && $second >= $third) {
                return $second;
            } else {
                return $third;
            } 
        }

       echo getMax (999, 999, 592)

    ?>

    <!-- BUILDING A CALCULATOR -->

    <form action="site.php" method="post">
        num1<input type="number" step="0.001" name="num1"> <br>
        operator<input type="text" name="operator"> <br>
        num2<input type="number" step="0.001" name="num2"> <br>
        

        <input type="submit">
    
    </form>
    
    <?php
        $num1 = $_POST["num1"];
        $operator = $_POST["operator"];
        $num2 = $_POST["num2"];

        if($operator=="+"){
            echo $num1+$num2;
            }elseif($operator=="-"){
            echo $num1-$num2;
            }elseif($operator=="*"){
            echo $num1*$num2; 
            }elseif($operator=="/"){
            echo $num1/$num2;
            }else{
            echo "this is not a valid operator";
            }

            echo "</br>";
            echo "</br>";

    ?>

       <!-- SWITCH STATEMENT -->

        <form action="site.php" method="post">
            What was the grade?
            <input type="text" name="myGrade"> <br>

            <input type="submit">
        </form>

        <?php
            $grade = $_POST["myGrade"];
            // echo $grade;

            switch($grade){
                case "A":
                    echo "You did amazing!";
                    break;
                case "B":
                    echo "Not so bad!";
                    break;
                case "C":
                    echo "Could be better!";
                default:
                    echo "You enetered an invalid grade.";   
            }
        ?>

       <!-- *************WHILE LOOPS************** -->

        <?php

            
        ?>

</html>


</body>
</html>