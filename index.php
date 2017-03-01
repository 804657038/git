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
?>