<!DOCTYPE html>
<html>

<head>
    <title>Listagem de Pessoa</title>
    <link rel="stylesheet" href="/View/resource/style.css">
</head>

<body>
    <header>
        <div class="caixa">
            <nav>
                <ul>
                    <li><a href="/pessoa/form">Formulario</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <h1>Listagem de Pessoa</h1>

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

</body>

</html>