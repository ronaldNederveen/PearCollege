<?php

include "header.php";
?>

<?php
// Inladen van RSS feed van apple
$feedRSS = simplexml_load_file("https://developer.apple.com/news/rss/news.rss");



if (!empty($feedRSS)) {
echo "<div class=\"rssFeed\">";
    foreach ($feedRSS->channel->item as $feed_item) {
        echo "<div class=\"rssItem\">";
        echo "<h3>" . $feed_item->title . "</h3>";
        echo "<a class=\"feed_title\" href=\"" . $feed_item->link . "\">" . $feed_item->title . "</a>";
        // echo strlen($feed_item->description);
        echo substr_count($feed_item->descripton,"img",0);
        echo implode(' ', array_slice(explode(' ', $feed_item->description), 0, 14)) . "...";
        echo "</div>";
        echo "<hr>";
    }
    echo "</div>";
}

function enter()
{
    echo "<br>";
}
