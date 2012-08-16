<?php

/**
 * Example of the campaignAbuseReports() API call
 * @link http://apidocs.mailchimp.com/api/1.3/campaignabusereports.func.php
 * @author Ben Tadiar <ben@handcraftedbyben.co.uk>
 */

// Require the bootstrap
require_once(dirname(__FILE__) . '/../bootstrap.php');

// Retrieve the campaign stats object
$statsManager = $mailchimp->getManager('CampaignStats');

$id = ''; // Specify the campaign ID

// Pull reports for the campaign with ID # $id
$reports = $statsManager->campaignAbuseReports($id);

// Dump the output
var_dump($reports);
