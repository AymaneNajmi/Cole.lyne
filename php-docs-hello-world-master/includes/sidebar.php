<?php
/**
 * Sidebar template for First Berserker Khazan Wiki
 * Contains the sidebar navigation, recent updates, and popular content
 */
?>
<aside class="wiki-sidebar">
    <div class="sidebar-section search-section">
        <form class="search-form" action="/search" method="get">
            <input type="text" name="q" placeholder="Search the wiki...">
            <button type="submit" class="search-button">Search</button>
        </form>
    </div>

    <div class="sidebar-section navigation-section">
        <h3>Wiki Navigation</h3>
        <ul class="sidebar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/khazan">Khazan</a></li>
            <li>
                <span class="dropdown-toggle">Gameplay</span>
                <ul class="dropdown-menu">
                    <li><a href="/combat">Combat</a></li>
                    <li><a href="/skills">Skills</a></li>
                    <li><a href="/attributes">Attributes</a></li>
                    <li><a href="/progression">Progression</a></li>
                </ul>
            </li>
            <li>
                <span class="dropdown-toggle">Equipment</span>
                <ul class="dropdown-menu">
                    <li><a href="/weapons">Weapons</a></li>
                    <li><a href="/armor">Armor</a></li>
                    <li><a href="/accessories">Accessories</a></li>
                    <li><a href="/upgrades">Upgrades</a></li>
                </ul>
            </li>
            <li>
                <span class="dropdown-toggle">World</span>
                <ul class="dropdown-menu">
                    <li><a href="/locations">Locations</a></li>
                    <li><a href="/npcs">NPCs</a></li>
                    <li><a href="/enemies">Enemies</a></li>
                    <li><a href="/bosses">Bosses</a></li>
                    <li><a href="/lore">Lore</a></li>
                </ul>
            </li>
            <li>
                <span class="dropdown-toggle">Guides</span>
                <ul class="dropdown-menu">
                    <li><a href="/beginners-guide">Beginner's Guide</a></li>
                    <li><a href="/builds">Builds</a></li>
                    <li><a href="/walkthrough">Walkthrough</a></li>
                    <li><a href="/boss-strategies">Boss Strategies</a></li>
                    <li><a href="/secrets">Secrets</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="sidebar-section recent-updates">
        <h3>Recent Updates</h3>
        <ul class="update-list">
            <li>
                <span class="update-date">May 15, 2025</span>
                <a href="/patch-notes">QoL Enhancements & Change Appearance Feature</a>
            </li>
            <li>
                <span class="update-date">May 10, 2025</span>
                <a href="/boss-rush-modes">New Boss Rush Modes</a>
            </li>
            <li>
                <span class="update-date">Apr 28, 2025</span>
                <a href="/dual-wield-build">Dual Wield Build Guide</a>
            </li>
        </ul>
    </div>

    <div class="sidebar-section popular-content">
        <h3>Popular Content</h3>
        <ul class="popular-list">
            <li><a href="/khazan-review">Khazan First Berserker Review</a></li>
            <li><a href="/beginner-tips">Beginner Tips</a></li>
            <li><a href="/best-weapons">Best Weapons Guide</a></li>
            <li><a href="/boss-locations">All Boss Locations</a></li>
        </ul>
    </div>
</aside>
