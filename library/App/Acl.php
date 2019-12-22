<?php

class App_Acl extends Zend_Acl
{
    public function __construct()
    {
        $this->add(new Zend_Acl_Resource(App_Resources::USER_SECTION));
        $this->add(new Zend_Acl_Resource(App_Resources::ADMIN_SECTION));

        $this->addRole(new Zend_Acl_Role(App_Roles::USER));
        $this->addRole(new Zend_Acl_Role(App_Roles::ADMIN),App_Roles::USER);

        $this->allow(App_Roles::ADMIN, App_Resources::ADMIN_SECTION);
        $this->allow(App_Roles::USER, App_Resources::USER_SECTION);

        //return $this;
        //echo $this->isAllowed(App_Roles::USER, App_Resources::ADMIN_SECTION) ? 'allowed' : 'denied';
    }
}