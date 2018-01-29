@extends('layouts.master')

@section('title')
    Welcome Laravel Blog Tutorial
@endsection

@section('content')
    <main role="main" class="container"  style="margin-top: 5px">

        <div class="row">

            <div class="col-sm-8 blog-main">

                <div class="blog-post">
                    <h2 class="blog-post-title">Posts One</h2>
                    <p class="blog-post-meta"><small><i>December 23, 2013 by <a href="#">Jeremy</a></i></small></p>

                    <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                    <blockquote>
                        <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong>
                            ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula
                            ut id elit... <a href="" class="btn btn-primary btn-sm">Learn more</a> </p>
                    </blockquote>
                </div><!-- /.blog-post -->

                <div class="blog-post">
                    <h2 class="blog-post-title">Post Two</h2>
                    <p class="blog-post-meta"><small><i>December 14, 2013 by <a href="#">Evans</a></i></small></p>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Aenean lacinia bibendum nulla sed consectetur. Etiam porta
                        euismod. Fusce dapibus... <a href="" class="btn btn-primary btn-sm">Learn more</a> </p>
                </div><!-- /.blog-post -->

                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                </nav>

            </div><!-- /.blog-main -->

            <aside class="col-sm-3 ml-sm-auto blog-sidebar">
                <div class="sidebar-module">
                    <h4>Latest Posts</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">March 2017</a></li>
                        <li><a href="#">February 2017</a></li>
                        <li><a href="#">January 2017</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4>Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->
@endsection