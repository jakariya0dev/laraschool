@extends('frontend.pages.master')

@section('content')
    <section>
        <div class="container">
            <div class="row" id="teacher-list">

            </div>
        </div>
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


