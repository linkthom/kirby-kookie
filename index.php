<?php

Kirby::plugin('linkthom/kookie', [
	'options' => [
		// Colors
		'color' => '#000000',
		'background-color' => '#ffffff',
		'color-accept' => '#ffffff',
		'background-color-accept' => '#000000',
		'color-reject' => '#ffffff',
		'background-color-reject' => '#777777',
		// Content
		'text' => 'We are using cookies... click on Adjust to change the settings...',
		'text-adjust' => 'The following cookies are set...',
		'link' => 'privacy',
		'linkText' => 'Learn more',
		'accept' => 'Accept',
		'adjust' => 'Adjust',
		'reject' => 'Reject',
	],
	'snippets' => [
		'kookie' => __DIR__ . '/snippets/kookie.php'
	],
	'routes' => function ($kirby) {
		return [
		[
			'pattern' => 'kookie/cookies_accepted',
			'action' => function () {
				return snippet('cookies_accepted', [], true);
			}
		]
		];
	}
]);
