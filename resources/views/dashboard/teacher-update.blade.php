@extends('dashboard.master')

@section('content')
    <div class="container">

        <form class="g-3" method="POST" action="{{ route('teacher.update', $profile->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="teacher-name" class="form-label">Name:</label>
                    <input name="teacher-name" type="text" class="form-control" id="teacher-name" value="{{ $profile->name }}">
                </div>
                <div class="col-md-4">
                    <label for="teacher-designation" class="form-label">Designation:</label>
                    <input name="teacher-designation" type="text" class="form-control" id="teacher-designation" value="{{ $profile->designation }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="teacher-blood-group" class="form-label">Blood Group</label>
                    <select name="teacher-blood-group" id="teacher-blood-group" class="form-select">
                        <option selected>Choose...</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>B+</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="teacher-subject" class="form-label">Subject:</label>
                    <input name="teacher-subject" type="text" class="form-control" id="teacher-subject" value="{{ $profile->subject }}">
                </div>
                <div class="col-md-4">
                    <label for="teacher-qualification" class="form-label">Qualification:</label>
                    <input name="teacher-qualification" type="text" class="form-control" id="teacher-qualification" value="{{ $profile->qualification }}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="teacher-dob" class="form-label">Date of Birth:</label>
                    <input name="teacher-dob" type="date" class="form-control" id="teacher-dob" value="{{ $profile->dob }}">
                </div>
                <div class="col-md-4">
                    <label for="teacher-doa" class="form-label">Date of Appointment:</label>
                    <input name="teacher-doa" type="date" class="form-control" id="teacher-doa" value="{{ $profile->doa }}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="teacher-doj" class="form-label">Date of Joining:</label>
                    <input name="teacher-doj" type="date" class="form-control" id="teacher-doj" value="{{ $profile->doj }}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="teacher-phone" class="form-label">Mobile No.:</label>
                    <input name="teacher-phone" type="text" class="form-control" id="teacher-phone" value="{{ $profile->phone }}">
                </div>
                <div class="col-md-4">
                    <label for="teacher-email" class="form-label">Email Address:</label>
                    <input name="teacher-email" type="email" class="form-control" id="teacher-email" value="{{ $profile->email }}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="teacher-index" class="form-label">Index No.:</label>
                    <input name="teacher-index" type="text" class="form-control" id="teacher-index" value="{{ $profile->index }}">
                </div>
                <div class="col-md-4">
                    <label for="teacher-ac-no" class="form-label">A/C No.:</label>
                    <input name="teacher-ac-no" type="text" class="form-control" id="teacher-ac-no" value="{{ $profile->ac_no }}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="teacher-id-no" class="form-label">ID No.:</label>
                    <input name="teacher-id-no" type="text" class="form-control" id="teacher-id-no" value="{{ $profile->id_no }}">
                </div>
                <div class="col-md-4">
                    <label for="teacher-tin-no" class="form-label">TIN No.:</label>
                    <input name="teacher-tin-no" type="text" class="form-control" id="teacher-tin-no" value="{{ $profile->tin_no }}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="teacher-pro-pic" class="form-label">Profile Picture.:</label>
                    <input name="teacher-pro-pic" type="file" class="form-control" id="teacher-pro-pic">
                    <input name="old_pro_pic" type="hidden" value="{{ $profile->pro_pic }}">
                </div>
            </div>

            <div class="col-12 mb-5">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('teacher.all') }}" class="btn btn-primary justify-content-end">Back</a> <br>
            </div>
        </form>
    </div>
@endsection
