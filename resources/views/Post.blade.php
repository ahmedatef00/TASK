<div class="col-md-6 mt-6">
    <div class="card card-plain">
        <img class="card-img-top" src={{asset("images/".$post->img)}} alt="post image" height="250px" />

        <div class="card-body">
           
            <h4 class="card-title mb-0">
                <a href="{{route('show_post' ,['id'=> $post->id])}}" class="no-decoration">{{$post->title}}</a>
            </h4>
            <span class="text-secondary d-flex ">{{$post->short_brief}}</span>


          

            <p class="card-text">
              {{$post->read_more}}
            </p>

        </div>

    </div>

</div>
