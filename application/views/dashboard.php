<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('partials/header'); ?>
      <!-- Page Header-->
      <header class="page-header">
        <div class="container-fluid">
          <h2 class="no-margin-bottom">Dashboard</h2>
        </div>
      </header>
      <section class="topsale">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="had-top-sale">
                <div class="title"> <span>yesterday sale</span></div>
                <div class="amount-sale">
                  <p>Rs. 2500</p>
                </div>
              </div>
            </div>
             <div class="col-md-6 col-sm-6">
              <div class="had-top-sale-right">
               
              </div>
            </div>
            <div class="col-md-6 col-md-6"> </div>
          </div>
        </div>
      </section>
      <section class="no-padding-top">
        <div class="container-fluid">
          <div class="row bg-white has-shadow">
            <div class="col-sm-6">
              <div class="monthtill-date"> <span class="hading-date">Month Till Date</span></div>
              <form>
                <div class="form-group">
                  <label>From Date</label>
                  <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i> </span> </div>
                </div>
                <div class="form-group">
                  <label>To Date</label>
                  <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i> </span> </div>
                  <div class="totall-price-month">
                    <p>Total <strong>Rs.2575</strong></p>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-sm-6">
              <div class="monthtill-date"> <span class="hading-date">Year Till Date</span></div>
              <form>
                <div class="form-group">
                  <label>From Date</label>
                  <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i> </span> </div>
                </div>
                <div class="form-group">
                  <label>To Date</label>
                  <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i> </span> </div>
                  <div class="totall-price-month">
                    <p>Total <strong>Rs.2575</strong></p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <section class="dashboard-counts no-padding-top">
        <div class="container-fluid">
          <div class="row bg-white has-shadow"> 
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
              <div class="item d-flex align-items-center">
                <div class="icon bg-violet"><i class="icon-user"></i></div>
                <div class="title"><span>Quality</span>
                  <div class="progress">
                    <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                  </div>
                </div>
                <div class="number"><strong>25</strong></div>
              </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
              <div class="item d-flex align-items-center">
                <div class="icon bg-red"><i class="icon-padnote"></i></div>
                <div class="title"><span>Service</span>
                  <div class="progress">
                    <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                  </div>
                </div>
                <div class="number"><strong>70</strong></div>
              </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
              <div class="item d-flex align-items-center">
                <div class="icon bg-green"><i class="icon-bill"></i></div>
                <div class="title"><span>Cleanliness</span>
                  <div class="progress">
                    <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                  </div>
                </div>
                <div class="number"><strong>44</strong></div>
              </div>
            </div>
            <!-- Item -->
            <div class="col-xl-3 col-sm-6">
              <div class="item d-flex align-items-center">
                <div class="icon bg-orange"><i class="icon-check"></i></div>
                <div class="title"><span>Value for Money<br>
                  </span>
                  <div class="progress">
                    <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                  </div>
                </div>
                <div class="number"><strong>35</strong></div>
              </div>
            </div>
          </div>
        </div>
      </section>
           
<?php $this->load->view('partials/footer'); ?>