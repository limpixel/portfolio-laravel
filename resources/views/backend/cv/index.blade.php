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
                <div class="card-header">{{ __('CV') }}</div>
                <div class="card-body">
                    <form action="{{ route('backend.manage.cv.process') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="filename" class="form-label">
                                Filename <strong class="text-danger">*</strong>
                            </label>
                            <input type="file" name="filename" class="form-control" id="filename">
                        </div>
                        <button class="btn btn-dark">Upload <i class="fas fa-file-upload ps-1"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection