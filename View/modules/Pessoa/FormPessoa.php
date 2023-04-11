<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/View/resource/reset.css" />
    <link rel="stylesheet" href="/View/resource/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/View/resource/style.css">

    <title>Cadastro de Pessoa</title>
</head>


<body>

    <nav>
        <header>
            <div class="caixa">
                <img src="/View/resource/logo.png" class="brand-logo center" width="110px" alt="logotipo">
                <ul class="menu">
                    <li><a href="/#">Home</a></li>
                    <li><a href="/pessoa/form">Formulario</a></li>
                    <li><a href="/pessoa">Listagem</a></li>
                    <li><a href="#!">Faq</a></li>
                </ul>

            </div>
        </header>
    </nav>
    <div class="container">
        <fieldset>

            <legend>Cadastro de Pessoa</legend>

            <form method="post" action="/pessoa/form/save">

                <input type="hidden" value="<?= $model->id ?>" name="id" />

                <label>Nome:</label>
                <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />
                <br>
                <label>CPF:</label>
                <input id="CPF" name="cpf" value="<?= $model->cpf ?>" type="number" />
                <br>
                <label>Data de Nascimento:</label>
                <input id="data_nascimento" name="data_nascimento" value="<?= $model->data_nascimento ?>" type="date" />
                <br>
                <button class="btn" type="submit">Salvar</button>

            </form>

        </fieldset>
    </div>
    <Footer class="page-footer">
        <div class="container">

            <p> Contato</p>
            <p> Trabalhe Conosco</p>
        </div>
    </Footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>