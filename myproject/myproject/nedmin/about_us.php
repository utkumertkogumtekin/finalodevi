<?php
include 'header.php';
$check_skill = $db -> prepare("SELECT * FROM about_me");
$check_skill -> execute();
$control_skill = $check_skill -> rowCount();

$fetch_skill = $db -> prepare("SELECT * FROM about_me WHERE about_id=1");
$fetch_skill -> execute();
$fetch= $fetch_skill->fetch(PDO::FETCH_ASSOC);
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
                <h1>HAKKIMDA SAYFASI</h1>
                
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
                    
                  <H2>Kişisel Bilgiler</H2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            
                  <?php if (@$_GET['insert'] == 'ok') {
            ?>
              <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Hoşgeldin</strong> Başarılı şekilde eklendi
              </div>
            <?php   } elseif (@$_GET['insert'] == 'no') {     ?>

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
                              <input type="text" value="<?php echo $fetch['title'];  ?>"  name="title" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Biyografi
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                            <textarea name="About_biography" value="<?php echo $fetch['About_biography'];  ?>"  required="required"  cols="100" rows="4" class="form-control col-nd-7 col-xs-12"></textarea>
                            </div>
                          </div><br><br>
                          <h2>Yetenekler</h2><br><br>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">1.Yetenek
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" value="<?php echo $fetch['first_skill'];  ?>"   name="first_skill" required="required" class="form-control  ">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">2.Yetenek
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" value="<?php echo $fetch['second_skill'];  ?>"  name="second_skill" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">3.Yetenek
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text"value="<?php echo $fetch['third_skill'];  ?>"  name="third_skill" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">4.Yetenek</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input   class="form-control col"value="<?php echo $fetch['forth_skill'];  ?>"  type="text"  name="forth_skill">
                            </div>
                          </div>
                          <br><br><br>
                          <div><h2>Sayaçlar</h2></div><br><br>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">1.yetenek Sayaç
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" value="<?php echo $fetch['first_counter'];  ?>"  name="first_counter" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">2.yetenek Sayaç
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" value="<?php echo $fetch['second_counter'];  ?>"  name="second_counter" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">3.yetenek Sayaç</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input class="form-control col" value="<?php echo $fetch['third_counter'];  ?>"  name="third_counter">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">4.yetenek Sayaç
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" value="<?php echo $fetch['forth_counter'];  ?>"  name="forth_counter" required="required" class="form-control  ">
                            </div>
                          </div>
                      
                          
                          <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                     <button type="Reset" class="btn btn-round btn-success">Temizle</button>
                                    <?php
                                    if($control_skill==1){ ?>
                                     <button type="Submit" class="btn btn-round btn-primary" name="update_skills">Güncelle</button>
                                   <?php }else{ ?>
                                    <button type="Submit" class="btn btn-round btn-warning" name="insert_skills">Ekle</button>
                                   <?php }?>
                                    
                                    
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