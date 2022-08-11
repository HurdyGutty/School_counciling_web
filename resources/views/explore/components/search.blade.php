<div class="subscribe-line subscribe-line-image" style="background-image: url( {{asset('img/bg7.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
                <div class="text-center">
                    <h2 class="title">Tìm kiếm lớp học của bạn</h2>
                </div>
                <div class="card card-raised card-form-horizontal">
                    <div class="card-body">
                        <form method="GET" action="{{route('explore')}}">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_zoom-bold"></i>
                                        </span>
                                        <input type="text" name="search" class="form-control" placeholder="Tìm kiếm...">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary btn-round btn-block">Tìm kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>