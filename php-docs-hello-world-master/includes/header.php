<?php
/**
 * Header template for First Berserker Khazan Wiki
 * Contains the top navigation, logo, and main menu
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'First Berserker Khazan Wiki'; ?> - FextraLife</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/script.js" defer></script>
</head>
<body>
    <div class="main-container">
        <header class="site-header">
            <div class="top-bar">
                <div class="menu-toggle" id="menuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="logo">
                    <a href="/">
                        <img src="/assets/images/fextralife-logo.png" alt="FextraLife Logo">
                    </a>
                </div>
                <div class="user-actions">
                    <a href="#" class="sign-in-button">Sign In Now</a>
                </div>
            </div>
            
            <div class="wiki-header">
                <a href="/">
                    <img src="/assets/images/khazan-wiki-logo.png" alt="First Berserker Khazan Wiki">
                </a>
            </div>
            
            <nav class="main-navigation">
                <ul class="nav-menu">
                    <li><a href="/new" class="nav-item new">NEW</a></li>
                    <li><a href="/general" class="nav-item general">General</a></li>
                    <li><a href="/character" class="nav-item character">Character</a></li>
                    <li><a href="/equipment" class="nav-item equipment">Equipment</a></li>
                    <li><a href="/world" class="nav-item world">World</a></li>
                    <li><a href="/guides" class="nav-item guides">Guides</a></li>
                </ul>
            </nav>
        </header>
        
        <div class="content-wrapper">
