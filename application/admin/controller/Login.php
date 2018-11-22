<?php
namespace app\admin\controller;

use think\Controller;

class Login extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 登录页面
     * @return string
     */
    public function index()
    {
        return $this->fetch();
    }
}
