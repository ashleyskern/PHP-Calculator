<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
body {
  background-color: lightblue;
}
</style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--This is the calculater we see on the website-->
    <form method="get">
      <input type="text" name="num1" placeholder="Number 1">
      <select name="operator">
        <option>None</option>
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
      </select>
      <input type="text" name="num2" placeholder="Number 2">
      <button type="submit" name="submit">Calculate</button>

            <br>
      <input name="reset" type="reset" src="images/reset_button.jpg" class="reset_button" />
    </form>

    <p>The answer is:</p>
    <br>
    <?php
      //This is the PHP script that calculates in the background

      //First we check if the button has been clicked
      if (isset($_GET['submit'])) {
        //Then we get all the data from the form
        $result1 = $_GET['num1'];
        $operator = $_GET['operator'];
        $result2 = $_GET['num2'];

        //Here we check which operator the user chose, and we perform the calculation
        switch ($operator) {
          case "None":
            echo "You need to select an operator!";
            break;
          case "Add":
            echo $result1 + $result2;
            break;
          case "Subtract":
            echo $result1 - $result2;
            break;
          case "Multiply":
            echo $result1 * $result2;
            break;
          case "Divide":
            echo $result1 / $result2;
            break;
          default:
            echo "Error!";
            break;


        }
      }
    ?>
  </body>
</html>
