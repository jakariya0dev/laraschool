
@extends('frontend.pages.master')

@section('content')
    <div class="container mt-5" data-aos="fade-up">
        <div class="section-title mb-5">
            <h2>একাডমিক তথ্য</h2>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-3 col-md-4">
                <div class="icon-box">
                    <i class="ri-store-line" style="color: #ffbb2c;"></i>
                    <h3 id="feature-1"></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                    <h3 id="feature-2"></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                    <h3 id="feature-3"></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                <div class="icon-box">
                    <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                    <h3 id="feature-4"></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-database-2-line" style="color: #47aeff;"></i>
                    <h3  id="feature-5"></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                    <h3  id="feature-6"></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                    <h3  id="feature-7"></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                    <h3 id="feature-8"></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-anchor-line" style="color: #b2904f;"></i>
                    <h3 id="feature-9"></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-disc-line" style="color: #b20969;"></i>
                    <h3 id="feature-10"></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-base-station-line" style="color: #ff5828;"></i>
                    <h3 id="feature-11"></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                    <h3 id="feature-12"></h3>
                </div>
            </div>
        </div>

    </div>

    <script>

        getData()

        async function getData() {

            let url = '/academic-data';

            const response = await axios.get(url);

            document.getElementById('feature-1').innerHTML = response.data.info_1;
            document.getElementById('feature-2').innerHTML = response.data.info_2;
            document.getElementById('feature-3').innerHTML = response.data.info_3;
            document.getElementById('feature-4').innerHTML = response.data.info_4;
            document.getElementById('feature-5').innerHTML = response.data.info_5;
            document.getElementById('feature-6').innerHTML = response.data.info_6;
            document.getElementById('feature-7').innerHTML = response.data.info_7;
            document.getElementById('feature-8').innerHTML = response.data.info_8;
            document.getElementById('feature-9').innerHTML = response.data.info_9;
            document.getElementById('feature-10').innerHTML = response.data.info_10;
            document.getElementById('feature-11').innerHTML = response.data.info_11;
            document.getElementById('feature-12').innerHTML = response.data.info_12;

            // console.log(response.data)

        }
    </script>
@endsection
