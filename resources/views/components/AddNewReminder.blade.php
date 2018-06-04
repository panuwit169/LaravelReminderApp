<form method = "post" action = "/reminder/new">
    <h2>New Reminder</h2>
    <div class = "form-group">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Topic</label>
        <div class="col-sm-10">
            <input type="text" name="topic" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea name="description" rows="8" cols="80" class = "form-control"></textarea>
        </div>
      </div>
    </div>

    {{-- <div class = "form-group">
      <label>Type : </label>
      <select name = "type" class = "form-control">
        @foreach ($types as $type)
          <<option value="{{$type->id}}">{{$type->typename}}</option>
        @endforeach
      </select>
    </div> --}}

    <div class = "form-group">
      {{csrf_field()}}
      <center><a href={{url()->previous()}} class = "btn btn-primary" >Back</a> <input class = "btn btn-primary" type="submit" value="Create New Reminder"></center>
    </div>
</form>
