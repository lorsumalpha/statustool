<?php
    
?>

<html>
    <head>
        <title>Statustool</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div class="header">
            <div id="date">
                <p class="smallText" id="dateText">0</p>
            </div>
            <div id="version">
                <p class="smallText" id="version">0</p>
            </div>
            <div id="active">
                <p class="smallText" id="activeUser">0</p>
            </div>
        </div>
        <div class="content">
            <div class="users">
                <div class="singleUser" id="artmann">
                    <img src="placeholder.png" alt="userPicture" width="250" height="250"/>
                </div>
                <div class="singleUser" id="testUser">
                    <img src="placeholder.png" alt="userPicture" width="250" height="250"/>
                </div>
                <div class="singleUser" id="testUser">
                    <img src="placeholder.png" alt="userPicture" width="250" height="250"/>
                </div>
            </div>
        </div>
        <script>
            let date = document.getElementById("dateText");
            let version = document.getElementById("version");
            let activeUser = document.getElementById("activeUser");

            let datum = text("2");

            datum.innerHTML = dateText;
        </script>
    </body>
</html>
