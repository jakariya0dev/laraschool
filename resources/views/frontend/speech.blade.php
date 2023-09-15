<div class="row speech-area mb-3" data-aos="fade-up" data-aos-duration="1000">
    <div class="col-lg-6">
        <h4 id="title-1" class="category-title text-white overflow-hidden"></h4>
        <div class="profile">
            <img id="image-1" src="" alt="image-not-found">
            <p id="message-1" class="speech-desc">
                <!-- <a href="blog-details.html" class="read-more text-white">read more</a> -->
            </p>
        </div>
    </div>
    <div class="col-lg-6">
        <h4 id="title-2" class="category-title text-white overflow-hidden"></h4>
        <div class="profile">
            <img id="image-2" src="" alt="image-not-found">
            <p id="message-2" class="speech-desc">
                <!-- <a href="blog-details.html" class="read-more text-white">read more</a> -->
            </p>
        </div>
    </div>
</div>

<script>

    getSpeechData();

    async function getSpeechData() {
        let response = await axios.get('/speech-data');
        // console.log(response.data);

        document.getElementById('title-1').innerHTML = response.data[0].title
        document.getElementById('message-1').innerHTML = response.data[0].message
        document.getElementById('image-1').src = `{{ asset('images/speech/1/${response.data[0].image}') }}`

        document.getElementById('title-2').innerHTML = response.data[1].title
        document.getElementById('message-2').innerHTML = response.data[1].message
        document.getElementById('image-2').src = `{{ asset('images/speech/2/${response.data[1].image}') }}`
    }

</script>
