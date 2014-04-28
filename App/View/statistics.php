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
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>Candidato</th>
				<?php foreach(Helpers::getFields($_GET["type"]) as $field):?>
					<th><?php echo $field; ?></th>
				<?php endforeach;?>
			</tr>
		</thead>
		<tbody>
			<?php foreach($statistics->render() as $key => $values):?>
				<tr>
					<td><?php echo $key; ?></td>
					<?php foreach($values as $value):?>
						<td><?php echo $value ?></td>
					<?php endforeach;?>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
<?php include './inc/footer.php'; ?>