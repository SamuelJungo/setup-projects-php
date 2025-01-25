  
<?php include '../includes/top.php'; ?>
<?php include '../includes/sidebar.php'; ?>
 
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
     
   <?php include '../includes/nav.php'; ?>
    <div class="container-fluid py-2">
      <div class="row">
        <div class="ms-3 mb-4 ">
          <button type="button" class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="material-symbols-rounded text-sm">add</i>&nbsp;&nbsp;Adicionar clientes
      </button>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Your modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Society has put up so many boundaries, so many limitations on what’s right and wrong that it’s almost impossible to get a pure thought out.
              <br><br>
              It’s like a little kid, a little boy, looking at colors, and no one told him what colors are good, before somebody tells you you shouldn’t like pink because that’s for girls, or you’d instantly become a gay two-year-old.
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn bg-gradient-dark mb-0" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn bg-gradient-dark mb-0">Save changes</button>
            </div>
          </div>
        </div>
      </div>      
        </div>
        
   
      <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-12 col-7">
                  <h6>Clientes</h6>
        
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NIF</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Teleone</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Provincia</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Endereço</th>
                    </tr>
                  </thead>
                  <tbody>
                   
          
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <?php include '../includes/info.php'; ?>
    </div>
  </main>
 
  <?php include '../includes/footer.php'; ?>
  