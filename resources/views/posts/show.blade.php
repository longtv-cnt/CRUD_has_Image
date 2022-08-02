<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="icon"
        href="https://www.planetware.com/wpimages/2020/02/france-in-pictures-beautiful-places-to-photograph-eiffel-tower.jpg"
        type="image/jpg" sizes="16x16">
</head>

<body>
    <h3 class="text-center">Sửa mới bài viết</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p>Ảnh bìa</p>
                <img src="{{ asset('uploads/' . $post->cover) }}" alt="" class="img-fluid">
                <p> Ảnh galary</p>

                <div  style="display:inline;">
                    @foreach ($post->image as $item)
                    <form action="{{ route('images.delete', $item->id) }}" method="get">
                        @csrf


                        <button type="submit" class="btn ">X</button>
                        <img src="{{ asset('images/' . $item->image) }}" alt="" class="img-reponsive" style="width:30%">
                    @endforeach
                </div>
            </div>
            <div class="col-md-9">
                <form method="POST" enctype="multipart/form-data"
                    action="{{ route('posts.update', ['id' => $post->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="author">Tên tác giả</label>
                        <input type="text" class="form-control" name="author" id="author"
                            value="{{ $post->author }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Tên bài viết</label>
                        <input type="text" class="form-control" name="title" id="title"
                            value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <label for="body">Mô tả</label>
                        <textarea cols="10" rows="3" name="body" id="body" class="form-control">{{ $post->body }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="cover">Ảnh bìa</label>
                        <input type="file" class="form-control" name="cover" id="cover" multiple>

                    </div>
                    <button type="submit" class="btn btn-success">Sửa</button>
                    <a href="{{ route('posts.index') }}"> Về trang đầu</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
