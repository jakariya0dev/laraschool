@extends('dashboard.master')

@section('content')

    <section>

        <!-- general form elements -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">প্রতিষ্ঠান পরিচিতি</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" id="banner-form" action="{{ url('/update-about') }}" method="post">

                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="about-title">হেডলাইনঃ</label>
                            <input name="about-title" type="text" class="form-control" id="about-title"
                                   placeholder="Ex: এক নজরে কলেজ  পরিচিতি" required>
                        </div>
                        <div class="form-group">
                            <label for="about-description">বর্ণনাঃ</label>
                            <input height="50" name="about-description" type="text" class="form-control"
                                   id="about-description" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="about-img">ইমেজঃ (520 x 520)</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="about-img" type="file" class="form-control" id="about-img">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="video-url">ভিডিও লিংকঃ</label>
                            <input name="video-url" type="text" class="form-control" id="video-url"
                                   placeholder="Ex: https://www.youtube.com" required>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>

        getBannerData()

        async function getBannerData() {
            let url = '/about-data';
            const response = await axios.get(url);
            document.getElementById('about-title').value = response.data.title;
            document.getElementById('about-description').value = response.data.description;
            document.getElementById('video-url').value = response.data.video_url;

        }

    </script>
@endsection
