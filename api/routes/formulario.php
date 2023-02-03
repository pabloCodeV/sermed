<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/******* GET  ***************/
$app->get('/formulario/[{id}/]', function($request, $response, array $args){
    $db =  new db();
    $db = $db->conecctionDB();
    $get = $request->getQueryParams();
    $where = " WHERE 1=1 ";
  
      //FILTRO POR ID
      if(!empty($args['id'])){
        $where .= " AND id = $args[id] "; 
      }

      //FILTRO POR ID
      if(!empty($get['nombre'])){
        $where .= " AND nombre = '$get[nombre]' " ; 
      }


        $sql = $db->prepare("SELECT * FROM planes_sermed  $where  ORDER BY id DESC");
        
    try{
      $sql->execute();
      $resultados = $sql->fetchAll(PDO::FETCH_OBJ);
      $db = null;
      $response->getBody()->write(json_encode($resultados));
          return $response
              ->withHeader('content-type', 'application/json')
              ->withStatus(200);
  
    }catch(PDOException $e){
        $error = array(
        "message"=>$e->getMessage()
        );
        $response->getBody()->write(json_encode($error));
          return $response
              ->withHeader('content-type', 'application/json')
              ->whitStatus(500);
          }
  });


  /************ POST  ************/
$app->post('/formulario/[{id}/]', function( $request, $response, array $args){
    $db =  new db();
    $db = $db->conecctionDB();
    $inputData = $request->getParsedBody();
    $correo_raiz = 'pgonzalez@hospitalsiriolibanes.org';
    $correo_receptor = "aceballos@hospitalsiriolibanes.org";     
  
    //VALIDA QUE LOS DATOS NO LLEGUEN CORRUPTOS
    if(is_null($inputData)){                      
      return $response
            ->withStatus(400)
            ->withJson(array(
                      'code' => 400,
                      'msj' => "Bad Request"
                      ));
    }
  
    //SE COMPRUEBA SI RECIBE ID COMO ARGUMENTO EN LA URL
    if(!empty($args['id'])){
      $data['id'] = $args['id'];  
    }
  
    //SET DE DATOS RECIBIDOS
    $data['nombre'] = $inputData['nombre'];
    $data['correo'] = $inputData['correo'];   
    $data['telefono'] = $inputData['telefono'];
    $data['localidad'] = $inputData['localidad'];
    $data['contacto'] = $inputData['contacto'];

    $mensaje = $inputData['mensaje'];
 
    
    $res  = $db->query('SELECT * FROM planes_sermed');
    $res= $res->fetchAll();
  
  
      //SE COMPRUEBA QUE EL ID PASADO COMO ARGUMENTO SEA EXISTENTE
      if(!empty($data['id']) ){
        $exist = $db->query("SELECT COUNT(*) 
                            AS counter 
                            FROM planes_sermed 
                            WHERE id = ".$data['id']."  LIMIT 1");
        $exist = $exist->fetchAll();
  
        //EN CASO DE BUSCAR UN ID INEXISTENTE
        if($exist[0]["counter"]==0){
                return $response->withStatus(500)
                                ->withJson(array(
                                                "code" => 500,
                                                "msj" => "error"
                                            ));
        }   
  
        $sql = "UPDATE planes_sermed 
                  SET   nombre = :nombre,
                        correo = :correo,
                        telefono = :telefono,
                        localidad = :localidad,
                        contacto = :contacto,
                        create_at = now()
                        WHERE id = ".$data['id'];
      }
  
      if(empty($data["id"])){   

        $sql = "INSERT INTO planes_sermed (nombre, correo, telefono, localidad, 
                                      contacto, create_at) 
                    VALUES           (:nombre, :correo, :telefono, :localidad, :contacto,  NOW()) ";
  
      }


    $mail = new PHPMailer();
    try{
      $resultado = $db->prepare($sql);
  
      //SET DE DATOS LISTOS PARA SER INSERTADOS EN LA QUERY SQL
      $resultado->bindParam(':nombre', $data['nombre'] );
      $resultado->bindParam(':correo', $data['correo']);
      $resultado->bindParam(':telefono', $data['telefono']);
      $resultado->bindParam(':localidad', $data['localidad']);
      $resultado->bindParam(':contacto', $data['contacto'] );

  
      $resultado->execute();
  
      // FIN DE LA CARGA DE DATOS EN LA DB
  
      $resultado = null;
      $db = null;

      //comienza a enviar el correo

      $mail->SMTPDebug = 1;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'mail.hospitalsiriolibanes.org';       //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   =  $correo_raiz;                     //SMTP username
      $mail->Password   = '*26424781L*';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;     
      //Recipients
      $mail->setFrom( $correo_raiz, 'Hospital Sirio Libanes || SERMED');
      $mail->addAddress($correo_receptor, $data['nombre']);     //Add a recipient

      //Content
      $mail->isHTML(true); 
      $mail->CharSet = 'UTF-8';                                 //Set email format to HTML
      $mail->Subject = 'HSL / SERMED Formulario';
      $shtml = file_get_contents("consulta.html");
      $incss  = str_replace('<p id="nombre"></p>','<p style="font-weight: 600;"> Nombre: <span style="font-weight: 400;">'.$data['nombre'].'</span></p>',$shtml);
      $incss = str_replace('<p id="correo"></p>','<p style="font-weight: 600;"> Correo:  <span style="font-weight: 400;">'.$data['correo'].'</span></p>', $incss);
      $incss = str_replace('<p id="localidad"></p>','<p style="font-weight: 600;"> Localidad:  <span style="font-weight: 400;">'.$data['localidad'].'</span></p>', $incss);
      $incss = str_replace('<p id="telefono"></p>','<p style="font-weight: 600;"> Teléfono:  <span style="font-weight: 400;">'.$data['telefono'].'</span></p>', $incss);
      $incss = str_replace('<p id="contacto"></p>','<p style="font-weight: 600;"> Tipo de contacto:  <span style="font-weight: 400;">'.$data['contacto'].'</span></p>', $incss);
      $cuerpo = str_replace('<p id="mensaje"></p>','<p style="font-weight: 600;"> Mensaje: <span style="font-weight: 400;">'.$mensaje.'</span></p>', $incss);
      $mail->Body = $cuerpo; //cuerpo del mensaje
      $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ]);
      $mail->send();
    //  echo 'CORREO ENVIADO';

    if($resultado){
      return $response
      ->withStatus(200)
      ->withJson(array(
                'code' => 200,
                'msj' => "OK"
                ));
    }


    }catch(PDOException $e){
      echo '{"error" : {"text":'.$e->getMessage().'}';
    }
  
  });
  
  
/************************ DELETE ************************/
$app->delete('/formulario/[{id}/]', function( $request, $response, array $args){
    $db =  new db();
    $db = $db->conecctionDB();
    $id = $request->getAttribute('id');
  
    //BORRA EL ELEMENTO SELECCIONADO SEGUN SU ID
    $sql = "DELETE FROM planes_sermed WHERE id = $id";
  
    try{
      $resultado = $db->prepare($sql);
      $resultado->execute();
  
      if ($resultado->rowCount() > 0) {
        return $response
          ->withStatus(200)
          ->withJson(array(
                    'code' => 200,
                    'msj' => "Ok"
                    ));
      }else {
        return $response
          ->withStatus(500)
          ->withJson(array(
                    'code' => 500,
                    'msj' => "No existe en la DB"
                    ));
      }
  
      $resultado = null;
      $db = null;
    }catch(PDOException $e){
      echo '{"error" : {"text":'.$e->getMessage().'}';
    }
  });