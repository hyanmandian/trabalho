<?php include './inc/header.php'; ?>

<?php
$type = $_GET["type"];

$statistics = new Statistics($type);
$result = $statistics->render();

$pageName = $statistics->getStatisticsName();
?>


<div class="jumbotron">
    <h1 class="text-center">Intenções de voto por <?php echo $pageName?></h1>
</div>
<div class="row">
    
</div>
<?php include './inc/footer.php'; ?>