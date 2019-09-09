@include('header')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Articles</h2>
            </div>

@if(Session::has('article_deleted'))
<div class="alert alert-success">
		{{Session::get('article_deleted')}}
</div>
@endif
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                All Articles
                               
                            </h2>
                            <br>
                     	<a href="/articles/create" class="btn btn-lg btn-success btn-block">Create New Article</a>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Created At</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($articles as $article)
                                    <tr>
                                        <th>{{$article->title}}</th>
                                        <td>{{$article->created_at}}</td>
                                        <td>
             <h4><span class="label @if($article->status == 'draft')label-default @else label-success @endif">
             {{$article->status}}</span></h4>

                                        </td>
                                        <td>
                        <a href="/articles/{{$article->id}}" class="btn btn-md btn-primary">Show</a> 

                        <a href="/articles/{{$article->id}}/edit" class="btn btn-warning">Edit</a>

                        <button class="btn btn-md btn-danger"
                             data-toggle="modal" data-target="#article{{$article->id}}">Delete</button> 
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <center>
                            	{{$articles->links()}}	
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     @foreach($articles as $article)
            <div class="modal fade" id="article{{$article->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="smallModalLabel">
                            Delete Article</h4>
                        </div>
                        <div class="modal-body">
                           Are You Sure To Delete Article?
                        </div>
                        <div class="modal-footer">
                        <form method="post" action="/articles/{{$article->id}}">
                        	@method('DELETE')
                        	@csrf
                       <input type="submit" class="btn btn-danger btn-md" value="Delete">
                        </form>
<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
@endforeach

@include('footer')