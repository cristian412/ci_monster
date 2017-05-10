<?php
foreach ($lista as $key => $value) $$key = $value;

$fields = $this -> Form_model -> form($tabla,$id,URL.$tabla.'/show/'.$id);
# SETEAR EL FORMULARIO
//$fields['nro']['col'] = '1';


$formulario = formbasico($fields);
$modal = modal($formulario);
?>
<?=$update?>
<h1>Show <?=ucwords( $tabla ) ?> 
	<a href="#" class="btn btn-success" data-toggle="modal" data-target="#editar-item">Editar</a>
</h1>

<?php echo "<pre>";print_r($lista); echo "</pre>"; ?>


<?=$modal?>


