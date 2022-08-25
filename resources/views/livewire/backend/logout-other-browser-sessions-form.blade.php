<div>
    @foreach($session as $session)
        <div class="border p-3 mb-3"><small>{{$session->user_agent}}</small></div>
    @endforeach

</div>
