@extends('layouts.master')

@section('title-page', 'Home')

@section('content-header')
  
  <h1>
    {{ config('app.name') }}
    <small>@yield('title-page')</small>
  </h1>

    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
    </ol>

@endsection

@section('content-body')

      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">@yield('title-page')</h3>
        </div>

        <div class="box-body">
            
            Bienvenido.! {{ auth()->user()->name  }} | 
              <small class="text-muted">
                @if (auth()->user()->last_logout != NULL)
                  Ultimo Acceso: {{ auth()->user()->last_logout->diffForHumans() }}
                @else
                  Esta es su primera vez en el Sistema  
                @endif

              </small>
        </div>

        <div class="box-footer">
          Footer
        </div>

      </div>

@endsection

@push('additionals-scripts')
  @include('layouts.messages.toast-message')
@endpush