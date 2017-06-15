<?php
namespace Common\Model;
use Think\Model\RelationModel;
class FangModel extends RelationModel{
	protected $_link=array(
		'_metro'=>array(
			'mapping_type'=>self::BELONGS_TO,
			'class_name'=>'Type',
			'foreign_key'=>'metro'
		),
		'_area'=>array(
			'mapping_type'=>self::BELONGS_TO,
			'class_name'=>'Type',
			'foreign_key'=>'area'
		)
	);
}

?>