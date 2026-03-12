<?php
// This file is generated. Do not modify it manually.
return array(
	'icons' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'lumopos/icons',
		'version' => '1.0.0',
		'title' => 'Icons',
		'category' => 'design',
		'icon' => 'nametag',
		'description' => 'Show icons on your website.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'iconName' => array(
				'type' => 'string',
				'default' => 'check'
			),
			'customIconUrl' => array(
				'type' => 'string',
				'default' => ''
			),
			'customIconId' => array(
				'type' => 'number'
			),
			'useCustomIcon' => array(
				'type' => 'boolean',
				'default' => false
			)
		),
		'textdomain' => 'icons',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
