@extends('layout.index')

@section('content')
    @include('components.ReminderList',['reminders' => $reminders])
    <div class = "form-group">
        <center><a href="/addreminder" class = "btn btn-primary">Add New Reminder</a></center>
    </div>
    {{-- @include('components.AddNewReminder') --}}
@endsection
