@extends('frontend.layout')
@section('title','Anasayfa')
@section('content')
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">
            {{$blog->blog_title}}
        </h1>
        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="/images/blogs/{{$blog->blog_file}}" alt="">

                <hr>

                <!-- Date/Time -->
                <p>{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')}} Tarihinde yayınlandı.</p>

                <hr>

                <!-- Post Content -->
                <p>
                    {{$blog->blog_content}}
                </p>


            </div>
        </div>
    </div>

@endsection
@section('css')@endsection
@section('js')@endsection

