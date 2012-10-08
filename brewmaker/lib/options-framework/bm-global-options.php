<?php

    $options[] = array(
        'name' => 'Global Settings',
        'type' => 'heading');

    $options[] = array(
        'name' => 'Google Analytics',
        'desc' => 'Your Google Analytics Key. Format: UA-XXXXXXX-X',
        'id' => 'google_analytics_ua',
        'std' => 'Default',
        'class' => 'mini',
        'type' => 'text');

	$options[] = array(
		'name' => 'Track outbound links and downloads',
		'desc' => 'Any links to content outside of your site will be tracked as "/external/[URL]."',
		'id' => 'track_outbound_links',
		'std' => '1',
		'type' => 'checkbox');
