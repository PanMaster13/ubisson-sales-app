@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Exchange Details</h3>
        </div>
        <div class="col-md-6 text-end">
            <a href="/exchanges" class="btn btn-secondary">Go Back</a>
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
    <p>Patient's Name: {{ $exchange->patient_name }}</p>
    <p>Patient's Date of Birth: {{ $exchange->patient_dob }}</p>
    <p>Patient's Phone Number: {{ $exchange->patient_phone_no }}</p>
    <p>Patient's Email: {{ $exchange->patient_email }}</p>
    <p>Patient's Address Line 1: {{ $exchange->patient_addr_1 }}</p>
    <p>Patient's Address Line 2: {{ $exchange->patient_addr_2 }}</p>
    <p>Patient's City: {{ $exchange->patient_city }}</p>
    <p>Patient's State: {{ $exchange->patient_state }}</p>
    <p>Patient's Zipcode: {{ $exchange->patient_zipcode }}</p>
    <p>Patient's Diabetes Type: {{ $exchange->patient_diabetes }}</p>
    <hr/>
    <h3>Pharmacy Details</h3>
    <p>Pharmacy's Name: {{ $exchange->pharmacy_name }}</p>
    <p>Pharmacy's Account Number: {{ $exchange->pharmacy_account_no }}</p>
    <p>Pharmacy's Address Line 1: {{ $exchange->pharmacy_addr_1 }}</p>
    <p>Pharmacy's Address Line 2: {{ $exchange->pharmacy_addr_2 }}</p>
    <p>Pharmacy's City: {{ $exchange->pharmacy_city }}</p>
    <p>Pharmacy's State: {{ $exchange->pharmacy_state }}</p>
    <p>Pharmacy's Zipcode: {{ $exchange->pharmacy_zipcode }}</p>
    <p>Pharmacy's PIC: {{ $exchange->pharmacy_pic }}</p>
    <p>Pharmacy's PIC Contact: {{ $exchange->pharmacy_contact }}</p>
@endsection
