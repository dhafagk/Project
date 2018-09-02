@include('layouts.header')

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">editnew Customer</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="/customer">Customer</a>
                </li>
                <li class="breadcrumb-item active">editnew Customer
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
                  <h4 class="card-title" id="basic-layout-card-center">editnew Data</h4>
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

                    <form action="/sbujknew/{{$editnew->id}}" method="post" class="form">
                    	{{csrf_field()}}
                    	<input type="hidden" name="_method" value="put">
                      <div class="form-body">

                        <div class="form-group{{ $errors->has('npwp') ? ' has-error' : '' }}">
                          <label for="issueinput1">No. NPWP</label>

                          <input type="text" id="issueinput1" readonly="readonly" class="form-control" 
                          name="npwp" value="{{$editnew->npwp}}" >

                          @if ($errors->has('npwp'))
				          <span class="help-block">
				            <strong>{{ $errors->first('npwp') }}</strong>
				          </span>
				          @endif

                        </div>

                        <div class="form-group{{ $errors->has('nama_bu') ? ' has-error' : '' }}">
                          <label for="issueinput1">Nama Badan Usaha</label>

                          <input type="text" id="issueinput1" readonly="readonly" class="form-control"
                          name="nama_bu" value="{{$editnew->nama_bu}}" >

                          @if ($errors->has('nama_bu'))
				          <span class="help-block">
				            <strong>{{ $errors->first('nama_bu') }}</strong>
				          </span>
				          @endif

                        </div>

                        <div class="form-group{{ $errors->has('domisili') ? ' has-error' : '' }}">
                          <label for="issueinput1">Kabupaten/Kota</label>

                          <input type="text" id="issueinput1" readonly="readonly" class="form-control"  name="domisili" value="{{$editnew->domisili}}" >

                          @if ($errors->has('domisili'))
				          <span class="help-block">
				            <strong>{{ $errors->first('domisili') }}</strong>
				          </span>
				          @endif

                        </div>

                        <ul class="pl-0 list-unstyled">
                          <li class="mb-1">
                            <span class="block">Progress/Status</span>
                          </li>
                          <li class="mb-1">
                            <div class="row">
                              <div class="col-sm-6 col-12">
                                <span class="block">B1</span>
                              </div>
                              <div class="col-sm-6 col-12">
                                <input type="date" class="form-control" id="date" name="b1" value="{{$editnew->b1}}">
                              </div>
                            </div>
                          </li>
                          <li class="mb-1">
                            <div class="row">
                              <div class="col-sm-6 col-12">
                                <span class="block">B2</span>
                              </div>
                              <div class="col-sm-6 col-12">
                                <input type="date" class="form-control" id="date" name="b2" value="{{$editnew->b2}}">
                              </div>
                            </div>
                          </li>
                          <li class="mb-1">
                            <div class="row">
                              <div class="col-sm-6 col-12">
                                <span class="block">B3</span>
                              </div>
                              <div class="col-sm-6 col-12">
                                <input type="date" class="form-control" id="date" name="b3" value="{{$editnew->b3}}">
                              </div>
                            </div>
                          </li>
                          <li class="mb-1">
                            <div class="row">
                              <div class="col-sm-6 col-12">
                                <span class="block">B4</span>
                              </div>
                              <div class="col-sm-6 col-12">
                                <input type="date" class="form-control" id="date" name="b4" value="{{$editnew->b4}}">
                              </div>
                            </div>
                          </li>
                          <li class="mb-1">
                            <div class="row">
                              <div class="col-sm-6 col-12">
                                <span class="block">B5</span>
                              </div>
                              <div class="col-sm-6 col-12">
                                <input type="date" class="form-control" id="date" name="b5" value="{{$editnew->b5}}">
                              </div>
                            </div>
                          </li>
                          <li class="mb-1">
                            <div class="row">
                              <div class="col-sm-6 col-12">
                                <span class="block">B6</span>
                              </div>
                              <div class="col-sm-6 col-12">
                                <input type="date" class="form-control" id="date" name="b6" value="{{$editnew->b6}}">
                              </div>
                            </div>
                          </li>
                          <li class="mb-1">
                            <div class="row">
                              <div class="col-sm-6 col-12">
                                <span class="block">B7</span>
                              </div>
                              <div class="col-sm-6 col-12">
                                <input type="date" class="form-control" id="date" name="b7" value="{{$editnew->b7}}">
                              </div>
                            </div>
                          </li>
                          <li class="mb-1">
                            <div class="row">
                              <div class="col-sm-6 col-12">
                                <span class="block">B8</span>
                              </div>
                              <div class="col-sm-6 col-12">
                                <input type="date" class="form-control" id="date" name="b8" value="{{$editnew->b8}}">
                              </div>
                            </div>
                          </li>
                          <li class="mb-1">
                            <div class="row">
                              <div class="col-sm-6 col-12">
                                <span class="block">B9</span>
                              </div>
                              <div class="col-sm-6 col-12">
                                <input type="date" class="form-control" id="date" name="b9" value="{{$editnew->b9}}">
                              </div>
                            </div>
                          </li>
                          <li class="mb-1">
                            <div class="row">
                              <div class="col-sm-6 col-12">
                                <span class="block">B10</span>
                              </div>
                              <div class="col-sm-6 col-12">
                                <input type="date" class="form-control" id="date" name="b10" value="{{$editnew->b10}}">
                              </div>
                            </div>
                          </li>
                          <li class="mb-1">
                            <div class="row">
                              <div class="col-sm-6 col-12">
                                <span class="block">B11</span>
                              </div>
                              <div class="col-sm-6 col-12">
                                <input type="date" class="form-control" id="date" name="b11" value="{{$editnew->b11}}">
                              </div>
                            </div>
                          </li>
                        </ul>

                        <div class="card-block">
                  <div class="card-body">
                    <fieldset class="form-group">
                      <label for="issueinput1">Catatan :</label>
                      <textarea name="catatan" class="form-control" id="basicTextarea" rows="3"></textarea>
                    </fieldset>
                  </div>
                </div>

                      </div>
                      <div class="form-actions center">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i><a href="/kta" style="color:white;text-decoration: none;"> Cancel</a>
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