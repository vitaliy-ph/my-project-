<?php

namespace application\controllers;


use application\core\Controller;
use application\lib\Pagination;
use application\models\Admin;



class MainController extends Controller {

    public function indexAction()
    {
        $pagination = new Pagination($this->route, $this->model->postsCount());
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $this->model->postsList($this->route),
        ];
        $this->view->render('Home page', $vars);
    }


    public function aboutAction()
    {
        $this->view->render('About me');
    }


    public function contactAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->contactValidate($_POST)) {
                $this->view->message('Error', $this->model->error);
            }
            mail('myblog@my-newsite.fun', 'Blog',
            $_POST['name'].'('.$_POST['email'].'), '.$_POST['text']);

            $this->view->location('contact');
        }
        $this->view->render('Contacts');
    }


    public function postAction()
    {
        $adminModel = new Admin;

        if (!$adminModel->isPostExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $vars = ['data' => $adminModel->postData($this->route['id'])[0]];

        $this->view->render('Post', $vars);
    }

}