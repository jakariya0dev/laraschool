<div class="navbar-content-wrapper mb-2">

    <nav class="navbar navbar-expand-lg justify-content-end p-0">
        <span style="margin-right: 68%;font-weight: 600;color: white;" class="d-block d-sm-none">Menu</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background: none; vertical-align: center;"> <i class="fa fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav flex-wrap my-lg-0">

                <li class="nav-item">
                    <a title="প্রধান পাতা" class="nav-link text-white" href="{{ route('home') }}">প্রধান পাতা</a>
                </li>
                <li class="nav-item">
                    <a title="শিক্ষক" class="nav-link text-white" href="{{ route('teachers') }}">শিক্ষক</a>
                </li>
                <li class="nav-item dropdown">
                    <a title="অনলাইন ভর্তি" class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        অনলাইন ভর্তি
                    </a>
                    <ul class="dropdown-menu">
                        <li><a title="অনলাইন ভর্তি 1" class="dropdown-item text-white" href="https://mkm.edu.bd/home/admission/mkm">অনলাইন ভর্তি 1</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a title="গ্যালারী" class="nav-link text-white" href="{{ route('pages.gallery') }}">গ্যালারী</a>
                </li>
                <li class="nav-item dropdown">
                    <a title="পরিক্ষা সংক্রান্ত" class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        পরিক্ষা সংক্রান্ত
                    </a>
                    <ul class="dropdown-menu">
                        <li><a title="Certificate" class="dropdown-item text-white" href="">Certificate</a></li>
                        <li><a title="admit card" class="dropdown-item text-white" href="#">Admit card</a></li>
                        <li><a title="Assesment Result" class="dropdown-item text-white" href="#">Assessment Result</a></li>
                        <li><a title="Exam Result" class="dropdown-item text-white" href="#">Exam Result</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a title="পাঠ্যপুস্তক" class="nav-link text-white" href="#">শিক্ষার্থীদের তথ্য</a>
                </li>

                <li class="nav-item">
                    <a title="প্রাতিষ্ঠানিক তথ্য" class="nav-link text-white" href="{{ route('pages.academic.info') }}">প্রাতিষ্ঠানিক তথ্য</a>
                </li>
                <li class="nav-item dropdown">
                    <a title="শিক্ষার্থীদের তথ্য" class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         পাঠ্যপুস্তক
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="http://nctb.portal.gov.bd/site/page/c6816afa-4e9f-4bde-8dd0-6d44074baf7f" class="dropdown-item text-white" href="#">ইবতেদায়ী স্তর</a></li>
                        <li><a href="http://nctb.portal.gov.bd/site/page/221b05b6-76d6-4e79-9749-49a21823b1d8" class="dropdown-item text-white" href="#">দাখিল স্তর</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a title="Attendance" class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ডিজিটাল হাজিরা
                    </a>
                    <ul class="dropdown-menu">
                        <li><a title="Student Attendance" class="dropdown-item text-white" href="#">শিক্ষার্থী হাজিরা</a></li>
                        <li><a title="Employee" class="dropdown-item text-white" href="#">শিক্ষক-কর্মচারী হাজিরা</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a title="নোটিশ" class="nav-link text-white" href="{{ route('pages.notice') }}">নোটিশ</a>
                </li>

                <li class="nav-item">
                    <a title="লগইন" class="nav-link text-white" href="">লগইন</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
