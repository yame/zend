<?php

class IndexController extends Zend_Controller_Action
{

	public function init( )
	{
		
	/* Initialize action controller here */
	}

	public function indexAction( )
	{
	
	}

	public function testAction( )
	{
		$this->view->test = "Hi,Yame";
	}

	public function preDispatch( )
	{
		$this->view->render( 'index/_sidebar.phtml' );
	}

}

