@include('header')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>View Article : {{$article->title}}</h2>
            </div>

            
@if(Session::has('article_added'))
<div class="alert alert-success">
        {{Session::get('article_added')}}
</div>
@endif
              <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                     <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                <label>Article Title</label>
                                    <div class="input-group input-group-lg">
                                        {{$article->title}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    
                                	<label>Status</label>
                                    <div class="input-group input-group-lg">
                                    {{$article->status}}
                                </div>
                                </div>
                                <div class="col-md-4">
                                	<label>Main Image</label>
                               		<div class="input-group input-group-lg">
                                    <img src="{{Storage::url($article->main_image)}}" style="width: 300px;height: 300px;">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                            	<div class="col-md-12">
                            		<label>Article Body</label>
                            		 <div class="input-group input-group-lg">
                                        @php echo "$article->body" @endphp
                                     </div>
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>

@include('footer')