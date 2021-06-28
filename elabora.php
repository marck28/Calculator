  <!DOCTYPE html>
  <html>
  <body>
    <p>
      <?php
      $op = $_POST['op'];
      $num = $_POST['num'];
      $num1 = $_POST['num1'];

      echo "Result: ";
      switch($op) {
        case '+':
        echo $num + $num1;
        break;
        case '-':
        echo $num - $num1;
        break;
        case '*':
        echo $num * $num1;
        break;
        case '/':
        echo $num / $num1;
        break;
      }
      ?>
  </p>
  <br/>
  </body>
  </html>
