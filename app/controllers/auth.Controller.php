<?php
require 'app/models/user.model.php';
require 'app/views/auth.view.php';


class authController
{
    private $auth_view;
    private $user_model;

    function __construct()
    {
        $this->auth_view = new authView();
        $this->user_model = new userModel();
        if (strnatcasecmp(phpversion(), '5.4.0') >= 0) {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        } else {
            if (session_id() == '') {
                session_start();
            }
        }
    }
    function showFormLogin()
    {
        $this->auth_view->showFormLogin();
    }
    function validateUser()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->user_model->getUserByEmail($email);
        if ($email && (password_verify($password, $user->password))) {
            session_start();
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['USER_ID'] = $user->id_user;
            $_SESSION['IS_LOGGED'] = true;
            header("Location: " . BASE_URL);
        } else {
            $this->auth_view->showFormLogin('Error, user or password is incorrect');
        }
    }
    function logout()
    {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}
