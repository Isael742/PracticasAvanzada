<?php 

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'access':
            $AuthC = new AuthController();

            $email = strip_tags($_POST['email']);
            $password = strip_tags($_POST['password']);


            $AuthC->login($email,$password);
            break;
    }
}


class AuthController{

    public function login($email, $password){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/login',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array(
            'email' => $email,
            'password' => $password),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        var_dump($response);

        if (isset($response->code) && $response->code>0) 
        {
            session_start();

            $_SESSION['name'] = $response->data->name;
            $_SESSION['lastname'] = $response->data->lastname;
            $_SESSION['avatar'] = $response->data->avatar;
            $_SESSION['token'] = $response->data->token;

            var_dump($response);
            header("Location: ../products/productos.php");
        }else
        {
            var_dump($response);
            header("Location: ../index.php");
        };
        
        curl_close($curl);
        echo $response;



    }
}



?>