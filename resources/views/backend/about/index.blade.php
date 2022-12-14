@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('javascript')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('table').DataTable({
                "pageLength" : 50
            })
        })
    </script>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('About') }}</div>
                <div class="card-body">
                    <form id="contactForm" action="{{ route('frontend.about.update') }}" method="post">
                        @csrf
                        @foreach ($abouts as $data)
                            <div class="form-floating mb-3">
                                <input class="form-control @error('name') is-invalid @enderror " name="title" type="text" value="{{$data->title}}" placeholder="Enter your name..."/>
                                <label for="name">Title</label>
                                @error('message')
                                <div class="text-danger small" >{!! $message !!}</div>
                                @enderror
                            </div>
    
    
                            <div class="form-floating mb-3">
                                <textarea class="form-control text-start  @error('message') is-invalid @enderror" name="desc" type="text" placeholder="Enter your message here..." style="height: 10rem">{{$data->description}}</textarea>
                                <label for="message">Description</label>
                                @error('message')
                                <div class="text-danger small" >{!! $message !!}</div>
                                 @enderror
                            </div>
                        @endforeach
    
    
                        <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection