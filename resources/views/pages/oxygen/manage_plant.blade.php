@extends('layouts.page')
@section('content')
    <div class="main-content">
        @include('partials.user.messages')
        <section class="section">
            <ul class="breadcrumb breadcrumb-style ">
                <li class="breadcrumb-item">
                    <h4 class="page-title m-b-0">Oxygen Plants</h4>
                </li>
                <!--  -->
            </ul>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-2">
                                        <thead>
                                            <tr>
                                                <th class="text-center pt-3">
                                                    <div class="custom-checkbox custom-checkbox-table custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            data-checkbox-role="dad" class="custom-control-input"
                                                            id="checkbox-all">
                                                        <label for="checkbox-all" class="custom-control-label">&nbsp;
                                                        </label>
                                                    </div>
                                                </th>
                                                <th>Date Created</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Region</th>
                                                <th>State</th>
                                                {{-- <th>Actions</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($oxygenPlants as $plant)
                                                <tr>
                                                    <td class="text-center pt-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox-1">
                                                            <label for="checkbox-1"
                                                                class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td>{{ $plant->created_at->format('F j, Y') }}</td>
                                                    <td> {{ $plant->name }}</td>
                                                    <td> {{ $plant->address }}</td>
                                                    <td> {{ $plant->phoneNumber }}</td>
                                                    <td> {{ $plant->region }}</td>
                                                    <td> {{ $plant->state }}</td>
                                                    {{-- <td>
                                                        <a href="#" class="btn btn-primary">Details</a>
                                                    </td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $oxygenPlants->links() }}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
