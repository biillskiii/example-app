@extends('navbar-footer')
@section('layout')
@section('title', 'keanggotaan')
@include('header')
@push('section-scripts')
    <link rel="stylesheet" type="text/css" href="{{asset('css/keanggo.css') }}">
@endpush

        <div class="main-container">
            <h2>Keanggotaan</h2>
            <h1>Screenshot 2023</h1>
            <div class="filter-container">
            <div class="category-head">
                <ul>
                <div class="category-title active" id="all">
                    <li>All</li>
                    <span><i class="fas fa-border-all"></i></span>
                </div>
                <div class="category-title" id="culture">
                    <li>Culture</li>
                    <span><i class="fas fa-theater-masks"></i></span>
                </div>
                <div class="category-title" id="politics">
                    <li>Politics</li>
                    <span><i class="fas fa-landmark"></i></span>
                </div>
                <div class="category-title" id="finance">
                    <li>Finance</li>
                    <span><i class="fas fa-chart-area"></i></span>
                </div>
                <div class="category-title" id="business">
                    <li>Business</li>
                    <span><i class="fas fa-coins"></i></span>
                </div>
                <div class="category-title" id="sports">
                    <li>Sports</li>
                    <span><i class="fas fa-running"></i></span>
                </div>
                </ul>
            </div>

            <div class="posts-collect">
                <div class="posts-main-container">
                    <!-- single post -->
                    <div class="all keanggotaan">
                        <img src="{{asset('picture/image 14.png') }}" alt="anggota">
                        <div class="img-caption">
                            <h4>Nur Azis Kurnia R</h4>
                            <p>Ketua</p>
                        </div>
                    </div>
                    <div class="img-container">
                        <img src="{{asset('picture/image 11.png') }}" alt="anggota">
                        <div class="img-caption">
                            <h4>Kepin</h4>
                            <p>Wakil Ketua</p>
                        </div>
                    </div>
                    <div class="img-container">
                        <img src="{{asset('picture/image 11.png') }}" alt="anggota">
                        <div class="img-caption">
                            <h4>Nabil</h4>
                            <p>Wakil Ketua</p>
                        </div>
                    </div>
