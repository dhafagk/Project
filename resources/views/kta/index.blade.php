@include('layouts.header')

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Customer</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">Customer
                </li>
              </ol>
            </div>
          </div>
        </div>
      <div class="content-header-right col-md-6 col-12">

          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <button class="btn btn-info round box-shadow-2 px-2"
           type="button" aria-haspopup="true"
            aria-expanded="false"><a href="/customer/create" style="color:white;text-decoration: none"> Create Customer</a></button>
            
          </div>


        </div>
      </div>
      <div class="content-body">
        <!-- HTML (DOM) sourced data -->
        <section id="html5">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Data Customer</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                      <table class="table display nowrap table-striped table-bordered scroll-horizontal">
                        <thead>
                          <tr>
                            <th>No</th>
                          <th>Nama Badan Usaha</th>
                          <th>Kabupaten/Kota</th>
                          <th>a1</th>
                          <th>a2</th>
                          <th>a3</th>
                          <th>a4</th>
                          <th>a5</th>
                          <th>a6</th>
                          <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($kta as $data)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{$data->nama_bu}}</td>
                          <td>{{$data->domisili}}</td>
                          <td>{{$data->a1}}</td>
                          <td>{{$data->a2}}</td>
                          <td>{{$data->a3}}</td>
                          <td>{{$data->a4}}</td>
                          <td>{{$data->a5}}</td>
                          <td>{{$data->a6}}</td>
                          <td>
                          	<div class="btn-group">
                            <button type="button" class="btn btn-info mr-1 mb-1"><a href="/kta/{{$data->id}}/edit">Action</a></button>
                          </div></td>
                        </tr>
                        @endforeach
                      </table>
                      <a href="{{ url('rekap') }}" class="btn btn-success"><i class="fa fa-book"></i> Rekap PDF</a>
                      <a href="/excel_kta" class="btn btn-success"><i class="fa fa-book"></i> Rekap Excel</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  @include('layouts.footer')