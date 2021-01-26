<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Main;

class AdminController extends Controller {


    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'admin';
    }


    public function loginAction()
    {
        if (isset($_SESSION['admin'])) {
            $this->view->redirect('admin/add');
        }
        if (!empty($_POST)) {
            if (!$this->model->loginValidate($_POST)) {
                $this->view->message('Error', $this->model->error);
            }
            $_SESSION['admin'] = true;
            $this->view->location('admin/add');
        }
        $this->view->render('Sign in');
    }


    public function addAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->postValidate($_POST, 'add')) {
                $this->view->message('Error', $this->model->error);
            }
            $id = $this->model->postAdd($_POST);
            if (!$id) {
                $this->view->message('Error', 'request Processing');
            }
            $this->model->postUploadImage($_FILES['img']['tmp_name'], $id);
            $this->view->location('admin/posts');
        }
        $this->view->render('Add post');
    }


    public function editAction()
    {
        if (!$this->model->isPostExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        if (!empty($_POST)) {
            if (!$this->model->postValidate($_POST, 'edit')) {
                $this->view->message('Error', $this->model->error);
            }
            $this->model->postEdit($_POST, $this->route['id']);
            if ($_FILES['img']['tmp_name']) {
                $this->model->postUploadImage($_FILES['img']['tmp_name'], $this->route['id']);
            }
            $this->view->location('admin/posts');
        }
        $vars = ['data' => $this->model->postData($this->route['id'])[0],];

        $this->view->render('Edit post', $vars);
    }


    public function deleteAction()
    {
        if (!$this->model->isPostExists($this->route['id'])) {
            $this->view->errorCode(404);
        }

        $this->model->postDelete($this->route['id']);
        $this->view->redirect('admin/posts');
    }



    public function logoutAction()
    {
        unset($_SESSION['admin']);
        $this->view->redirect('admin/login');
    }

    public function postsAction()
    {
        $mainModel = new Main;

        $pagination = new Pagination($this->route, $mainModel->postsCount());

        $vars = [
            'pagination' => $pagination->get(),
            'list' => $mainModel->postsList($this->route),
        ];
        $this->view->render('Posts', $vars);
    }
}