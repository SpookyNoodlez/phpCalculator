<!DOCTYPE html>

<html>  
    <head>
    </head>
    <body>

        <form action="calculator.php" method="get">
            <input type="number" name = x placeholder = "x">
            <input type="number" name = y placeholder = "y">

            <select name = operation>
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>x^y</option>
                <option>1/x</option>
                <option>x^2</option>
                <option>√x</option>
            </select>

            <button type = "submit" name = "submit" value = "submit" >Calculate</button>
            <br>
            Result:


            <!--
            <input type="submit" name="add" value = "+">
            <input type="submit" name="sub" value = "-">
            <input type="submit" name="mul" value = "*">
            <input type="submit" name="div" value = "/">
            <input type="submit" name="pow" value = "x^y">
            <input type="submit" name="invert" value = "1/x">
            <input type="submit" name="square" value = "x^2">
            <input type="submit" name="squareRoot" value = "√x">
            -->
        </form>


        <?php
            /*
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
            */

            //If submit button has been pressed call apropriate function
            if(isset($_GET['submit'])){
                $operation = $_GET['operation'];
                switch($operation){
                    case "+":
                        if(validate($operation)){
                            add();
                        }
                        break;
                    case "-":
                        sub();
                        break;
                    case "*":
                        multiply();
                        break;
                    case "/":
                        divide();
                        break;
                    case "x^y":
                        power();
                        break;
                    case "1/x":
                        invert();
                        break;
                    case "x^2":
                        square();
                        break;
                    case "√x":
                        squareRoot();
                        break;
                }
            }

            function validate($operation){
                if($_GET["x"] == NULL){
                    echo "x can not be empty";
                    return false;
                }

                return true;
            }



            function add() {
                $RESULT = $_GET["x"] + $_GET["y"];
                #print somehow
                echo $RESULT;
            }
        
            function sub() {
                $RESULT = $_GET["x"] - $_GET["y"];
                #print somehow
                echo $RESULT;
            }

            function multiply() {
                $RESULT = $_GET["x"] * $_GET["y"];
                #print somehow
                echo $RESULT;
            }

            function divide() {
                $RESULT = $_GET["x"] / $_GET["y"];
                #print somehow
                echo $RESULT;
            }

            function power() {
                $RESULT = pow($_GET["x"], $_GET["y"]);
                #print somehow
                echo $RESULT;
            }

            function invert() {
                $RESULT = 1 / $_GET["x"];
                #print somehow
                echo $RESULT;
            }

            function square() { #SUPPOSED TO BE HANDLED BY POWER
                $RESULT = pow($_GET["x"], 2);
                #print somehow
                echo $RESULT;
            }

            function squareRoot() {
                $RESULT = sqrt($_GET["x"]);
                #print somehow
                echo $RESULT;
            }
        
        ?>

    </body>

</html>
