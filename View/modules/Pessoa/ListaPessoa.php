<!DOCTYPE html>
<html>

<head>
    <title>Listagem de Pessoa</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/View/resource/reset.css" />
    <link rel="stylesheet" href="/View/resource/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/View/resource/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8" />
</head>

<body>
    
    <nav>
        <header>
            <div class="nav-wrapper">
                <a href="/View/resource/logo.png" class="brand-logo center"></a>
                <img src="/View/resource/logo.png" class="brand-logo center" width="110px" alt="logotipo">
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="/#">Home</a></li>
                    <li><a href="/pessoa/form">Formulario</a></li>
                    <li><a href="/pessoa">Listagem</a></li>
                    <li><a href="#!">Faq</a></li>
                </ul>
                <form>
                    <div class="input-field right">
                        <input id="search" type="search" required>
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    </div>
                </form>
            </div>
        </header>
    </nav>

    <div class="container">
        <h3>Listagem de Pessoa</h3>
        <table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data Nascimento</th>
                <th></th>
            </tr>
            <?php foreach ($model->rows as $item) : ?>
                <tr>

                    <td> <?= $item->id ?> </td>

                    <td>
                        <a href="/pessoa/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
                    </td>

                    <td> <?= $item->cpf ?> </td>
                    <td> <?= $item->data_nascimento ?> </td>
                    <td>
                        <button><a href="/pessoa/delete?id=<?= $item->id ?>">X</a></button>

                    </td>
                </tr>
            <?php endforeach ?>

            <?php if (count($model->rows) == 0) : ?>
                <tr>
                    <td colspan="5">Nenhum registro encontrado.</td>
                </tr>
            <?php endif ?>


        </table>

        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
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