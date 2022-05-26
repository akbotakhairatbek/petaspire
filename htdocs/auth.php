<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // connect to db
    require_once("conn.php");

    // set empty array for errors
    $errors = array();

    if(isset($_POST['do_login'])){
        $user = R::findOne("users","email = ?", array($_POST['email']));

        // if user exists
        if($user){
            // verifing user password
            if(password_verify($_POST['password'], $user->password)){
                // getting user information

                // use of two dimensional array
                $_SESSION['user'] = [
                    'id'        => $user->id,
                    'name'      => $user->name,
                    'surname'   => $user->surname,
                    'email'     => $user->email,
                    'phone_number'     => $user->phone,
                ];


                    header("Location: /profile.php");
                    die();


            } else {
                echo "Incorrect login or password";
            }
        } else {
            echo "Incorrect login or password";
        }
    }
}

?>
