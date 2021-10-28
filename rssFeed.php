<div class="rssfeed-outer">
    <?php

    // Inladen van RSS feed van apple
    try {
        $feedRSS = simplexml_load_file("https://developer.apple.com/news/rss/news.rss");

        if (!empty($feedRSS)) {
            echo "<h2>Apple's Latest News</h2>";
            echo "<div class=\"rssFeed\">";

            $i = 0;
            // loop through all rss feed items
            foreach ($feedRSS->channel->item as $feed_item) {
                //end the feed at ten items
                if ($i == 10) {
                    break;
                }
                // print all the rss feed items that contains an image
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
        
    } catch (Exception $mistake) {
    }
    
    //function for getting only the image of the rss feed description
    function extractRSSImage($feedDescription)
    {
        //cut the start of the string
        $withoutStart = substr($feedDescription, 34);

        //look for position of the end of the image tag
        $end = strpos($withoutStart, ">");

        //cut the end of the description to only keep the image tag 
        $image = substr($withoutStart, 0, $end);

        return "<div class='inline-article-image'>" . $image . "></div>";
    }

    ?>
</div>