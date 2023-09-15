@extends('dashboard.master')

@section('content')

    <div class="container">

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>

                </tr>
                </thead>
                <tbody id="teacher-list">

                </tbody>
            </table>

            <a href="{{ route('teacher.new') }}" class="btn btn-primary">Add New Teacher </a> <br>
        </div>
    </div>

    <script>

        getAllTeacher()

        async function getAllTeacher() {

            let url = '/get-all-teacher-data';

            const response = await axios.get(url);

            console.log(response.data)

            response.data.forEach((item) => {
                document.getElementById('teacher-list').innerHTML += `
                    <tr>
                        <th scope="row">${item.id}</th>
                        <td>${item.name}</td>
                        <th scope="col">
                            <a href="{{ url('/profile-teacher/${item.id}') }}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{ url('/edit-teacher/${item.id}') }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ url('/delete-teacher/${item.id}') }}" class="btn btn-sm btn-danger">Delete</a>
                        </th>
                    </tr>
        `;

            });

            // console.log(response.data)

        }
    </script>
@endsection
