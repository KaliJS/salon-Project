@extends('layouts.admin')

@section('content')

		<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.bootstrap4.min.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/responsive.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dataTables.bootstrap4.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/buttons.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/buttons.colVis.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/buttons.print.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pdfmaker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jszip.min.js')}}"></script>
    
        
            <!--/app header--> 
            <!--Page header-->
            <div class="page-header">
              <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item pl-0"><a href="{{ url('/') }}"><i class="angle fa fa-angle-right mr-2"></i>Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="#"><i class="angle fa fa-angle-right mr-2"></i>Today's Appointments</a></li>
                </ol>
              </div>
              
            </div>
            <!--End Page header-->
            
            <div class="card">
                  <div class="card-header">
                    <div class="card-title">Today's Appointments</div>
                  </div>
                  <div class="card-body">
                    <div class="">
                      <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row">
                          <div class="col-sm-12 col-md-6">
                            <div class="dt-buttons btn-group">
                                 
                            </div>
                          </div>

                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                          <table id="example" class="table table-bordered text-nowrap key-buttons dataTable no-footer dtr-inline" role="grid" aria-describedby="example_info" style="width: 1152px;">
                          <thead>
                            <tr role="row">
                              <th class="border-bottom-0 sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 172.889px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 258.889px;" aria-label="Position: activate to sort column ascending">Mobile Number</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 127.889px;" aria-label="Office: activate to sort column ascending">Service Taken</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 68.8889px;" aria-label="Age: activate to sort column ascending">Time and Date</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 154.889px;" aria-label="Start date: activate to sort column ascending">Stylist Name</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 111px;" aria-label="Salary: activate to sort column ascending">Service Time</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 111px;" aria-label="Salary: activate to sort column ascending">Gender</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 111px;" aria-label="Salary: activate to sort column ascending">Note</th>
                              <th class="border-bottom-0 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 111px;" aria-label="Salary: activate to sort column ascending">Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            
                           <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            <tr role="row" class="odd">
                              <td tabindex="0" class="sorting_1">Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                              <td>$162,700</td>
                            </tr>
                            

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                      </div>
                    </div>
                  </div>
                </div>
                


          </div>
        </div>

@stop
  