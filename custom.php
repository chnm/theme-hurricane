<?php
/**
 * Generate an unordered list of navigation links (and subnavigation links),
 * with class "current" for any links corresponding to the current page
 *
 * For example:
 * <code>nav(array('Themes' => uri('themes/browse')));</code>
 * generates
 * <code><li class="nav-themes"><a href="themes/browse">Themes</a></li></code>
 *
 * @uses is_current_uri()
 * @param array A keyed array, where key = text of the link, and value = uri of the link,
 * or value = another ordered array $a with the following recursive structure:
 * $a['uri'] = URI of the link
 * $a['subnav_links'] = array of $sublinks for the sub navigation (this can be recursively structured like $links)
 * $a['subnav_attributes'] = associative array of attributes for the sub navigation
 *
 * For example:
 * $links = array('Browse' => 'http://yoursite.com/browse',
 *                'Categories' => array('uri' => 'http://yoursite.com/categories',
 *                                      'subnav_links' => array('Dogs' => 'http://yoursite.com/dogs',
 *                                                              'Cats' => 'http://yoursite.com/cats'),
 *                                      'subnav_attributes' => array('class' => 'subnav')),
 *                'Contact Us' => 'http://yoursite.com/contact-us');
 * echo nav($links);
 *
 * This would produce:
 * <li><a href="http://yoursite.com/browse">Browse</a></li>
 * <li><a href="http://yoursite.com/categories">Categories</a>
 *     <ul class="subnav">
 *        <li><a href="http://yoursite.com/dogs">Dogs</a></li>
 *        <li><a href="http://yoursite.com/cats">Cats</a></li>
 *    </ul>
 * </li>
 * <li><a href="http://yoursite.com/contact-us">Contact Us</a><li>
 *
 * @param integer|null $maxDepth The maximum number of sub navigation levels to display.
 * By default it is 0, which means it will only display the top level of links.
 * If null, it will display all the levels.
 *
 * @return string HTML for the unordered list
 */
function legacy_nav(array $links, $maxDepth = 0)
{
    // Get the current uri from the request
    $current = Zend_Controller_Front::getInstance()->getRequest()->getRequestUri();

    $nav = '';
    foreach( $links as $text => $uri ) {

        // Get the subnavigation attributes and links
        $subNavLinks = null;
        if (is_array($uri)) {
            $subNavLinks = $uri['subnav_links'];
            if (!is_array($subNavLinks)) {
                $subNavLinks = array();
            }
            $subNavAttributes = $uri['subnav_attributes'];
            if (!is_array($subNavAttributes)) {
                $subNavAttributes = array();
            }
            $uri = (string) $uri['uri'];
        }

        // Build a link if the uri is available, otherwise simply list the text without a hyperlink
        $nav .= '<li class="' . text_to_id($text, 'nav');
        if ($uri == '') {
            $nav .= '">' . html_escape($text);
        } else {
            // If the uri is the current uri, then give it the 'current' class
            $nav .= (is_current_url($uri) ? ' current':'') . '">' . '<a href="' . html_escape($uri) . '">' . html_escape($text) . '</a>';
        }

        // Display the subnavigation links if they exist and if the max depth has not been reached
        if ($subNavLinks !== null && ($maxDepth === null || $maxDepth > 0)) {
            $subNavAttributes = !empty($subNavAttributes) ? ' ' . tag_attributes($subNavAttributes) : '';
            $nav .= "\n" . '<ul' . $subNavAttributes . '>' . "\n";
            if ($maxDepth === null) {
                $nav .= legacy_nav($subNavLinks, null);
            } else {
                $nav .= legacy_nav($subNavLinks, $maxDepth - 1);
            }
            $nav .= '</ul>' . "\n";
        }

        $nav .= '</li>' . "\n";
    }

    return $nav;
}
