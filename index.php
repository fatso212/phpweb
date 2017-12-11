
<!DOCTYPE html>
<?php
    include "index2.php"; 
    include "db.php";
?>
    <html>
        <head>
            <link rel = 'stylesheet' type = text/css href = 'index.css' >
        </head>
        <body>
            <div id = 'contents'>
            </div>
            <form action =  "" method = "GET">
                <input name = "user" type  = "text">
                <input name = "pword" type  = "password">
                <input type = "submit">
            </form>
            <script>
                var json = <?php echo $json; ?>;
                console.log(json);
                json.forEach(function(item){

                    for(var thing in item){

                        document.getElementById('contents').innerHTML += 
                            "<div style = 'background: blue; color: white'>" + item[thing] + "</div>";
                    }
                })
            </script>
            <script src = 'hello.js'></script>
        </body>
    </html>