<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>pyramid</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="value" value="" placeholder="Enter value"/>
            <input type="submit" name="submit" value="Submit">
        </form>
        <br>
        <?php 
         if(isset($_POST['submit'])) {
            function pyramid($n) {
                for ($i=0; $i <= $n; $i++){
                    for($j=1; $j <= $n - $i; $j++) {
                       
                        echo "&nbsp;&nbsp";
                       
                    }
                   for($k = 0; $k <= $i; $k++){
                    echo "*";
                   }
                   echo "<br>";
                    
                }
            }

            $n = $_POST['value'];
            pyramid($n);
         }
        

        ?>
    </body>
</html>