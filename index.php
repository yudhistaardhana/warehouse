
<html>
    <head>
    <title> Warehouse </title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <meta charset="utf-8">
    </head>
    <body onload = "table();">
        <script type="text/javascript">
            function table(){
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function(){
                    document.getElementById("table").innerHTML = this.responseText;
            }
            xhttp.open("GET", "system.php");
            xhttp.send();
        }
        setInterval(function() {
            table()
        },  1000);
    </script>
    <div id="table">

    </div>
    </body>
</html>
