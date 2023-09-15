@extends('dashboard.master')

@section('content')

    <section>

        <!-- Image - 1 -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ইমেজ-১</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" action="{{ url('/photo-gallery-update', 1) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
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

        <!-- Image - 2 -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ইমেজ-২</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" action="{{ url('/photo-gallery-update', 2) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
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

        <!-- Image - 3 -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ইমেজ-৩</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" action="{{ url('/photo-gallery-update', 3) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="image-3">ইমেজঃ (520 x 520)</label>
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

        <!-- Image - 4 -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ইমেজ-৪</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" action="{{ url('/photo-gallery-update', 4) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="image-4">ইমেজঃ (520 x 520)</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="image-4" type="file" class="form-control" id="image-4">
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

        <!-- Image - 5 -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ইমেজ-৫</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" action="{{ url('/photo-gallery-update', 5) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="image-5">ইমেজঃ (520 x 520)</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="image-5" type="file" class="form-control" id="image-5">
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

        <!-- Image - 6 -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ইমেজ-৬</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" action="{{ url('/photo-gallery-update', 6) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="image-6">ইমেজঃ (520 x 520)</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="image-6" type="file" class="form-control" id="image-6">
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

        <!-- Image - 7 -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ইমেজ-৭</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" action="{{ url('/photo-gallery-update', 7) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="image-7">ইমেজঃ (520 x 520)</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="image-7" type="file" class="form-control" id="image-7">
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

        <!-- Image - 8 -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ইমেজ-৮</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" action="{{ url('/photo-gallery-update', 8) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="image-8">ইমেজঃ (520 x 520)</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="image-8" type="file" class="form-control" id="image-8">
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

@endsection
