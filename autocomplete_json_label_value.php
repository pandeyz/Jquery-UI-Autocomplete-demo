<!DOCTYPE html>
<html>
<head>
    <title>Jquery UI - Auto Complete Demo</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

    <script>
    $(function(){
        var availableTags = [
            { label:"Display Name for result 1", value:1 },
            { label:"Display Name for result 2", value:2 },
            { label:"Display Name for result 3", value:3 }
        ];

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