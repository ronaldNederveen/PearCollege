
<div class="rssfeed-outer">
<?php
echo "<!--begin rssFeed-->";
// Inladen van RSS feed van apple
$feedRSS = simplexml_load_file("https://developer.apple.com/news/rss/news.rss");



if (!empty($feedRSS)) {
    echo "<h2>Apple's Latest News</h2>";
    echo "<div class=\"rssFeed\">";
    

    $i = 0;

    foreach ($feedRSS->channel->item as $feed_item) {
        if ($i == 10) {
            break;
        }
        if (str_contains($feed_item->description, "<img")) {
            echo "<div class=\"rssItem\">";
            echo extractRSSImage($feed_item->description);
            echo "<h3>" . $feed_item->title . "</h3>";
            echo "<a class='feed_title' href=\"" . $feed_item->link . "\">" . $feed_item->title . "</a>";
            echo "<div class='feedPubDate'>" . $feed_item->pubDate . "</div>";
            echo "</div>";
            $i++;
        }
    }
    echo "</div>";
    echo "</div>";
}

// functie voor het verkrijgen van alleen de image vanuit de tekst van de RSS feed
function extractRSSImage($feedDescription)
{
    $withoutStart = substr($feedDescription, 34);
    $end = strpos($withoutStart, ">");
    $image = substr($withoutStart, 0, $end);
    return "<div class='inline-article-image'>" . $image . "></div>";
}
echo "<!--einde rssFeed-->";
?>
</div>