@extends('layouts.admin')

@section('content')

		
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Dashboard</a>
                  </li>  
                </ol>
              </div>
            </div>
            <!--End Page header-->
            
            <!-- Row-1 -->
            <div class="row">
              <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden dash1-card border-0">
                  <div class="card-body">
                    <p class=" mb-1 ">Total Customer</p>
                    <h2 class="mb-1 number-font">$3,257</h2>
                    <small class="fs-12 text-muted">Compared to Last Month</small>
                    <span class="ratio bg-warning">76%</span>
                    <span class="ratio-text text-muted">Goals Reached</span>
                  </div>
                  <div id="spark1" style="min-height: 60px;">

                  </div>
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 246px; height: 187px;"></div></div><div class="contract-trigger"></div></div></div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden dash1-card border-0">
                  <div class="card-body">
                    <p class=" mb-1 ">Total Staff</p>
                    <h2 class="mb-1 number-font">1,678</h2>
                    <small class="fs-12 text-muted">Compared to Last Month</small>
                    <span class="ratio bg-info">85%</span>
                    <span class="ratio-text text-muted">Goals Reached</span>
                  </div>
                  <div id="spark2" style="min-height: 60px;"></div>
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 246px; height: 187px;"></div></div><div class="contract-trigger"></div></div></div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden dash1-card border-0">
                  <div class="card-body">
                    <p class=" mb-1 ">Appointment</p>
                    <h2 class="mb-1 number-font">2,590</h2>
                    <small class="fs-12 text-muted">Compared to Last Month</small>
                    <span class="ratio bg-danger">62%</span>
                    <span class="ratio-text text-muted">Goals Reached</span>
                  </div>
                  <div id="spark3" style="min-height: 60px;"></div>
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 246px; height: 187px;"></div></div><div class="contract-trigger"></div></div></div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden dash1-card border-0">
                  <div class="card-body">
                    <p class=" mb-1">Total Sales</p>
                    <h2 class="mb-1 number-font">$1,954</h2>
                    <small class="fs-12 text-muted">Compared to Last Month</small>
                    <span class="ratio bg-success">53%</span>
                    <span class="ratio-text text-muted">Goals Reached</span>
                  </div>
                  <div id="spark4" style="min-height: 60px;"></div>
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 246px; height: 187px;"></div></div><div class="contract-trigger"></div></div></div>
              </div>
            </div>
            <!-- End Row-1 -->

            <!-- Row-2 -->
            <div class="row">
              <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Sales Analysis</h3>
                    <div class="card-options">
                      <div class="btn-group p-0">
                        <button class="btn btn-outline-light btn-sm" type="button">Week</button>
                        <button class="btn btn-light btn-sm" type="button">Month</button>
                        <button class="btn btn-outline-light btn-sm" type="button">Year</button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-xl-3 col-6">
                        <p class="mb-1">Total Sales</p>
                        <h3 class="mb-0 fs-20 number-font1">52,618</h3>
                        <p class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down"></i>0.9%</span>this month</p>
                      </div>
                      <div class="col-xl-3 col-6 ">
                        <p class=" mb-1">Maximum Sales</p>
                        <h3 class="mb-0 fs-20 number-font1">$26,197</h3>
                        <p class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up"></i>0.15%</span>this month</p>
                      </div>
                      <div class="col-xl-3 col-6">
                        <p class=" mb-1">Total Units Sold</p>
                        <h3 class="mb-0 fs-20 number-font1">13,876</h3>
                        <p class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down"></i>0.8%</span>this month</p>
                      </div>
                      <div class="col-xl-3 col-6">
                        <p class=" mb-1">Maximum Units Sold</p>
                        <h3 class="mb-0 fs-20 number-font1">5,876</h3>
                        <p class="fs-12 text-muted"><span class="text-success mr-1"><i class="fe fe-arrow-up"></i>0.06%</span>this month</p>
                      </div>
                    </div>
                    <div id="echart1" class="chart-tasks chart-dropshadow text-center" _echarts_instance_="ec_1604593139877" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative; background: transparent;"><div style="position: relative; overflow: hidden; width: 643px; height: 240px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas width="643" height="240" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 643px; height: 240px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s, top 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgba(50, 50, 50, 0.7); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 5px; left: 441px; top: 118px;">Aug<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:9px;height:9px;background-color:#fd6f82;"></span>Total Units Sold: 12<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:9px;height:9px;background-color:#705ec8;"></span>Total Sales: 20</div></div>
                    <div class="text-center mt-2">
                      <span class="mr-4"><span class="dot-label bg-primary"></span>Total Sales</span>
                      <span><span class="dot-label bg-secondary"></span>Total Units Sold</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-end justify-content-between">
                      <div>
                        <div class="btn-group mt-2 mb-2">
                          <button type="button" class="btn btn-pill btn-primary">Inventory</button>
                          <button type="button" class="btn btn-pill btn-primary dropdown-toggle split-dropdown" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            
                            <li><a href="{{ url('admin/retail-products') }}">Retail Products</a></li>
                            
                            
                            <li><a href="{{ url('admin/salon-uses') }}">Salon Uses</a></li>
                          </ul>
                        </div>
                        
                        <h2 class="mb-0"><span class="number-font1">12,769</span><span class="ml-2 text-muted fs-11"><span class="text-danger"><i class="fa fa-caret-down"></i> 43.2</span> this month</span></h2>

                      </div>
                      <span class="text-primary fs-35 dash1-iocns bg-primary-transparent border-primary"><i class="las la-users"></i></span>
                    </div>
                    <div class="d-flex mt-4">
                      <div>
                        <span class="text-muted fs-12 mr-1">Last Month</span>
                        <span class="number-font fs-12"><i class="fa fa-caret-up mr-1 text-success"></i>10,876</span>
                      </div>
                      <div class="ml-auto">
                        <span class="text-muted fs-12 mr-1">Last Year</span>
                        <span class="number-font fs-12"><i class="fa fa-caret-down mr-1 text-danger"></i>88,345</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Row-2 -->

         



          </div>
        </div>

@stop
  