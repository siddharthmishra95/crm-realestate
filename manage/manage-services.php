<?php
include 'sidebar.php';
include 'importent-header.php';
?>



          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Section</span> Services</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Servicess  Details</h5>
                      
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">service iocn</label>
                          <div class="col-sm-10">
                            <input type="file" class="form-control" name="" id="" placeholder="logo" />
                          </div>
                        </div>
                      
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">First Heading</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              
                              class="form-control phone-mask"
                              placeholder="Text"
                              />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Secend Heading</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              
                              class="form-control phone-mask"
                              placeholder="Text"
                              />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Read more</label>
                          <div class="col-sm-10">
                            <input
                              type="textarea"
                              
                              class="form-control phone-mask"
                              placeholder="Page URL "
                              />
                          </div>
                        </div>
                        <div>
                        <button type="submit" class="btn btn-primary">Add Menu</button>
                        <div>
                        
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
            <!-- / Content -->

          <?php
          include 'manage-footer.php';
          ?>