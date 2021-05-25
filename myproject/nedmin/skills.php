<?php
include 'header.php';
$check_home = $db -> prepare("SELECT * FROM home");
$check_home -> execute();
$control_home = $check_home ->rowCount();

$fetch_home = $db -> prepare("SELECT * FROM home WHERE home_id=1");
$fetch_home -> execute();
$fetch= $fetch_home->fetch(PDO::FETCH_ASSOC);
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
                <h3>ANA SAYFA</h3>
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

                  <?php if (@$_GET['home'] == 'ok') {
            ?>
              <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Hoşgeldin</strong> Başarılı şekilde eklendi
              </div>
            <?php   } elseif (@$_GET['home'] == 'no') {     ?>

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
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">İsim
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" value="<?php echo $fetch['site_title'];  ?>"  name="site_title" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Soyisim
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text"value="<?php echo $fetch['title'];  ?>"  name="title" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">1.Uzmanlık Alanı
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" value="<?php echo $fetch['sub_title'];  ?>" name="sub_title" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">2.Uzmanlık Alanı
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" value="<?php echo $fetch['sub_titlee'];  ?>" name="sub_titlee" required="required" class="form-control  ">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Facebook
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text"value="<?php echo $fetch['facebook'];  ?>"  name="facebook" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Twitter 
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" value="<?php echo $fetch['twitter'];  ?>"  name="twitter" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Instagram</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input  class="form-control col" type="text" value="<?php echo $fetch['instagram'];  ?>" name="instagram">
                            </div>
                          </div>
                          
                          
                          <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                     <button type="Reset" class="btn btn-round btn-success">Temizle</button>
                                    <?php
                                    if($control_home==1){ ?>
                                     <button type="Submit" class="btn btn-round btn-primary" name="update_home">Güncelle</button>
                                   <?php }else{ ?>
                                    <button type="Submit" class="btn btn-round btn-warning" name="insert_home">Ekle</button>
                                   <?php }?>
                                    
                                    
                                    </div>
                                </div>
                            </div>

                        </form>

                      </div>
                      <div >
                        
                      <div>.</div>
                      <div>.</div>
                      <div>.</div>
                      <div>.</div>
                      <div>.</div>
                      <div>.</div>
                      <div>.</div><div>.</div>
                      <div>.</div>
                      <div>.</div>
                      <div>.</div>
                      <div>.</div>
                   


                      
                      
                      </div>

                    </div>
<?php
include 'footer.php';
?>