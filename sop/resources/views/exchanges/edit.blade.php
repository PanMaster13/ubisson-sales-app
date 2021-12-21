@extends('layouts.app')

@section('content')
    <div class="row mb-2">
        <div class="col-md-6">
            <h3>Edit a Control Exchange Program Detail</h3>
        </div>
        <div class="col-md-6 text-end">
            <a href='{{ url("/exchanges/") }}' class="btn btn-secondary">Go Back</a>
        </div>
    </div>
    {!! Form::open(['route' => ['exchanges.update', $exchange->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <fieldset class="customFieldset p-2">
            <legend class="w-auto">Device Details</legend>
            <div class="row g-2 mb-2">
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('brand', $exchange->brand, ['class' => 'form-control', 'placeholder' => 'Brand*'])}}
                        {{ Form::label('brand', 'Brand*')}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('model', $exchange->model, ['class' => 'form-control', 'placeholder' => 'Model*'])}}
                        {{ Form::label('model', 'Model*')}}
                    </div>
                </div>
            </div>
            <div class="row g-2 mb-2">
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('serial_no', $exchange->serial_no, ['class' => 'form-control', 'placeholder' => 'Serial Number*'])}}
                        {{ Form::label('serial_no', 'Serial Number*')}}
                    </div>
                </div>
                <div class="col-md-6">
                    {{ Form::label('serial_no_image', 'Serial Number Image') }}
                    {{ Form::file('serial_no_image', ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="row g-2 mb-2">
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('exchange_model', $exchange->exchange_model, ['class' => 'form-control', 'placeholder' => 'Exchanged Model*'])}}
                        {{ Form::label('exchange_model', 'Exchanged Model*')}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('exchange_serial_no', $exchange->exchange_serial_no, ['class' => 'form-control', 'placeholder' => 'Exchanged Serial Number*'])}}
                        {{ Form::label('exchange_serial_no', 'Exchanged Serial Number*')}}
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="customFieldset p-2">
            <legend class="w-auto">Patient Details</legend>
            <div class="row g-2 mb-2">
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('patient_name', $exchange->patient_name, ['class' => 'form-control', 'placeholder' => "Patient's Name*"])}}
                        {{ Form::label('patient_name', "Patient's Name*")}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::date('patient_dob', \Carbon\Carbon::createFromDate($exchange->patient_dob), ['class' => 'form-control']) }}
                        {{ Form::label('patient_dob', "Patient's Date of Birth*")}}
                    </div>
                </div>
            </div>
            <div class="row g-2 mb-2">
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('patient_phone_no', $exchange->patient_phone_no, ['class' => 'form-control', 'placeholder' => "Patient's Phone Number*"])}}
                        {{ Form::label('patient_phone_no', "Patient's Phone Number*")}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('patient_email', $exchange->patient_email, ['class' => 'form-control', 'placeholder' => "Patient's Email*"])}}
                        {{ Form::label('patient_email', "Patient's Email*")}}
                    </div>
                </div>
            </div>
            <div class="row g-2 mb-2">
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('patient_addr_1', $exchange->patient_addr_1, ['class' => 'form-control', 'placeholder' => "Patient's Address Line 1*"])}}
                        {{ Form::label('patient_addr_1', "Patient's Address Line 1*")}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('patient_addr_2', $exchange->patient_addr_2, ['class' => 'form-control', 'placeholder' => "Patient's Address Line 2"])}}
                        {{ Form::label('patient_addr_2', "Patient's Address Line 2")}}
                    </div>
                </div>
            </div>
            <div class="row g-2 mb-2">
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('patient_city', $exchange->patient_city, ['class' => 'form-control', 'placeholder' => "Patient's City*"])}}
                        {{ Form::label('patient_city', "Patient's City*")}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::select('patient_state', [
                            'Johor' => 'Johor',
                            'Kedah' => 'Kedah',
                            'Kelantan' => 'Kelantan',
                            'Malacca' => 'Malacca',
                            'Negeri Sembilan' => 'Negeri Sembilan',
                            'Pahang' => 'Pahang',
                            'Perak' => 'Perak',
                            'Perlis' => 'Perlis',
                            'Sabah' => 'Sabah',
                            'Sarawak' => 'Sarawak',
                            'Selangor' => 'Selangor',
                            'Terengganu' => 'Terengganu'
                        ], $exchange->patient_state, ['class' => 'form-select']) }}
                        {{ Form::label('patient_state', "Patient's State*")}}
                    </div>
                </div>
            </div>
            <div class="row g-2 mb-2">
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('patient_zipcode', $exchange->patient_zipcode, ['class' => 'form-control', 'placeholder' => "Patient's Zipcode*"])}}
                        {{ Form::label('patient_zipcode', "Patient's Zipcode*")}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::select('patient_diabetes', [
                            'Type 1' => 'Type 1',
                            'Type 2' => 'Type 2',
                            'Gestational' => 'Gestational',
                            'Non-diabetic' => 'Non-diabetic'
                        ], $exchange->patient_diabetes, ['class' => 'form-select']) }}
                        {{ Form::label('patient_diabetes', "Patient's Diabetes Type*")}}
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="customFieldset p-2">
            <legend class="w-auto">Pharmacy Details</legend>
            <div class="row g-2 mb-2">
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('pharmacy_name', $exchange->pharmacy_name, ['class' => 'form-control', 'placeholder' => "Pharmacy's Name*"])}}
                        {{ Form::label('pharmacy_name', "Pharmacy's Name*")}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('pharmacy_account_no', $exchange->pharmacy_account_no, ['class' => 'form-control', 'placeholder' => "Pharmacy's Account Number*"])}}
                        {{ Form::label('pharmacy_account_no', "Pharmacy's Account Number*")}}
                    </div>
                </div>
            </div>
            <div class="row g-2 mb-2">
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('pharmacy_addr_1', $exchange->pharmacy_addr_1, ['class' => 'form-control', 'placeholder' => "Pharmacy's Address Line 1*"])}}
                        {{ Form::label('pharmacy_addr_1', "Pharmacy's Address Line 1*")}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('pharmacy_addr_2', $exchange->pharmacy_addr_2, ['class' => 'form-control', 'placeholder' => "Pharmacy's Address Line 2"])}}
                        {{ Form::label('pharmacy_addr_2', "Pharmacy's Address Line 2")}}
                    </div>
                </div>
            </div>
            <div class="row g-2 mb-2">
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('pharmacy_city', $exchange->pharmacy_city, ['class' => 'form-control', 'placeholder' => "Pharmacy's City*"])}}
                        {{ Form::label('pharmacy_city', "Pharmacy's City*")}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::select('pharmacy_state', [
                            'Johor' => 'Johor',
                            'Kedah' => 'Kedah',
                            'Kelantan' => 'Kelantan',
                            'Malacca' => 'Malacca',
                            'Negeri Sembilan' => 'Negeri Sembilan',
                            'Pahang' => 'Pahang',
                            'Perak' => 'Perak',
                            'Perlis' => 'Perlis',
                            'Sabah' => 'Sabah',
                            'Sarawak' => 'Sarawak',
                            'Selangor' => 'Selangor',
                            'Terengganu' => 'Terengganu'
                        ], $exchange->pharmacy_state, ['class' => 'form-select']) }}
                        {{ Form::label('pharmacy_state', "Pharmacy's State*")}}
                    </div>
                </div>
            </div>
            <div class="row g-2 mb-2">
                <div class="col-md-12">
                    <div class="form-floating">
                        {{ Form::text('pharmacy_zipcode', $exchange->pharmacy_zipcode, ['class' => 'form-control', 'placeholder' => "Pharmacy's Zipcode*"])}}
                        {{ Form::label('pharmacy_zipcode', "Pharmacy's Zipcode*")}}
                    </div>
                </div>
            </div>
            <div class="row g-2 mb-2">
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('pharmacy_pic', $exchange->pharmacy_pic, ['class' => 'form-control', 'placeholder' => "Pharmacy's PIC*"])}}
                        {{ Form::label('pharmacy_pic', "Pharmacy's PIC*")}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        {{ Form::text('pharmacy_contact', $exchange->pharmacy_contact, ['class' => 'form-control', 'placeholder' => "Pharmacy's PIC Contact*"])}}
                        {{ Form::label('pharmacy_contact', "Pharmacy's PIC Contact*")}}
                    </div>
                </div>
            </div>
        </fieldset>

        {{ Form::hidden('_method', 'PUT') }}

        <div class="d-flex justify-content-center mt-2">
            {{ Form::submit('Update Control Exchange Detail', ['class' => 'btn btn-success w-25']) }}
        </div>
    {!! Form::close() !!}
    
@endsection
