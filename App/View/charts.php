<?php include './inc/header.php'; ?>

<?php
$type = $_GET["type"];

$charts = new Charts($type);
$result = $charts->render();

$pageName = $charts->getChartsName();
?>


<div class="jumbotron">
    <h1 class="text-center">Intenções de voto por <?php echo $pageName?></h1>
</div>
<div class="row">
    
</div>
<?php include './inc/footer.php'; ?>