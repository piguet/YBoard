<?php

// Routing rules for the router
// URL Regex => array(Controller name, Action name]
return [
    '#^/$#' => ['Index', 'index'],

    // Gold account
    '#^/gold#' => ['GoldAccount', 'index'],

    // Info pages
    '#^/faq#' => ['InfoPages', 'faq'],
    '#^/rules#' => ['InfoPages', 'rules'],
    '#^/about#' => ['InfoPages', 'about'],
    '#^/advertising#' => ['InfoPages', 'advertising'],

    // Log in/-out
    '#^/login$#' => ['LogInOut', 'login'],
    '#^/logout$#' => ['LogInOut', 'logout'],

    // Scripts
    '#^/scripts/posts/submit$#' => ['Post', 'submit'],
    '#^/scripts/posts/delete$#' => ['Post', 'delete'],
    '#^/scripts/posts/redirect/([0-9]+)#' => ['Post', 'redirect'],

    // Boards
    // Checked at the end so other rules override
    '#^/([a-zA-Z0-9åäö]+)-?([2-9]|[1-9][0-9]+)?/$#' => ['Board', 'index'],
    '#^/([a-zA-Z0-9åäö]+)/([0-9]+)$#' => ['Thread', 'index'],

    // Everything else should just return a 404
    '#.*#' => ['Errors', 'notFound'],
];
