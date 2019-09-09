@include('header')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Create New Article</h2>
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
              <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                     <div class="body">
                        	<form method="post" action="/articles" enctype="multipart/form-data">
                        		@csrf
                            <div class="row clearfix">
                                <div class="col-md-4">
                                <label>Article Title</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="material-icons">title</i>
                                        </span>
                                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Title" name="title" value="{{old('title')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                	<label>Status</label>
                               <select class="form-control show-tick" name="status">
								<option selected="true" disabled="disabled">Choose Article Status</option>   

                                       <option value="published">Published</option>
                                       <option value="draft">Draft</option>
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
                            		 <textarea id="ckeditor" name="body">{{old('body')}}
                            </textarea>
                            	</div>
                            </div>
                          <center>  <button type="submit" class="btn btn-success btn-lg waves-effect">
                                    <i class="material-icons">add</i>
                                    <span>Create Article</span>
                                </button>
                                </center>
                                  </form>      
                        </div>
                    </div>
                </div>
            </div>
        
    </section>

@include('footer')