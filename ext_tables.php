<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');
$tempColumns = Array (
	"tx_blueprintstyledcontent_span" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:blueprint_styled_content/locallang_db.xml:tt_content.tx_blueprintstyledcontent_span",		
		"config" => Array (
			"type"     => "input",
			"size"     => "4",
			"max"      => "4",
			"eval"     => "int",
			"checkbox" => "0",
			"range"    => Array (
				"upper" => "1000",
				"lower" => "0"
			),
			"default" => 0
		)
	),
	"tx_blueprintstyledcontent_gridclass" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:blueprint_styled_content/locallang_db.xml:tt_content.tx_blueprintstyledcontent_gridclass",		
		"config" => Array (
			"type" => "select",
			"items" => Array (
				Array("LLL:EXT:blueprint_styled_content/locallang_db.xml:tt_content.tx_blueprintstyledcontent_gridclass.I.0", "0"),
				Array("LLL:EXT:blueprint_styled_content/locallang_db.xml:tt_content.tx_blueprintstyledcontent_gridclass.I.1", "1"),
				Array("LLL:EXT:blueprint_styled_content/locallang_db.xml:tt_content.tx_blueprintstyledcontent_gridclass.I.2", "2"),
				Array("LLL:EXT:blueprint_styled_content/locallang_db.xml:tt_content.tx_blueprintstyledcontent_gridclass.I.3", "3"),
			),
			"size" => 1,	
			"maxitems" => 1,
		)
	),
	"tx_blueprintstyledcontent_append" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:blueprint_styled_content/locallang_db.xml:tt_content.tx_blueprintstyledcontent_append",		
		"config" => Array (
			"type"     => "input",
			"size"     => "4",
			"max"      => "4",
			"eval"     => "int",
			"checkbox" => "0",
			"range"    => Array (
				"upper" => "1000",
				"lower" => "0"
			),
			"default" => 0
		)
	),
	"tx_blueprintstyledcontent_prepend" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:blueprint_styled_content/locallang_db.xml:tt_content.tx_blueprintstyledcontent_prepend",		
		"config" => Array (
			"type"     => "input",
			"size"     => "4",
			"max"      => "4",
			"eval"     => "int",
			"checkbox" => "0",
			"range"    => Array (
				"upper" => "1000",
				"lower" => "0"
			),
			"default" => 0
		)
	),
	"tx_blueprintstyledcontent_push" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:blueprint_styled_content/locallang_db.xml:tt_content.tx_blueprintstyledcontent_push",		
		"config" => Array (
			"type"     => "input",
			"size"     => "4",
			"max"      => "4",
			"eval"     => "int",
			"checkbox" => "0",
			"range"    => Array (
				"upper" => "1000",
				"lower" => "0"
			),
			"default" => 0
		)
	),
	"tx_blueprintstyledcontent_pull" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:blueprint_styled_content/locallang_db.xml:tt_content.tx_blueprintstyledcontent_pull",		
		"config" => Array (
			"type"     => "input",
			"size"     => "4",
			"max"      => "4",
			"eval"     => "int",
			"checkbox" => "0",
			"range"    => Array (
				"upper" => "1000",
				"lower" => "0"
			),
			"default" => 0
		)
	),
);


t3lib_div::loadTCA("tt_content");
t3lib_extMgm::addTCAcolumns("tt_content",$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes("tt_content","--div--;Blueprint CSS,tx_blueprintstyledcontent_span;;;;1-1-1, tx_blueprintstyledcontent_gridclass, tx_blueprintstyledcontent_append, tx_blueprintstyledcontent_prepend, tx_blueprintstyledcontent_push, tx_blueprintstyledcontent_pull");

t3lib_extMgm::addStaticFile($_EXTKEY,'static/Blueprint_Styled_Content/', 'Blueprint Styled Content');
?>