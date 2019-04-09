<html>
    <head>
        <title> Cinder </title>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <style>
         center{
             font-size: 50px;
         }
         button{
             
         }
         #about{
             font-size: 32px;
         }
             #flex{
                display:flex;
                margin:50px;
                justify-content:center;
             }
             #flex2{
                 display:flex;
                  margin:50px;
                  flex-direction: column;
             }
         </style>
    </head>
    <body>
        <center>
        <a href ="/midterm/index.php">Match</a> | 
         <a href ="/midterm/history.php">History</a>
         </center>
        <center>
         Match </center>
        <div id= "flex">
        <div id= "img"> </div>
        <div id ="flex2">
        <div id= "about"></div>
        <div id="bio"> </div>
        </div>
        </div>
        
        <center>
        <button class="like">Like<div id="like"></div></button>
        <button class="meh">?<div id="meh"></button>
        <button class="dislike">Dislike<div id="dislike"></div></button>
        </center>
        
        
       <script>
       var rand_num = Math.floor((Math.random() * 20) + 1);
             $(document).ready(function(){
                $.ajax({
                    type: "GET",
                    url: "getMatch.php",
                    dataType: "json",
                    success: function(data, status){
                        var likes = 0;
                        var dislikes = 0;
                        data.forEach(function(key){
                            
                            if(key["match_user_id"] == rand_num){
                                if(key["answer_type_id"] == 1){
                                    likes= likes + 1;
                                   
                                }
                                 $("#like").html(likes);
                                if(key["answer_type_id"] == 2){
                                    dislikes= dislikes + 1;
                                    
                                }
                            }
                          
                        });
                        $("#like").html(likes);
                        $("#dislike").html(dislikes);
                    }
                });
                
                 $.ajax({
                    type: "GET",
                    url: "getUser.php",
                    dataType: "json",
                    success: function(data, status){
                        data.forEach(function(key){
                            if(key["id"] == rand_num){
                                $("#about").html("About @ " + key["username"]);
                                $("#img").html("<img src= "+ key["picture_url"] +" width=300 height=300 >");
                                $("#bio").html(key["about_me"]);
                            }
                          
                        });
                    }
                });
                
                
                
             });
         </script> 
         
        <table>
<thead>
<tr>
<th style="text-align:left">#</th>
<th style="text-align:left">Task Description</th>
<th style="text-align:left">Points</th>
</tr>
</thead>
<tbody>
<tr>
<td style="text-align:left">1</td>
<td style="text-align:left">Active potential matches are pulled from MySQL using AJAX and a PHP API endpoint, and provides unmatched users, and is displayed using the specified page design</td>
<td style="text-align:left">40</td>
</tr>
<tr>
<td style="text-align:left">2</td>
<td style="text-align:left">The match history is pulled from MySQL using AJAX and a PHP API endpoint, and provides the data for all matches, whether or not there is history, and is displayed using the specified page design</td>
<td style="text-align:left">40</td>
</tr>
<tr>
<td style="text-align:left">3</td>
<td style="text-align:left">The information modal is popped up with the "About Me" information for the match</td>
<td style="text-align:left">20</td>
</tr>
<tr>
<td style="text-align:left"></td>
<td style="text-align:left">TOTAL</td>
<td style="text-align:left">100</td>
</tr>
<tr>
<td style="text-align:left"></td>
<td style="text-align:left">This rubric is properly included AND UPDATED (BONUS)</td>
<td style="text-align:left">2</td>
</tr>
<tr>
<td style="text-align:left">BD</td>
<td style="text-align:left">A separate report that shows the number of matches by category is available from navigation and shows the correct numbers, and is cleanly formatted</td>
<td style="text-align:left">15</td>
</tr>
<tr>
<td style="text-align:left">BD</td>
<td style="text-align:left">After all potential matches have been displayed, the buttons are disabled and a message is displayed; once the message has been closed the user is navigated to the history page</td>
<td style="text-align:left">15</td>
</tr>
<tr>
<td style="text-align:left">BD</td>
<td style="text-align:left">The relative time is displayed in the history page instead of actual date and time</td>
<td style="text-align:left">10</td>
</tr>
<tr>
<td style="text-align:left">BD</td>
<td style="text-align:left">Users who liked the current user are pulled from MySQL using AJAX and a PHP API endpoint, and are displayed using the specified page design</td>
<td style="text-align:left">15</td>
</tr>
</tbody>
</table>
    </body>
</html>



<?php

?>