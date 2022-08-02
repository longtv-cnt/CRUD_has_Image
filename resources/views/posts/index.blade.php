<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
     <a href="{{ route('posts.create') }}"><button class="btn btn-success">
       Thêm mới</button></a>
<table class="table table-inverse">
    <thead>
        <tr>
            <th>ID</th>
            <th>Author</th>
            <th>Title</th>
            <th>Content</th>
            <th class="text-center">Cover</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Action

            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->author}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td  class="img"><img src="{{'uploads/'.$post->cover}}"  /></td>
            <div style="width:30%;text-align:left">
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
            </div>
            <td>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Sửa</a>

                <a href="{{ route('posts.destroy',['id'=>$post->id]) }}" class="btn btn-danger">Xóa</a>
                {{-- <form action="{{ route('posts.destroy',['id'=>$post->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Xóa</button> --}}
            </td>

        </tr>
        @endforeach
    </tbody>

</table>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
