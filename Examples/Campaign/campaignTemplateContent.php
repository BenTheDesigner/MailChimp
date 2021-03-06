<?php

/**
 * Example of the campaignTemplateContent() API call
 * @link http://apidocs.mailchimp.com/api/1.3/campaigntemplatecontent.func.php
 * @author Ben Tadiar <ben@handcraftedbyben.co.uk>
 */

// Require the bootstrap
require_once(dirname(__FILE__) . '/../bootstrap.php');

// Retrieve the campaign manager object
$campaignManager = $mailchimp->getManager('Campaign');

$id = ''; // Specify the campaign ID

// Get template content for the campaign with ID # $id
$content = $campaignManager->campaignTemplateContent($id);

// Dump the output
var_dump($content);
