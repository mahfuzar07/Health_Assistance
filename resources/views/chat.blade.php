@extends('layouts.app')
@section('content')

<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
            <div><h4>স্বাস্থ্য বিষয়ক  প্রশ্ন করুন</h4></div><hr>
            <div class="card">
            <div class="card-body">
                <form class="form-horizontal"  action="{{ route('messsage-post') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden"  name="user_id"  value="{{Auth::user()->id}}"  >
                    <input type="hidden"  name="consultant_id"  value="{{$consaltant->id}}">

                    <div class="form-group">
                    <textarea  name="question" placeholder="Ask question" class="summernote"></textarea>

                      @error('question')
                      <strong class="text-danger">{{ $message }}</strong>
                      @enderror

                    <button type="submit"  class="btn btn-success waves-effect waves-light m-l-10  col-md-5">   Send </button>

                    
                  </div>
                </form>

            </div>
            </div><hr>
            

             <?php $questionList = \App\Model\Message::where('user_id',Auth::user()->id)->where('consultant_id',$consaltant->id);?>
            <div class="card">
            <div class="text-center">
                <h5 style="margin-top:15px">স্বাস্থ্য পরামর্শদাতার তথ্য</h5>
                <img src="{{asset('uploads/documents/consultant/'. $consaltant-> avatar) }}" style="height:60px;width:60px;" alt="user-img" class="card-img-top" alt="...">
            </div>
  

            <div class="card-body">
                <h5  class="card-title"> {{ $consaltant-> name }}</h5>
                <address>
                <p><strong>Email: </strong > {{ $consaltant-> email }}</p>
                <p><strong>Phone No: </strong > {{ $consaltant-> phone_number }}</p>
                <p><strong>Profession: </strong > {{ $consaltant-> profession }}</p>
                <p><strong>Specialist: </strong > {{ $consaltant-> specialist }}</p>
                <p><strong>Institute: </strong > {{ $consaltant-> institute }}</p>
                <p><strong>Join Date: </strong > {{ $consaltant-> created_at->format(' j F Y') }}</p>

                </address>

                
               
            </div>
            </div>
            </div>
                  
           
           


            <div class="col-lg-8 col-md-7">
            <div><h4>আপনার প্রশ্ন এবং উত্তর </h4></div><hr>
            <div class="card">
            <div class="card-body">
            <?php $questionList = \App\Model\Message::where('user_id',Auth::user()->id)->where('consultant_id',$consaltant->id)->paginate(10);?>

            <div class="form-group">
            	@php
                $i =1;
                @endphp
               @foreach($questionList as $in_fo)
                <h5><span class="badge badge-success">( {{$i++}} )  Question</span> ::  {{$in_fo->question}} </h5>
                <h5 > <span class="badge badge-success"> Answer  </span> :: {!! $in_fo->replay!!}</h5>
                <hr>
                @if($in_fo->docs_file)
                <h5> <span class="badge badge-success"> Sugestion file  </span> ::
                <a href="{{asset('uploads/documents/Consultant/'.$in_fo->docs_file)}}" class="btn btn-info">Download Sugestion File</a>
                </h5><hr>
                @endif
               @endforeach
                       
            </div>


            </div>
            </div>
            {{$questionList->links()}}	
            </div><hr>
            
        
         </div>
    </div>
            
        
</section>
@endsection