<?php include 'layout_top.php'; ?>


 <!---- Thread Form ---->
        <div class="panel panel-default post_form">
            <button type="button" class="close btn_fadeOut" aria-label="Schließen"><span aria-hidden="true">&times;</span></button>
            <h3>Neues Thema für <span id="thread_form"></span> erstellen</h3><br>
            <form class="form-horizontal" action="forum.php" method="POST">
                <input id="thema_input" type="text" class="form-control thread" placeholder="Thema" minlength=3 autofocus required><br>
                <textarea class="form-control" rows="7" minlength=3 required placeholder="Text"></textarea>
                <br>
                <button type="submit" class="btn btn-default">Thema erstellen</button>
            </form>
        </div>

<div class="panel panel-default">
            <div class="panel-heading">
                <div class="container_post">
                    <div class="post_cell"><h3 class="panel-title">Events</h3></div>
                    <div class="post_cell antwort_button"><input class="btn btn-default btn_fadeIn" type="button" value="Neus Thema" onclick="thread('Events')"></div>
                </div>
            </div>
            <div class="panel-body">
                <a href="post.php">
                    <div class="panel panel-default topic_hover">
                        <div class="panel-body">
                             <table class="forum_table">
                                <tr >
                                    <td>Highfield 1</td>
                                    <td class="forum_table_middle"></td>
                                    <td class="forum_table_right">T-No<br/>12.05.15</td>                      
                                </tr>
                            </table>
                        </div>
                    </div>
                </a>
                <a href="post.php">
                    <div class="panel panel-default topic_hover">
                        <div class="panel-body">
                            <table class="forum_table">
                                <tr >
                                    <td>Rock am Ring 2015</td>
                                    <td class="forum_table_middle"></td>
                                    <td class="forum_table_right">T-No<br/>12.05.15</td>                      
                                </tr>
                            </table>
                        </div>
                    </div>
                </a> 
            </div>
            <div class="panel-heading">
                <div class="container_post">
                    <div class="post_cell"><h3 class="panel-title">Partys</h3></div>
                    <div class="post_cell antwort_button"><input class="btn btn-default btn_fadeIn" type="button" value="Neus Thema" onclick="thread('Partys')"></div>
                </div>
           </div>
            <div class="panel-body">
                <table class="table table-hover forum_table">
                    <tr class="forum_table_tr"onclick="window.location='post.php'">
                        <td>Silvester</td>
                        <td class="forum_table_middle"></td>
                        <td class="forum_table_right">T-No<br/>12.05.15</td>                      
                    </tr>
                    <tr class="forum_table_tr" onclick="window.location='post.php'">
                        <td>Silvester 2</td>
                        <td class="forum_table_middle"></td>
                        <td class="forum_table_right">T-No<br/>12.05.15</td>                      
                    </tr>
                    <tr class="forum_table_tr"onclick="window.location='post.php'">
                        <td>Silvester 3</td>
                        <td class="forum_table_middle"></td>
                        <td class="forum_table_right">T-No<br/>12.05.15</td>                      
                    </tr>
                     <tr class="forum_table_tr"onclick="window.location='post.php'">
                        <td>Silvester und fette party das es einfach übelst rockt</td>
                        <td class="forum_table_middle"></td>
                        <td class="forum_table_right">T-No<br/>12.05.15</td>                      
                    </tr>
                </table>                      
            </div>
            
            <div class="panel-footer"></div>
        </div>

<?php include 'layout_bottom.php'; ?>