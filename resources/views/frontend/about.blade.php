<div class="institution-sec-wrap" data-aos="fade-up" data-aos-duration="1000">
    <h4 id="about-title" class="institution-title text-white"></h4>
    <div class="institution-cont">
        <img id="about-image" src="" alt="image-not-found" class="img-fluid w-25 h-25">
        <p id="about-para" class="institute-history">
            <!-- <a class="read-more text-white">read more</a> -->
        </p>
    </div>
</div>

<script>

    getData()

    async function getData() {

        let url = '/about-data';

        const response = await axios.get(url);

        // document.getElementById('y-video').src = response.data.video_url;
        document.getElementById('about-title').innerHTML = response.data.title;
        document.getElementById('about-para').innerText = response.data.description;
        document.getElementById('about-image').src = `{{ asset('images/about/${response.data.image}') }}`;

        // console.log(response.data)


    }
</script>
