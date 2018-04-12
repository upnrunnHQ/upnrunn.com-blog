

<ul class="list-group">
@foreach($posts as $key => $post)
    <li class="list-group-item"> 
        <a href="/post/{{ $post['id'] }}">{{ $post['id'] }}</a> :: {{ $post['date'] }} :: {{ $post['title']['rendered'] }}
    </li>
@endforeach
</ul>

