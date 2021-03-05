@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Ask Question</div>

                <div class="card-body">
                <form class="form-horizontal"  action="{{ route('messsage-post') }}" method="POST" enctype="multipart/form-data"  >

                                           @csrf

                           <input type="hidden"  name="user_id"  value="{{Auth::user()->id}}"  >
                           <input type="hidden"  name="consultant_id"  value="{{$consaltant->id}}"  >

                <div class="form-group">
                    <label class="col-md-2 control-label"></label>
                    <div class="col-md-10">
                        <textarea  name="question" placeholder="Ask question" class="summernote"></textarea>

                        @error('description')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                <label class="col-md-3 control-label"></label>

                    <button type="submit"  class="btn btn-success waves-effect waves-light m-l-10  col-md-5">   Send </button>


                </div>

                </div>
                </from>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Question & Answer </div>
         <?php $questionList = \App\Model\Message::where('user_id',Auth::user()->id)->where('consultant_id',$consaltant->id)->get();?>
                <div class="card-body">

                    <div class="form-group">
                       <label class="col-md-2 control-label"></label>
                       <div class="col-md-10">
                           @foreach($questionList as $in_fo)
                           <h5> <span class="badge badge-success"> Name </span> ::  {{$in_fo->question}} </h5>
                           <h5> <span class="badge badge-success"> Answer  </span> :: {{$in_fo->replay}}</h5>
                           @endforeach
                       </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
