<?php
// This file is generated. Do not modify it manually.
return array(
	'image-slider' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'portfolio/image-slider',
		'title' => 'Image Slider',
		'category' => 'widgets',
		'icon' => 'images-alt2',
		'description' => 'Automatic image slider block using Swiper.js',
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'items' => array(
				'type' => 'array',
				'default' => array(
					
				)
			),
			'width' => array(
				'type' => 'string',
				'default' => '100%'
			),
			'height' => array(
				'type' => 'string',
				'default' => 'auto'
			),
			'loop' => array(
				'type' => 'boolean',
				'default' => false
			),
			'delay' => array(
				'type' => 'number',
				'default' => 3000
			)
		),
		'editorStyle' => 'file:./editor.css',
		'render' => 'file:./render.php',
		'textdomain' => 'image-slider',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
