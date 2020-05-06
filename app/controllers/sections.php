<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateSections.php");
$errors=array();
$id='';
$name='';
$description='';
$table = 'sections';
$topics = selectAll($table);


if(isset($_POST['add-topic'])) {
  //
  $errors=validateTopics($_POST);
  if (!empty($_FILES['image'])) {
    $image_name = time().'_'. $_FILES['image']['name'];
    $destination = ROOT_PATH."/assets/images/".$image_name;
    $result =move_uploaded_file($_FILES['image']['tmp_name'],$destination);
    if ($result) {
      $_POST['image']=$image_name;
      // dd($_post['image']);
      // dd($_POST);
    }else {
        array_push($errors,'فشل قي التحميل');
    }
  }else {
    array_push($errors,'الصوره مطلوبه');
  }
  if (count($errors) ===0) {
     unset($_POST['add-topic']);
     $topic_id = create('topics', $_POST);
     $_SESSION['message'] = 'Topic created successfully';
     $_SESSION['type'] = 'success';
     header('location: ' . BASE_URL . '/admin/topics/index.php');
     exit();
  }else {
    $name=$_POST['name'];
    $description=$_POST['description'];

  }

}

if (isset($_GET['id'])) {
  $id=$_GET['id'];
  $topic= selectOne($table,['id'=>$id]);
  $id = $topic['id'];
  $name =$topic['name'];
  $description =$topic['description'];
}
if (isset($_GET['del_id']) ){
  $id =$_GET['del_id'];
  $count=delete($table,$id);
}
if(isset($_POST['update-topic'])){
  $errors=validateTopics($_POST);
  if (count($errors) ===0) {
    $id=$_POST['id'];
    unset($_POST['update-topic'],$_POST['id']);
    $topic_id= Update($table,$id,$_POST);
    $_SESSION['message'] = 'Topic  successfully updated';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit();
  }else {
    $id=$_POST['id'];
    $name=$_POST['name'];
    $description=$_POST['description'];
  }

}
