<div class = 'row'>
    <div class="container">
        @foreach ($reminders as $reminder)
        <div class="card" style="margin:1rem 0">
            <h5 class="card-header">{{$reminder->topic}}</h5>
            <div class="card-body">
                <p class="card-text">{{$reminder->description}}</p>
                <center><a href="/reminder/edit/{{$reminder->id}}" class="btn btn-success">Edit</a></center>
                <form method="post" action = "/reminder/delete">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="id" value="{{$reminder->id}}">
                    <center><input type="submit" class="btn btn-success" value="Finish"></center>
                </form>
                {{-- <div class="card-footer text-muted">
                    {{$reminder->updated_at}}
                </div> --}}
            </div>
        </div>

        @endforeach
    </div>
</div>
