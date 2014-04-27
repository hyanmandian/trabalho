<?php include './inc/header.php'; ?>

<?php

$statistics = FactoryStatistics::createStatistic($_GET["type"]);
$name = $statistics->getName();

?>

<div class="jumbotron">
    <h1 class="text-center">Intenções de voto por <?php echo $name; ?></h1>
    
    <?php echo $statistics->render(); ?>
    
</div>
<div class="row">
    
</div>
<?php include './inc/footer.php'; ?>