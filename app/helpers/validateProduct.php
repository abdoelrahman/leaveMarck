<?php

function validatePost($post) {

    $errors = array();

if(empty($post['title'])) {
    array_push($errors, "Title is Required");
}

if(empty($post['body'])) {
    array_push($errors, "body is Required");
}
if(empty($post['topic_id'])) {
    array_push($errors, "please select topic.");
}

    $existingPost = selectOne('posts',['title' => $post['title']]);
    if($existingPost) {
      if (isset($post['update-post']) && $existingPost['id'!= $post['id']] ) {
        array_push($errors, "title Already Exists");      }

    if (isset($post['add-post'])){
      array_push($errors, "title Already Exists");
    }
    }
    return $errors;
}
















?>
