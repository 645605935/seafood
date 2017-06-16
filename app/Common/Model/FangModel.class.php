<?php
namespace Common\Model;
use Think\Model\RelationModel;
class FangModel extends RelationModel{
	protected $_link=array(
		'type'=>array(
			'mapping_type'=>self::BELONGS_TO,
			'class_name'=>'Type',
			'foreign_key'=>'tid',
			'as_fields' => 'title:type'
		)
	);
}

?>