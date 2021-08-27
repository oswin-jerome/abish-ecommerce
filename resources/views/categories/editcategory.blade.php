@extends('layouts/layout-admin')
@section('content')
    <div class="app-main__inner">


        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Category</h5>

                        <form action="{{ route('category.update', $category->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            @method('PUT')
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleEmail11"
                                            class="">Name</label><input name="name" id="exampleEmail11" placeholder=""
                                            type="text" value="{{ $category->name }}" class="form-control"></div>
                                </div>

                            </div>


                            <button type="submit" class="mt-2 btn btn-success">Update</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
