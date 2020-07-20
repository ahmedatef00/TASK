
<div class="card bg-light mb-3" style="width: 18rem;">
    <img class="card-img-top"src={{asset("images/".$post->img)}}  alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->read_more}}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{$post->short_brief}}</li>
      <li class="list-group-item">{{$post->created_at}}</li>
    </ul>
    <div class="card-body">
      <a  href="{{route('show_post' ,['id'=> $post->id])}}" class="card-link">readmore</a>
    </div>
  </div>