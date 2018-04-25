<?php
class GoodsModel extends Model {
	protected $fields = array (
			'id',
			'name',
			'cid',
			'price',
			'remark',
	       'photo',
			'_autoinc' => true,
			'_pk' => 'id' 
	);
}