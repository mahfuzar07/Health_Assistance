@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">  <span class="badge badge-success">Question & Answer</span>  </div>
         <?php $questionList = \App\Model\Message::where('consultant_id',Auth::guard('consultant')->user()->id)->paginate(20);?>
                <div class="card-body">
                    @foreach($questionList as $in_fo)
                    <?php $user_info = \App\User::where('id',$in_fo->user_id)->first();?>
                    <div class="form-group">
                       <label class="col-md-2 control-label"></label>
                       <div class="col-md-10">
                           <h5> <span class="badge badge-success"> Name </span> ::  {{isset($user_info)?$user_info->name:''}}</h5>
                           <h5> <span class="badge badge-success"> Phone Number </span> ::  {{isset($user_info)?$user_info->phone:''}}</h5>
                           <h5> <span class="badge badge-success"> Blood Gruop </span> ::  {{isset($user_info)?$user_info->blood_grp:''}}</h5>
                           <h5> <span class="badge badge-success"> Question </span> ::  {{$in_fo->question}} </h5>

                       </div>
                      <div class="col-md-10">
                          @if($in_fo->replay==!null)
                          <h5><span class="badge badge-success"> Answer  </span> ::  {{$in_fo->replay}}  </h5>
                          @else
                         <h5><span class="badge badge-success"> Answer :: </span> </h5>
                           <form class="form-horizontal"  action="{{ route('send-replay',$in_fo->id) }}" method="POST" enctype="multipart/form-data"  >
                            @csrf
                           <div class="form-group">
                              <label class="col-md-2 control-label"></label>
                              <div class="col-md-10">
                                  <textarea  name="replay" placeholder="Replay" class="summernote"></textarea>

                                  @error('description')
                                  <strong class="text-danger">{{ $message }}</strong>
                                  @enderror
                              </div>
                              <div class="col-md-10">
                                  <input type="file" name="docs_file" class="from-control">
                              </div>
                          </div>
                          <div class="form-group">
                          <label class="col-md-3 control-label"></label>
                              <button type="submit"  class="btn btn-success waves-effect waves-light m-l-10  col-md-5">   Send </button>
                          </div>
                          </form>
                          @endif
                      </div>
                    @endforeach
                </div>
            </div>
            {{$questionList->links()}}

    </div>
</div>
</div>
</div>

@endsection
