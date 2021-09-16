@extends('frontend.layout')
@section('title','Anasayfa')
@section('content')

    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">
            <small>En Yeni Bloglar</small>
        </h1>
        <!-- Blog Post -->
        @foreach($data['blog'] as $blog)

        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="#">
                            <img class="img-fluid rounded" src="/images/blogs/{{$blog->blog_file}}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="card-title">{{$blog->blog_title}}</h2>
                        <p class="card-text">{!! substr($blog->blog_content,0,140) !!}</p>
                        <a href="{{route('blog.Detail',$blog->blog_slug)}}" class="btn btn-primary">Daha Fazlasını Oku &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
Yayınlanma Zamanı      {{$blog->created_at->format('d-m-Y h:i')}}
                <a href="#"></a>
            </div>
        </div>
        @endforeach






    </div>

@endsection
@section('css')
@endsection
@section('js')
@endsection
