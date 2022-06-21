@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Properties</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>
                                        Id
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Posted AT
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allProperties as $property)
                                <tr>
                                    <td>{{$property->id}}</td>
                                    <td>
                                        {!! $property->name !!}
                                    </td>
                                    <td class="py-1">
                                        <img src="../../images/faces/face1.jpg" alt="image"/>
                                    </td>
                                    <td>
                                        {!! date('Y-m-d', strtotime($property->created_at)) !!}
                                    </td>
                                    <td>
                                        $ {!! $property->price !!}
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-square btn-icon">
                                            <i class="mdi mdi-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-square btn-icon">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
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
    </div>
@endsection
