<?php
namespace App\Validation;

use Validator;

class PostValidator
{
    public static function validate($input)
    {
        $rules = [
            'title' => 'Required|Min:4|Max:80|alpha_spaces',
            'body' => 'Required',
        ];
        return Validator::make($input, $rules);

    }
}

//namespace Alireza\Authentication;
//
//use Config, Input, Session, Hash;
//use App\User;
//
//Class MyAuth
//{
//    public $redirect_login = '/users/home';
//    public $redirect_logout = '/users/logout';
//    public $login = '/user/login';
//    private $data;
//
//    public function __construct()
//    {
//        $this->data = ['username' => Input::get('username'), 'password' => Input::get('password')];
//    }
//
//    public function login($data = false)
//    {
//        $this->data = $data;
//
//        if ($this->data && !is_array($this->data))
//            return redirect($this->redirect_login)->with('message', 'sorry no array to log-in manually');
//
//        if ($this->data && !Session::has('user')) {
//            $result = User::Where(function ($query) {
//                $query->where('email', $this->data['username'])
//                    ->where('password', Hash::make($this->data['password']));
//            })->first();
//
//            if ($result) {
//                Session::put('user', $result);
//                return Redirect($this->redirect_login)->with('message', 'Welcome log-in succeeded ');
//            }
//            Session::flush();
//            return redirect($this->redirect_logout)->with('message', 'Login Failed, wrong username or password');
//        }
//    }
//
//    public function logout()
//    {
//        Session::flush();
//        return redirect($this->login)->with('message', 'logout succeeded');
//    }
//
//}