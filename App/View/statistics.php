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
	<a href="statistics.php?type=<?php echo $_GET['type'];?>" class="btn btn-info btn-lg btn-block">Clique aqui para atualizar os dados</a>
</div>

<div class="row">
	<?php if(!empty($statistics->render())):?>
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
					<?php for($i = 1; $i <= Helpers::getLength($type) ; $i++):?>
						<td><?php echo (isset($values[$i])) ? $values[$i] : 0; ?></td>
					<?php endfor;?>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
	<?php else:?>
		<p class="text-center alert alert-info">Não existem dados para serem exibidos.</p>
	<?php endif;?>
</div>
<?php include './inc/footer.php'; ?>