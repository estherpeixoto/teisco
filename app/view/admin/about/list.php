<link rel='stylesheet' href='<?= SITEURL; ?>assets/css/restricted-area.css'>

<div class="list-container">
  <?php $this->loadView('layout/header'); ?>
  <div class="container">    
      <div class="row">
          <div class="col-8">
              <h3>About List</h3>
          </div>
          <div class="col-4" style="display: flex; flex-direction: row-reverse">
              <a href="" title="Novo" class="btn btn-primary">
                  New <i class="fa fa-file"></i>
              </a>
          </div>
      </div>
      
      <div class="row" >
          <div class="col-12">
              <table class="table table-striped table-hover table-condensed table-sm" id="tbListaUsuario">
                  <thead class="thead-light">
                      <tr>
                          <th>ID</th>
                          <th>Status</th>
                          <th>Title</th>
                          <th>Subtitle</th>
                          <th>Text</th>
                          <th style="width: 8%;">Options</th>
                      </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>dale</td>
                      <td>dele</td>
                      <td>dele</td>
                      <td>doly</td>
                      <td>dale</td>
                      <td>
                        <a title="Visualizar" class="btn-crud"><i class="fa fa-low-vision"></i></a>
                        <a title="Alterar" class="btn-crud"><i class="fa fa-clipboard"></i></a>
                        <a title="Excluir" class="btn-crud"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>dale</td>
                      <td>dele</td>
                      <td>dele</td>
                      <td>doly</td>
                      <td>dale</td>
                      <td>
                        <a title="Visualizar" class="btn-crud"><i class="fa fa-low-vision"></i></a>
                        <a title="Alterar" class="btn-crud"><i class="fa fa-clipboard"></i></a>
                        <a title="Excluir" class="btn-crud"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>dale</td>
                      <td>dele</td>
                      <td>dele</td>
                      <td>doly</td>
                      <td>dale</td>
                      <td>
                        <a title="Visualizar" class="btn-crud"><i class="fa fa-low-vision"></i></a>
                        <a title="Alterar" class="btn-crud"><i class="fa fa-clipboard"></i></a>
                        <a title="Excluir" class="btn-crud"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>dale</td>
                      <td>dele</td>
                      <td>dele</td>
                      <td>doly</td>
                      <td>dale</td>
                      <td>
                        <a title="Visualizar" class="btn-crud"><i class="fa fa-low-vision"></i></a>
                        <a title="Alterar" class="btn-crud"><i class="fa fa-clipboard"></i></a>
                        <a title="Excluir" class="btn-crud"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>        
              </table>
          </div>
      </div>
  </div>

  <?php $this->loadView('layout/footer'); ?>
</div>