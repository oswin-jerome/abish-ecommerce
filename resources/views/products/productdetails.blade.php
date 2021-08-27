@extends('layouts/layout-admin')

@section('content')
    <div class="app-main__inner">


        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title"> Product Details</h5>
                        <form class="">

                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="exampleEmail11"
                                            class="">Name</label><input name="name" id="exampleEmail11" placeholder=""
                                            type="text" value="{{ $product->name }}" class="form-control"></div>
                                </div>

                            </div>


                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleCity" class="">Price</label><input name="price" id="exampleCity"
                                            type="text" value="{{ $product->price }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleState" class="">Qty</label><input name="qty" id="exampleState"
                                            type="text" value="{{ $product->qty }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="exampleAddress"
                                            class="">Category</label>
                                        <input name="category" id="exampleAddress" placeholder="" type="text"
                                            value="{{ $product->getcategory->name ?? '-' }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="form-row">
                            <div class="col-md-2">
                                <div class="position-relative form-group"><label for="exampleFile"
                                        class="">File</label><input name="file" id="exampleFile" type="file"
                                        class="form-control-file">
                                </div>
                            </div>
                        </div> --}}

                        </form>
                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection
