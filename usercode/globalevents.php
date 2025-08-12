<?php
class class_GlobalEvents extends GlobalEventsBase
{
	function init() {
		$this->events = array(
	'pageEvents' => array(
		'AfterAppInit' => true 
	),
	'onScreenEvents' => array(
		 
	),
	'dashboardEvents' => array(
		 
	),
	'buttons' => array(
		'12272' => true,
		'12273' => true,
		'12274' => true 
	),
	'maps' => array(
		 
	),
	'tablePermissions' => array(
		 
	),
	'recordEditable' => array(
		 
	) 
);
	}

	
	
	// custom buttons 
	
	// ajax code snippets
	
	
	// field events
		// field event - start_date_checked
	function fieldEvent_12275( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();
		
		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		// Sample:
$result["upper"] = strtoupper( $params["value"] );;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}


		// field event - completed_date_checked
	function fieldEvent_12276( $_params )
	{
		$result = array();

		$button = $this->prepareButtonContext( $_params );
		$ajax = $button; 
		$keys = $button->getKeys();
		
		// .NET naming
		$parameters = $_params;
		$params = &$_params;

		// Sample:
$result["upper"] = strtoupper( $params["value"] );;

		RunnerContext::pop();
		echo runner_json_encode( $result);
		$button->deleteTempFiles();
	}


	

	// code snippets
	




}
?>
