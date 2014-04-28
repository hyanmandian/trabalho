<?php include './inc/header.php'; ?>

<?php
$type = Helpers::converterIdToClassName($_GET["type"]);

if ($type) {
    $statistics = FactoryStatistics::createStatistic($type);
    $name = $statistics->getName();
} else {
    header("Location: index.php");
}
?>

<div class="jumbotron">
    <h1 class="text-center">Intenções de voto por <?php echo $name; ?></h1>
</div>

<div class="row">
    <?php echo "<pre>"; print_r($statistics->render()); ?>
</div>
<?php include './inc/footer.php'; ?>