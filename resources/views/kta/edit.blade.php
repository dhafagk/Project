<h1>CREATE</h1>
<form action="/kta/{{$edit->id}}" method="post">
  {{csrf_field()}}
    <input type="text" name="npwp" value="{{$edit->npwp}}" placeholder="npwp"><br>
    <input type="text" name="nama_bu" value="{{$edit->nama_bu}}" placeholder="nama_bu"><br>
    <input type="text" name="nama_pemohon" value="{{$edit->nama_pemohon}}" placeholder="nama_pemohon"><br>
    <input type="text" name="domisili" value="{{$edit->domisili}}" placeholder="domisili"><br>
    <input type="text" name="email" value="{{$edit->email}}" placeholder="email"><br>
    <input type="text" name="nohp" value="{{$edit->nohp}}" placeholder="nohp"><br>
    <input type="text" name="a1" value="{{$edit->a1}}" placeholder=""><br>
    <input type="text" name="a2" value="{{$edit->a2}}" placeholder=""><br>
    <input type="text" name="a3" value="{{$edit->a3}}" placeholder=""><br>
    <input type="text" name="a4" value="{{$edit->a4}}" placeholder=""><br>
    <input type="text" name="a5" value="{{$edit->a5}}" placeholder=""><br>
    <input type="text" name="a6" value="{{$edit->a6}}" placeholder=""><br>
    <input type="hidden" name="jenis" value="{{$edit->jenis}}">
    <input type="submit">
      <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">

</form>
