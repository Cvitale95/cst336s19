<?php

?>
<html>
    <head>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="styles.css" rel="stylesheet" type="text/css" />
        <title> CST 336 Final</title>
    </head>
    <body>
<center>
Date: <input type="date" id ="datetime"> <br>
Start Time: <input type="time" id="startTime"> <br>
End Time: <input type="time" id="endTime"> <br>
<button class="s">Add to Schedule</button>
<br><br>
<div>
    <table>
        <tr>
            <th>
                Date
            </th>
            <th>
                Start Time
            </th>
            <th>
                End Time
            </th>
            
            <th>
                Remove
            </th>
             </tr>
      
    </table>
</div>
</center>
<script>
            $.ajax({
                    type: "GET",
                    url: "display.php",
                    dataType: "json",
                    data: {
                    },
                    success: function(data, status) {
                          data.forEach(function(key){
                           $("table").append("<tr><td>"+key.date +"</td><td>"+key.start +"</td><td>" + 
                           key.end +"</td><td>" + "<button class=delete id=" + key.id + "> delete </button>" + "</td></tr>");
                           
                           
                           
                           
        $("#"+key.id).on("click", function(e) {
            var c = confirm("Are you sure want to remove this time slot? This cannot be undone ");
            if(c == true){
        $.ajax({
                    type: "GET",
                    url: "delete.php",
                    dataType: "json",
                    data: {
                        "delete": this.id,
                    },
                    success: function(data, status) {
                        
                    }
                }); ///end of ajax call 
                setTimeout("window.location='index.php'",500);  
            }
                            });
                        });
                    }
                }); ///end of ajax call 
            

    $("button.s").on("click", function(e) {
        $.ajax({
                    type: "GET",
                    url: "insert.php",
                    dataType: "json",
                    data: {
                        "date": $("#datetime").val(),
                        "start": $("#startTime").val(),
                        "end": $("#endTime").val()
                    },
                    success: function(data, status) {
                    
                    }
                }); ///end of ajax call 
              setTimeout("window.location='index.php'",500);  
    });
    
    
     
</script>

    </body>
</html>