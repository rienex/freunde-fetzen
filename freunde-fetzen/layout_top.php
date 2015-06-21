<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>freunde-fetzen.de</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/layout.css" type="text/css"/>
        <link rel="stylesheet" href="css/responsivemobilemenu.css" type="text/css"/>
        <link href="css/forum.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src="js/responsivemobilemenu.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Script für neuen Beitrag/Thema TextArea--->
        <script script type="text/javascript">
        
        //uebergeben der kategorie/thema als onklick
        function thread(kategorie){
            $("#thread_form").html(kategorie); 
        }
         
        $(document).ready(function(){
            $(".btn_fadeOut").click(function(){
                $(".post_form").fadeOut()
            });
            $(".btn_fadeIn").click(function(){                
                $(".post_form").fadeIn();
                $(".form-control")[0].focus(); //[0] damit erstes input on focus ist (Firefox)
            });
        });
        
        </script>

        
    </head>
    <body>
        
        <header class="hidden-xs"><h1>Freunde-Fetzen.de</h1></header>
        <nav class="rmm" data-menu-title = "Freunde-Fetzen.de">
        <ul>
            <li><a href='index.php'>Home</a></li>
            <li><a href='forum.php'>Forum</a></li>
            <li><a href='#gallery'>Galerie</a></li>
            <li><a href='#blog'>FM</a></li>
            <li><a href='#links'>Upload</a></li>
            <li><a href='#sitemap'>Admin</a></li> 
       </ul>
        </nav>
        <!-- ungelesen - Sichtbar bei tablet und PC--->
        <div class="user_panel user_panel_full hidden-xs">
            <button class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
            </button>
            <button class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
            </button>
        </div> 
        
        <div class="unread_count unread_message_full hidden-xs">2</div> 
        <div class="unread_count unread_forum_full hidden-xs">3</div> 
        
        
        <!-- ungelesen - Sichtbar bei Smartphone--->
        <div class="user_panel  visible-xs-block">
            <button class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-list-alt message_count" aria-hidden="true"></span>
            </button>
            <div class="unread_count unread_message_small visible-sm-block visible-xs-block">2</div> <!-- message -->
            
            <button class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-envelope message_count" aria-hidden="true"></span>
            </button>
            <div class="unread_count unread_message_small visible-xs-block">2</div>
            <div class="unread_count unread_forum_small visible-xs-block">3</div>
            
            <!--
            <form id="login_form" class="form-inline login_form">
                <input class="form-control login" autofocus required type="text" name="user" placeholder="Name">
                <input class="form-control login" required type="password" name="password" placeholder="Passwort">
                <button type="submit" class="btn btn-default">Login</button>
            </form>
            -->
        </div><!DOCTYPE html>
        <article>