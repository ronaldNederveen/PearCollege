<?php


  
//Loading in the JSON file
$news = file_get_contents("latest-news.json");
//JSON data converting to PHP Array
$news = json_decode($news, true);

    //Function to print ever news article block 
    //Input: Array with information about the news article
    //Output: News article block
    function NewsArticle($value){
        
        echo "<div class=\"ln\"> ";
        echo "<img src=\"".$value['image']."\" alt=\"news\" class=\"imgln\"/>"; #Image for the news 
        echo "<div class=\"text-link\">";
        echo "<p class=\"lntext\">".$value['title']."</p>"; #Title for the news 
        echo "<a class=\"link-news\" href=\"\#\" onclick=\"toggleReadMore(".$value['id'].")\">Read more</a>"; #link to the news 
        echo "</div></div>";
    }
?>

<div class="latest-block">
<!-- title of latest news -->
 <p class="title-news">Latest News</p>


 <?php 
   
    echo "<div class=\"latest-news\">";
    //Loop for all the JSON objects / different news articles 
    foreach($news as $news_article){
        NewsArticle($news_article);
    }
?>
    


    </div>
</div>




