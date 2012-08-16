<?php

/**
 * Example of the campaignBounceMessages() API call
 * @link http://apidocs.mailchimp.com/api/1.3/campaignbouncemessages.func.php
 * @author Ben Tadiar <ben@handcraftedbyben.co.uk>
 */

// Require the bootstrap
require_once(dirname(__FILE__) . '/../bootstrap.php');

// Retrieve the campaign stats object
$statsManager = $mailchimp->getManager('CampaignStats');

$id = ''; // Specify the campaign ID

// Pull bounces for the campaign with ID # $id
$bounces = $statsManager->campaignBounceMessages($id);

// Dump the output
var_dump($bounces);
