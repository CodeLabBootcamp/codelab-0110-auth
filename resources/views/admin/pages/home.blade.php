@extends('admin.layouts.master')

@section('content')

  <div class="row justify-content-center mt-5">
      <div class="col-md-5">
          <div class="card">
              <div class="card-body">
                  {{auth()->id()}}

              </div>
          </div>
      </div>
  </div>

@endsection