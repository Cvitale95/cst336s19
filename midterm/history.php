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
                border: 20px;
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
         History </center>
        <div id= "flex">
        <div id= "img"> </div>
        <div id= "name"> </div>
        <div id= "status"> </div>
        <div id= "when"> </div>
        <div id= "details"> 
        <button class="detailbutton">Details</button>
        </div>
        </div>
        
       <script>
             $(document).ready(function(){
                 var mt = [];
                 var ts = [];
                 var st = [];
                $.ajax({
                    type: "GET",
                    url: "getMatch.php",
                    dataType: "json",
                    success: function(data, status){
                        
                        
                        data.forEach(function(key){
                            mt.push(key["match_user_id"]);
                            ts.push(key["answer_timestamp"]);
                            st.push(key["answer_type_id"]);
                        });
                      
                    }
                });
                
                 $.ajax({
                    type: "GET",
                    url: "getUser.php",
                    dataType: "json",
                    success: function(data, status){
                        var sumN;
                        var addN;
                        
                        var sumI;
                        var addI;
                        
                        var sumS;
                        var addS;
                        
                        var sumW;
                        var addW;
                        
                        data.forEach(function(key){
                             for( $i=0; $i < mt.length;$i++){
                                 if(key["id"] == mt[$i]){
                               //  $("#img").html("<img src= "+ key["picture_url"] +" width=50 height=50 >");
                                // $("#name").html(key["username"]);
                               //  $("#status").html(st[$i]);
                                 //$("#when").html(ts[$i]);
                            addN = key["username"] + "<br>";
                             sumN = sumN + addN;
                             
                             addI = "<img src= "+ key["picture_url"] +" width=50 height=50 > <br>";
                             sumI = sumI + addI;
                             
                             addS = st[$i] + "<br>";
                             sumS = sumS + addS;
                             
                             addW = ts[$i] + "<br>";
                             sumW = sumW + addW;
                                 }
                            
                             }
                        });
                        $("#img").html(sumI);
                        $("#name").html(sumN);
                        $("#status").html(sumS);
                        $("#when").html(sumW);
                    }
                });
                
                
                
             });
         </script> 
         
        
    </body>
</html>



<?php

?>



<?php

?>