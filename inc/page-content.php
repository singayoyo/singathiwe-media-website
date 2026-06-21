<?php
/**
 * Curated service-page content.
 *
 * @package Singathiwe_Media
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function singathiwe_media_page_content( $slug ) {
	$pages = array(
		'about' => array(
			'eyebrow' => 'Singathiwe means protected',
			'title'   => 'We protect campaign momentum.',
			'intro'   => 'Singathiwe Media is a South African digital-first media and activations agency. We build campaigns, experiences, content and systems that help brands stay present before, during and after the moment.',
			'cards'   => array(
				array( 'Campaign roots', 'Our foundation is in campaigns, activations and cultural moments where brands meet real people.' ),
				array( 'Digital-first thinking', 'Every activation needs a digital memory: landing pages, content, tracking, follow-up and reporting.' ),
				array( 'Protected systems', 'We build the digital systems that carry leads, stories, audiences and momentum after campaign launch.' ),
			),
		),
		'activations' => array(
			'eyebrow' => 'Physical moments, digital memory',
			'title'   => 'Activations people can feel and brands can measure.',
			'intro'   => 'We create launch moments, pop-ups, brand experiences and field activations designed for audience connection, content capture and campaign follow-through.',
			'cards'   => array(
				array( 'Concept', 'A clear idea, audience logic and activation mechanic.' ),
				array( 'Production', 'Crew, location, flow, assets and on-site delivery.' ),
				array( 'Capture', 'Photo, video, social moments, creator content and recaps.' ),
				array( 'Follow-up', 'Lead capture, WhatsApp or email journeys and campaign reports.' ),
			),
		),
		'marketing' => array(
			'eyebrow' => 'Always-on campaign engine',
			'title'   => 'Digital marketing that keeps the campaign moving.',
			'intro'   => 'We build the rollout around the activation: social strategy, paid media, creator amplification, content calendars and reporting loops.',
			'cards'   => array(
				array( 'Social rollout', 'Platform-native content plans before, during and after the campaign moment.' ),
				array( 'Paid media', 'Traffic, awareness and conversion journeys built around campaign objectives.' ),
				array( 'Reporting', 'Dashboards and insights that show what moved, what converted and what to do next.' ),
			),
		),
		'creatives' => array(
			'eyebrow' => 'Creative Network',
			'title'   => 'The hands, eyes and voice behind the campaign.',
			'intro'   => 'We collaborate with photographers, videographers, designers, editors, writers, stylists, creators and production crews who understand local culture and campaign pace.',
			'cards'   => array(
				array( 'Visual storytellers', 'Campaign photography, reels, edits, recaps and video packages.' ),
				array( 'Design and voice', 'Visual systems, campaign language, copy direction and art direction.' ),
				array( 'Culture connectors', 'Creators, hosts and community voices who help brands enter culture with care.' ),
			),
		),
		'digital-systems' => array(
			'eyebrow' => 'Campaign OS',
			'title'   => 'Digital systems that protect the work after launch.',
			'intro'   => 'We build landing pages, CRM flows, automations, dashboards and AI-assisted workflows that help campaigns keep producing value.',
			'cards'   => array(
				array( 'Landing pages', 'Campaign pages for launch, RSVP, lead capture and product journeys.' ),
				array( 'CRM flows', 'Audience capture, segmentation and follow-up logic.' ),
				array( 'Automation', 'WhatsApp, email, forms, notifications and internal workflows.' ),
				array( 'Dashboards', 'Reporting views that show campaign health and next actions.' ),
			),
		),
	);

	return isset( $pages[ $slug ] ) ? $pages[ $slug ] : null;
}

