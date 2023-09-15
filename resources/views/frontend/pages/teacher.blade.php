@extends('frontend.pages.master')

@section('content')
    <section>
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

        </div>
        <br><br>
    </section>

    <script>

        getAllNotice()

        async function getAllNotice() {

            let url = '/get-all-teacher-data';

            const response = await axios.get(url);

            response.data.forEach((item) => {
                document.getElementById('teacher-list').innerHTML += `
                <div class="col-md-3 border-2 p-3">
                    <div class="card text-center mb-3" >
                        <div class="card-body">
                            <img src="{{ asset('images/teacher/pro_pic/${item.pro_pic}') }}" alt="" style="height: 18rem; width: 100%">
                            <h5 class="card-title my-3">${item.name}</h5>
                            <a href="{{ url('/teacher/${item.id}') }}" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
        `;

            });

            // console.log(response.data)

        }
    </script>
@endsection


