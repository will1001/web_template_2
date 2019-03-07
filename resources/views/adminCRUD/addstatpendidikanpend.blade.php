@extends('layouts.layoutform')

@section('content')




<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form action="{{url('addstatpendidikanpend')}}" method="post" enctype="multipart/form-data" style="padding-top: 100px;">
          {{ csrf_field() }}
          Pendidikan :<br>
          <input type="text" name="pendidikan" value="pendidikan"><br><br>
          Pria :<br>
          <input type="text" name="pria" value="pria"><br><br>
          Wanita :<br>
          <input type="text" name="wanita" value="wanita"><br><br>
          <input type="submit" value="Submit">
        </form>
@if ($errors->any())
        <h3 class="text-center text-danger">{{ implode('', $errors->all(':message')) }}</h3>
        @endif
    </div>
  </div>
</div>


@endsection



    
       