<?php

class MyController extends Zend_Controller_Action
{

    protected $appAcl;

    public function init()
    {
        /* Initialize action controller here */
        $this->acl = new App_Acl();
    }

    public function indexAction()
    {
        
        $this->appAcl = new App_Acl();
        $this->view->result = $this->appAcl->isAllowed(App_Roles::ADMIN, App_Resources::ADMIN_SECTION);
       // $acl = new Zend_Acl();
       // $acl->isAllowed(App_Roles::ADMIN,App_Resources::ADMIN_SECTION);


        //$this->assertTrue($this->acl->isAllowed(App_Roles::ADMIN, App_Resources::ADMIN_SECTION));
        //$this->assert($this->acl->)
    }
}
