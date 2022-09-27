<?php 

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'access':
            $authC = new AuthController();

            $email = strip_tags($_POST['email']);
            $password = strip_tags($_POST['password']);


            $AuthController->login($email,$password);
            break;
    }
}

$authC = new AuthController();

$authC->login('','');


Class AuthController{
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

        if (isset($response->code) && $response) {
            session_start();

            $_SESSION['name'] = $response->data->name;
            $_SESSION['lastname'] = $response->data->lastname;
            $_SESSION['avatar'] = $response->data->avatar;
            $_SESSION['token'] = $response->data->token;


            header("Location:../productos")
        }else{
            #var_dump($response);
            header("Location:../?error=true")
        }

        curl_close($curl);
        echo $response;



    }
}



?>