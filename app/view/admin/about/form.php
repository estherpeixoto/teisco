<link rel='stylesheet' href='<?= SITEURL; ?>assets/css/restricted-area.css'>

<div class="list-container">
  <?php $this->loadView('layout/header'); ?>
  <div class="container">
    <div class="row">
        <div class="col-10">
            <h3>About Manager<h3>
        </div>
        
        <div class="col-2" style="padding-top: 25px; text-align: right;">
            <a title="Lista de Chefs"><i class="ti-layout-grid3 custom_botao"></i></a>
        </div>
    </div>
        
      <form action="" method="post" class="form" name="formChefs" id="formChefs" enctype="multipart/form-data">
          <div class="row">
              <div class="control-group col-12 col-sm-2">
                  <div class="control-label">
                      <label for="id">ID</label>
                  </div>
                  <div class="controls">
                      <input type="text" class="form-control" 
                          id="id" name="id" 
                          readonly="readonly" 
                          value="" />
                  </div>
              </div>

              <div class="control-group col-xs-12 col-sm-4">
                  <div class="control-label">
                      <label for="status">Status</label>
                  </div>
                  <div class="controls">
                      <select class="form-control" id="status" name="status" required="required">
                          <option value="" >Selecione o Status</option>
                          <option value="1" >Ativo</option>
                          <option value="2" >Inativo</option>
                      </select>                    
                  </div>
              </div>                    

              <div class="control-group col-12 col-sm-6">
                  <div class="control-label">
                      <label for="title">Title</label>
                  </div>
                  <div class="controls">
                      <input type="text" class="form-control" id="title" name="title" 
                          placeholder="" maxlength="100" required="required" 
                          value="" />
                  </div>
              </div>

              <div class="control-group col-12 col-sm-6">
                  <div class="control-label">
                      <label for="subtitle">Subtitle</label>
                  </div>

                  <div class="controls">
                      <input type="text" class="form-control" id="subtitle" name="subtitle" 
                          placeholder="" maxlength="100" required="required" 
                          value="" />
                  </div>
              </div>

              <div class="control-group col-12 col-sm-3">
                  <div class="control-label">
                      <label for="img">Image</label>
                  </div>

                  <input type="hidden" name="oldImage" value="" />
                  
                  <div class="controls">
                    
                  </div>

                  <img class="img-fluid img-thumbnail img-custom"
                          src=""
                          alt="" 
                          style="max-width: 100%; height: auto;" 
                  >
              </div>

          </div>   
                  
          <div class="row">
              <div class="control-group col-12">
                  &nbsp;
              </div>
          </div>

          <div class="row">
              
              <div class="control-group col-12">
                  <a href="" class="btn btn-primary">Voltar</a>
                
              </div>
              
          </div>
          
      </form> 
            
    </div>
  <?php $this->loadView('layout/footer'); ?>
</div>