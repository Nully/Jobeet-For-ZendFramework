<?php

class Default_IndexController extends Zend_Controller_Action
{
    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $mapper = new Jobeet_Model_JobMapper();
        $this->view->jobs = $mapper->fetchAll();
    }


    public function showAction()
    {
        $mapper = new Jobeet_Model_JobMapper();
        $this->view->job = $mapper->find($this->_request->getParam("id", 0));
        if(empty($this->view->job)) {
            throw new Zend_Controller_Action_Exception(
                "Colu'd not found job.",
                404
            );
        }
    }
}

