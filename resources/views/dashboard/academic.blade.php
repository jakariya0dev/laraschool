@extends('dashboard.master')

@section('content')

    <section>

        <!-- Teacher List -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">শিক্ষক তালিকা</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" id="banner-form" action="{{ url('/teachers-update') }}"
                      method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="teachers-file">ফাইল (একটি Pdf ফাইল আপলোড করুন)</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="teachers-file" type="file" class="form-control" id="teachers-file">
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

        <!-- Class Routine -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ক্লাস রুটিন</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" id="banner-form" action="{{ url('/routine-update') }}"
                      method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="routine-file">ফাইল (একটি Pdf ফাইল আপলোড করুন)</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="routine-file" type="file" class="form-control" id="routine-file">
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

        <!-- Syllabus -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">সিলেবাস</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" id="banner-form" action="{{ url('/syllabus-update') }}"
                      method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="syllabus-file">ফাইল (একটি Pdf ফাইল আপলোড করুন)</label>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="syllabus-file" type="file" class="form-control" id="syllabus-file">
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
