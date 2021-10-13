<?php
  include "header.php";
 ?>
 
<div class="latest-block">
<!-- title of latest news -->
 <p class="title-news">Latest News</p>


<!-- news blocks -->
 <div class="latest-news">
     <div class="ln"> 
         <img src="assets/img/news-img/example.PNG" alt="news" class="imgln">   <!-- img for the latest news -->
            <div class="text-link">
                <p class="lntext">Lorum Ipsum</p>                                      <!-- summary of the news -->
                <a class="link-news" href="" >Read more</a>                            <!-- link to the news -->
            </div>
         </div>
     <div class="ln"> 
         <img src="assets/img/news-img/example.PNG" alt="news" class="imgln">
            <div class="text-link">
                <p class="lntext">Lorum Ipsum</p>                                      <!-- summary of the news -->
                <a class="link-news" href="" >Read more</a>                            <!-- link to the news -->
            </div>   
         </div>
     <div class="ln"> 
         <img src="assets/img/news-img/example.PNG" alt="news" class="imgln">
            <div class="text-link">
                <p class="lntext">Lorum Ipsum</p>                                      <!-- summary of the news -->
                <a class="link-news" href="" >Read more</a>                            <!-- link to the news -->
            </div>  
         </div>
     <div class="ln"> 
         <img src="assets/img/news-img/example.PNG" alt="news" class="imgln">
            <div class="text-link">
                <p class="lntext">Lorum Ipsum</p>                                      <!-- summary of the news -->
                <a class="link-news" href="" >Read more</a>                            <!-- link to the news -->
            </div>
         </div>
     <div class="ln"> 
         <img src="assets/img/news-img/example.PNG" alt="news" class="imgln">
            <div class="text-link">
                <p class="lntext">Lorum Ipsum</p>                                      <!-- summary of the news -->
                <a class="link-news" href="" >Read more</a>                            <!-- link to the news -->
            </div>  
         </div>     
     <div class="ln"> 
         <img src="assets/img/news-img/example.PNG" alt="news" class="imgln">
            <div class="text-link">
                <p class="lntext">Lorum Ipsum</p>                                      <!-- summary of the news -->
                <a class="link-news" href="" >Read more</a>                            <!-- link to the news -->
            </div>  
         </div>    
    </div>
</div>


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
        echo "<img src=\"".$value['image']."\" alt=\"news\" class=\"imgln\"/>";
        echo "<div class=\"text-link\">";
        echo "<p class=\"lntext\">".$value[title]."</p>";
        echo "<a class=\"link-news\" href=\"".$value[link]."\" >Read more</a>";
        echo "</div></div>";
    }
?>

<?php 
    echo "<div class=\"latest-block\">";
    echo "<p class=\"title-news\">Latest News</p>";


    echo "<div class=\"latest-news\">";
    //Loop for all the JSON objects / different news articles 
    foreach($news as $news_article){
        NewsArticle($news_article);
    }

    echo "</div></div>";
?>