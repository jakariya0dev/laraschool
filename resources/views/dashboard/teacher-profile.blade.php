@extends('dashboard.master')

@section('content')

    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <td colspan="5" align="center"><h3 class="text-center">Teacher Profile</h3></td>
                    <td align="right"><img style="height: 200px; width: 180px;" class="img-thumbnail" src="{{ asset('images/teacher/pro_pic/'.$profile->pro_pic) }}" alt=""></td>
                </tr>
                <tr>
                    <th>Name:</th>
                    <td colspan="5">{{ $profile->name }}</td>
                </tr>
                <tr>
                    <th>Designation:</th>
                    <td colspan="5">{{ $profile->designation }}</td>
                </tr>
                <tr>
                    <th>Blood Group:</th>
                    <td colspan="5">{{ $profile->blood_group }}</td>
                </tr>
                <tr>
                    <th>Subject:</th>
                    <td colspan="5">{{ $profile->subject }}</td>
                </tr>
                <tr>
                    <th>Qualification:</th>
                    <td colspan="5">{{ $profile->qualification }}</td>
                </tr>
                <tr>
                    <th>Date of Birth:</th>
                    <td colspan="5">{{ $profile->dob }}</td>
                </tr>
                <tr>
                    <th>Date of Appointment:</th>
                    <td colspan="5">{{ $profile->doa }}</td>
                </tr>
                <tr>
                    <th>Date of Joining:</th>
                    <td colspan="5">{{ $profile->doj }}</td>
                </tr>
                <tr>
                    <th>Date of Phone:</th>
                    <td colspan="5">{{ $profile->phone }}</td>
                </tr>
                <tr>
                    <th>Email Address:</th>
                    <td colspan="5">{{ $profile->email }}</td>
                </tr>
                <tr>
                    <th>Index No.:</th>
                    <td colspan="5">{{ $profile->index }}</td>
                </tr>
                <tr>
                    <th>A/C No.:</th>
                    <td colspan="5">{{ $profile->ac_no }}</td>
                </tr>
                <tr>
                    <th>ID No.:</th>
                    <td colspan="5">{{ $profile->id_no }}</td>
                </tr>
                <tr>
                    <th>TIN No.:</th>
                    <td colspan="5">{{ $profile->tin_no }}</td>
                </tr>
                <tr>
            </table>
        </div>

        <a href="{{ route('teacher.edit', $profile->id) }}" class="btn btn-sm btn-warning">Edit</a>
        <a href="{{ route('teacher.delete', $profile->id) }}" class="btn btn-sm btn-danger">Delete</a>
        <a href="{{ route('teacher.all') }}" class="btn btn-sm btn-danger">Back</a>
    </div>
    <br><br>

@endsection
