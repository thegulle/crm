@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Notes') }}</div>
                    @foreach($notes as $note)
                        <div class="card-body">
                            <h4>{{ $note->note_header }}</h4>
                            <h5>{{ $note->note }}</h5>
                            <h6>{{ $note->related_time }}</h6>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
