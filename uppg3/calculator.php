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
            //Enable all error messages
            ini_set('display_errors', 1);
            error_reporting(E_ALL);

            //If submit button has been pressed call appropriate function
            if(isset($_GET['submit']) && isset($_GET['x']) && isset($_GET['y']) && isset($_GET['operation'])){
                $operation = $_GET['operation'];
                if(validate($operation)){
                    switch($operation){
                        case "+":
                                add();
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
                                power(false);
                            break;
                        case "1/x":
                                invert();
                            break;
                        case "x^2":
                                power(true);
                            break;
                        case "√x":
                                squareRoot();
                            break;
                        default:
                            echo "Operation not recognised";
                    }
                }
            }

            function validate($operator){
                $valid = true;

                if(empty($_GET["x"])){
                    echo " -x can not be empty- ";
                    $valid = false;
                }

                //echo gettype($_GET["x"]);
                /*
                if(gettype($_GET["x"]) != "integer" || gettype($_GET["x"]) != "double"){
                    echo " -x must be a number- ";
                    $valid = false;
                }*/

                switch($operator){
                    case "+":
                    case "-":
                    case "*":
                        if(empty($_GET["y"])){
                            echo " -y can not be empty- ";
                            $valid = false;
                        }
                        break;
                    case "/":
                        if(empty($_GET["y"])){
                            echo " -y can not be empty- ";
                            $valid = false;
                        }
                        if($_GET["y"] == 0){
                            echo " -Can not divide by 0- ";
                            $valid = false;
                        }
                        break;
                    case "1/x":
                        if($_GET["x"] == 0){
                            echo " -Can not divide by 0- ";
                            $valid = false;
                        }
                        break;
                    case "√x":
                        if($_GET["x"] < 0){
                            echo " -x must be non-negative, imaginary numbers not supported- ";
                            $valid = false;
                        }
                        break;
                }
                return $valid;
            }



            function add() {
                $RESULT = $_GET["x"] + $_GET["y"];
                echo $RESULT;
            }
        
            function sub() {
                $RESULT = $_GET["x"] - $_GET["y"];
                echo $RESULT;
            }

            function multiply() {
                $RESULT = $_GET["x"] * $_GET["y"];
                echo $RESULT;
            }

            function divide() {
                $RESULT = $_GET["x"] / $_GET["y"];
                echo $RESULT;
            }

            function power($square) { //pass "true" to square
                $yLocal = 2;
                if($square == false){
                    $yLocal = $_GET["y"];
                }
                $RESULT = pow($_GET["x"], $yLocal);
                echo $RESULT;
            }

            function invert() {
                $RESULT = 1 / $_GET["x"];
                echo $RESULT;
            }

            function squareRoot() {
                $RESULT = sqrt($_GET["x"]);
                echo $RESULT;
            }
        
        ?>

    </body>

</html>
