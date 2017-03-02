<?php
print_r(111);
$index=[1,2,3,4,5,6];
$r=rand(0,6);
echo $index[$r];

class index{
    public function index(){
        echo 111;
    }
}
$obj=new index;
$obj->index();
echo "哈哈";
echo "哈哈，创建了一个 dev分支";
$ok=1;
$tk=2;
if($ok+1==3){
    echo "对比成功";
}
?>