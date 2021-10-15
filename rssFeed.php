<?php

include "header.php";
?>

<?php
// Inladen van RSS feed van apple
$feedRSS = simplexml_load_file("https://developer.apple.com/news/rss/news.rss");



if (!empty($feedRSS)) {
    echo "<div class=\"rssFeed\">";
    echo "<h2>Apple's Latest News</h2>";

    $i = 0;

    foreach ($feedRSS->channel->item as $feed_item) {
        if ($i == 10) {
            exit;
        }
        if (str_contains($feed_item->description, "<img")) {
            echo "<div class=\"rssItem\">";

            echo "<h3>" . $feed_item->title . "</h3>";
            echo $feed_item->description;
            // echo strchr($feed_item->description, "img", true);
            // echo implode(' ', array_slice(explode(' ', $feed_item->description), 0, 14)) . "...";
            echo "<a class='feed_title' href=\"" . $feed_item->link . "\">" . $feed_item->title . "</a>";
            echo "<div class='feedPubDate'>" . $feed_item->pubDate . "</div>";
            echo "</div>";
            $i++;
        }
    }
    echo "</div>";
}
