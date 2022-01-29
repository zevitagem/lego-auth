@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    @if(!empty($applications))
                        @foreach($applications as $app)
                            <div class="card">
                                <div class="card-body">
                                    <a href="{{ $app->getLoginRoute().'?'.\Zevitagem\LegoAuth\Helpers\Helper::createBuildQueryToOutLogin(['with_slugs' => 1]) }}">{{ $app->getName() }}</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection