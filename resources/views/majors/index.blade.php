@extends('layout-dashboard-site.master')
@section('content')
<div class="row">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @foreach ($subject_major as $major)
    <div class="col-md-6 col-xl-3">
        <!-- project card -->
        <div class="card d-block">
            <div class="card-body">
                <div class="dropdown card-widgets">
                    <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                        <i class="dripicons-dots-3"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="{{ route('admin.major.edit',['major' => $major->id]) }}" class="dropdown-item"><i
                                class="mdi mdi-pencil mr-1"></i>Edit</a>
                        <!-- item-->
                        <form action="{{ route('admin.major.delete',$major) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button href="" class="dropdown-item"><i class="mdi mdi-delete mr-1"></i>Delete</button>
                        </form>
                    </div>
                </div>
                <!-- project title-->
                <h4 class="mt-0">
                    <a href="apps-projects-details.html" class="text-title">{{$major->name}}</a>
                </h4>
                <div class="badge badge-success mb-3">Finished</div>

                <p class="text-muted font-13 mb-3">{{implode(", ",$major->subject_name)}}...<a
                        href="javascript:void(0);" class="font-weight-bold text-muted">view
                        more</a>
                </p>
                <a href="javascript: void(0);" class="btn btn-primary">Xem thêm</a>
            </div> <!-- end card-body-->

        </div> <!-- end card-->
    </div> <!-- end col -->
    @endforeach
</div>
@endsection