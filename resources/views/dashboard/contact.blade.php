@extends('dashboard.master')

@section('content')

    <section>

        <!-- general form elements -->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">যোগাযোগের তথ্য</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" id="banner-form" action="{{ url('/contact-update') }}"
                      method="post">

                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="contact-address">ঠিকানা:</label>
                            <input name="contact-address" type="text" class="form-control" id="contact-address"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="contact-email">ইমেইল:</label>
                            <input name="contact-email" type="text" class="form-control" id="contact-email" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-cell">মোবাইল নাম্বার:</label>
                            <input name="contact-cell" type="text" class="form-control" id="contact-cell" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-maps">গুগল ম্যাপের অ্যাড্রেস ():</label>
                            <input name="contact-maps" type="text" class="form-control" id="contact-maps" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-twitter">টুইটার লিংক:</label>
                            <input name="contact-twitter" type="text" class="form-control" id="contact-twitter"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="contact-facebook">ফেইসবুক লিংক:</label>
                            <input name="contact-facebook" type="text" class="form-control" id="contact-facebook"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="contact-instagram">ইন্সটাগ্রাম লিংক:</label>
                            <input name="contact-instagram" type="text" class="form-control" id="contact-instagram"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="contact-youtube">ইউটিউব লিংক:</label>
                            <input name="contact-youtube" type="text" class="form-control" id="contact-youtube"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="contact-linkedin">লিংকডইন লিংক:</label>
                            <input name="contact-linkedin" type="text" class="form-control" id="contact-linkedin"
                                   required>
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

        getContactData()

        async function getContactData() {
            let url = '/contact-data';
            const response = await axios.get(url);
            document.getElementById('contact-address').value = response.data.address;
            document.getElementById('contact-email').value = response.data.email;
            document.getElementById('contact-cell').value = response.data.cell;
            document.getElementById('contact-maps').value = response.data.maps;
            document.getElementById('contact-twitter').value = response.data.twitter;
            document.getElementById('contact-facebook').value = response.data.facebook;
            document.getElementById('contact-instagram').value = response.data.instagram;
            document.getElementById('contact-youtube').value = response.data.youtube;
            document.getElementById('contact-linkedin').value = response.data.linkedin;
        }
    </script>
@endsection

