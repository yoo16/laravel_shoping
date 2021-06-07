@extends('layouts.user')

@section('content')
<div class="row">
  <div class="col-12">
    @include('components.information.latest_list')
  </div>
</div>
@endsection