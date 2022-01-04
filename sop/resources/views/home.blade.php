@extends('layouts.app')

@section('content')
<div class="container" ng-app="dashboardApp" ng-controller="dashboardCtrl">
    <h3>Daily Exchange Program Records over a Month</h3>
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="date" class="form-control" id="date_filter" name="date_filter" ng-model="date_filter" ng-change="onDateFilterChange()"/>
                <label for="date_filter">Date Filter Selection</label>
            </div>
        </div>
    </div>

    <div id="dashboardChart"></div>

    <!-- More to be added (Graphs, charts, sales operation etc.) -->
    
</div>
@endsection
