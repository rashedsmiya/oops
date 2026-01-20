 
<?php include "functions.php" ?>


<form action="" method="post">
    <table>
        <tr>
            <td>Enter the first Number</td>
            <td><input type="number" name="num1"></td>
        </tr>

        <tr>
            <td>Enter the secand Number :</td>
            <td><input type="number" name="num2"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="calculation" value="calculation"></td>
        </tr>


    </table>
</form>


 <?php 

    if(isset($_POST["calculation"])){
        $numOne = $_POST["num1"];
        $numTwo = $_POST["num2"];
    }

    if(empty($numOne) or empty($numTwo)){
        echo "<span style='color:red'>Please enter the number</span> <br>";
    } else {
        echo "First Number is: ". $numOne ."<br>";
        echo "Secand Number is: ". $numTwo ."<br>";
    

    $cal = new Calculation;
    $cal->add($numOne, $numTwo);
    $cal->sub($numTwo, $numOne);
    $cal->mul($numOne, $numTwo);
    $cal->div($numTwo, $numOne); 
    }

    
 ?>