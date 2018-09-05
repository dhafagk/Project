@include('layouts.header')

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Edit Customer</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="/customer">Customer</a>
                </li>
                <li class="breadcrumb-item active">Edit Customer
                </li>
              </ol>
            </div>
          </div>
        </div>

      </div>
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="basic-form-layouts">
          <div class="row justify-content-md-center">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-card-center">Edit Data</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">

                    <form action="/ktachange/{{$editchange->id}}" method="post" class="form">
                    	{{csrf_field()}}
                    	<input type="hidden" name="_method" value="put">
                      <div class="form-body">

                        <div class="form-group{{ $errors->has('npwp') ? ' has-error' : '' }}">
                          <label for="issueinput1">No. NPWP</label>

                          <input type="text" id="issueinput1" class="form-control" 
                          name="npwp" value="{{$editchange->npwp}}" >

                          @if ($errors->has('npwp'))
				          <span class="help-block">
				            <strong>{{ $errors->first('npwp') }}</strong>
				          </span>
				          @endif

                        </div>

                        <div class="form-group{{ $errors->has('nama_bu') ? ' has-error' : '' }}">
                          <label for="issueinput1">Nama Badan Usaha</label>

                          <input type="text" id="issueinput1" class="form-control"
                          name="nama_bu" value="{{$editchange->nama_bu}}" >

                          @if ($errors->has('nama_bu'))
				          <span class="help-block">
				            <strong>{{ $errors->first('nama_bu') }}</strong>
				          </span>
				          @endif

                        </div>

                        <div class="form-group{{ $errors->has('nama_pemohon') ? ' has-error' : '' }}">
                          <label for="issueinput1">Nama Pemohon</label>

                          <input type="text" id="issueinput1" class="form-control"  name="nama_pemohon" value="{{$editchange->nama_pemohon}}" >

                          @if ($errors->has('nama_pemohon'))
				          <span class="help-block">
				            <strong>{{ $errors->first('nama_pemohon') }}</strong>
				          </span>
				          @endif

                        </div>

                        <div class="form-group{{ $errors->has('domisili') ? ' has-error' : '' }}">
                          <label for="issueinput1">Kabupaten/Kota</label>

                          <input type="text" id="issueinput1" class="form-control"  name="domisili" value="{{$editchange->domisili}}" >

                          @if ($errors->has('domisili'))
				          <span class="help-block">
				            <strong>{{ $errors->first('domisili') }}</strong>
				          </span>
				          @endif

                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="issueinput1">Alamat Email</label>

                          <input type="email" id="issueinput1" class="form-control"  name="email" value="{{$editchange->email}}" >

                          @if ($errors->has('email'))
				          <span class="help-block">
				            <strong>{{ $errors->first('email') }}</strong>
				          </span>
				          @endif

                        </div>

                        <div class="form-group{{ $errors->has('nohp') ? ' has-error' : '' }}">
                          <label for="issueinput1">No. HP</label>

                          <input type="text" id="issueinput1" class="form-control"  name="nohp" value="{{$editchange->nohp}}" >

                          @if ($errors->has('nohp'))
				          <span class="help-block">
				            <strong>{{ $errors->first('nohp') }}</strong>
				          </span>
				          @endif

                        </div>

                      </div>
                      <div class="form-actions center">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i><a href="/ktachange" style="color:white;text-decoration: none;"> Cancel</a>
                         </button>
                        <button type="submit" class="btn btn-primary">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                        <input type="hidden" value="{{ csrf_token() }}" name="_token">
    					<input type="hidden" value="put" name="_method">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- // Basic form layout section end -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  @include('layouts.footer')