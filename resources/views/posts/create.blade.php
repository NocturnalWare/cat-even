<form action="{{route('posts.create')}}" enctype="multipart/form-data" method="post">
	<input placeholder="Post Title"><br><br>
	<div class="row">
		<button class="btn btn-success col-sm-3"><i class="fa fa-plus"></i> Add picture</button>
	</div>

	<div class="row">
		<button class="btn btn-success col-sm-3"><i class="fa fa-plus"></i> Add Text</button>
	</div>

	<div class="row">
		<button class="btn btn-success col-sm-3"><i class="fa fa-plus"></i> Add Link</button>
	</div>

	<br>
	<button type="submit" class="btn btn-primary">New Post</button>
</form>