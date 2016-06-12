<?php
/**
 *
 * @package Recent Topics Extension
 * English translation by PayBas
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge(
	$lang, array(
		'RT_ENABLE'              => '«Aktuelle Themen» anzeigen',
		'RT_LOCATION'            => 'Anzeigelage einstellen der «Aktuelle Themen»',
		'RT_LOCATION_EXP'        => 'Ausgeschlossene Themen : pbTech/pbWoW3 (nur angezeigbar auf der Rechten Seite)',
		'RT_SORT_START_TIME'     => 'Nach Themen Startzeit sortieren',
		'RT_SORT_START_TIME_EXP' => 'Wenn diese Option aktiviert ist, werden die Themen nach dem Datum des ersten Beitrags anstelle des letzten Beitrags sortiert.',
		'RT_UNREAD_ONLY'         => 'Nur ungelesene Themen anzeigen',
		'RT_TOP'                 => 'Ansicht oben',
		'RT_BOTTOM'              => 'Ansicht unten',
		'RT_SIDE'                => 'Ansicht auf die Seite',
	)
);
