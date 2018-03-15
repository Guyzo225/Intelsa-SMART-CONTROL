
@extends('app')


@section('content')



<form  action="{{route('rapport.import')}}" class="form-horizontal" method="post" data-toggle="validator" enctype="multipart/form-data">
    {{csrf_field()}}


    <h1>Import statistique</h1>


    <div class="form-group">
        <label for="import" class="col-md-6 control-label" >Import</label>
        <input type="file" id="file" name="file" class="form-control" accept=".xls" autofocus required>





        <button type="submit" class="btn btn-primary btn-save"> Export</button>
    </div>

</form>





    @endsection