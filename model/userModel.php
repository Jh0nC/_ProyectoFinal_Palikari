<?php
require_once 'db/Config.php';
class userModel
{
  public static function modelGetUsers() {
    $consultDB = connectionDatabase::UseConnectionDatabase()->prepare('select * from users');
    $consultDB->execute();
    $result = $consultDB->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public static function modelUserLogIn($data)
  {

    $consultBD = connectionDatabase::UseConnectionDatabase()->prepare('SELECT * FROM users WHERE user_mail = :mail');
    $consultBD->bindParam(':mail', $data['mail'], PDO::PARAM_STR);
    $consultBD->execute();

    $user = $consultBD->fetch(PDO::FETCH_ASSOC);

    if ($user == false) {

      $responseBD = 'usuario_no_encontrado';

      return array(
        'boolResponse' => false,
        'response' => $responseBD
      );

    } else {

      $passwordValidation = password_verify($data['password'], $user['user_password']);

      if ($user['user_mail'] == $data['mail'] &&  $passwordValidation) {

        $responseBD = 'credenciales_correctas';

        session_start();
        $_SESSION['name'] = $user['user_name'].' '.$user['user_last_name'];
        $_SESSION['mail'] = $user['user_mail'];

        return array(
          'boolResponse' => true,
          'response' => $responseBD
        );

      } else {

        $responseBD = 'credenciales_incorrectas';

        return array(
          'boolResponse' => false,
          'response' => $responseBD
        );

      }
    }
  }

  public static function modelUserLogup($data)
  {

    $consultBD = connectionDatabase::UseConnectionDatabase()->prepare('SELECT user_name, user_mail FROM users WHERE user_mail = :mail');
    $consultBD->bindParam(':mail', $data['mail'], PDO::PARAM_STR);
    $consultBD->execute();

    // var_dump($consultBD);

    $consultResponse = $consultBD->fetch(PDO::FETCH_ASSOC);

    // var_dump($userData);

    if ($consultResponse) { 

      $responseBD = 'usuario_existente';

      return array(
        'boolResponse' => false,
        'response' => $responseBD
      );

    } else {

      $responseBD = 'nuevo_usuario';

      if ($data['password'] == $data['password_confirm']) {

        $hashedPass = password_hash($data['password'], PASSWORD_BCRYPT);
  
        $insertBD = connectionDatabase::UseConnectionDatabase()->prepare('insert into users value (default, :name, :last_name, :mail, :password)');
        $insertBD->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $insertBD->bindParam(':last_name', $data['last_name'], PDO::PARAM_STR);
        $insertBD->bindParam(':mail', $data['mail'], PDO::PARAM_STR);
        $insertBD->bindParam(':password', $hashedPass, PDO::PARAM_STR);
        $insertBD->execute();
  
        $insertResponse = $insertBD->fetch(PDO::FETCH_ASSOC);

        return array(
          'boolResponse' => true,
          'response' => $responseBD,
          'DBresponse' => $insertResponse
        );

      }
      else {

        $responseBD = 'las contraseñas no coinciden';

        return array(
          'boolResponse' => true,
          'response' => $responseBD
        );

      }
    }
  }

}