<?php

require_once '../app/core/Controller.php';  // Include the base Controller class
require_once '../app/models/User.php';       // Include the User model

class AuthController extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function showLogin()
    {
        include '../app/views/login.php';
    }

    public function showRegister()
    {
        include '../app/views/register.php';
    }

	public function login()
	{
		$username = $_POST['username'] ?? '';
		$password = $_POST['password'] ?? '';

		$user = $this->userModel->login($username, $password);

		if ($user) {
			session_start();
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['message'] = 'Login successful!';
			$_SESSION['message_type'] = 'success';

			header('Location: /');
			exit();
		} else {
			session_start();
			$_SESSION['message'] = 'Invalid credentials.';
			$_SESSION['message_type'] = 'error';

			header('Location: /login');
			exit();
		}
	}

	public function register()
	{
		$full_name = $_POST['full_name'] ?? '';
		$username = $_POST['username'] ?? '';
		$password = $_POST['password'] ?? '';

		if ($this->userModel->register($full_name, $username, $password)) {
			$_SESSION['message'] = 'Registration successful!';
			$_SESSION['message_type'] = 'success';
			header('Location: /login');
		} else {
			$_SESSION['message'] = 'Registration failed.';
			$_SESSION['message_type'] = 'error';
			header('Location: /register');
		}
		exit();
	}
	
	public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        header('Location: /login');
        exit();
    }

}
