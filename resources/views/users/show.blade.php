@extends('layouts.app',['user' => $user])
@section('content')
<div class="row">
  <div class="col-sm-6">
    <div class="panel panel-default">
      <div class="panel-heading font-bold">Basic form</div>
      <div class="panel-body">
        <form role="form">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" placeholder="Masukan Nama">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat">
          </div>
          <div class="form-group">
            <label>Pesan</label>
           <textarea class="form-control">
             
           </textarea>
          </div>
          <div class="checkbox m-b-lg">
            <label class="checkbox-inline">
              <input type="checkbox" checked><i></i> Beritahu lewat email
            </label>
          </div>
          <button type="submit" class="btn btn-sm btn-success">Kirim</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="panel panel-default">
      <div class="panel-heading font-bold">Horizontal form</div>
      <div class="panel-body">
        <form class="bs-example form-horizontal">
          <div class="form-group">
            <label class="col-lg-2 control-label">Nama</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" placeholder="Email">
              <span class="help-block m-b-none">Isikan Nama Anda.</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Alamat</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" placeholder="Password">
               <span class="help-block m-b-none">Isikan Alamat Lengkap.</span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label">Pesan</label>
            <div class="col-lg-10">
              <textarea class="form-control m-b-sm"></textarea>
              
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
              <div class="checkbox">
                <label class="checkbox-inline">
                  <input type="checkbox" checked><i></i> Beritahu lewat email
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
              <button type="submit" class="btn btn-sm btn-info">Sign in</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection