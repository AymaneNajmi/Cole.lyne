<?php
/**
 * Main index file for First Berserker Khazan Wiki
 * Entry point for the wiki application
 */

// Set page title
$page_title = "First Berserker Khazan Wiki";

// Include header
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');

// Include sidebar
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/sidebar.php');

// Include main page content
include_once($_SERVER['DOCUMENT_ROOT'] . '/content/main_page.php');

// Include footer
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');
?>
