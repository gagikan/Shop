<?php
class CategoryModel extends Model {
    protected  $fields = array(
        'id',
        'name',
        'age',
        'content',
        'cid',
        '_autoinc' => true,
        '_pk'=>'id'
    );
//     protected $_map=array(
// //         'cate_id' =>'id',
// //         'cate_name'=>'name',
// // //         'bi_age'=>'age',
// //         'cate_content'=>'content',
// //         'cate_cid'=>'cid'
//     );
//     protected  $trueTableName='bitcharrays';
}