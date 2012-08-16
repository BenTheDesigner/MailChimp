<?php

/**
 * Example of the campaignMembers() API call
 * @link http://apidocs.mailchimp.com/api/1.3/campaignmembers.func.php
 * @author Ben Tadiar <ben@handcraftedbyben.co.uk>
 */

// Require the bootstrap
require_once(dirname(__FILE__) . '/../bootstrap.php');

// Retrieve the campaign stats object
$statsManager = $mailchimp->getManager('CampaignStats');

$id = '5dea81a67d'; // Specify the campaign ID

// Pull reports for the campaign with ID # $id
$reports = $statsManager->campaignAbuseReports($id);

// Dump the output
var_dump($reports);