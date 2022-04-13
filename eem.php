<?php

require $_SERVER['DOCUMENT_ROOT']. "/connect.php";

$obter_comp=" SELECT nome FROM admins ORDER BY nome ASC";
          $result = mysqli_query($conn, $obter_comp);
          while($obj = mysqli_fetch_object($result)) 
          {
            $v[] = $obj;
          }

          $array = json_decode(json_encode($v), True);

          var_dump($array);

          $nome_utilizador = "Ricardo Peleira";

          foreach($v as $index => $string) {
            if (strpos($string, $nome_utilizador) !== false)
            {
              $r_p_string = true;
            }
            else
            {
              $r_p_string = false;
            }
          }

          echo $r_p_string;


          ?>