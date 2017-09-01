<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    // public function index(){
    //     $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    // }
    public function index($value='')
    {

        $this->display();
    	// var_dump(I());
    	// $this->display();
    	// $Alllist02 = M('Alllist02');
    	// // $has = $Alllist02->where('`id`=1')->find();
     //    $has = $Alllist02->where('`id`=1')->getField('h5');
    	// var_dump($has);
    }

    public function getview($value='')
    {
        // $id = I('id');
        // var_dump($id);
        $Alllist02 = M('Alllist02');
        // $has = $Alllist02->where('`id`='.$id)->getField('vid');
        
        // var_dump($has);
        $has = $Alllist02->where("id>20000 and hasdata=0 and down=0")->getField('vid');
        $data = array('down'=>1);
        $oldh5 = $Alllist02->where("vid='".$has."'")->setField($data);

        echo $has;
    }
    public function setview($value='')
    {
        $viewkey = I('viewkey');
        $h5 = trim(I('h5'));
        var_dump($h5);
        $Alllist02 = M('Alllist02');
        // $has = $Alllist02->where('`id`='.$id)->getField('vid');
        
        // var_dump($has);
        // $has = $Alllist02->where("id>20000 and hasdata=0 and down=0")->getField('vid');
        // echo $has;

        $id = $Alllist02->where("vid='".$viewkey."'")->getField('id');
        var_dump($id);

        $data = array('h5'=>$h5,'down'=>1,'hasdata'=>1);
        $oldh5 = $Alllist02->where("vid='".$viewkey."'")->setField($data);
        var_dump($oldh5);
    }


    public function test($value='')
    {
        $viewkey = 'a964020bbb96da82037e';
        // $h5 = I('h5');
        // var_dump($h5);
        $Alllist02 = M('Alllist02');
        // $has = $Alllist02->where('`id`='.$id)->getField('vid');
        
        // var_dump($has);
        // $has = $Alllist02->where("id>20000 and hasdata=0 and down=0")->getField('vid');
        // echo $has;

        $oldh5 = $Alllist02->where("vid='".$viewkey."'")->getField('vid');
        var_dump($oldh5);
    }

    public function getvid($value='')
    {
        # code...
    }
}