<?php
include 'header.php';

$check_info = $db -> prepare("SELECT * FROM info");
$check_info -> execute();
$control_info = $check_info -> rowcount();

$fetch_info = $db -> prepare("SELECT * FROM info WHERE exp_id=2");
$fetch_info -> execute();
$fetch= $fetch_info->fetch(PDO::FETCH_ASSOC);
?>


<style>
   button
   {
      float: right;

      width: 135px;

      background-color:#b0e0e6;
   }
</style>

  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Uzmanlık Alanları</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group row pull-right top_search">
                  <div class="input-group">
                    
                    <span class="input-group-btn">
                              
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                   
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <?php if (@$_GET['info'] == 'ok') {
            ?>
              <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Hoşgeldin</strong> Başarılı şekilde eklendi
              </div>
            <?php   } elseif (@$_GET['info'] == 'no') {     ?>

              <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Hata</strong> bir sorun var
              </div>
            <?php }  elseif (@$_GET['update'] == 'ok') {     ?>

               <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Hoşgeldin</strong> Başarılı şekilde güncellendi
              </div>
              <?php }  elseif (@$_GET['update'] == 'no') {     ?>

              <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Hata</strong> bir sorun var
              </div>
              <?php }  ?>
                    <!-- Smart Wizard -->
                    
                    <div id="wizard" class="form_wizard wizard_horizontal" >
                   
                      <div id="step-1">
                        <form class="form-horizontal form-label-left" action="process.php" method="POST">
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Sayfa Başlığı 
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" value="<?php echo $fetch['site_title'];  ?>" name="site_title" required="required" class="form-control  ">
                            </div>
                          </div><br><br>

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Web Tasarımcısı
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text"  value="<?php echo $fetch['first_exp'];  ?>"name="first_exp" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Açıklama
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                            <textarea name="first_comment" value="<?php echo $fetch['first_comment'];  ?>" cols="100" rows="4" class="form-control col-nd-7 col-xs-12"></textarea>
                            </div>
                          </div><br><br>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Front-End Geliştirici</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input class="form-control col" value="<?php echo $fetch['second_exp'];  ?>" type="text" name="second_exp">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Açıklama 
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                            <textarea name="second_comment" value="<?php echo $fetch['second_comment'];  ?>" cols="100" rows="4" class="form-control col-nd-7 col-xs-12"></textarea>
                            </div>
                          </div><br><br>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Java Uzmanı 
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input class="date-picker form-control" value="<?php echo $fetch['third_exp'];  ?>" name="third_exp" required="required" type="text">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Açıklama 
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                            <textarea name="third_comment" value="<?php echo $fetch['third_comment'];  ?>" cols="100" rows="4" class="form-control col-nd-7 col-xs-12"></textarea>
                            </div>
                          </div>
                          </div>




                          <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                    <button type="Reset" class="btn btn-round btn-success">Temizle</button>
                                    <?php
                                    if($control_info==1)  { ?>
                                      <button type="Submit" class="btn btn-round btn-primary" name="update_info">Güncelle</button>
                                  <?php  }else { ?>
                                    <button type="Submit" class="btn btn-round btn-warning" name="insert_info">Ekle</button>
                                  <?php } ?>



                                    
                                    
                                    </div>
                                </div>
                            </div>

                        </form>

                      </div>
                      <div >
                        
                  
                      
                      
                      </div>

                    </div>
<?php
include 'footer.php';
?>