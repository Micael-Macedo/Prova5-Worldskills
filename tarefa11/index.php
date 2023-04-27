<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <form action="api.php" method="post">
        <div>
            <label for="">Nome</label>
            <input type="text" name="Nome">
        </div>
        <div>
            <label for="">Idade</label>
            <input type="text" name="Idade">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="Email">
        </div>
        <button>Enviar</button>
    </form>
    <button onclick="baixarDados()">Baixar Dados</button>
    <div class="users"></div>

    <script>
        async function baixarDados(){
            let users = await fetch("api.php").then(r => {
                return r.json()
            })
            .catch(e => console.log(e))
            users.forEach(user => {
                console.log(user);
                $(".users").append(`
                <div class="user">
                    <p class="name">
                        ${user.Nome}
                    </p>
                    <p class="idade">
                        ${user.Idade}
                    </p>
                    <p class="email">
                        ${user.Email}
                    </p>
                </div>
                `)
            });
        }
    </script>
</body>

</html>