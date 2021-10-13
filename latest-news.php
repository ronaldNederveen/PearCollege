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
    $news = file_get_contents("latest-news.json");

    $news = json_decode($news, true);

    function NewsArticle($value){
        echo "<div class=\"ln\"> ";
        echo "<img src=\"assets/img/news-img/\"latest-news-covid.jpeg\" alt=\"news\" class=\"imgln\"/>";
        echo "<div class=\"text-link\">";
        echo "<p class=\"lntext\">Lorum Ipsum</p>";
        echo "<a class=\"link-news\" href=\"\" >Read more</a>";
        echo "</div></div>";
    }
?>

<?php 
    echo "<div class=\"latest-block\">";
    echo "<p class=\"title-news\">Latest News</p>";


    echo "<div class=\"latest-news\">";

    foreach($news as $news_article){
        NewsArticle($news_article);
    }
?>