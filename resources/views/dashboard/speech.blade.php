@extends('dashboard.master')

@section('content')

    <section>

        <!-- President -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">সভাপতি</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" id="banner-form" action="{{ url('/update-speech', 1) }}"
                      method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title-1">হেডলাইনঃ</label>
                            <input name="title-1" type="text" class="form-control" id="title-1"
                                   placeholder="সভাপতি" required>
                        </div>
                        <div class="form-group">
                            <label for="message-1">বাণীঃ</label>
                            <input name="message-1" type="text" class="form-control" id="message-1" required>
                        </div>
                        <div class="form-group">
                            <label for="image-1">ইমেজঃ (520 x 520)</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="image-1" type="file" class="form-control" id="image-1">
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

        <!-- Principal -->
        <div class="container">
            <div class="card card-primary">
                <form enctype="multipart/form-data" action="{{ url('/update-speech', 2) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title-2">হেডলাইনঃ</label>
                            <input name="title-2" type="text" class="form-control" id="title-2"
                                   placeholder="সভাপতি" required>
                        </div>
                        <div class="form-group">
                            <label for="message-2">বাণীঃ</label>
                            <input name="message-2" type="text" class="form-control" id="message-2" required>
                        </div>
                        <div class="form-group">
                            <label for="image-2">ইমেজঃ (520 x 520)</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="image-2" type="file" class="form-control" id="image-2">
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

    </section>

    <script>

        getSpeechData()

        async function getSpeechData() {

            let url = '/speech-data';
            const response = await axios.get(url);

            document.getElementById('title-1').value = response.data[0].title;
            document.getElementById('message-1').value = response.data[0].message;

            document.getElementById('title-2').value = response.data[1].title;
            document.getElementById('message-2').value = response.data[1].message;

        }

    </script>
@endsection
