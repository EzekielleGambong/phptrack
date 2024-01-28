<?php

// Function to crawl Bing search results for a given keyword
function crawlBing($keyword, $numResults = 5) {
    $searchUrl = "https://www.bing.com/search?q=" . urlencode($keyword);
    $html = file_get_contents($searchUrl);

    // Use regular expressions to extract title and link
    preg_match_all('/<h2.*?>\s*<a[^>]+href="([^"]+)"[^>]*>(.*?)<\/a>/', $html, $matches, PREG_SET_ORDER);

    // Display the top results
    echo '<h1>Top ' . $numResults . ' Results for "' . $keyword . '" on Bing:</h1>';
    echo '<ol>';
    for ($i = 0; $i < $numResults && $i < count($matches); $i++) {
        $title = strip_tags($matches[$i][2]);
        $link = $matches[$i][1];
        echo '<li><a href="' . $link . '" target="_blank">' . $title . '</a></li>';
    }
    echo '</ol>';
}

// Specify the keyword and number of results
$keyword = "software engineer";
$numResults = 5;

// Call the crawlBing function
crawlBing($keyword, $numResults);

?>
