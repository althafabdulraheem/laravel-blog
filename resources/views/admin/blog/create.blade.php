@extends('layouts.adminlayout')
@section('content')
<!-- start: page body -->
<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-3">
	<div class="container-fluid">
		<div class="row g-4">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="card-header"style="background-color:#3fbb7066;">
						<h6 class="card-title mb-0"style="color:white">Create Blog</h6>
						<div class="dropdown morphing scale-left">
							<a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="" data-bs-original-title="Card Full-Screen" aria-label="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
						</div>
					</div>
					<div class="card-body">
						<form  method="post" action="{{url('blog-store')}}" enctype="multipart/form-data">
							@csrf
							    <div class="row">
                    <div class="col-6 mb-3">
                      <div class="form-group">
	                      <label class="control-label" id="title">Title</label><span style="color:#ff0000">*</span>      
                        <input type="text" name="title" id="title" class="form-control" required>          
                      </div>
                    </div>
                    <div class="col-6 mb-3">
                      <div class="form-group">
	                      <label class="control-label" id="img">Image</label><span style="color:#ff0000">*</span>      
                        <input type="file" name="img" id="img" class="form-control" required>          
                      </div>
                    </div>
                    <div class="col-6 mb-3">
                      <div class="form-group">
	                      <label class="control-label" id="img">Description</label><span style="color:#ff0000">*</span>      
                       <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>          
                      </div>
                    </div>
                <div class="row mb-3" align="right">
								<div class="col-12">
									<button  type="submit" class="btn bg-secondary btn-sm text-white" >Submit</button>
									<a class="btn btn-secondary btn-sm text-white" href="{{ url('blog') }}"><i class="fa fa-arrow-left"> Back</i></a>
								</div>
							</div>                  
           </form>
					</div> 
				</div>
			</div> 
		</div>
	</div>

@endsection


