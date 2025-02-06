  <?php include '../includes/top.php'; ?>



  <div id="pcoded" class="pcoded">

      <div class="pcoded-container">
          <!-- Menu header start -->
          <?php include '../includes/nav.php'; ?>
          <!-- Menu header end -->
          <div class="pcoded-main-container">
              <!-- Main menu header -->
              <?php include_once '../includes/header.php'; ?>

              <div class="pcoded-wrapper">
                  <div class="pcoded-content">
                      <div class="pcoded-inner-content">
                          <!-- Main-body start -->
                          <div class="main-body">
                              <div class="page-wrapper mt-60">
                                  <!-- Page-header start -->

                              </div>
                              <div class="page-body">
                                  <div class="row">
                                      <div class="col-sm-12">
                                          <!-- Modal large-->

                                          <div class="align-items-end" style="margin-bottom:10px; ">
                                              <div class="align-items-end">
                                                  <button type="button" class="btn btn-primary waves-effect"
                                                      data-toggle="modal" data-target="#large-Modal">Adicionar
                                                      Cliente</button>
                                              </div>
                                          </div>
                                          <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
                                              <div class="modal-dialog modal-lg" role="document">
                                                  <div class="modal-content">
                                                      <div class="modal-body">
                                                          <h5>Default Modal</h5>
                                                          <p>This is Photoshop's version of Lorem IpThis is Photoshop's
                                                              version of Lorem Ipsum. Proin gravida nibh vel velit
                                                              auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                                              auctor, nisi elit consequat ipsum, nec sagittis sem nibh
                                                              id elit.</p>
                                                      </div>

                                                  </div>
                                              </div>
                                          </div>
                                          <div class="card">

                                              <div class="card-block">
                                                  <div class="dt-responsive table-responsive">
                                                      <table id="autofill"
                                                          class="table table-striped table-bordered nowrap">
                                                          <thead>
                                                              <tr>
                                                                  <th>Cliente</th>
                                                                  <th>NIF</th>
                                                                  <th>telefone</th>
                                                                  <th>email</th>
                                                                  <th>Endereco</th>
                                                                  <th>data de criacao</th>
                                                              </tr>
                                                          </thead>
                                                          <tbody id="clientes-list">
                                                          </tbody>
                                                      </table>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- Page-body start -->
                              </div>
                          </div>
                          <!-- Main-body end -->

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>


  <?php include '../includes/footer.php'; ?>