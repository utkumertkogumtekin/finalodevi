<?php
include 'header.php';

$check_setting = $db->prepare("SELECT * FROM setting");
$check_setting->execute();
$control_setting = $check_setting->rowCount();

    
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
                <h3>Hesap Ayarları</h3>
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

                  <?php if (@$_GET["setting"] == 'ok') {
            ?>
              <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Başarılı</strong> Veriler başarılı şekilde eklendi.
              </div>
            <?php   } elseif (@$_GET["setting"] == 'no') {     ?>

              <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Hata</strong> Veriler eklenemedi 
              </div>
            <?php } ?>
                    <!-- Smart Wizard -->
                    
                    <div id="wizard" class="form_wizard wizard_horizontal" >
                   
                      <div id="step-1">
                        <form class="form-horizontal form-label-left" action="process.php" method="POST">

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Şifre
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="password" id="first-name" name="sifre" required="required" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Şifre Tekrarı
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="password" id="last-name" name="sifre_tekrarı" required="required" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Profil Fotoğrafı</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" class="form-control col" type="file" name="profil_fotografı">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email
                            </label>
                            <div class="col-md-6 col-sm-6">
                              <input type="text" id="first-name" name="email"  required="required" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email Tekrarı
                            </label>
                            <div class="col-md-6 col-sm-6">
                              <input type="text" id="first-name" name="email_tekrar"  required="required" class="form-control">
                            </div>
                          </div>
                        
                         
                          
                              <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                     <button type="Reset" class="btn btn-round btn-success">Temizle</button>
                                    <?php
                                    if($control_setting==1){ ?>
                                     <button type="Submit" class="btn btn-round btn-primary" name="update_setting">Güncelle</button>
                                   <?php }else{ ?>
                                    <button type="Submit" class="btn btn-round btn-warning" name="insert_setting">Ekle</button>
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
                      <div>.</div>
                      <div>.</div>
                      
                      

                      
                      
                      </div>

                    </div>
<?php
include 'footer.php';
?>