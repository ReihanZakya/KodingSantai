@extends('layouts.main')

@section('home')
    {{-- HERO SECTION --}}
    <section>
        <div>
            <div class="row w-100% d-flex" style="height: 90vh;">
                <div class="col-lg-6 mybg-white p-5">
                    <div class="container p-5">
                        <div class="myBorder-leftBlue p-2">
                            <div class="fs-1 fw-bold">
                                KodeSantai
                            </div>
                            <div class="fs-4 fw-bold">
                                Pembelajaran Dasar Programmer
                            </div>
                            <button class="myBtn-blue fw-bold">Mulai Sekarang</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mybg-blue p-5 row align-items-end">
                    <div class="container p-5">
                        <div class="myBorder-rightWhite p-2">
                            <div class="fs-1 fw-bold text-end w-100">
                                Pelajari materi dasar untuk menjadi pengembang yang hebat
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END HERO SECTION --}}

    {{-- KELEBIHAN --}}
    <section>
        <div class="kelebihan ">
            <div class="p-3 row">
                <div class="col-lg-6 d-flex justify-content-center">
                    <button class="myBtn-white fw-bold">
                        <img src={{ 'images/archive.png' }} width="40" class="">
                        Ruang Belajar Terpadu
                    </button>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <button class="myBtn-white fw-bold">
                        <img src={{ 'images/study.png' }} width="40" class="">
                        Belajar Kapanpun
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{-- END KELEBIHAN --}}

    {{-- APA ITU KODESANTAI --}}
    <div class="p-0 m-0">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="mybg-blue p-5" style="height: 100%">
                    <div class="container p-5">
                        <div class="myBorder-leftWhite p-2">
                            <h1 class="fw-bold">Apa Itu KodeSantai</h1>
                        </div>
                        <div class="mt-5">
                            <h2>KodeSantai</h2>
                            <p class="fs-4">adalah platform belajar daring yang dirancang khusus untuk membantu
                                pemula dalam
                                mempelajari pemrograman. Kami menyediakan berbagai materi dan sumber daya yang
                                dirancang secara khusus untuk memandu pengguna dari tingkat dasar hingga kemampuan
                                yang lebih tinggi dalam pemrograman.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="mybg-white p-5" style="height: 100%">
                    <div class="container p-5">
                        <img src={{ 'images/programmer.png' }} class="img-fluid rounded-top" width="80%"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END --}}

    {{-- MULAI PEMBELAJARAN --}}
    <div class="mybg-blue">
        <div class="container">
            <div>
                <button class="myBtn-white fw-bold">
                    Ruang Belajar Terpadu
                </button>
            </div>
        </div>
    </div>
@endsection
