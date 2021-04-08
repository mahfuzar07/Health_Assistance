@extends('layouts.frontend_layouts')
@section('content')

</div>
</div>
</section>


    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend') }}/img/breadcrumb.jpg">
        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <div class="breadcrumb__text">
	                        <h2>স্বাস্থ্য বার্তা </h2>
	                        
	                    </div>
	                </div>
	            </div>
        </div>
    </section>


      <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
                    <div class="blog__sidebar">
                        
                        <div class="blog__sidebar__item">
                            <h4>ব্লগ ক্যাটাগরি </h4>
                            @php
                            $blogcategories = App\Blogcategory::latest()-> get();
                        @endphp
                            <ul>
                            	@foreach($blogcategories as $row)
                                <li><a href="{{ url('category/post-show/'.$row-> id) }}">{{ $row-> category_name }}</a></li>
                                
                                @endforeach
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>সাম্প্রতিক স্বাস্থ্য বার্তা</h4>
                            <div class="blog__sidebar__recent">
                            	@foreach ($lts_b as $blog)
                                <a href="{{ url('post/details/'.$blog-> id) }}" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="{{ asset($blog-> image) }}" alt="" style="height:40px;width: 50px;">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>{{ $blog-> post_title }}</h6>
                                        <span>{{ $blog-> created_at->diffForHumans() }}</span>
                                        {{-- <span>{{ $blog-> view }}</span> --}}
                                    </div>
                                </a>
                               @endforeach
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <div class="bg-picture">
                            <img src="{{ asset($blogs-> image) }}" alt="" style="width: 500px;height:250px ;">

                        </div>
                        <u><span> প্রকাশ: {{ $blogs-> created_at->format('j F Y , h:i A') }}</span></p></u>
                        
                        <h3>{{ $blogs-> post_title }}</h3>

                        <p>{{ $blogs-> short}}</p>
                        
                        <p>{!! $blogs-> post_body !!}</p>
                    </div>
                    <div class="blog__details__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="{{asset('uploads/documents/consultant/'.   
                                        $blogs->joincon-> avatar) }}" alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h6>{{ $blogs->joincon-> name }}</h6>
                                        <span>Author</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <ul>
                                        <li><span>Categories:</span> {{ $blogs->join-> category_name }}</li>
                                        <li><span></span>{{ $blogs-> created_at->diffForHumans() }}</li>

                                        
                                    </ul>
                                    <div class="blog__details__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related-blog-title">
                        <h2>সংশ্লিষ্ট স্বাস্থ্য বার্তা</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($related_post as $blogs)

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ asset($blogs-> image) }}" alt="" style="width: 500px;height:250px ;" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> {{ $blogs-> created_at->format('j F Y') }}</li>
                                <li> <i class="fa fa-user"></i> {{ $blogs->joincon-> name }}</li>
                              
                            </ul>
                            <h5><a href="{{ url('post/details/'.$blogs->id) }}">{{ $blogs-> post_title }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

                
            </div>
        </div>
    </section>
    <!-- Related Blog Section End -->




@endsection