<?php
header('Content-type: application/json');
  $data[] = array('id'=>1, 'name'=>'陈晓军', 'img'=>'no_avatar_medium.jpg', 'loc'=>'一句话介绍');
  $data[] = array('id'=>2, 'name'=>'王威', 'img'=>'no_avatar_medium.jpg', 'loc'=>'一句话介绍');
  $data[] = array('id'=>3, 'name'=>'吴海斌', 'img'=>'no_avatar_small.jpg', 'loc'=>'一句话介绍');
  $data[] = array('id'=>4, 'name'=>'陆乐乐', 'img'=>'no_avatar_small.jpg', 'loc'=>'一句话介绍');
  $data[] = array('id'=>5, 'name'=>'陈琳', 'img'=>'no_avatar_small.jpg', 'loc'=>'一句话');
echo json_encode($data);
?>