
<?php

include 'connect.php';
ob_start();
session_start();

if (isset($_POST['signup'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_2 = $_POST['password_2'];

    
    if ($password === $password_2) {
        //echo 'şifreler aynı';
        if (strlen($password) >= 6) {


            $admin_control = $db->prepare("SELECT * From user");
            $admin_control->execute();
            $has_admin = $admin_control->rowCount();
            if ($has_admin == 0) {

                $pass = md5($password_2);
                $admin_signup = $db->prepare("INSERT INTO user SET
                    user_name='$user_name',
                    email='$email',
                    password='$pass'
                    ");
                $insert = $admin_signup->execute();
                if ($insert) {
                    //echo 'başarılı';
                    header("location:login.php?status=ok&user_name=user_name");
                } else {
                   // echo 'başarısız';
                    header("location:login.php?register=no#signup");

                }
            } else {
                //echo 'kayıtlı admin mevcut';
                header("location:login.php?register=hasadmin#signup");
            }
        } else {
           // echo 'şifre 6 karakterden az';
            header("location:login.php?register=lowchar#signup");
        }
    } else {
        //echo 'şifreler farklı';
        header("location:login.php?register=inegual#signup");
    }
}
if (isset($_POST['login'])){
    $user_name = $_POST['user_name'];
    $pass =md5($_POST['password']);
    $login = $db -> prepare("SELECT * FROM user WHERE user_name='$user_name'and password='$pass'");
    $login -> execute();
    $count = $login -> rowCount();
    if($count==1){
        $_SESSION['user_name']= $user_name;
        header("location:index.php");

    }else{
        header("location:login.php?login=no");
    }
}
// about_us.php için
if(isset($_POST['insert_skills'])){
  
    $title = $_POST['title'];
    $About_biography = $_POST['About_biography'];
    $first_skill = $_POST['first_skill'];
    $second_skill = $_POST['second_skill'];
    $third_skill = $_POST['third_skill'];
    $forth_skill = $_POST['forth_skill'];
    $first_counter = $_POST['first_counter'];
    $second_counter = $_POST['second_counter'];
    $third_counter = $_POST['third_counter'];
    $forth_counter = $_POST['forth_counter'];
   
    $insert_skill = $db -> prepare("INSERT INTO about_me SET
    title='$title',
    About_biography='$About_biography',
    first_skill='$first_skill',
    second_skill='$second_skill',
    third_skill='$third_skill',
    forth_skill='$forth_skill',
    first_counter='$first_counter',
    second_counter='$second_counter',   
    third_counter='$third_counter',
    forth_counter='$forth_counter'
    
    ");
    $insert = $insert_skill -> execute();
    if($insert){
    header("location: about_us.php?insert=ok");
    }else{
    header("location: about_us.php?insert=no");

    }
}

// about_me update
if(isset($_POST['update_skills'])){
    $title = $_POST['title'];
    $About_biography = $_POST['About_biography'];
    $first_skill = $_POST['first_skill'];
    $second_skill = $_POST['second_skill'];
    $third_skill = $_POST['third_skill'];
    $forth_skill = $_POST['forth_skill'];
    $first_counter = $_POST['first_counter'];
    $second_counter = $_POST['second_counter'];
    $third_counter = $_POST['third_counter'];
    $forth_counter = $_POST['forth_counter'];

    

    $update_skill = $db -> prepare("UPDATE about_me SET
    title='$title',
    About_biography='$About_biography',
    first_skill='$first_skill',
    second_skill='$second_skill',
    third_skill='$third_skill',
    forth_skill='$forth_skill',
    first_counter='$first_counter',
    second_counter='$second_counter',   
    third_counter='$third_counter',
    forth_counter='$forth_counter' WHERE About_id=1
    

    ");
    $update = $update_skill -> execute();
    if($update){
        header("location:about_us.php?update=ok");
    } else {
        header("location:about_us.php?update=no");
    }
}
// contact.php için insert
if(isset($_POST['insert_contact'])){
  
    
    $site_title = $_POST['site_title'];
    $locaitonn = $_POST['locaitonn'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
    $insert_contact = $db -> prepare("INSERT INTO contact SET
    site_title='$site_title',
    locaitonn='$locaitonn',
    phone='$phone',
    email='$email'
    
    
    
    ");
    $contact = $insert_contact -> execute();
    if($contact){
    header("location: contact.php?contact=ok");
    }else{
    header("location: contact.php?contact=no");

    }
}

// contact update
if(isset($_POST['update_contact'])){
    $site_title = $_POST['site_title'];
    $locaitonn = $_POST['locaitonn'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
   
    

    

    $update_contact = $db -> prepare("UPDATE contact SET
    site_title='$site_title',
    locaitonn='$locaitonn',
    phone='$phone',
    email='$email' WHERE contact_id=1
     
    

    ");
    $update = $update_contact -> execute();
    if($update){
        header("location:contact.php?update=ok");
    } else {
        header("location:contact.php?update=no");
    }
}


// info.php için
// insert
if(isset($_POST['insert_info'])){
  
    
    $site_title = $_POST['site_title'];
    $first_exp = $_POST['first_exp'];
    $second_exp = $_POST['second_exp'];
    $third_exp = $_POST['third_exp'];
    $first_comment = $_POST['first_comment'];
    $second_comment = $_POST['second_comment'];
    $third_comment = $_POST['third_comment'];
    
    $insert_info = $db -> prepare("INSERT INTO info SET
    site_title='$site_title',
    first_exp='$first_exp',
    second_exp='$second_exp',
    first_comment='$first_comment',
    second_comment='$second_comment',
    third_comment='$third_comment'
    
    
    
    ");
    $info = $insert_info -> execute();
    if($info){
    header("location: info.php?info=ok");
    }else{
    header("location: info.php?info=no");

    }
}

// info update
if(isset($_POST['update_info'])){
  
    
    $site_title = $_POST['site_title'];
    $first_exp = $_POST['first_exp'];
    $second_exp = $_POST['second_exp'];
    $third_exp = $_POST['third_exp'];
    $first_comment = $_POST['first_comment'];
    $second_comment = $_POST['second_comment'];
    $third_comment = $_POST['third_comment'];
    
    $update_info = $db -> prepare("UPDATE  info SET
    site_title='$site_title',
    first_exp='$first_exp',
    second_exp='$second_exp',
    third_exp='$third_exp',
    first_comment='$first_comment',
    second_comment='$second_comment',
    third_comment='$third_comment'  WHERE  exp_id=2
    
    
    
    ");
    $update = $update_info -> execute();
    if($update){
    header("location: info.php?update=ok");
    }else{
    header("location: info.php?update=no");

    }
}
// skills.php insert için
if(isset($_POST['insert_home'])){
  
    
    $site_title = $_POST['site_title'];
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $sub_titlee = $_POST['sub_titlee'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $ınstagram = $_POST['ınstagram'];
    
    $insert_home = $db -> prepare("INSERT INTO home SET
    site_title='$site_title',
    title='$title',
    sub_title='$sub_title',
    sub_titlee='$sub_titlee',
    facebook='$facebook',
    twitter='$twitter',
    instagram='$instagram'
    
    
    ");
    $home = $insert_home -> execute();
    if($home){
    header("location: skills.php?home=ok");
    }else{
    header("location: skills.php?home=no");

    }
}
//skills update

if(isset($_POST['update_home'])){
    $site_title = $_POST['site_title'];
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $sub_titlee = $_POST['sub_titlee'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
    

    

    $update_home = $db -> prepare("UPDATE home SET
    site_title='$site_title',
    title='$title',
    sub_title='$sub_title',
    sub_titlee='$sub_titlee',
    facebook='$facebook',
    twitter='$twitter',
    instagram='$instagram' WHERE home_id=1
     
    

    ");
    $update = $update_home -> execute();
    if($update){
        header("location:skills.php?update=ok");
    } else {
        header("location:skills.php?update=no");
    }
}
//setting sayfası için insert
if(isset($_POST['insert_setting'])){
  
    
    $sifre = $_POST['sifre'];
    $sifre_tekrarı = $_POST['sifre_tekrarı'];
    $email = $_POST['email'];
    $email_tekrar = $_POST['email_tekrar'];
    
    
    $insert_setting = $db -> prepare("INSERT INTO setting SET
    sifre='$sifre',
    sifre_tekrarı='$sifre_tekrarı',
    email='$email',
    email_tekrar='$email_tekrar',
  
    
    ");
    $setting = $insert_setting -> execute();
    if($setting){
    header("location: setting.php?setting=ok");
    }else{
    header("location: setting.php?setting=no");

    }
}