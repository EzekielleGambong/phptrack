<?php
    function crawlBing($keyword, $numResults = 5) {
        $searchUrl = "https://www.bing.com/search?q=" . urlencode($keyword);
        $html = file_get_contents($searchUrl);
        preg_match_all('/<h2.*?>\s*<a[^>]+href="([^"]+)"[^>]*>(.*?)<\/a>/', $html, $matches, PREG_SET_ORDER);

        
        echo '<h1>Top ' . $numResults . ' Results for "' . $keyword . '" on Bing:</h1>';
        echo '<ol>';
        for ($i = 0; $i < $numResults && $i < count($matches); $i++) {
            $title = strip_tags($matches[$i][2]);
            $link = $matches[$i][1];
            echo '<li><a href="' . $link . '" target="_blank">' . $title . '</a></li>';
        }
        echo '</ol>';
    }

    $keyword = "software engineer";
    $numResults = 5;
    crawlBing($keyword, $numResults);

?>
