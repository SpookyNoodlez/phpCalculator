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
                        if(validate("$operation")){
                            add();
                        }
                        break;
                    case "-":
                        if(validate("$operation")){
                            sub();
                        }
                        break;
                    case "*":
                        if(validate("$operation")){
                            multiply();
                        }
                        break;
                    case "/":
                        if(validate("$operation")){
                            divide();
                        }
                        break;
                    case "x^y":
                        if(validate("$operation")){
                            power();
                        }
                        break;
                    case "1/x":
                        if(validate("$operation")){
                            invert();
                        }
                        break;
                    case "x^2":
                        if(validate("$operation")){
                            square();
                        }
                        break;
                    case "√x":
                        if(validate("$operation")){
                            squareRoot();
                        }
                        break;
                }
            }

            function validate($operator){
                if($_GET["x"] == NULL){
                    echo "x can not be empty";
                    return false;
                }

                switch($operator){
                    case "+":
                    case "-":
                    case "*":
                        if($_GET["y"] == NULL){
                            echo "y can not be empty";
                            return false;
                        }
                    case "/":
                        if($_GET["y"] == NULL){
                            echo "y can not be empty";
                            return false;
                        }
                        if($_GET["y"] == 0){
                            echo "Can not divide by 0";
                        }
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
