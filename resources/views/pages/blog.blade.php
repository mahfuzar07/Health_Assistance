@extends('layouts.frontend_layouts')
@section('blog') active @endsection
@section('content')

</div>
</div>
</section>
 <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend') }}/img/breadcrumb.jpg">
        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <div class="breadcrumb__text">
	                        <h2> স্বাস্থ্য বার্তা </h2>
	                        
	                    </div>
	                </div>
	            </div>
        </div>
    </section>


      <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
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
                                <a href="{{ url('post/details/'.$blog->id) }}" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="{{ asset($blog-> image) }}" alt="" style="height:40px;width: 50px;">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>{{ $blog-> post_title }}</h6>
                                        <span>{{ $blog-> created_at->diffForHumans() }}</span>
                                    </div>
                                </a>
                                @endforeach
                               
                                
                            </div>
                        </div>
                       </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        @foreach ($blogs as $post)
                            {{-- expr --}}
                       
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="{{ $post-> image }}" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> {{ $post-> created_at->format('j F Y') }}</li>
                                        <li> <i class="fa fa-user"></i> {{ $post->joincon-> name }}</li>
                                     </ul>
                                    <h5><a href="{{ url('post/details/'.$post-> id) }}">{{ $post-> post_title }}</a></h5>
                                    <p>{{ $post-> short}}</p>
                                    <p></p>
                                    <a href="{{ url('post/details/'.$post-> id) }}" class="blog__btn"> বিস্তারিত পড়ুন <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                         @endforeach


                        <div class="col-lg-12">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->




@endsection








