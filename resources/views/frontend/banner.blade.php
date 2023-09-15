<section>
    <div class="banner-area-wrapper mb-3">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img id="banner-1" src="" class="d-block w-100" alt="image-not-found" style="height:400px;object-fit:cover">
                </div>
                <div class="carousel-item active" data-bs-interval="5000">
                    <img id="banner-2" src="" class="d-block w-100" alt="image-not-found" style="height:400px;object-fit:cover">
                </div>
                <div class="carousel-item active" data-bs-interval="5000">
                    <img id="banner-3" src="" class="d-block w-100" alt="image-not-found" style="height:400px;object-fit:cover">
                </div>
                <div class="carousel-item active" data-bs-interval="5000">
                    <img id="banner-4" src="" class="d-block w-100" alt="image-not-found" style="height:400px;object-fit:cover">
                </div>
                <div class="carousel-item active" data-bs-interval="5000">
                    <img id="banner-5" src="" class="d-block w-100" alt="image-not-found" style="height:400px;object-fit:cover">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>

    <script>

        getData()

        async function getData() {

            let url = '/banner-data';

            const response = await axios.get(url);

            document.getElementById('banner-1').src = `{{ asset('images/banner/photo-1/${response.data.image_1}') }}`;
            document.getElementById('banner-2').src = `{{ asset('images/banner/photo-2/${response.data.image_2}') }}`;
            document.getElementById('banner-3').src = `{{ asset('images/banner/photo-3/${response.data.image_3}') }}`;
            document.getElementById('banner-4').src = `{{ asset('images/banner/photo-4/${response.data.image_4}') }}`;
            document.getElementById('banner-5').src = `{{ asset('images/banner/photo-5/${response.data.image_5}') }}`;

        }
    </script>
</section>
