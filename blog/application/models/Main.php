<?php


namespace application\models;


use application\core\Model;


class Main extends Model {

    public $error;

    public function contactValidate($post)
    {
        $nameLen = iconv_strlen($post['name']);
        $textLen = iconv_strlen($post['text']);

        if ($nameLen < 3 or $nameLen > 20) {
            $this->error = 'name must contain between 3 and 20 characters';
            return false;
        } elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
            $this->error = 'E-mail address is incorrect';
            return false;
        } elseif ($textLen < 5 or $textLen > 500) {
            $this->error = 'message must contain between 5 and 500 characters';
            return false;
        }
        return true;
    }

    public function postsCount()
    {
        return $this->db->column('SELECT COUNT(id) FROM posts');
    }

    public function postsList($route)
    {
        $max = 5;

        $params = [
            'max' => $max,
            'start' => ((($route['page'] ?? 1) - 1) * $max),
        ];
        return $this->db->row('SELECT * FROM posts ORDER BY id DESC LIMIT :start, :max', $params);
    }

}