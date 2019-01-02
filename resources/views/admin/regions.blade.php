@extends('layouts.admin')

@section('title')
    {{ __("Regions") }}
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2 class="page-header">REGIONS</h2>
        </div>

        <div class="row">
            @foreach($regions as $region)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2 class="serif text-bold">
                            {{ $region->name }}
                        </h2>
                    </div>
                    <div class="body">
                        <ul class="list-group">
                            <a href="#" class="list-group-item">
                                <span class="text-dark text-bold">Divisions:</span>
                                <span class="badge bg-pink">
                                    {{ count($region->divisions) }}
                                </span>
                            </a>

                            <li class="list-group-item">
                                <span class="text-dark text-bold">SubDivisions:</span>
                                <span class="badge bg-cyan">99</span>
                            </li>

                            <li class="list-group-item">
                                <span class="text-dark text-bold">Villages:</span>
                                <span class="badge bg-teal">9</span>
                            </li>


                            <li class="list-group-item">
                                <span class="text-dark text-bold">Farmers:</span>
                                <span class="badge bg-purple">18</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
