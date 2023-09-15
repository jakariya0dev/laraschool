@extends('dashboard.master')

@section('content')

    <section>

        <!-- Achievement 1-->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">অর্জন-১</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" id="banner-form" action="{{ url('/achievement-update', 1) }}"
                      method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title-1">টাইটেলঃ</label>
                            <input name="title-1" type="text" class="form-control" id="title-1" required>
                        </div>
                        <div class="form-group">
                            <label for="image-1">ইমেজঃ (520 x 420)</label>
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

        <!-- Achievement 2-->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">অর্জন-২</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" id="banner-form" action="{{ url('/achievement-update', 2) }}"
                      method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title-2">টাইটেলঃ</label>
                            <input name="title-2" type="text" class="form-control" id="title-2" required>
                        </div>
                        <div class="form-group">
                            <label for="image-2">ইমেজঃ (520 x 420)</label>
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

        <!-- Achievement 3-->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">অর্জন-৩</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" id="banner-form" action="{{ url('/achievement-update', 3) }}"
                      method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title-3">টাইটেলঃ</label>
                            <input name="title-3" type="text" class="form-control" id="title-3" required>
                        </div>
                        <div class="form-group">
                            <label for="image-3">ইমেজঃ (520 x 420)</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="image-3" type="file" class="form-control" id="image-3">
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

        getAdministrationData()

        async function getAdministrationData() {

            let url = '/achieve-data';
            const response = await axios.get(url);

            document.getElementById('title-1').value = response.data[0].title;

            document.getElementById('title-2').value = response.data[1].title;

            document.getElementById('title-3').value = response.data[2].title;

        }

    </script>
@endsection
