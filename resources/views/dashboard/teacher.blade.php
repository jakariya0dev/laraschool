@extends('dashboard.master')

@section('content')

    <section>

        <!-- general form elements -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">কাউন্টার তথ্য</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" id="banner-form" action="{{ url('/counter-update') }}"
                      method="post">

                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="counter-student">মোট শিক্ষাথী সংখ্যা (ইংরেজিতে লিুন):</label>
                            <input name="counter-student" type="text" class="form-control" id="counter-student"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="counter-teacher">মোট শিক্ষক সংখ্যা (ইংরেজিতে লিুন):</label>
                            <input name="counter-teacher" type="text" class="form-control" id="counter-teacher"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="counter-official">মোট কর্মচারীর সংখ্যা (ইংরেজিতে লিুন):</label>
                            <input name="counter-official" type="text" class="form-control" id="counter-official"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="counter-admin">পরিচালনা পর্ষদের সদস্য সংখ্যা (ইংরেজিতে লিুন):</label>
                            <input name="counter-admin" type="text" class="form-control" id="counter-admin" required>
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

        getCounterData()

        async function getCounterData() {
            let url = '/counter-data';
            const response = await axios.get(url);
            document.getElementById('counter-student').value = response.data.student;
            document.getElementById('counter-teacher').value = response.data.teacher;
            document.getElementById('counter-official').value = response.data.official;
            document.getElementById('counter-admin').value = response.data.admin;
        }
    </script>
@endsection

