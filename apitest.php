<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <input type="text" id="login" placeholder="Введите логин" required><br>
        <input type="password"  id="pass" placeholder="Введите пароль" required><br>
        <input type="text" id="email" placeholder="Введите email" required><br>
        <input type="text" id="name" placeholder="Введите имя" required><br>
        

    <button id="btn">Клик</button>

    <script>

        let btn = document.getElementById("btn");

        btn.addEventListener("click", ()=>{

            let login = document.getElementById("login").value;
            let pass = document.getElementById("pass").value;
            let email = document.getElementById("email").value;
            let name = document.getElementById("name").value;

            let json = JSON.stringify({
                "action":"reg",
                "payload":{
                    "login":login,
                    "pass":pass,
                    "email":email,
                    "name":name,
                    
                },
            });
            console.log(json);

            fetch("http://localhost/apishop.php", {
                method: 'POST',
                body: json,
            })
            .then(response => response.text())
            .then(data => {
                alert("Успешная регистрация")
            })
            .catch(error => {
                console.log(error);
            })
        });

    </script>

</body>
</html>