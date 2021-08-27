@extends('layouts/layout-admin')

@section('content')
    <div class="app-main__inner">
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title"> Profile</h5>
                        <form class="" method="POST" action="#" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="position-relative form-group"><label for="exampleEmail11"
                                            class="">Name</label><input name="name" id="exampleEmail11" placeholder=""
                                            type="text" class="form-control"></div>
                                </div>


                            </div>


                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="position-relative form-group">
                                        <label for="exampleCity" class="">Password</label>
                                        <input name="password" id="exampleCity" type="text" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <button class="mt-2 btn btn-success">Update</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>


@endsection
@section('scripts')

@endsection
