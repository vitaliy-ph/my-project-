<?php

namespace application\controllers;

use application\core\Controller;

class UsersController extends Controller
{


    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'users';
    }


    public function registerAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->validate(['login', 'password'], $_POST)) {
                $this->view->message('Error', $this->model->error);
            } elseif (!$this->model->checkLoginExists($_POST['login'])) {
                $this->view->message('Error', $this->model->error);
            }
            $this->model->register($_POST);
            $this->view->location('users/login');
        }
        $this->view->render('Registration');
    }

    public function loginAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->validate(['login', 'password'], $_POST)) {
                $this->view->message('Error', $this->model->error);
            } elseif (!$this->model->checkData($_POST['login'], $_POST['password'])) {
                $this->view->message('Error', 'username or password is incorrect');
            }
            $this->model->login($_POST['login']);
            $this->view->location('users/account');

        }
        $this->view->render('Sign in');
    }

    public function accountAction()
    {
        $this->view->render('Account');

    }



    public function logoutAction()
    {
        unset($_SESSION['users']);
        $this->view->redirect('users/login');
    }

}