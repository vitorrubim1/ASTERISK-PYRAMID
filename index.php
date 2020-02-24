<!doctype html>
<html lang="pt-br">
  <head>
    <title>Asterik Pyramid - by Vitor Rubim</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">     
      <h1> ASTERISK PYRAMID - VITOR RUBIM</h1>   
      <form action="index.php" method="POST">
        <input 
          type="number" 
          class="form-control" 
          name="x" 
          placeholder="Digite um número" 
          required
        >    

        <input type="submit" class="btn">        
      </form>


      <!--PYRAMID-->
      <div class="pyramid">
        <?php
          if(isset($_POST["x"])){

            $x = $_POST["x"];

            for($a = 0; $a <= $x; $a++){
              echo "<center>";
                for($y = $a -1; $y <= $a; $y++){
                  echo "&nbsp;&nbsp";  
                }      
                    
                for ($z = 0; $z < $a; $z++){
                  echo "&nbsp;*&nbsp;"; 
                } //para a piramide ficar mais centralizada
                echo "<br>";
            }
          }
            
        ?>
      </div>
    </div>     
  </body>
</html>