\
                    
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all culture">
                    <div class="img-container">
                        <img src="{{asset('picture/image 11.png') }}" alt="anggota">
                        <div class="img-caption">
                            <h4>Nabil</h4>
                            <p>Wakil Ketua</p>
                        </div>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all culture">
                    <div class="img-container">
                        <img src="{{asset('picture/image 11.png') }}" alt="anggota">
                        <div class="img-caption">
                            <h4>Nabil</h4>
                            <p>Wakil Ketua</p>
                        </div>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all culture">
                    < <div class="img-container">
                        <img src="{{asset('picture/image 11.png') }}" alt="anggota">
                        <div class="img-caption">
                            <h4>Nabil</h4>
                            <p>Wakil Ketua</p>
                        </div>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all culture">
                    <div class="img-container">
                        <img src="{{asset('picture/image 11.png') }}" alt="anggota">
                        <div class="img-caption">
                            <h4>Nabil</h4>
                            <p>Wakil Ketua</p>
                        </div>
                    </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all finance">
                    <div class="post-img">
                    <img src="{{asset('picture/image 13.png')}}" alt="post" />
                    <span class="category-name">finance</span>
                    </div>

                    <div class="post-content">
                    <div class="post-content-top">
                        <span><i class="fas fa-calendar"></i>January 01, 2XXX</span>
                        <span> <i class="fas fa-comment"></i>34 </span>
                    </div>
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem,
                        consectetur nesciunt!
                    </p>
                    </div>
                    <button type="button" class="read-btn">Read All</button>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all finance">
                    <div class="post-img">
                    <img src="{{asset('picture/image 13.png')}}" alt="post" />
                    <span class="category-name">finance</span>
                    </div>

                    <div class="post-content">
                    <div class="post-content-top">
                        <span><i class="fas fa-calendar"></i>January 01, 2XXX</span>
                        <span> <i class="fas fa-comment"></i>34 </span>
                    </div>
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem,
                        consectetur nesciunt!
                    </p>
                    </div>
                    <button type="button" class="read-btn">Read All</button>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all finance">
                    <div class="post-img">
                    <img src="images/finance-3.jpg" alt="post" />
                    <span class="category-name">finance</span>
                    </div>

                    <div class="post-content">
                    <div class="post-content-top">
                        <span><i class="fas fa-calendar"></i>January 01, 2XXX</span>
                        <span> <i class="fas fa-comment"></i>34 </span>
                    </div>
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem,
                        consectetur nesciunt!
                    </p>
                    </div>
                    <button type="button" class="read-btn">Read All</button>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all politics">
                    <div class="post-img">
                    <img src="images/politics-1.jpg" alt="post" />
                    <span class="category-name">politics</span>
                    </div>

                    <div class="post-content">
                    <div class="post-content-top">
                        <span><i class="fas fa-calendar"></i>January 01, 2XXX</span>
                        <span> <i class="fas fa-comment"></i>34 </span>
                    </div>
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem,
                        consectetur nesciunt!
                    </p>
                    </div>
                    <button type="button" class="read-btn">Read All</button>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all politics">
                    <div class="post-img">
                    <img src="images/politics-2.jpg" alt="post" />
                    <span class="category-name">politics</span>
                    </div>

                    <div class="post-content">
                    <div class="post-content-top">
                        <span><i class="fas fa-calendar"></i>January 01, 2XXX</span>
                        <span> <i class="fas fa-comment"></i>34 </span>
                    </div>
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem,
                        consectetur nesciunt!
                    </p>
                    </div>
                    <button type="button" class="read-btn">Read All</button>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all politics">
                    <div class="post-img">
                    <img src="images/politics-3.jpg" alt="post" />
                    <span class="category-name">politics</span>
                    </div>

                    <div class="post-content">
                    <div class="post-content-top">
                        <span><i class="fas fa-calendar"></i>January 01, 2XXX</span>
                        <span> <i class="fas fa-comment"></i>34 </span>
                    </div>
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem,
                        consectetur nesciunt!
                    </p>
                    </div>
                    <button type="button" class="read-btn">Read All</button>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all politics">
                    <div class="post-img">
                    <img src="images/politics-4.jpg" alt="post" />
                    <span class="category-name">politics</span>
                    </div>

                    <div class="post-content">
                    <div class="post-content-top">
                        <span><i class="fas fa-calendar"></i>January 01, 2XXX</span>
                        <span> <i class="fas fa-comment"></i>34 </span>
                    </div>
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem,
                        consectetur nesciunt!
                    </p>
                    </div>
                    <button type="button" class="read-btn">Read All</button>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all sports">
                    <div class="post-img">
                    <img src="images/sports-1.jpg" alt="post" />
                    <span class="category-name">sports</span>
                    </div>

                    <div class="post-content">
                    <div class="post-content-top">
                        <span><i class="fas fa-calendar"></i>January 01, 2XXX</span>
                        <span> <i class="fas fa-comment"></i>34 </span>
                    </div>
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem,
                        consectetur nesciunt!
                    </p>
                    </div>
                    <button type="button" class="read-btn">Read All</button>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all sports">
                    <div class="post-img">
                    <img src="images/sports-2.jpg" alt="post" />
                    <span class="category-name">sports</span>
                    </div>

                    <div class="post-content">
                    <div class="post-content-top">
                        <span><i class="fas fa-calendar"></i>January 01, 2XXX</span>
                        <span> <i class="fas fa-comment"></i>34 </span>
                    </div>
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem,
                        consectetur nesciunt!
                    </p>
                    </div>
                    <button type="button" class="read-btn">Read All</button>
                </div>
                <!-- end of single post -->
                </div>
            </div>
            </div>
        </div>
@endsection