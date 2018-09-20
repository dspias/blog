@extends('main')

@section('title', '| Home')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-4">Welcome to my Blog</h1>
                    <p class="lead">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
                    </p>
                </div>
            </div>
        </div>      {{-- End of header row --}}

        <div class="row">
            <div class="col-md-8" >
                <div class="post">
                    <h3>Post Title</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    </p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>

                <hr class="my-4">

                <div class="post">
                    <h3>Post Title</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    </p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>

                <hr class="my-4">

                <div class="post">
                    <h3>Post Title</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    </p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>

                <hr class="my-4">

                <div class="post">
                    <h3>Post Title</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    </p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>                
                
            </div>

            <div class="col-md-3 offset-md-1">
               <h2> SIDEBAR</h2>
            </div>
        </div> {{-- End of post row --}}
@endsection