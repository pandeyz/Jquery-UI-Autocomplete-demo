<?php
    require('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Jquery UI - Auto Complete Demo</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

    <script>
    $(function(){
        var arr = [];
        var availableTags = [];

        $.ajax({
            'url'   : 'getdata.php',
            'method': 'get',
            success : function(response){
                arr = JSON.parse(response);
                
                availableTags = Object.keys(arr).map(function (key) { return arr[key]; });
            },
            async   : false
        });

        $( "#tags" ).autocomplete({
            source: availableTags
        });
    });  
    </script>
</head>
<body>
    <input type="text" id="tags" placeholder="Programming Language Name">
</body>
</html>