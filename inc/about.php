<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="svg" href="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTQiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCA1NCAzMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly9
    3d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xNC42OTYgMTEuMTE3M0MxNi43OTc2IDcuNjk0MiAxNS43NTA2IDMuMjA3MiAxMi4zNTc1IDEuMDg3MDZDMTEuMjE4OCAwLjM3Nzc3MiA5Ljg5NjY5IDAgOC41NTkzIDBIMFYyMy41OTE0SDkuNjI5MjFDMTMuNjE4NSAyMy41OTE0IDE2Ljg1MTEgMjAuMzMwMyAxNi44NTExIDE2LjMwNTlDMTYuODUxMSAxNC4zNTUzIDE2LjA3OTMgMTIuNDg5NiAxNC42OTYgMTEuMTE3M1pNNS41MDI0MSA1LjU1MDkzSDguNTU5M0M5LjUwNjkzIDUuNTUwOTM
    gMTAuMjc4OCA2LjMyOTYgMTAuMjc4OCA3LjI4NTU5QzEwLjI3ODggOC4yNDE1OSA5LjUwNjkzIDkuMDIwMjYgOC41NTkzIDkuMDIwMjZINS41MDI0MVY1LjU1MDkzWk05LjYyOTIxIDE4LjA0MDVINS41MDI0MVYxNC41NzEySDkuNjI5MjFDMTAuNTc2OCAxNC41NzEyIDExLjM0ODcgMTUuMzQ5OSAxMS4zNDg3IDE2LjMwNTlDMTEuMzQ4NyAxNy4yNjE4IDEwLjU3NjggMTguMDQwNSA5LjYyOTIxIDE4LjA0MDVaTTQzLjQ0NjEgMFYyMy41OTE0SDM3Ljk0MzdWMS4xNzk1N0w0My40NDYxIDBaTTI3LjM5NzQgNi42OTk2NUMyMi43MTI3IDYuNjk5NjUgMTguOTA2OSAxMC4
    1MzEzIDE4LjkwNjkgMTUuMjY1QzE4LjkwNjkgMTkuOTkxIDIyLjcwNTEgMjMuODMwNCAyNy4zOTc0IDIzLjgzMDRDMzIuMDgyMSAyMy44MzA0IDM1Ljg4NzkgMTkuOTk4OCAzNS44ODc5IDE1LjI2NUMzNS44ODAzIDEwLjUzOSAzMi4wODIxIDYuNjk5NjUgMjcuMzk3NCA2LjY5OTY1Wk0yNy4zOTc0IDE4LjA0MDVDMjUuODc2NiAxOC4wNDA1IDI0LjY0NjIgMTYuNzk5MyAyNC42NDYyIDE1LjI2NUMyNC42NDYyIDEzLjczMDggMjUuODc2NiAxMi40ODk2IDI3LjM5NzQgMTIuNDg5NkMyOC45MTgyIDEyLjQ4OTYgMzAuMTQ4NiAxMy43MzA4IDMwLjE0ODYgMTUuMjY1QzMw
    LjE0ODYgMTYuNzk5MyAyOC45MTgyIDE4LjA0MDUgMjcuMzk3NCAxOC4wNDA1Wk0zMC4xNDg2IDI4LjYwMjdDMzAuMTQ4NiAzMC4xMzU1IDI4LjkxNjggMzEuMzc4MiAyNy4zOTc0IDMxLjM3ODJDMjUuODc4IDMxLjM3ODIgMjQuNjQ2MiAzMC4xMzU1IDI0LjY0NjIgMjguNjAyN0MyNC42NDYyIDI3LjA2OTggMjUuODc4IDI1LjgyNzIgMjcuMzk3NCAyNS44MjcyQzI4LjkxNjggMjUuODI3MiAzMC4xNDg2IDI3LjA2OTggMzAuMTQ4NiAyOC42MDI3Wk01My45OTIzIDcuMDE1NzZWMTIuNTU5SDUxLjI0ODhWMTYuOTIyNkM1MS4yNDg4IDE4LjI0MSA1MS42NjkxIDE5LjIxMj
    QgNTIuNzY5NiAxOS4yMTI0QzUzLjE4OTkgMTkuMjIwMSA1My42MDI2IDE5LjE2NjEgNTQgMTkuMDUwNVYyMy4xMzY2QzUzLjE3NDYgMjMuNTkxNCA1Mi4yNTc2IDIzLjgzMDQgNTEuMzE3NiAyMy44MzA0SDUxLjI0ODhDNTEuMjEzNCAyMy44MzA0IDUxLjE3OCAyMy44Mjg0IDUxLjE0MzYgMjMuODI2NEM1MS4xMTEyIDIzLjgyNDUgNTEuMDc5OCAyMy44MjI3IDUxLjA1MDEgMjMuODIyN0g1MC45OTY2TDUwLjg5NzIgMjMuODE1QzQ3LjgyNTEgMjMuNjUzMSA0NS43Mzg3IDIxLjcwMjYgNDUuNzM4NyAxOC4zMTgxVjE4LjMwMjZWMTguMjc5NVYxMi41NjY3VjMuOTU1MDRMNT
    EuMjQxMSAyLjc3NTQ2VjcuMDE1NzZINTMuOTkyM1oiIGZpbGw9IiMyRjMxM0YiLz4KPC9zdmc+Cg==">
    <link rel="stylesheet" href="./style.css">
    <title>Високорентабельний бізнес зараз</title>
</head>
<body>
    <div class="header">
        <div class="headline">
            <div> 
                <h1 class="headline-text">Високорентабельний <br> бізнес з BOLT</h1>
                <span class="headline-span">Заповнюйте форму, і починайте вже зараз</span>
            </div>
            <div>
                <form action="../admin/sineup.php" method="post">
                    <div class="text">
                    <h2 class="form-title">Залиште заявку тут</h2>
                    <div>
                    <input class="pole" name="name" type="text" placeholder="Ваше ім'я">
                    <div style="padding: 0px 0px 8px 25px; color:red;"><?php if ($_SESSION['message2']) {echo $_SESSION['message2'];unset($_SESSION['message2']);} ?></div>
                    </div>
                    <div>
                    <input class="pole" name="telephonenumber" type="text" placeholder="Номер телефону (+380...">
                    <div style="padding: 0px 0px 5px 25px; color:red;"><?php if ($_SESSION['message3']) {echo $_SESSION['message3'];unset($_SESSION['message3']);} ?></div>
                    </div>
                    <h2 class="form-subtitle" >Оберіть тип підключення</h2>
                    <select class="pole_selection" name="connection" id="connection" name="country"></select>
                    <div style="padding: 3px 0px 5px 25px; color:red;"><?php if ($_SESSION['message4']) {echo $_SESSION['message4'];unset($_SESSION['message4']);} ?></div>
                    <h2  class="form-subtitle">Оберіть своє місто</h2>
                    <select class="pole_selection" name="city" id="country" name="country"></select>
                    <div style="padding: 3px 0px 5px 25px; color:red;"><?php if ($_SESSION['message5']) {echo $_SESSION['message5'];unset($_SESSION['message5']);} ?></div>
                    <div>
                        <button class="btn">Почати заробляти</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="./script.js"></script>
</html>