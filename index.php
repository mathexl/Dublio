<?php $search=$_GET[ 'search']; $ss=$_GET[ 'ss']; if($ss=="" ){$ss=$_COOKIE[ "ss"];} setcookie( "ss",$ss,time()+(24*60*60*12*30), "/"); if($ss=="" ){$ss="true" ;} $combo=$_GET[ 'combo']; if($combo !="by" and $combo !="gy" ) { $combo="gb" ;} if($search !="" ) {?>
<html>

<head>
    <link rel="icon" type="image/vnd.microsoft.icon" href="http://www.dublio.com/favicon.ico" />
    <link rel="icon" type="image/png" href="http://www.dublio.com/favicon.ico" />
    <link rel="icon" type="image/gif" href="http://www.dublio.com/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="http://www.dublio.com/favicon.ico" />
    <title>Dublio |
        <?php if($search[0]=="!" ){echo substr($search,1);}else{echo $search;}?>
    </title>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-57135547-1', 'auto');
        ga('send', 'pageview');
    </script>
    <style>
        body {
            padding: 0;
            margin: 0;
            -moz-transform: scale(0.8, 0.8);
            /* Moz-browsers */
            zoom: 0.8;
            /* Other non-webkit browsers */
            zoom: 80%;
            /* Webkit browsers */
        }
        .frame {
            height: 90%;
            width: 49.5%;
            margin: auto;
            padding: 0;
            float: left;
        }
        .google {
            zoom: -50%;
            -moz-transform: scale(0.8, 0.8);
            /* Moz-browsers */
            zoom: 0.8;
            /* Other non-webkit browsers */
            zoom: 80%;
            /* Webkit browsers */
        }
        .logo {
            align-content: center;
            width: 130px;
            padding: 10px;
            align-items: center;
            align-self: center;
            margin-top: -13px;
            float: left;
        }
        .search {
            height: 40px;
            width: 60%;
            border-radius: 5px;
            border-color: black;
            background-color: rgba(255, 255, 255, .2);
            font-family: Lato, Helvetica;
            padding: 2px;
            font-size: 15px;
            padding-left: 10px;
            float: left;
            margin-top: -3px;
            color: white;
        }
        .searchbutton {
            float: left;
            padding: 10px;
            margin-top: -10px;
        }
        .header {
            height: 60px;
            overflow: hidden;
            padding: auto;
            background-color: black;
        }
        .choice {
            height: 32px;
            float: left;
            margin: 10px;
            margin-top: 0px;
            opacity: .3
        }
        .choice:hover {
            opacity: .8;
        }
        .chosen {
            height: 32px;
            float: left;
            margin: 10px;
            margin-top: 0px;
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="header">
        <center>
            <a href="http://dublio.com">
                <img src="images/dublio.png" class="logo">
            </a>
            <form action="" method="get">
                <input type="text" class="search" name="search" placeholder="<?php echo $search;?>" value="<?php echo $search;?>">
                <input type="image" src="images/search.png" height="32" class="searchbutton">
            </form>

            <a href="http://dublio.com?search=<?php echo $search;?>&combo=gb&ss=<?php echo $ss;?>"><img src="images/gb.png"   class="<?php  if($combo == 'gb'){echo 'chosen';}else{echo 'choice';}?>"></a> 
            <a href="http://dublio.com?search=<?php echo $search;?>&combo=gy&ss=<?php echo $ss;?>">  <img src="images/gy.png"   class="<?php if($combo == 'gy'){echo 'chosen';}else{echo 'choice';}?>"> </a>
            <a href="http://dublio.com?search=<?php echo $search;?>&combo=by&ss=<?php echo $ss;?>">   <img src="images/by.png"  class="<?php  if($combo == 'by'){echo 'chosen';}else{echo 'choice';}  ?>">   </a>
            <a href="http://dublio.com?search=<?php echo $search;?>&combo=<?php echo $combo;?>&ss=<?php  if($ss == 'true'){echo 'false';}else{echo 'true';}  ?>">   <img src="images/ss.png"  class="<?php  if($ss == 'true'){echo 'chosen';}else{echo 'choice';}  ?>">   </a>
        </center>
    </div>
    <?php if($combo=='gb' ){?>
    <iframe src="http://www.google.com/custom?q=<?php echo $search;?>&btnG=Search&<?php if($ss == " true "){echo 'safe=active';}?>" class="frame google" scrolling="auto">
        <p>Your browser does not support iframes.</p>
    </iframe>
    <iframe src="http://bing.com/search?q=<?php echo $search;?>" class="frame" scrolling="auto">
        <p>Your browser does not support iframes.</p>
    </iframe>
    <?php } elseif($combo=='gy' ){?>
    <iframe src="http://www.google.com/custom?q=<?php echo $search;?>&btnG=Search&<?php if($ss == " true "){echo 'safe=active';}?>" class="frame google" scrolling="auto">
        <p>Your browser does not support iframes.</p>
    </iframe>
    <iframe src="https://duckduckgo.com/?q=<?php if($search[0]==" ! "){echo substr($search,1);}else{echo $search;}?>" class="frame" scrolling="auto">
        <p>Your browser does not support iframes.</p>
    </iframe>
    <?php } else{?>
    <iframe src="http://bing.com/search?q=<?php echo $search;?>" class="frame google" scrolling="auto">
        <p>Your browser does not support iframes.</p>
    </iframe>
    <iframe src="https://duckduckgo.com/?q=<?php if($search[0]==" ! "){echo substr($search,1);}else{echo $search;}?>" class="frame" scrolling="auto">
        <p>Your browser does not support iframes.</p>
    </iframe>
    <?php } ?>
</body>

</html>
<?php } else {?>
<html>

<head>
    <style>
        .logo {
            align-content: center;
            width: 280px;
            align-items: center;
            align-self: center;
            margin-top: 14%;
        }
        .search {
            height: 40px;
            width: 60%;
            border-radius: 5px;
            background-color: rgba(0, 0, 0, .01);
            font-family: Lato, Helvetica;
            padding: 2px;
            font-size: 15px;
            padding-left: 10px;
        }
        .searchbutton {
            margin-top: 20px;
        }
        #info {
            align-content: center;
            text-align: center;
            font-family: Lato, Helvetica;
            font-size: 20px;
            color: grey;
            margin-top: 60px;
        }
    </style>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-57135547-1', 'auto');
        ga('send', 'pageview');
    </script>
    <link rel="icon" type="image/vnd.microsoft.icon" href="http://www.dublio.com/favicon.ico" />
    <link rel="icon" type="image/png" href="http://www.dublio.com/favicon.ico" />
    <link rel="icon" type="image/gif" href="http://www.dublio.com/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="http://www.dublio.com/favicon.ico" />
    <title>Dublio | Double Search Like a Pro</title>
</head>

<body>
    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=555088047951928&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <center>
        <img src="images/dublio.png" class="logo">
        <br>
        <br>
        <form action="" method="get">
            <input type="text" class="search" name="search">
            <br>
            <input type="image" src="images/search.png" height="30" class="searchbutton">
        </form>
    </center>
    <div id="info">
        Double Search Like a Pro.
        <br>
        <br>
        <br>
    </div>

    </div>
    <div style="left: 42%;
    margin-right: -50%;margin-top:200px;" class="fb-like" data-href="https://www.facebook.com/dubliosearch" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
</body>

</html>
<? }?>
