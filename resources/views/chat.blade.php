@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Active Consultants') }}</div>

                <div class="card-body">
                  

                    {{ __('processing................') }}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Chat With Consultant') }}</div>

                <div class="card-body">
                    

                    {{ __('processing................') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

