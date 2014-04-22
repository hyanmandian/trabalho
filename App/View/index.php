<?php include './inc/header.php'; ?>

<?php
$page = isset($_GET["page"]) ? $_GET["page"] : 1;
$interviewees = new Interviewees();
$result = $interviewees->getPoll($page);
$interviewees = $result["interviewees"];
$quantityOfPages = $result["quantity"];

$error = NULL;

if (!empty($_POST)) {
    if (count($_POST) != 5) {
        $error = TRUE;
    } else {
        $csv = new Csv();
        $csv->add($_POST);
        $error = FALSE;
    }
}
?>

<?php if ($error): ?>
    <div class="alert alert-danger fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>Erro: </strong> preencha todos os campos do formulário!
    </div>
<?php elseif ($error === FALSE): ?>
    <div class="alert alert-success fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>Informativo: </strong> formulário enviado com sucesso!
    </div>
<?php endif; ?>

<div class="jumbotron">
    <h1 class="text-center title">Listagem dos entrevistados</h1>
    <button class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#insertModal">Clique aqui para cadastrar um entrevistado</button>
</div
>
<div class="row">
    <table class="table table-striped table-responsive">
        <thead>
            <tr>
                <th>Idade</th>
                <th>Nivel de escolaridade</th>
                <th>Renda familiar</th>
                <th>Sexo</th>
                <th>Candidato</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($interviewees as $interviewee): ?>
                <tr class="alert-info">
                    <td><?php echo $interviewee[0]; ?></td>
                    <td><?php echo $interviewee[1]; ?></td>
                    <td><?php echo $interviewee[2]; ?></td>
                    <td><?php echo $interviewee[3]; ?></td>
                    <td><?php echo $interviewee[4]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <ul class="pager">
        <?php if ($page > 1): ?>
            <li class="previous"><a href="?page=<?php echo $page - 1; ?>">&larr; Anterior</a></li>
        <?php endif; ?>
        <?php if ($quantityOfPages != $page): ?>
            <li class="next"><a href="?page=<?php echo $page + 1; ?>">Próximo &rarr;</a></li>
        <?php endif; ?>
    </ul>
</div>

<?php include './modal.php'; ?>

<?php include './inc/footer.php'; ?>