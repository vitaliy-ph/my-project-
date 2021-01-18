<?php


namespace application\models;

use application\core\Model;

class Users extends Model
{

    public function validate($input, $post)
    {
        $rules = [
            'login' => [
                'pattern' => '#^[a-z0-9]{3,15}$#',
                'message' => 'username is incorrect (only Latin letters and numbers from 3 to 15 characters are allowed',
            ],
            'password' => [
                'pattern' => '#^[a-z0-9]{10,30}$#',
                'message' => 'password is incorrect (only Latin letters and numbers from 10 to 30 characters are allowed',

            ],
        ];
        foreach ($input as $val) {
            if (!isset($post[$val]) or !preg_match($rules[$val]['pattern'], $post[$val])) {
                $this->error = $rules[$val]['message'];
                return false;
            }
        }
        return true;
    }


    public function checkLoginExists($login)
    {
        $params = [
            'login' => $login,
        ];
        if ($this->db->column('SELECT id FROM users WHERE login = :login', $params)) {
            $this->error = 'this username is already in use';
            return false;
        }
        return true;
    }


    public function register($post)
    {

        $params = [
            'id' => '',
            'login' => $post['login'],
            'password' => password_hash($post['password'], PASSWORD_BCRYPT),

        ];
        $this->db->query('INSERT INTO users VALUES (:id, :login, :password )', $params);
    }

    public function checkData($login, $password)
    {
        $params = [
            'login' => $login,
        ];
        $hash = $this->db->column('SELECT password FROM users WHERE login = :login', $params);
        if (!$hash or !password_verify($password, $hash)) {
            return false;
        }
        return true;
    }

    public function login($login)
    {
        $params = [
            'login' => $login,
        ];
        $data = $this->db->row('SELECT * FROM users WHERE login = :login', $params);
        $_SESSION['users'] = $data[0];
    }
}

