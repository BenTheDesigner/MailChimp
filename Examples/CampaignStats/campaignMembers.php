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

$id = ''; // Specify the campaign ID

// Pull members for the campaign with ID # $id
$members = $statsManager->campaignMembers($id);

// Dump the output
var_dump($members);
