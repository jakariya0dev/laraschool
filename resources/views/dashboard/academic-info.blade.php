@extends('dashboard.master')

@section('content')

    <section>

        <!-- general form elements -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">একাডেমিক তথ্য</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" id="banner-form" action="{{ url('/academic-info-update') }}"
                      method="post">

                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="info-1">তথ্য- ১:</label>
                            <input name="info-1" type="text" class="form-control" id="info-1" required>
                        </div>
                        <div class="form-group">
                            <label for="info-2">তথ্য- ২:</label>
                            <input name="info-2" type="text" class="form-control" id="info-2" required>
                        </div>
                        <div class="form-group">
                            <label for="info-3">তথ্য- ৩:</label>
                            <input name="info-3" type="text" class="form-control" id="info-3" required>
                        </div>
                        <div class="form-group">
                            <label for="info-4">তথ্য- ৪:</label>
                            <input name="info-4" type="text" class="form-control" id="info-4" required>
                        </div>
                        <div class="form-group">
                            <label for="info-5">তথ্য- ৫:</label>
                            <input name="info-5" type="text" class="form-control" id="info-5" required>
                        </div>
                        <div class="form-group">
                            <label for="info-6">তথ্য- ৬:</label>
                            <input name="info-6" type="text" class="form-control" id="info-6" required>
                        </div>
                        <div class="form-group">
                            <label for="info7-">তথ্য- ৭:</label>
                            <input name="info-7" type="text" class="form-control" id="info-7" required>
                        </div>
                        <div class="form-group">
                            <label for="info-8">তথ্য- ৮:</label>
                            <input name="info-8" type="text" class="form-control" id="info-8" required>
                        </div>
                        <div class="form-group">
                            <label for="info-9">তথ্য- ৯:</label>
                            <input name="info-9" type="text" class="form-control" id="info-9" required>
                        </div>
                        <div class="form-group">
                            <label for="info-10">তথ্য- ১০:</label>
                            <input name="info-10" type="text" class="form-control" id="info-10" required>
                        </div>
                        <div class="form-group">
                            <label for="info-11">তথ্য- ১১:</label>
                            <input name="info-11" type="text" class="form-control" id="info-11" required>
                        </div>
                        <div class="form-group">
                            <label for="info-12">তথ্য- ১২:</label>
                            <input name="info-12" type="text" class="form-control" id="info-12" required>
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

        getAcademicInfo()

        async function getAcademicInfo() {
            let url = '/academic-data';
            const response = await axios.get(url);
            document.getElementById('info-1').value = response.data.info_1;
            document.getElementById('info-2').value = response.data.info_2;
            document.getElementById('info-3').value = response.data.info_3;
            document.getElementById('info-4').value = response.data.info_4;
            document.getElementById('info-5').value = response.data.info_5;
            document.getElementById('info-6').value = response.data.info_6;
            document.getElementById('info-7').value = response.data.info_7;
            document.getElementById('info-8').value = response.data.info_8;
            document.getElementById('info-9').value = response.data.info_9;
            document.getElementById('info-10').value = response.data.info_10;
            document.getElementById('info-11').value = response.data.info_11;
            document.getElementById('info-12').value = response.data.info_12;
        }
    </script>
@endsection

