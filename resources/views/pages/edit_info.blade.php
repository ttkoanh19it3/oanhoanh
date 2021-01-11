@extends('master')
@section('title','Editbanner')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card card-default">
            <div class="card-header">
                Chỉnh sửa thông tin
            </div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status')}}
                </div>
                @endif

                <form action="">
                    <div class="form-control">
                        <input type="text" name="" placeholder="Nhập tiêu đề" class="form-control" style="width: 80%; height: 30px; margin-bottom: 10px;">
                    </div>
                    
                    <div class="form-group">
                        <textarea name="content" id="content" cols="130" rows="20"></textarea>
                        <script>
                            CKEDITOR.replace('content', {
                                filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                                filebrowserUploadMethod: 'form'
                            });
                        </script>

                    </div>
                    <input type="button" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection