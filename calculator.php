<!DOCTYPE html>

<html>  
    <head>
    </head>
    <body>

        <form action="calculator.php" method="get">
            <input type="number" name = x>
            <input type="number" name = y>
            <input type="submit" name="add" value = "+">
            <input type="submit" name="sub" value = "-">
            <input type="submit" name="mul" value = "*">
            <input type="submit" name="div" value = "/">
            <input type="submit" name="pow" value = "x^y">
            <input type="submit" name="invert" value = "1/x">
            <input type="submit" name="square" value = "x^2">
            <input type="submit" name="squareRoot" value = "√x">

        </form>


        <?php
            if(array_key_exists('add', $_POST)) { 
                add(); 
            }
            if(array_key_exists('sub', $_POST)) { 
                sub(); 
            } 
            if(array_key_exists('mul', $_POST)) { 
                multiply(); 
            } 
            if(array_key_exists('div', $_POST)) { 
                divide(); 
            } 
            if(array_key_exists('pow', $_POST)) { 
                power(); 
            } 
            if(array_key_exists('invert', $_POST)) { 
                invert(); 
            } 
            if(array_key_exists('square', $_POST)) { 
                square(); 
            } 
            if(array_key_exists('squareRoot', $_POST)) { 
                squareRoot(); 
            } 


            function add() {
                $RESULT = $_GET["x"] + $_GET["y"];
                #print somehow
            }
        
            function sub() {
                $RESULT = $_GET["x"] - $_GET["y"];
                #print somehow
            }

            function multiply() {
                $RESULT = $_GET["x"] * $_GET["y"];
                #print somehow
            }

            function divide() {
                $RESULT = $_GET["x"] / $_GET["y"];
                #print somehow
            }

            function power() {
                $RESULT = pow($_GET["x"], $_GET["y"]);
                #print somehow
            }

            function invert() {
                $RESULT = $_GET["x"] / 1;
                #print somehow
            }

            function square() { #SUPPOSED TO BE HANDLED BY POWER
                $RESULT = pow($_GET["x"], 2);
                #print somehow
            }

            function squareRoot() {
                $RESULT = sqrt($_GET["x"]);
                #print somehow
            }
        
        ?>

    </body>

</html>
