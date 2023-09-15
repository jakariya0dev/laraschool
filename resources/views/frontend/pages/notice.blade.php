@extends('frontend.pages.master')

@section('content')
    <section>
        <div class="container">
            <div class="row">

                <table class="table mt-5">
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
                </tr>
        `;

            });

            // console.log(response.data)

        }
    </script>
@endsection
