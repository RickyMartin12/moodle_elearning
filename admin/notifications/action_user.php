<?php


require $_SERVER['DOCUMENT_ROOT']. "/moodle/connect.php";

function is_array_empty($arr){
  if(is_array($arr)){     
      foreach($arr as $key => $value){
          if(!empty($value) || $value != NULL || $value != ""){
              return true;
              break;//stop the process we have seen that at least 1 of the array has value so its not empty
          }
      }
      return false;
  }
}


switch ($_POST['action']){


    case '1':

        /*GRAVAR NOVO UTILIZADOR*/

    $err='';

    // Topico 1 - Serviços

    // Data de Serviços
    
    $password = '';
    
    $passord_conf = '';

        $pass = '';

    if (!$_POST['utilizador'])
      $err .= "- Username <span class='w3-text-red'> *</span><br>";
    else{
     $nome_utilizador = $_POST['utilizador'];
    }

    // Password

    if ($_POST['password']){
      $password = $_POST['password'];
    }
    else
    {
      $err .= "- User Password <span class='w3-text-red'> *</span><br>";
    }
    
    // Confirmar Password
    
    if ($_POST['password_conf']){
      $password_conf = $_POST['password_conf'];
    }
    else
    {
      $err .= "- Confirm User Password <span class='w3-text-red'> *</span><br>";
    }
    
    if ($_POST['password_conf'] && $_POST['password'])
    {
        if ($password == $password_conf)
        {
            $pass = $password;
        }
        else
        {
            $err .= "- The passwords must be equals <span class='w3-text-red'> *</span><br>";
        }
    }

    // Pais

    if ($_POST['pais']){
      $pais= $_POST['pais'];
    }
    else
    {
      $err .= "- User's Country <span class='w3-text-red'> *</span><br>";
    }

    // Tipo do Utilizador 

    if ($_POST['tipo_utilizador']){
      $tipo_utilizador= $_POST['tipo_utilizador'];
    }
    else
    {
      $err .= "- User's Type <span class='w3-text-red'> *</span><br>";
    }


        // Email
        $email = $_POST['email'];


        if ($email == "")
        {
            $err .= "- User's Email <span class='w3-text-red'> * </span><br>"; 
        }
        else
        {
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) 
            {
                 $email = $_POST["email"];
              } 
              else 
              {
                $err .= "- Inválid Email <span class='w3-text-red'> *</span><br>";
              }
        }

        // tipo_utilizador

        if ($_POST['tipo_utilizador']){
          $tipo_utilizador = $_POST['tipo_utilizador'];
        }
        else
        {
          $err .= "- User's Type <span class='w3-text-red'> *</span><br>";
        }

        // departament

        $departament = $_POST['departament'];

        // skills

        $skills = $_POST['skills'];



        // img_logo

          $img_logo = $_POST['img_logo'];
        

     
     
         // Privilegios
         
         if ($_POST['privilegios']){
          $privilegios = $_POST['privilegios'];
        }
        else
        {
          $err .= "- User's Privileges <span class='w3-text-red'> *</span><br>";
        }


        $file = $_SERVER['DOCUMENT_ROOT']. '/moodle/request/passlist/big_pass_list.txt';
        // Open the file to get existing content
        $current = file_get_contents($file);
        // Append a new person to the file
        $current .= "\n".$pass;
        // Write the contents back to the file
        file_put_contents($file, $current);
    


    
    
     

      
      

      
    
            

              

        if (!$err) 
        {

          $v = "";

          $obter_comp=" SELECT nome FROM admins ORDER BY nome ASC";
          $result = mysqli_query($conn, $obter_comp);
          while($obj = mysqli_fetch_object($result)) 
          {
            $v[] = $obj;

        }

        $array = json_decode(json_encode($v), True);

        if (is_array_empty($array) == false)
        {
            $data_criacao = date("Y-m-d");

            $hora_criacao = date('H:i');

              $sql =" INSERT INTO admins (nome, pass, privilegios, tipo, email, country, departament, skills, logotipo, data_criacao, hora_criacao, data_login, hora_login) VALUES ('$nome_utilizador', MD5('".$pass."'), '$privilegios', '$tipo_utilizador', '$email', '$pais', '$departament', '$skills', '$img_logo', '$data_criacao', '$hora_criacao', '', '')";

            $result = mysqli_query($conn,$sql);
              if ($result) {
                $response = 1; 
                $last_id = mysqli_insert_id($conn);
              }  
              else {
                $response = 0;
                $last_id = 0; 
              }

              $r=array('error'=>'','success' => $response,'id' => $last_id, 'nome' => $nome_utilizador);
              echo json_encode($r);
             
             

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers
            $headers .= 'From:' .$email. "\r\n";
            $email_subject = "Send Information User ".$nome_utilizador;

            $email_body_client = '<div style="width:95%; margin-left:2.5%;">
            <h4> User s Information: '.$nome_utilizador.'</h4>
            <hr><b>Username: </b> '.$nome_utilizador.' <br /><br />
            <b>Password: </b> '.$pass.' <br /><br/>
            <hr>
            <br>Thanks '.$nome_utilizador.', Elearning Conceptek a Shijin Group.
            </div>';
            mail($email,$email_subject,$email_body_client,$headers);
        }
        else
        {
            $key = array_search($nome_utilizador, array_column($array, 'nome'));
            if (is_numeric($key))
            {
              echo 100;
              exit;
            }
            else
            {
                $data_criacao = date("Y-m-d");

                $hora_criacao = date('H:i');

              $sql =" INSERT INTO admins (nome, pass, privilegios, tipo, email, country, departament, skills, logotipo, data_criacao, hora_criacao, data_login, hora_login) VALUES ('$nome_utilizador', MD5('".$pass."'), '$privilegios', '$tipo_utilizador', '$email', '$pais', '$departament', '$skills', '$img_logo', '$data_criacao', '$hora_criacao', '', '')";

            $result = mysqli_query($conn,$sql);
              if ($result) {
                $response = 1; 
                $last_id = mysqli_insert_id($conn);
              }  
              else {
                $response = 0;
                $last_id = 0; 
              }

              $r=array('error'=>'','success' => $response, 'nome' => $username, 'email' => $email);
              echo json_encode($r);
             
             

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers
            $headers .= 'From:' .$email. "\r\n";
            $email_subject = "Send Information User ".$nome_utilizador;

            $email_body_client = '<div style="width:95%; margin-left:2.5%;">
            <h4> User s Information: '.$nome_utilizador.'</h4>
            <hr><b>Username: </b> '.$nome_utilizador.' <br /><br />
            <b>Password: </b> '.$pass.' <br /><br/>
            <hr>
            <br>Thank you '.$nome_utilizador.', Elearning Conceptek a Shijin Group
            <br>
            <br>
            <img src="/moodle/images/cs.png">
            </div>';
            mail($email,$email_subject,$email_body_client,$headers);
            }
        }


        

          
        }
        else{
          $r = array('error' =>$err, 'success' =>'', 'nome' => '', 'email' => '');
          echo json_encode($r);
        }

        break;

    case '4':
    
    $table=" SELECT * FROM privilegios WHERE id >= 1 AND id <= 2";

    $result = mysqli_query($conn, $table);
    while($obj = mysqli_fetch_object($result)) {
    $var[] = $obj;}
    echo json_encode($var);
    
    break;


    case '5':
        

    $estado = $_POST['estado'];

    $tipo = $_POST['tipo'];


    $arr_tipo = explode("-",$tipo);


    $priv_a= " UPDATE privilegios SET  $arr_tipo[0] ='$estado' WHERE tipo = '$arr_tipo[1]' ";
    $result = mysqli_query($conn,$priv_a);
     if ($result)
     {
         echo 1;   
     }
     else 
     {
         echo 0; 
     }

        
    break;

    case '6':
    $obter_comp=" SELECT * FROM admins WHERE 1";

    $var = array();

    $result = mysqli_query($conn, $obter_comp);
    while($obj = mysqli_fetch_object($result)) 
    {
    $var[] = $obj;
        
    }
    echo json_encode($var);
    break;

    case '7':

    $id= $_POST['id'];
    $nome = $_POST['col_1_'.$id];
    $pass=md5($_POST['col_2_'.$id]);
    $email = $_POST['col_3_'.$id];
    $tipo = $_POST['col_4_'.$id];
    $privilegios=$_POST['col_5_'.$id];
    $country = $_POST['col_6_'.$id];
    $departament = $_POST['col_7_'.$id];
    $skills = $_POST['col_8_'.$id];
    $logotipo = $_POST['logotipo'];

     $success='';
    
    $query='SELECT nome FROM admins WHERE nome ="'.$nome.'"';
      $result = mysqli_query($conn,$query);
      $rowCount = mysqli_num_rows($result);
      if($rowCount>1) { 
      $error_message = 9;
            $success .= 2;
    }
    
    
      if ( !isset($error_message) ) {


        // sem actualizar password e sem actualizar a imagem 
          
       if ($_POST['col_2_'.$id] == '' && $_POST['logotipo'] == '')
       {
           $query_upd='UPDATE admins SET nome="'.$nome.'", privilegios="'.$privilegios.'", email= "'.$email.'", tipo="'.$tipo.'", country="'.$country.'", departament="'.$departament.'", skills="'.$skills.'" WHERE id = "'.$id.'"';
       }


       // sem actualizar password e actualizar a imagem

       else if ($_POST['col_2_'.$id] == '' && $_POST['logotipo'] != '')
       {
           $query_upd='UPDATE admins SET nome="'.$nome.'", privilegios="'.$privilegios.'", email= "'.$email.'", tipo="'.$tipo.'", country="'.$country.'", departament="'.$departament.'", skills="'.$skills.'", logotipo="'.$logotipo.'" WHERE id = "'.$id.'"';
       }


       // actualizar password e sem actualizar a imagem

       else if ($_POST['col_2_'.$id] != '' && $_POST['logotipo'] == '')
       {
           $query_upd='UPDATE admins SET nome="'.$nome.'", pass = "'.$pass.'", privilegios="'.$privilegios.'", email= "'.$email.'", tipo="'.$tipo.'", country="'.$country.'", departament="'.$departament.'", skills="'.$skills.'" WHERE id = "'.$id.'"';
       }

       // actualizar password e actualizar a imagem


       else
       {
           $query_upd='UPDATE admins SET nome="'.$nome.'", pass = "'.$pass.'", privilegios="'.$privilegios.'", email= "'.$email.'", tipo="'.$tipo.'", country="'.$country.'", departament="'.$departament.'", skills="'.$skills.'", logotipo="'.$logotipo.'" WHERE id = "'.$id.'"';
       }

     
      $result_upd = mysqli_query($conn,$query_upd);
        if ($result_upd)
           $success .=1;
        else
           $success .= 2;
      }
    
    echo $success;
    unset($error_message);

    if ($_POST['col_2_'.$id] != '')
    {
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // More headers
        $headers .= 'From:' .$email. "\r\n";
        $email_subject = "Send Information User changed: ".$_POST['col_1_'.$id];
        
        $email_body_client = '<div style="width:95%; margin-left:2.5%;">
        <h4> User s Information changed '.$_POST['col_1_'.$id].'</h4>
        <hr><b>Username: </b> '.$_POST['col_1_'.$id].' <br /><br />
        <b>Password: </b> '.$_POST['col_2_'.$id].' <br /><br/>
        <hr>
        <br>Thank you '.$_POST['col_1_'.$id].', Elearning Conceptek a Shijin Group
        </div>';
        mail($email,$email_subject,$email_body_client,$headers);
    }

    

    break;


    case '8':

    $id = $_POST['id'];

    $sql = mysqli_query($conn, "SELECT * FROM admins WHERE id='$id'");

    $exibe = mysqli_fetch_assoc($sql);
    $email = $exibe['email'];
    $nome = $exibe['nome'];

    $reg_del= "DELETE FROM admins WHERE id ='{$_POST['id']}'";
    $result = mysqli_query($conn,$reg_del);
    if ($result){
      echo 2; 

      $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // More headers
    $headers .= 'From:' .$email. "\r\n";
    $email_subject = "Send Information User changed: ".$nome;
    
    $email_body_client = '<div style="width:95%; margin-left:2.5%;">
    <h4> User s Information changed '.$nome.'</h4>
    <br>Thank you '.$nome.', Elearning Conceptek a Shijin Group
    </div>';
    mail($email,$email_subject,$email_body_client,$headers);


    }
    else {
      echo 0;
    }


    break;



}






mysqli_close($conn);
?>


