@include('header')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Edit Article : {{$article->title}}</h2>
            </div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('article_updated'))
<div class="alert alert-success">
		{{Session::get('article_updated')}}
</div>
@endif

@if(Session::has('uploaded_success'))
<div class="alert alert-success">
        {{Session::get('uploaded_success')}}
</div>
@endif

@if(Session::has('uploaded_not_success'))
<div class="alert alert-warning">
        {{Session::get('uploaded_not_success')}}
</div>
@endif
              <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                     <div class="body">
            <form method="post" action="/articles/{{$article->id}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                            <div class="row clearfix">
                                <div class="col-md-4">
                                <label>Article Title</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="material-icons">title</i>
                                        </span>
                                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Title" name="title" value="{{$article->title}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                	<label>Status</label>
                            <select class="form-control show-tick" name="status">
								<option selected="true" disabled="disabled">Choose Article Status</option>   

                                <option value="published" 
                    @if($article->status == 'published') selected @endif>

                            Published</option>
                                <option value="draft"
                @if($article->status == 'draft') selected @endif
                                >Draft</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                	<label>Main Image</label>
                               		<input type="file" name="main_image">
                                </div>
                            </div>
                            <div class="row clearfix">
                            	<div class="col-md-12">
                            		<label>Article Body</label>
                            		 <textarea id="ckeditor" name="body">
                            @php echo "$article->body" @endphp</textarea>
                            	</div>
                            </div>
                          <center>  <button type="submit" class="btn btn-success btn-lg waves-effect">
                                    <i class="material-icons">edit</i>
                                    <span>Update Article</span>
                                </button>
                                </center>
                                  </form>      
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                     <div class="body">
            <form method="post" action="/articleImages" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="article_id" value="{{$article->id}}">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                <label>Article Images</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="material-icons">title</i>
                                        </span>
                                        <div class="form-line">
                            <input type="file" class="form-control" name="images[]" multiple>
                                        </div>
                                    </div>
                                </div>
                               
                               
                            </div>
                          <center>  <button type="submit" class="btn btn-success btn-lg waves-effect">
                                    <i class="material-icons">add</i>
                                    <span>Add Images</span>
                                </button>
                                </center>
                                  </form>      
                        </div>
                    </div>
                </div>
            </div>
        
    </section>

@include('footer')