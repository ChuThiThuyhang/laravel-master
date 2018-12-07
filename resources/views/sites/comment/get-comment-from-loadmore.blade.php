@foreach($comments as $comment)
    <!-- Left-aligned -->
    <div class="media">
        <div class="media-left">
            <img src="https://www.w3schools.com/bootstrap/img_avatar1.png" class="media-object" style="width:60px">
        </div>
        <div class="media-body">
            <h4 class="media-heading">{{ $comment->user->name }}</h4>
            <p style="margin-top: -10px; font-weight: bold;">{{ $comment->content}}</p>
            <p style="margin-top: -15px"> {{Carbon\Carbon::parse($comment->created_at)->diffForHumans()}} </p>
        </div>
    </div>
@endforeach
