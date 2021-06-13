<?php
include 'header.php';
$check_contact = $db -> prepare("SELECT * FROM contact ");
$check_contact -> execute();
$control_contact = $check_contact -> rowCount();

$fetch_contact = $db -> prepare("SELECT * FROM contact WHERE contact_id=1");
$fetch_contact -> execute();
$fetch= $fetch_contact->fetch(PDO::FETCH_ASSOC);
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
                <h3>İLETİŞİM SAYFASI</h3>
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
           
                  <?php if (@$_GET['contact'] == 'ok') {
            ?>
              <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Hoşgeldin</strong> Başarılı şekilde eklendi
              </div>
            <?php   } elseif (@$_GET['contact'] == 'no') {     ?>

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
                    
                    <div id="wizard" class="form_wizard wizard_horizontal">
                   
                      <div id="step-1">
                     
                        <form class="form-horizontal form-label-left" action="process.php" method="POST">

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Sayfa Başlığı 
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" value="<?php echo $fetch['site_title'];  ?>" name="site_title" id="first-name" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Konum
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" value="<?php echo $fetch['locaitonn'];  ?>" id="last-name" name="locaitonn" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Telefon numarası</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" value="<?php echo $fetch['phone'];  ?>" class="form-control col" type="text" name="phone">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input  name="email" value="<?php echo $fetch['email'];  ?>" type="text" id="first-name" required="required" class="form-control  ">
                            </div>
                          </div>
                          
                        
                          
                        
                          <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                    <button type="Reset" class="btn btn-round btn-success" >Temizle</button>
                                    <?php
                                     if($control_contact==1){ ?>
                                  <button type="submit" class="btn btn-round btn-primary"name="update_contact">Güncelle</button>
                                 <?php }else{ ?>
                                  <button type="submit" class="btn btn-round btn-warning" name="insert_contact">Ekle</button>
                                   <?php  } ?>

                                    
                                    
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
                      <div>.</div>
                      <div>.</div><div>.</div>
                    


                      
                      
                      </div>

                    </div>
<?php
include 'footer.php';
?>