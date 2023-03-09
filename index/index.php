<?php
$checkif=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  
     $value=$_POST['inputData'];
    
    if(!empty($value)){
       require 'API.php';
       $checkif=true;
    }
}
 
?>
<!DOCTYPE HTML>
<html>
    <head>
          <meta charset="UTF-8">
  <meta name="description" content="Free URL Parser & WHOIS Web Tool - urlatlas.info">
  <meta name="keywords" content="urlatlas,url atlas,url,atlas,tool,web,url parser,WHOIS,lookup,free">
  <meta name="author" content="yunusemrevurgun.com">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
       <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'/>
 <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
     <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js'></script> 
        
        <title>urlatlas.info - Free URL Parser & WHOIS</title>
          <link rel="icon" type="image/x-icon" href="/media/favicon.ico">
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'/>

        <link href='https://urlatlas.info/index/index.css' rel='stylesheet'/>
    </head>
    <body>
    <noscript><div class='error'>
JavaScript is NOT allowed in YOUR browser. JavaScript is needed to use this website properly.
</div></noscript>

<header><div id='div1'>
<ul id='navUL'>
<li class='navLI' id='home'><a href='javascript:void(0)'><i aria-hidden='true' class='fa fa-home'></i> Home</a></li>
<li class='navLI' id='tutorial'><a href='javascript:void(0)'><i aria-hidden='true' class='fa fa-graduation-cap'></i> Tutorial</a></li>
<li class='navLI' id='contact'><a href='javascript:void(0)'><i aria-hidden='true' class='fa fa-phone'></i> Contact</a></li>
<li class='navLI' id='about'><a href='javascript:void(0)'><i aria-hidden='true' class='fa fa-info-circle'></i> About</a></li>
</ul>
<center><img id='imgLogo' src='/media/logo.png'/></center>
</div><br/>
<center>
<div id='searchBarDiv'>
<form method="post">
  <input name="inputData" id="searchValue" placeholder='type URL here...' type='text'/>
 <input type="submit" value="Go"></input> 
</form>
</div></center><br/>
<!--GITHUB BTN-->
<style> #floatingAnchor{ position:fixed !important; width:35px !important; height:150px !important; top:195px !important; right:0px !important; background-color:black !important; border-radius:7px 0px 0px 7px !important; } #gitIMG{ padding-right:15px !important; padding-top:10px !important; width:60px !important; height:140px !important; } </style>
<a href='https://github.com/yunusemrejr/urlatlas-info-free-url-finder' id='floatingAnchor'>
<img id='gitIMG' src='https://i.ibb.co/Tv40BNT/image.png'/>
</a>
<!--GITHUB BTN-->
<br/><br/><br/><br/>
<iframe src="https://www.fiverr.com/gig_widgets?id=U2FsdGVkX18YSIJXZNGeelAxzfNseH5qvluUrekTPUV8wr/RKySRDhG+3FbOlk8bHou0ZIUqha/9pak9xGobEZ/REdP42T9ZdHvu0/CnWStuLk076PEm5Rm79nAA2rfdSWZ6MWHuKaZ1hIq8QFn7juewnJRBNtfsEgvCF5eZzvI35HhDQatoxnh8V7CoZ3PFYhcWxW7X55PkY/qa5aNMaEuGCFaxWtS1zySQ/S/CMEfWbgWwvtW2/pLyHbGmoBODNaNjAyxJKN0PQ9o/6yV7ZNxNz5QwL5cyKkeyds4JASE6v3pCSuHGVSs7ETorddQYqxhCx4ARfHlZcbWSCjWDAD5IWYny/17a1eFwmXyvlIuUjf4P/sZXjJ48aBDoi/mBoH/Tg3mG7oawh0W1rI70FcY74gAcPB9vCFSmlq51evlVOpHOJoYBOY/TLKqusxe/fOYYSHKE4Jdoor+oAWqBHw==&affiliate_id=237457&strip_google_tagmanager=true" loading="lazy" data-with-title="true" class="fiverr_nga_frame" frameborder="0" height="350" width="100%" referrerpolicy="no-referrer-when-downgrade" data-mode="random_gigs" onload=" var frame = this; var script = document.createElement('script'); script.addEventListener('load', function() { window.FW_SDK.register(frame); }); script.setAttribute('src', 'https://www.fiverr.com/gig_widgets/sdk'); document.body.appendChild(script); " ></iframe><br/><br/><br/><br/><br/><br/>
</header>

        <footer id='footer'>
<p>urlatlas.info &#169; 2021-2023 | All Rights Reserved | Created By <a href='https://yunusemrevurgun.com/' style='color:white;'> Yunus Emre Vurgun</a></p>
</footer>
<div class='no-items section' id='1'></div>
        
        
        
        
        
        
         <script src='https://urlatlas.info/index/index.js'></script>
<?php

if($checkif==true){
    echo $outputjs;
}

?>
    </body>
</html>
 
 
