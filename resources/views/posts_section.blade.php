
    @foreach($posts as $post)
        <div>
            <a href="{{route('post.show', $post->id)}}" ><h2 class="mb-3">{{$post->title}}</h2></a>
            <p>{{$post->getDate()}}</p>
            <p>
                <a href="{{route('post.show', $post->id)}}"> <img src="{{$post->getImage()}}" alt="" class="img-fluid"></a>

            </p>
            <p class="short_description">{!! $post->getShortDescription() !!}</p>
            <div class="d-flex align-items-center mt-4 meta">
                <p class="mb-0"><a href="{{route('post.show', $post->id)}}" class="btn btn-secondary">Переглянути<span
                            class="ion-ios-arrow-round-forward"></span></a></p>
                <!--<p class="ml-auto mb-0">
                    <a href="#" class="mr-2">Admin</a>-->
                <!--</p>-->
            </div>
        </div>
    @endforeach
