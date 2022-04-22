<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
        echo "<h1>Braden's Site</h1>";
        echo "<hr>";
        echo'<p>This is my site</p>'; 
    ?> 

    <?php
        $characterName = "John";
        $characterAge = 35;
        echo "There once was a man named $characterName <br>";
        echo "He was $characterAge years old <br>";
        $characterName = "Mike";
        $characterAge = 70;
        echo "He really like the name $characterName <br>";
        echo "But didn't like being $characterAge <br>";
    ?> 
    <?php
        $phrase = "To be or not to be";    
        $age = 30;
        $gpa = 3.7;
        $isMale = false;
        echo "$phrase <br>";
    ?>
    <?php
        $phrase = "This is mY secoNd phrAse";
        echo "Giraffe Academy <br>";
        echo strtolower($phrase);
        echo "<br>";
        echo strtoupper($phrase);
        echo "<br>";
        echo strlen($phrase);
        echo "<br>";
        echo $phrase[2]; //index
        echo "<br>";
        echo "Braden"[0]; //index
        echo "<br>";
        echo $phrase[0] = "G"; //index
        echo "- $phrase";
        echo "<br>";
        echo strtolower(str_replace("Ghis", "Now", $phrase));
        echo "<br>";
        echo substr($phrase, 8, 3); //index the range 
    ?>
    <?php
        echo "<br>";
        echo 5+9;
        echo "<br>";
        echo 5/9; 
        echo "<br>";
        echo 10%3; //modulous will always give you the remainder 
        echo "<br>";
        echo 4+5*10; //always going to honor the order of operations
        echo "<br>";
        echo (4+5)*10; 
        echo "<br>";
    ?>
    <?php
        $num = 10;  
        echo $num; 
        echo "<br>";
        $num++;
        echo $num;
        echo "<br>";
        echo $num+35;
        echo "<br>";
        $num *= 2; // another way to use math operations
        echo $num;
        echo "<br>"
    ?>
    <?php
        echo abs(-100); //absolute power function
        echo ",0.- ";
        echo pow(2,4);
        echo ",1.- >";
        echo max(2, 10); //print out the biggest number
        echo ",2.- >";
        echo min(2, 10); //pirnt out the smallest number
        echo ",3.- >";
        echo round(4.8); //find the biggest whole number
        echo ",4.- >";
        echo ceil(3.3); //round up always
        echo ",5.- >";
        echo floor(3.9); //round down always
        echo ",6.";
    ?>
    
    <form action="First-php" method="get">
        Name: <input type="text" name="userName">
        <br>
        Age: <input type="yourNumber" name="yourAge">
        <br>
        <br>
        <input type="submit">
    </form>
    Your name is: <?php echo $_GET["userName"] ?>
    <br>
    Your age is: <?php echo $_GET["yourAge"] ?> 
    <br>
    <br>

    <form action="First-php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <br>
        <input type="submit">
    </form>
    Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?> <!--Sum of two vars-->
    <br> 
    <br>
    <form action="First-php" method="get">
        Color: <input type="text" name="color"> <br>
        Plural Noun: <input type="text" name="pluralNoun"> <br>
        Celebrity: <input type="text" name="celebrity"> <br>

        <input type="submit">
    </form>
    <br>

    <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];

        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
    ?>

    <br>

    <form action="First-php" method="get">
        Name: <input type="text" name="thisName"> <br>
        <input type="submit">
    </form>
    <br>

    <?php 
        echo $_GET["thisName"]; // This is how to show the var in the URL
    ?>

    <br>

    <form class="post-form" action="First-php" method="post">
        Password: <input type="password" name="password"> <br>
        <input type="submit">
    </form>
    <br>

    <?php 
        echo $_POST["password"]; // Use post to hide the var from the URL
    ?>

    <?php 
        $friends = array("Kevin", "Karen", 1, "Oscar", "Jim"); 
        $friends[1] = "Dwight";
        $friends[4] = "Doggo";
        echo $friends[0]; //How to index the array
        echo "<br>";
        echo $friends[1];
        echo "<br>";
        echo $friends[4];
        echo "<br>";
        echo count($friends); //remember always counts 0
        echo "<br>";
    ?>

    <form action="First-php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"> <br>
        Grapes: <input type="checkbox" name="fruits[]" value="grapes"> <br>
        <input type="submit">
    </form>
    <br>

    <?php 
        $fruits = $_POST["fruits"];
        echo $fruits; 
        echo "$fruits"; //will just print out the word array
        echo "<br>";
        echo var_dump($fruits); //displays the areay in JSON
    ?>
    <br>
    <form action="First-php" method="post">
        Student's Name: <input type="text" name="student"> <br>
      <input type="submit">
    </form>
    <p>Jim, Pam, and Oscar are the students.</p>
    <?php 
        $grades = array("Jim"=>"A+","Pam"=>"B-","Oscar"=>"C+"); //key value pairs
        $grades["Jim"] = "F"; //edit the array
        echo "Student's Grades:  ";
        echo $grades[$_POST["student"]];
    ?>
    <br>
    <br>
    <!-- Functions -->
    <?php 
        function sayHi($userName, $age){
            echo "Hello $userName, you're $age years old";
        }

        sayHi("Braden", 24); //simple function call
        echo "<br>";
        sayHi("Tom", 35);
        echo "<br>";
        sayHi("Jim", 22);
        echo "<br>";
    ?>
    <!-- Return Statements -->
    <?php 
        function cube($num){
            return $num*$num*$num;
            // or $num^3
            echo "Hello"; // this isn't going to be displayed after return
        }

        $cubeResult = cube(4);
        echo $cubeResult;
        echo "<br>";
        echo cube(3);
    ?>
    <!-- Made a basic form with zero help -->
    <form action="First-php" method="get">
        Phone Number: <input type="number" name="phoneNumber">
    <input type="submit"> 

    <?php 
        echo "<br>";
        echo "This is a phone number:";
        echo $_GET["phoneNumber"];
    ?>
  </body>
</html>