<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Products', 'url'=>array('index')),
	array('label'=>'Create Products', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#products-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Products</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'products-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                    'header' => 'Product Type',
                    'name' => 'type_id',
                    'value' => '$data->type_id ? $data->types->name :""'
                ),
		array(
                    'header' => 'Brand',
                    'name' => 'brand_id',
                    'value' => '$data->brand_id ? $data->brands->name :""'
                ),
		'name',
		'url',
		/*
		'images',
		'key_features',
		*/
		'status',
		
		array(
			'class'=>'CButtonColumn',
			'template'=>'{stores}{view}{update}{delete}',
			'htmlOptions' => array('style' => 'width: 100px'),
			'buttons'=>array
			(
				'stores' => array
				(
					'label'=>'Add/Update Stores',
					'imageUrl'=>Yii::app()->theme->baseUrl.'/images/new-store.png',
					'url'=>'Yii::app()->createUrl("/admin/productdetails/create", array("pid"=>$data->id))',
				),
				'delete' => array(
					'url' => 'Yii::app()->createUrl("/admin/products/delete",array("id"=>$data->id))',
					'options' => array(
							'confirm' => 'Are you sure you want to delete this item and related all details?',
							'ajax' => array(
								'type' => 'POST',
								'dataType'=>'json',
								'url' => "js:$(this).attr('href')",
								'success' => 'function(data){
									if(data.response=="false"){
										alert(data.errorMessage);
									}else{
										$.fn.yiiGridView.update("products-grid");
									}
								}'
							),
						),
					),  
			),
		),
	),
)); ?>
