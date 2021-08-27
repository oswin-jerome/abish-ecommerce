@extends('layouts/layout-admin')
@section('content')
    <div class="app-main__inner">
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title"> Category List</h5>
                        <table id="example" class="display" style="width:100%">
                            {{-- {{$products}} --}}

                            <thead>
                                <tr>

                                    <th>Name</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($categories as $category)
                                    <tr>

                                        <td>{{ $category->name }}</td>

                                        <td style="width: 190px">
                                            <a href="{{ route('category.edit', $category->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form class="d-inline" action="{{ route('category.destroy', $category->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <input type="submit" class="btn btn-danger" value="DELETE">
                                            </form>
                                        </td>
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
