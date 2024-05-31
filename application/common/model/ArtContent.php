<?php
namespace app\common\model;

use think\Db;
use think\View;
use app\common\validate\User as UserValidate;


class ArtContent extends Base {

    // 设置数据表（不含前缀）
    protected $name = 'art_cont';

    // 自动完成
    protected $auto = [];
    protected $insert = [];
    protected $update = [];


    public function infoData($where, $field='*'){
        $info = [];
        if (empty($where) || !is_array($where)) {
            return $info;
        }
        $info = $this->field($field)->where($where)->find();
        return $info;
    }


    public function saveData($data,$isUpdate){
        if($isUpdate){
            $where=[];
            $where['id'] = ['eq',$data['id']];
            $this->allowField(true)->where($where)->update($data);
        } else{
            $this->allowField(true)->insert($data);
        }
    }
}