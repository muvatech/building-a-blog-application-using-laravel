@extends('layouts.master')

@section('title')
    Welcome Laravel Blog Tutorial
@endsection

@section('content')
    <main role="main" class="container"  style="margin-top: 5px">

        <div class="row">

            <div class="col-sm-8 blog-main">

               @foreach($posts as $post)
                    <div class="blog-post">
                        <h2 class="blog-post-title">{{ $post->title }}</h2>
                        <p class="blog-post-meta"><small><i>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by <a href="#">{{ $post->name }}</a></i></small></p>

                        <p>{!! \Illuminate\Support\Str::words($post->description, 30, '...') !!}</p>
                        <blockquote>
                            <p>
                                <a href="{{ route('post.read', ['post_id' => $post->id]) }}" class="btn btn-primary btn-sm">Learn more</a> </p>
                        </blockquote>
                    </div><!-- /.blog-post -->
                @endforeach

                <nav class="blog-pagination">
                    {{ $posts->links() }}
                </nav>

            </div><!-- /.blog-main -->

            <aside class="col-sm-3 ml-sm-auto blog-sidebar">
                <div class="sidebar-module">
                    <h4>Latest Posts</h4>
                    @foreach($archives as $archive)
                        <ol class="list-unstyled">
                            <li><a href="{{ route('post.read', ['post_id' => $archive->id]) }}">{!! \Illuminate\Support\Str::words($archive->title, 6, '...') !!}</a></li>
                        </ol>
                    @endforeach
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->
@endsection