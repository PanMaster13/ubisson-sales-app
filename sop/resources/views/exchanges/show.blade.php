@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Exchange Details</h3>
        </div>
        <div class="col-md-6 text-end">
            <a href='{{ url("/exchanges/") }}' class="btn btn-secondary">Go Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Brand</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->brand }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Model</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->model }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Serial Number</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->serial_no }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Created at</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->created_at }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Exchanged Model</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->exchange_model }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Exchanged Serial Number</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->exchange_serial_no }}</p>
                </div>
            </div>
        </div>
    </div>

    <hr/>

    <h3>Patient Details</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Patient's Name</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->patient_name }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Patient's Date of Birth</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->patient_dob }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Patient's Phone Number</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->patient_phone_no }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Patient's Email</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->patient_email }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Patient's Address Line 1</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->patient_addr_1 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Patient's Address Line 2</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->patient_addr_2 }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Patient's City</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->patient_city }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Patient's State</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->patient_state }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Patient's Zipcode</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->patient_zipcode }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Patient's Diabetes Type</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->patient_diabetes }}</p>
                </div>
            </div>
        </div>
    </div>
    
    <hr/>
    
    <h3>Pharmacy Details</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Pharmacy's Name</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->pharmacy_name }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Pharmacy's Account Number</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->pharmacy_account_no }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Pharmacy's Address Line 1</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->pharmacy_addr_1 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Pharmacy's Address Line 2</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->pharmacy_addr_2 }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Pharmacy's City</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->pharmacy_city }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Pharmacy's State</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->pharmacy_state }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Pharmacy's Zipcode</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->pharmacy_zipcode }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Pharmacy's PIC</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->pharmacy_pic }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <p>Pharmacy's PIC Contact</p>
                </div>
                <div class="col-md-8">
                    <p>: {{ $exchange->pharmacy_contact }}</p>
                </div>
            </div>
        </div>
    </div>

    <hr/>

    <div class="d-flex justify-content-around">
        <a href='{{ url("/exchanges/$exchange->id/edit") }}' class="btn btn-info">Edit</a>
    {!! Form::open(['route' => ['exchanges.destroy', $exchange->id], 'method' => 'POST']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
    </div>
@endsection
