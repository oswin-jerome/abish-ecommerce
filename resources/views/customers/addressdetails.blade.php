@extends('layouts/layout-admin')

@section('content')
    <div class="app-main__inner">
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">User Address List</h5>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Address</th>
                                    <th>Type</th>


                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($addresses as $address)

                                    <tr style="height:80px">
                                        <td>

                                        </td>
                                        <td>{{ $address->address }}</td>
                                        <td>{{ $address->type }}</td>


                                    </tr>

                                @endforeach;
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')


@endsection
