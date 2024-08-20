<?php

function check_user($user,$pass){
    $sql="SELECT * FROM user WHERE user='".$user."' AND pass='".$pass."'";
   return get_one($sql);
 }
 // trang chu
//  function user_insert_id($user, $pass,$ten, $diachi, $email, $tell){
//   $sql = "INSERT INTO user(user, pass,ten, diachi, email, tell) VALUES ('$user', '$pass','$ten', '$diachi', '$email','$tell')";
// return get_one($sql, $user, $pass,$ten,$diachi, $email, $tell);
// }
 function user_insert($user, $pass, $email,$tell){
  $sql = "INSERT INTO user(user, pass, email,tell) VALUES ('$user', '$pass', '$email', '$tell')";
  get_one($sql, $user, $pass, $email,$tell);
}
function user_insert2($user, $pass, $ten, $email,$diachi,$tell){
  $sql = "INSERT INTO user(user, pass,ten, email,diachi,tell) VALUES ('$user', '$pass','$ten', '$email', '$diachi', '$tell')";
return  get_one_id($sql, $user, $pass,$ten, $email,$diachi,$tell);
}
function checkuser($user,$pass){
  $sql="Select * from user where user='".$user."' and pass='".$pass."'";
  return get_one($sql, $user,$pass);

}
function get_users_detail($id){
  $sql="SELECT * FROM user WHERE id=".$id;
  return get_one($sql);
}
function loadall_taikhoan(){
  $sql="SELECT * FROM user ORDER BY id DESC";
  $taikhoan_users=get_all($sql);
  return $taikhoan_users;
}
function delete_users($id){
  
   $sql = "DELETE FROM user WHERE id=".$id;
   delete($sql);

}
function update_users($id,$user,$pass,$email,$role){
  $sql = "UPDATE user SET user='$user' , pass='$pass', email='$email', role='$role' WHERE id=".$id;
  update($sql);
}

function insert_users($user,$pass,$email,$role){
  $sql = "INSERT INTO user(user, pass, email, role) VALUES ('$user', '$pass', '$email', '$role')";
  insert($sql);
}
 ?>