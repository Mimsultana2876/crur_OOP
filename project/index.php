
<?php
include "database.php";
$obj = new Database();

 $obj->insert('test',['student_name'=>'mim','age'=>'24','city'=>'Dhaka']);
echo "insert result is:";
print_r ($obj->getResult()); 

 $obj->update('test',['student_name'=>'mim sultana','age'=>'25','city'=>'Dhaka'],'id="8"');
echo "update result is:";
print_r ($obj->getResult()); 

$obj->delete('test','age="25"');
echo "delete result is:";
print_r ($obj->getResult());

 $obj->sql('SELECT * FROM test');
echo "SQL result is:";
print_r ($obj->getResult());  

$obj->select('test','*',null,null,null,2);
echo "\n\nSelect result is:";
print_r ($obj->getResult());  

echo $obj->pagination('test',null,null,2);

?>
     