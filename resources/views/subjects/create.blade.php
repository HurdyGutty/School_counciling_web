@extends('layout-dashboard-site.master')
@push('css')
<link href="{{asset('css/now-ui-kit.css?v=1.1.0')}}" rel="stylesheet" />
@endpush
@section('content')
<div class="card-body">
    <h2 class="header-title">Thêm ngành</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('admin.subject.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="subject_input" class="col-form-label">Tên môn</label>
            <input type="text" class="form-control" id="subject_input" name="name" placeholder="Tên ngành">
            @if ($errors->has('name'))
            <div class="text-danger mt-1">
                {{$errors->first('name')}}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label for="description">Thêm mô tả</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            @if ($errors->has('description'))
            <div class="text-danger mt-1">
                {{$errors->first('description')}}
            </div>
            @endif
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="time_duration">Thời gian</label>
                    <input type="number" id="time_duration" name="time_duration" class="form-control"
                        placeholder="Tháng">
                    @if ($errors->has('time_duration'))
                    <div class="text-danger mt-1">
                        {{$errors->first('time_duration')}}
                    </div>
                    @endif
                </div>
            </div>

        </div>
        <div class="form-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="imgInp" name="image">
                <label class="custom-file-label" for="imgInp">Chọn ảnh</label>
            </div>
            @if ($errors->has('image'))
            <div class="text-danger mt-1">
                {{$errors->first('image')}}
            </div>
            @endif
            <img id="blah" src="#" alt="Ảnh đại diện" hidden="true" />
        </div>


        <div class="form-group mb-0 justify-content-end row">
            <div class="col-12">
                <button type="submit" class="btn btn-info  ">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
@push('js')
<script src="{{asset('js/plugins/bootstrap-tagsinput.js')}}"></script>
<script>
imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
        blah.src = URL.createObjectURL(file)
        $('#blah').attr("hidden", false)
    }
}
</script>
@endpush