@if (count($tasklists) > 0)
<ul class="media-list">
@foreach ($tasklists as $tasklist)
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($tasklist->email, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {{ $tasklist->name }}
            </div>
            <div>
                <p>{!! link_to_route('tasklists.show', 'View task', ['id' => $tasklist->id]) !!}</p>
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $tasklists->render() !!}
@endif