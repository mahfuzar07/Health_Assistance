@extends('consultant.consultant_layouts')
@section('inbox') active @endsection
@section('consultant_content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Question And Answer </h4>
                                <ol class="breadcrumb pull-right">
                                    
                                    <li><a href="">Consultant</a></li>
                                    <li><a href="#">Question</a></li>
                                    <li class="active">Question</li>
                                </ol>
                            </div>
                        </div>

                       <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="panel panel-default">
                                     <div class="panel-body">
                                        <?php $questionList = \App\Model\Message::where('consultant_id',Auth::guard('consultant')->user()->id)->paginate(10);?>

                      <div class="card-body">
                     @foreach($questionList as $in_fo)
                    <?php $user_info = \App\User::where('id',$in_fo->user_id)->first();?>

                  <div class="form-group">
                       
                       <div class="col-lg-12 col-sm-12">
                        <span class="label label-info">{{ $in_fo-> created_at->format('j F Y , h:i A') }}</span>
                        
       <div class="col-lg-12 bg-primary " style="margin-top: 10px;margin-bottom: 10px">
                        
       <div class="col-lg-3 "> Name : {{isset($user_info)?$user_info->name:''}} </div> 
        

      <div class="col-lg-2"> Gender  : {{isset($user_info)?$user_info->gender:''}} </div> 

      <div class="col-lg-2"> Age  : {{$user_info->birth->age}} years </div> 

      <div class="col-lg-2"> Blood Group :  {{isset($user_info)?$user_info->blood_grp:''}} </div> 

      <div class="col-lg-3"> Contact: {{isset($user_info)?$user_info->phone:''}}</div> 

       
                       
 </div>
                          <h5> <span class="label label-success" style="margin-right:10px"> Question </span> :: <span> {{$in_fo->question}} </span>?</h5>

                       </div>


                       <div class="col-sm-12">
                          @if($in_fo->replay==!null)
                          <h5  ><span class="label label-success" style="margin-right:10px"> Answer  </span> ::   {!! $in_fo->replay  !!}  </h5><hr>
                          
                          <h5>
                           @if($in_fo->docs_file)
                <h5> <span class="label label-success"> Sugestion file  </span> ::
                <a href="{{asset('uploads/documents/Consultant/'.$in_fo->docs_file)}}" class="label label-primary"> {{ $in_fo-> docs_file }}</a>
                </h5><hr>
                @endif
              </h5> 
                          @else
                          
                         <h5 ><span class="label label-success"> Answer :: </span> </h5>

                           <form class="form-horizontal"  action="{{ route('send-replay',$in_fo->id) }}" method="POST" enctype="multipart/form-data"  >
                            @csrf
                           <div class="form-group">
                              <label class="col-md-2 control-label"></label>
                              <div class="col-sm-8">
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
                   </div>
                    <!-- End form group -->
                   @endforeach



               </div>
                  <!-- card-body -->
           </div> 
           <hr> <!-- panel-body -->
           {{$questionList->links()}}
                                      


                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->



 </div> <!-- End container -->

</div> <!--End content -->
</div>





@endsection()

