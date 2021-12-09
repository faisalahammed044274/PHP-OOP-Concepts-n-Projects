<?php
class Calculation
{

    public function add($a, $b)
    {
        echo "addition = " . ($a + $b). "<br>";
    }
    public function sub($a, $b)
    {
        echo "Substraction = " . ($a - $b) . "<br>";
    }
    public function mul($a, $b)
    {
        echo "Multiplication = " . ($a * $b) . "<br>";
    }
    public function div($a, $b)
    {
        echo "Division = " . ($a / $b) . "<br>";
    }

}
?>

<form action="" method="post">
    <table>
        <tr>
            <td>Enter the first number</td>
            <td><input type="number" name="num1"></td>
        </tr>
        <tr>
            <td>Enter the second number</td>
            <td><input type="number" name="num2"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="calculation" value="Calculate"></td>
        </tr>
    </table>
</form>

<?php

if (isset($_POST['calculation'])) {
    $numOne = $_POST['num1'];
    $numTwo = $_POST['num2'];

    if (empty($numOne) or empty($numTwo)) {
        echo "<span style='color: red;'><h2>Field must not be empty.</h2></span>";
    }
}

$cal = new Calculation();
$cal->add($numOne, $numTwo);
$cal->sub($numOne, $numTwo);
$cal->mul($numOne, $numTwo);
$cal->div($numOne, $numTwo);

?>
