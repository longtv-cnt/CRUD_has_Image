
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="">
</head>
<body>
    <h3 class="text-center">Thêm mới bài viết</h3>
<form method="POST" enctype="multipart/form-data" action="{{ route('posts.store') }}">
@csrf
<div class="form-group">
    <label for="author">Tên tác giả</label>
    <input type="text" class="form-control" name="author" id="author">
</div>
<div class="form-group">
    <label for="title">Tên bài viết</label>
    <input type="text" class="form-control" name="title" id="title">
</div>
<div class="form-group">
    <label for="body">Mô tả</label>
    <textarea cols="10" rows="3" name="body" id="body" class="form-control"></textarea>
</div>
<div class="form-group">
    <label for="cover">Ảnh bìa</label>
    <input type="file" class="form-control" name="cover" id="cover"  required>
</div>
<div class="form-group">
    <label for="images">Ảnh bài viết</label>
    <input type="file" class="form-control" name="images[]" id="images"  multiple>
</div>
<button type="submit" class="btn btn-success">Thêm mới</button>
<a href="{{ route('posts.index') }}"> Về trang đầu</a>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
