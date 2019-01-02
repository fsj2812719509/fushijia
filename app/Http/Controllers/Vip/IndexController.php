<?php

namespace App\Http\Controllers\Vip;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\IndexModel;

class IndexController extends Controller
{
    public function vip($id){
        //echo"123456789";
        $info=IndexModel::where(['id'=>$id])->first()->toArray();
        print_r($info);
    }

    //添加
    public function add(){
        $data = [
            'name'=>'baby',
            'age'=>'18',
            'hobby'=>'唱歌跳舞'
        ];
        $info = IndexModel::insert($data);
        if($info){
            echo '添加成功';
        }else{
            echo '添加失败';
        }
    }

    //修改
    public function update($uid){
        $data = [
            'hobby'=>'吉他'
        ];
        $res = IndexModel::where(['id'=>$uid])->update($data);
    }

    //删除
    public function del($did){
        $where = [
            'id'=>$did
        ];
        $res  = IndexModel::where($where)->delete();
    }

    //展示
    public function list(){
        $list = IndexModel::all();
        $data = [
            'list'=>$list
        ];
        return view('Vip.vip',$data);
    }

    public function gou(){
        echo 'dogdogdog';
    }
}
