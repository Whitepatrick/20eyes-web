<?php
require('dbconnection.php');
$mongo = DBConnection::instantiate();
$collection = $mongo->getCollection('users');
$users = array(
array(
'name' => 'Patrick',
'username' => 'patrick',
'password' => md5('usetheforce'),
'birthday' => new MongoDate(
strtotime('1982-10-17 00:00:00')),
'address' => array(
'town' => 'Richmond, VA',
'planet' => 'Earth'
)
)
);
foreach($users as $user)
{
try{
$collection->insert($user);
} catch (MongoCursorException $e) {
die($e->getMessage());
}
}
echo 'Users created successfully';
