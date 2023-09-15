@extends('frontend.pages.master')

@section('content')
    <div class="container">

        <div class="section-title">
            <h2>Photo gallery</h2>
            <p>ফটো গ্যালারী</p>
        </div>

        <div class="row">
            <div class="col-md-3" style="height: 15rem;"><img id="pg-image1" class="img-fluid img-thumbnail h-100 w-100"></div>
            <div class="col-md-3" style="height: 15rem;"><img id="pg-image2" class="img-fluid img-thumbnail h-100 w-100"></div>
            <div class="col-md-3" style="height: 15rem;"><img id="pg-image3" class="img-fluid img-thumbnail h-100 w-100"></div>
            <div class="col-md-3" style="height: 15rem;"><img id="pg-image4" class="img-fluid img-thumbnail h-100 w-100"></div>
            <div class="col-md-3" style="height: 15rem;"><img id="pg-image5" class="img-fluid img-thumbnail h-100 w-100"></div>
            <div class="col-md-3" style="height: 15rem;"><img id="pg-image6" class="img-fluid img-thumbnail h-100 w-100"></div>
            <div class="col-md-3" style="height: 15rem;"><img id="pg-image7" class="img-fluid img-thumbnail h-100 w-100"></div>
            <div class="col-md-3" style="height: 15rem;"><img id="pg-image8" class="img-fluid img-thumbnail h-100 w-100"></div>

        </div>
    </div>
    <script>

        getData()

        async function getData() {

            let url = '/photo-gallery-data';

            const response = await axios.get(url);

            document.getElementById('pg-image1').src = `{{ asset('images/gallery/photo-1/${response.data.image_1}') }}`;
            document.getElementById('pg-image2').src= `{{ asset('images/gallery/photo-2/${response.data.image_2}') }}`;
            document.getElementById('pg-image3').src = `{{ asset('images/gallery/photo-3/${response.data.image_3}') }}`;
            document.getElementById('pg-image4').src = `{{ asset('images/gallery/photo-4/${response.data.image_4}') }}`;
            document.getElementById('pg-image5').src = `{{ asset('images/gallery/photo-5/${response.data.image_5}') }}`;
            document.getElementById('pg-image6').src = `{{ asset('images/gallery/photo-6/${response.data.image_6}') }}`;
            document.getElementById('pg-image7').src = `{{ asset('images/gallery/photo-7/${response.data.image_7}') }}`;
            document.getElementById('pg-image8').src = `{{ asset('images/gallery/photo-8/${response.data.image_8}') }}`;

        }
    </script>
@endsection

