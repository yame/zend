<?php


class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

	protected function _initDoctype( )
	{
		$this->bootstrap( "View" );
		$view = $this->getResource( "View" );
		$view->doctype( "XHTML1_STRICT" );
	}

	protected function _initSidebar( )
	{
		$this->bootstrap( 'View' );
		$view = $this->getResource( 'View' );
		
		$view->placeholder( 'sidebar' )
			->// "prefix" -> markup to emit once before all items in collection
		setPrefix( 
			"<div class=\"sidebar\">\n    <div class=\"block\">\n" )
			->// "separator" -> markup to emit between items in a collection
		setSeparator( "</div>\n    <div class=\"block\">\n" )
			->// "postfix" -> markup to emit once after all items in a collection
		setPostfix( "</div>\n</div>" );
	}

}

