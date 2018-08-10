<?php
function table(){
    echo"<table align='center' border='1' width='600' >";
    echo"<caption><h1>通过函数输出表格</h1></caption>";
    for($i=0;$i<10;$i++){
        $bgColor=$i%2==0?"#FFFFFF":"#DDDDDD";
        echo"<tr bgcolor=".$bgColor.">";
        for($j=0;$j<10;$j++){
            echo"<td>".($i*10+$j)."</td>";
        }
        echo"<br/>";
    }
    echo"</table>";
}
?>
<?php
table();
?>


<?php
/*声明一个函数，打印参数列表*/
function more_args(){
    $args=func_get_args();
    for($i=0;$i<count($args);$i++){
        echo "第".$i."个参数是".$args[$i]."<br>";
    }
}
more_args("one","two","three","1","2","3");

?>
<?php
function  one($a,$b){
    return $a+$b;
}
function  two($a,$b){
    return $a*$b;
}
$sum="one";
echo $sum(2,3);
?>
<?php 
function filter($fun){
    for($i=0;$i<=100;$i++){
        if($fun($i))
            continue;
        echo $i.", ";
    }
}
function three($sum){
    return $sum%3==0;
}
filter("three");
?>
<?php
$contact1=array(
    array(1,'尚某','A公司','北京市','7220820'),
    array(2,'尚某','B公司','北京市','7220820')
);
echo '<table border="1" width="300" center="align">';
echo '<caption><h1>联系人列表</h1></caption>';
echo '<tr bgcolor="#DDDDDD">';
echo '<th>编号</th><th>姓名</th><th>公司</th><th>地点</th><th>电话</th>';
echo '</tr>';
for($i=0;$i<count($contact1);$i++){
    echo '<tr>';
    for($j=0;$j<count($contact1[$i]);$j++){
        echo '<td>'.$contact1[$i][$j].'</td>';
        
    }
    echo '</tr>';
}
echo '</table>';
?>
<?php 
$contact2=array(1,'李某','开团公司');
echo '<table border="1" width="600" align="center">';
echo '<caption><h1>联系人列表</h1></caption>';
echo '<tr bgcolor="#DDDDDD">';
echo '<th>编号</th><th>姓名</th><th>公司</th>';
echo '</tr><tr>';
for($i=0;$i<count($contact2);$i++){
    echo '<td>'.$contact2[$i].'</td>';
 
}
echo '</tr></table>';
?>
<?php
$contact3=array(1,'李某','开团公司');
$sum=0;
foreach ($contact3 as $value){
    echo '在数组\$contact中第'. $sum.'元素是：'.$value .'<br>';
    $sum++;
}
?>
<?php
$contact4=array('ID'=>1,'姓名'=>'高某','公司'=>'搬家公司');
echo '<dl>一个联系人的信息：';
foreach ($contact4 as $key=>$value){
    echo '<dd>'.$key.':'.$value.'</dd>';
}
echo '</dl>';
?>
<?php
$wage=array(
    '市场部'=>array(
        array(1,'高某','经理','1000'),
        array(1,'高某','经理','1000'),
        array(1,'高某','经理','1000'),
        
),
    '产品部'=>array(
        array(1,'高某','经理','1000'),
        array(1,'高某','经理','1000'),
        array(1,'高某','经理','1000'),
        
    ),
    '财务部'=>array(
        array(1,'高某','经理','1000'),
        array(1,'高某','经理','1000'),
        array(1,'高某','经理','1000'),
        
    ),
);
foreach ($wage as $sector=>$table){
    echo '<table border="1px" width="300" align="center" >';
    echo '<caption><h2>'.$sector.'十月份工资表 </h2><caption>';
    echo '<tr bgcolor="#DDDDDD"><th>编号</th><th>姓名</th><th>职位</th><th>工资</th></tr>';
    foreach ($table as $row){
        echo '<tr>';
        foreach ($row as $col){
            echo '<td>'.$col.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
?>
<?php
$contact5=array('ID'=>1,'姓名'=>'高某','公司'=>'A公司');
$id=each($contact5);
print_r($id);
list($key,$value)=$id;
echo $key.'=>'.$value;
echo '第二个元素'.key($contact5).'=>'.current($contact5).'<br/>';
?>
<?php
foreach ($_SERVER as $key=>$value){
    echo '$_SERVER['.$key.']='.$value.'<br/>';
}
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
echo $_GET['action'];
echo '<pre>';
print_r($_GET);
echo '</pre>';
?>
<html>
  <head>
    <title>添加联系人</title>
  </head>
  <body>
    <form action="index.php" method="post">
              编号：<input type="text" name="id"/><br/>
              姓名：<input type="text" name="name"/><br/>
              公司：<input type="text" name="company"/><br/>
              地址：<input type="text" name="address"/><br/>
              电话：<input type="text" name="phone"/><br/>
     Email:<input type="text" name="email"/><br/>
     <input type="submit" value="添加新的联系人"/><br/>
    </form>
  </body>
</html>
<?php 
foreach ($_POST as $key=>$value){
    echo $key."=>".$value.'<br>';
}
?>
<!-- $contact4=array('ID'=>1,'姓名'=>'高某','公司'=>'搬家公司'); -->
<?php 
print_r(array_values($contact4));
print_r(array_keys($contact4));
$a=array(10,20,30,'A10');
print_r(array_keys($a,'10',false));
print_r(array_keys($a,10,false));
print_r(array_keys($a,'10',true));
print_r(array_keys($a,10,true));
if(in_array('A10', $a,true)){
    echo 'ok';
}else echo 'no';
echo array_search('A10', $a).'<br>';
if(array_key_exists('姓名', $contact4)){
    echo '存在高某某';
}
print_r(array_flip($contact4));
$array=array(1,'php',1,'mysql','php');
print_r(array_count_values($array));
echo"<br>";
?>
<!-- array_filter() -->
<?php
function myfun($var){
    if($var%2==0){
        return true;
    }
}
$array=array('a'=>1,'b'=>2,'c'=>3,);
print_r(array_filter($array,'myfun'));
?>
<?php
function myfun1($value,$key){
    echo 'the key '.$key.' has the value '.$value.' <br>'; 
}
$lamp=array('a'=>'Linux','b'=>'Apache','c'=>'mysql');
array_walk($lamp, 'myfun1');
?>
<?php
function myfun2($v){
    if($v==='mysql'){
        return 'oracle';
    }
    return $v;
}
print_r(array_map('myfun2', $lamp));
function myfun3($v1,$v2){
    if($v1===$v2){
        return 'same';
    }
    return 'different';
}
$a1=array('Linux','php','mysql');
$a2=array('Unix','php','oracle');
print_r(array_map('myfun3', $a1,$a2));
echo '<br>';
print_r(array_map(null, $a1,$a2));
echo '<br>';
?>
<!-- 根据数组元素排序，sort正向排序，rsort反向排序，索引重新排序,下标索引会变 -->
<?php
$data=array('a'=>5,'b'=>8,);
sort($data);
print_r($data);
rsort($data);
print_r($data);
echo "<br>";
?>
<!-- 根据键名排序,ksort正向排序，krsort逆向排序 -->
<?php
$data=array('2'=>5,'1'=>8,'4'=>9);
ksort($data);
print_r($data);
krsort($data);
print_r($data);
echo'<br>';
asort($data);
print_r($data);
arsort($data);
print_r($data);
?>
<?php
$lamp=array('linux','apache','mysql','php');
print_r(array_slice($lamp, -4,2));
print_r(array_slice($data, 1,2,false));
print_r(array_slice($contact4, 1,2,true));
echo '<br>';
print_r(array_splice($lamp, 2));
?>
<?php $num1=9;
$num2=4;
echo $num1+$num2;
echo '<br>';
echo $num1*$num2;
echo '<br>';
echo $num1/$num2;
echo '<br>';
echo $num1%$num2;
echo '<br>';
echo $num1++;
echo '<br>';
echo $num2--;
echo --$num1;
echo '<br>';
$str1='ergouzi';
$str2='chishi';
echo $str1+$str2;
echo '<br>';
echo $str1.$str2;
echo '<br>';
echo (int)$str1;
echo '<br>';
echo (int)$str2;
echo '<br>';
$a=3;
echo $a+=2;
echo $a-=1;
echo $a*=2;
echo $a/=2;
$a=2;
echo $a.=2;
echo '<br>';
$A=2;
$B=3;
if($A==5&&$B==3){
    echo 'true<br>';
}else{
    echo 'false<br>';
}
if($A==8&&$B==3){
    echo 'true<br>';
}else{
    echo 'false<br>';
}
if($A==8||$B==3){
    echo 'true<br>';
}else{
    echo 'false<br>';
}
if($A==3||!($B==9)){
    echo 'true<br>';
}else{
    echo 'false<br>';
}
if($A==3){
    echo 'true<br>';
}else {
    echo 'false<br>';
}
if($A==5){
    echo 'true<br>';
}else {
    echo 'false<br>';
}
if($A==='5'){
    echo 'true<br>';
}else {
    echo 'false<br>';
}
if($A!=3){
    echo 'true<br>';
}else {
    echo 'false<br>';
}
echo $A==5?'true':'false';
echo "<br>";
switch ($A){
    case 1:
        echo '案例一';
    case 2:
        echo '案例二';
    case 3:
        echo '案例三';
        continue;
    case 4:
        echo '案例四';
}
$i=0;
while($i<100){
    echo $i++;
}
echo '<br>';
$b=1;
do{
    echo $b++;
}while($b<100)
?>
<?php
$a1=array('os','websever','database');
$a2=array('linux','Apache','mysql');
print_r(array_combine($a1,$a2));
$c1=array('ID'=>1,'姓名'=>'liu某','公司'=>'A公司');
$c2=array('ww'=>2,'姓名'=>'高某','公司'=>'B公司');
print_r(array_merge($c1,$c2));
$a1=array('os','websever','database');
$a3=array('sos','websever','database1');
print_r(array_intersect($a1, $a3));
print_r(array_diff($a1, $a3));
echo '<hr>';
?>
<!-- 使用数组实现堆栈 -->
<?php 
$lamp=array('web');
echo array_push($lamp, 'linux');//返回数组内部元素个数
print_r($lamp);
echo array_push($lamp,'php');
print_r($lamp);
echo array_pop($lamp);//返回被删除的元素
print_r($lamp);
?>
<!-- 使用数组实现队列 -->
<?php
$queue=array('a'=>'linux','b'=>'apache','c'=>'php');
echo array_shift($queue);
print_r($queue);
echo array_unshift($queue,'mysql');
print_r($queue);
echo '<hr>';
?>
<?php
echo array_rand($queue).'&nbsp';//返回数组的下标
echo $queue[array_rand($queue)].'&nbsp';
shuffle($queue);
print_r($queue);
$number=range(0,5,3);
print_r($number);
?>
<!-- 数组运算符号 -->
<?php
$s=array('a'=>'linux','b'=>'apache','c'=>'mysql');
$b=array('a'=>'fuck','b'=>'meng','c'=>'php');
$sb=$s+$b;
print_r($sb);
echo $s[a];
echo $s['a'];
print_r(array_slice($s, -2));
?>
<!-- for循环 -->
<?php
for($i=0;$i<10;$i++){
    echo '第'.$i.'次';
}

//双层for循环
for($i=0;$i<3;$i++){
    for($j=0;$j<4;$j++){
        echo $i.'.....'.$j.'<br>';
    }
}

//三层for循环
for($i=0;$i<3;$i++){
    for($j=0;$j<4;$j++){
        for($k=0;$k<5;$k++){
            echo $i.'...'.$j.'...'.$k.'<br>';
        }
    }
}
//9*9乘法表
for($i=1;$i<10;$i++){
    for($j=1;$j<=$i;$j++){
        echo $j.'*'.$i.'='.$i*$j.'&nbsp';
    }
    echo '<br>';
}

//foreach()
$str3=array('a'=>1,'b'=>2,'c'=>3);
foreach ($str3 as $key=>$value){
    echo '键名:'.$key.'=>数值:'.$value;
}

//continue和break区别 break直接跳出循环，contiue跳出本次循环
foreach ($str3 as $value){
    if($value==2){
        //break;
        continue;
    }
    echo $value;
}

//函数此处的ddd为默认参数，当调用函数设置$a的值则会改变
function method($a='ddd'){
    echo 'aaa';
    echo $a;
    return 'sd';
}
method($s='333');
$h=method();
echo $h;
?>
<!-- 抽象类与接口 -->
<?php
abstract class abstractClass{
    protected $name;
    protected $country;
    
    function __construct($name,$country='China'){
        $this->name=$name;
        $this->country=$country;   
    }
    
    abstract function say();
    
    abstract function eat();
    
    function run(){
        echo '使用两条腿走路<br>';
    }
}
echo'<br>';
?>

<!-- 引用 -->
<?php
function myGg1($a){
    $a++;
    echo $a.'<br>';
}
function myGg2(&$b){
    $b++;
    echo $b.'<br>';
}
$a=1;
$b=1;
myGg1($a);
myGg2($b);
echo $a.'<br>';
echo $b.'<br>';
?>

<!-- 回调函数 -->
<?php
function one1(){
    echo '猪';
}
$a='one1';
$a();
?>
<?php 
function  a($num){
    $num++;
    echo $num.'<br>';
    if($num<5){
        a($num);
    }
    echo $num.'<br>';
}
a(1);
?>
<?php 
$array1=array('q'=>1,'r'=>3);
var_dump($array1);
print_r($array1);
$array2=array('1','3');
for($i=0;$i<count($array2);$i++){
    echo $array2[$i];
}
foreach ($array1 as $key=>$value){
    echo $key.'=>'.$value;
}
echo nl2br("one\ntwo");
?>