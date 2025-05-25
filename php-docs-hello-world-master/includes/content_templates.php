<?php
/**
 * Content templates for First Berserker Khazan Wiki
 * Contains reusable components for wiki pages
 */

/**
 * Creates a wiki section header
 * 
 * @param string $title The section title
 * @param int $level The heading level (2-6)
 * @return string The formatted section header HTML
 */
function wiki_section_header($title, $level = 2) {
    $level = max(2, min(6, $level)); // Ensure level is between 2-6
    return "<h{$level} class=\"wiki-section-header\">{$title}</h{$level}>";
}

/**
 * Creates an info box for game details
 * 
 * @param string $title The info box title
 * @param array $data Associative array of label => value pairs
 * @return string The formatted info box HTML
 */
function wiki_info_box($title, $data) {
    $html = '<div class="wiki-info-box">';
    
    if (!empty($title)) {
        $html .= "<div class=\"info-box-title\">{$title}</div>";
    }
    
    $html .= '<table class="info-box-table"><tbody>';
    
    foreach ($data as $label => $value) {
        if (empty($label)) {
            // For image rows or spacers
            $html .= "<tr><td colspan=\"2\">{$value}</td></tr>";
        } else {
            $html .= "<tr>
                <td><strong>{$label}</strong></td>
                <td>{$value}</td>
            </tr>";
        }
    }
    
    $html .= '</tbody></table></div>';
    
    return $html;
}

/**
 * Creates a wiki link list with separators
 * 
 * @param array $links Array of link arrays with 'url' and 'text' keys
 * @param string $separator The separator character/string between links
 * @return string The formatted link list HTML
 */
function wiki_link_list($links, $separator = '♦') {
    $html = '<div class="wiki-link-list">';
    
    $linkItems = [];
    foreach ($links as $link) {
        if (isset($link['url']) && isset($link['text'])) {
            $linkItems[] = "<a href=\"{$link['url']}\">{$link['text']}</a>";
        }
    }
    
    $html .= implode(" {$separator} ", $linkItems);
    $html .= '</div>';
    
    return $html;
}

/**
 * Creates a wiki quote block
 * 
 * @param string $content The quote content
 * @param string $source The quote source/attribution
 * @return string The formatted quote block HTML
 */
function wiki_quote($content, $source = '') {
    $html = "<blockquote class=\"wiki-quote\">";
    $html .= "<p>{$content}</p>";
    
    if (!empty($source)) {
        $html .= "<cite>— {$source}</cite>";
    }
    
    $html .= "</blockquote>";
    
    return $html;
}

/**
 * Creates a wiki update note
 * 
 * @param string $title The update title
 * @param string $content The update content
 * @return string The formatted update note HTML
 */
function wiki_update_note($title, $content) {
    $html = "<div class=\"wiki-update-note\">";
    $html .= "<h3 class=\"update-title\">{$title}</h3>";
    $html .= "<div class=\"update-content\">{$content}</div>";
    $html .= "</div>";
    
    return $html;
}

/**
 * Creates a wiki feature card with image
 * 
 * @param string $title The card title
 * @param string $image_url The image URL
 * @param string $link_url The link URL
 * @return string The formatted feature card HTML
 */
function wiki_feature_card($title, $image_url, $link_url) {
    $html = "<div class=\"wiki-feature-card\">";
    $html .= "<a href=\"{$link_url}\" class=\"feature-card-link\">";
    $html .= "<div class=\"feature-card-title\">{$title}</div>";
    $html .= "<div class=\"feature-card-image\"><img src=\"{$image_url}\" alt=\"{$title}\"></div>";
    $html .= "</a>";
    $html .= "</div>";
    
    return $html;
}

/**
 * Creates a wiki list (bulleted or numbered)
 * 
 * @param array $items Array of list items
 * @param string $type List type ('ul' for bulleted, 'ol' for numbered)
 * @return string The formatted list HTML
 */
function wiki_list($items, $type = 'ul') {
    $type = in_array(strtolower($type), ['ul', 'ol']) ? strtolower($type) : 'ul';
    
    $html = "<{$type} class=\"wiki-list\">";
    
    foreach ($items as $item) {
        $html .= "<li>{$item}</li>";
    }
    
    $html .= "</{$type}>";
    
    return $html;
}
?>
