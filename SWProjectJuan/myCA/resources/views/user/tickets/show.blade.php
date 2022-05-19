@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Ticket: {{$ticket->title}}</div>
                <div class="card-body">
                    <table id="table-tickets" class="table table-hover">
                    <tbody>
                  <tr>
                    <td>Title</td>
                    <td>{{ $ticket->title }}</td>
                  </tr>
                  <tr>
                    <td>Description</td>
                    <td>{{ $ticket->description }}</td>
                  </tr>
                  <tr>
                    <td>Location</td>
                    <td>{{ $ticket->location }}</td>
                  </tr>
                  <tr>
                    <td>Start Date</td>
                    <td>{{ $ticket->start_date }}</td>
                  </tr>
                </tbody>
                    </table>
                    <a href="{{route('user.tickets.index')}}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
