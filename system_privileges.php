<?php

define('system_privileges', array(

	array(
		"id"=>"dashboard",
		"description"=>"Dashboard",
		"privileges"=>array( # id=1 must be always page access
			array("id"=>1,"description"=>"Show Dashboard","value"=>false),
			array("id"=>1,"description"=>"Edit Dashboard","value"=>false),
			array("id"=>1,"description"=>"Delete Dashboard","value"=>false),
			array("id"=>1,"description"=>"Update Dashboard","value"=>false),
		),
	),
	array(
		"id"=>"referrals",
		"description"=>"Referrals",
		"privileges"=>array(
			array("id"=>1,"description"=>"Show Referrals","value"=>false),
			
		),
	),
	 array(
		 "id"=>"committee_rep",
		 "description"=>"Committee Report",
		 "privileges"=>array(
		 array("id"=>1,"description"=>"Show Committee Report","value"=>false),
		 ),

	),array(
		 "id"=>"maintenance",
		 "description"=>"Maintenance",
		 "privileges"=>array(
		 array("id"=>1,"description"=>"Show Maintenance","value"=>false),
		 ),
	),array(
		 "id"=>"Furnish",
		 "description"=>"Furnish",
		 "privileges"=>array(
		 array("id"=>1,"description"=>"Show Furnish","value"=>false),
         ),
    ),array(
    "id"=>"Report",
    "description"=>"Report",
    "privileges"=>array(
    array("id"=>1,"description"=>"Show Report","value"=>false),
    ),
         
	),
	
));
?>