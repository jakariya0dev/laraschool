<div class="col-lg-3">
    <aside class="sidebar-area overflow-hidden">
        <!-- notice-area start -->
        <div class="notice-area" data-aos="fade-left" data-aos-duration="1000">
            <h4 class="notice-title text-white">নোটিশ বোর্ড</h4>
            <div class="notice-box">
                <marquee direction="up" scrollamount="3px" onmouseover="this.stop()"
                         onmouseout="this.start()">
                    <ul id="aside-notice-board" class="list-unstyled overflow-hidden mt-2">

                    </ul>
                </marquee>
            </div>
        </div>


        <div class="academy-info-wrap overflow-hidden" data-aos="fade-left"
             data-aos-duration="1000">
            <ul class="list-unstyled">
                <li><a href="http://www.moedu.gov.bd/" class="text-white">শিক্ষা মন্ত্রণালয়</a></li>
                <li><a href="http://www.dme.gov.bd/" class="text-white">মাদ্রাসা শিক্ষা অধিদপ্তর</a></li>
                <li><a href="https://iau.edu.bd/" class="text-white">ইসলামি আরবী বিশ্ববিদ্যালয়</a></li>
                <li><a href="http://www.bmeb.gov.bd/" class="text-white">বাংলাদেশ মাদরাসা শিক্ষা বোর্ড</a></li>
                <li><a href="https://www.teachers.gov.bd/" class="text-white">শিক্ষক বাতায়ন</a></li>
                <li><a href="https://www.w3newspapers.com/bangladesh/" class="text-white">সকল অনলাইন পত্রিকা</a></li>
            </ul>
        </div>

        <!-- facebook-area start -->
        <div class="facebook-area" data-aos="fade-left" data-aos-duration="1000">

            <div class="fb-title"><a class="text-white">Find us on Google Map</a></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.3084940914996!2d89.0565571414889!3d25.627884931130808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fcb5f279c42129%3A0xb86fe8480cf25716!2sOsmanpur%20B.U.%20Fazil%20Degree%20Madrasah!5e0!3m2!1sen!2sbd!4v1694758195112!5m2!1sen!2sbd" width="300" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </aside>
</div>

<script>

    getAllNotice();

    async function getAllNotice() {
         let response = await axios.get('/all-notice')

        response.data.forEach((item) => {

            document.getElementById('aside-notice-board').innerHTML += `
              <li>
                <a href="https://mkm.edu.bd/home/notice/mkm"> ${item.title} </a>
              </li>
            `
        })

        // console.log(response.data)

    }
</script>
