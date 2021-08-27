@extends('layouts/layout-admin')
@section('content')
    <div class="app-main__inner">


        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Add Banner</h5>
                        <form class="" method="POST" action="{{ route('banner.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{-- {{ route('banner.store') }} --}}
                            <div class="form-row">
                                <div class="col-md-2">
                                    <div class="position-relative form-group">
                                        <label for="exampleFile" class=""></label>
                                        <input name="banner_image" id="BannerImage" type="file" class="form-control-file">
                                    </div>
                                </div>
                            </div>
                            <button class="mt-2 btn btn-success">Submit</button>
                        </form>
                    </div>

                </div>

            </div>

        </div>
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title"> Banner List</h5>
                        <table id="example" class="display" style="width:100%">

                            <thead>
                                <tr>

                                    <th>S.No</th>

                                    <th>Banner Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($banners as $banner)
                                    <tr>
                                        <td></td>
                                        <td>
                                            <img src="/storage/images/banner_image/{{ $banner->banner_image }}"
                                                style="height:70px; width:100px;">
                                        </td>
                                        <td>
                                            @livewire('banner-status',["banner"=>$banner])
                                        </td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
