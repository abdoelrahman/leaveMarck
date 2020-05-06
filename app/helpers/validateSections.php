<?php

function validateTopics($topic) {

    $errors = array();

if(empty($topic['name'])) {
    array_push($errors, "name of topic is requierd.");
}



    $existingTopic = selectOne('topics',['name' => $topic['name']]);
    // if($existingUsers) {
    // array_push($errors, "name Already Exists");
    // }

    if($existingTopic) {
      if (isset($post['update-topic']) && $existingTopic['id'!= $post['id']] ) {
        array_push($errors, " nmae Already Exists");      }
    }
    if (isset($post['add-topic'])){
      array_push($errors, "name Already Exists");
    }

    return $errors;
}














?>
