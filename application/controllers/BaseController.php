<?php

class BaseController extends Zend_Controller_Action
{

    public function init ()
    {
        // 初始化我们的数据库适配器
        $url = constant("APPLICATION_PATH") . DIRECTORY_SEPARATOR .
                 'configs/application.ini';
        $dbconfig = new Zend_Config_Ini($url, "mysql");
        $db = Zend_Db::factory($dbconfig->db);
        $db->query("set names utf8");
        Zend_Db_Table::setDefaultAdapter($db);
    }
}