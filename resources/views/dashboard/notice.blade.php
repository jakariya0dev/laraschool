@extends('dashboard.master')

@section('content')

    <section>

        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">নতুন নোটিশ</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" id="banner-form" action="{{ url('/add-notice') }}" method="post">

                    @csrf
                    @method('post')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="notice-title">হেডলাইনঃ</label>
                            <input name="notice-title" type="text" class="form-control" id="notice-title" required>
                        </div>
                        <div class="form-group">
                            <label for="notice-link">পিডিএফ url</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="notice-link" type="text" class="form-control" id="notice-link">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody id="notice-tile"> </tbody>
            </table>
        </div>
    </section>

    <script>

        getAllNotice()

        async function getAllNotice() {

            let url = '/all-notice';

            const response = await axios.get(url);

            response.data.forEach((item) => {
                document.getElementById('notice-tile').innerHTML += `
                <tr>
                    <th scope="row">${item.id}</th>
                    <td>${item.title}</td>
                    <td><a class="btn btn-primary" href="${item.link}" target="_blank">View</a></td>
                    <td><a class="btn btn-danger" href="{{ url('/delete-notice/${item.id}') }}">Delete</a></td>
                </tr>
        `;

            });

            // console.log(response.data)

        }
    </script>
@endsection
