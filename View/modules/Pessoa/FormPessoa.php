<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/View/resource/style.css">
    <title>Cadastro de Pessoa</title>
</head>


<body>
<header>
        <div class="caixa">
            <nav>
                <ul>
                    <li><a href="/pessoa">Listagem</a></li>
                </ul>
            </nav>
        </div>
    </header>

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

</body>

</html>