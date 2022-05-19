@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tickets</div>
                <div class="card-body">
                    @if(count($tickets)=== 0)
                        <p>there are no tickets</p>
                    @else
                    <table id="table-tickets" class="table table-hover">
                        <thead>
                            <th>Title</th>
                            <th>Desciption</th>
                            <th>Location</th>
                            <th>Start Date</th>

                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket)
                                <tr data-id="{{ $ticket->id}}">
                                <td>{{$ticket->title}}</td>
                                <td>{{$ticket->description}}</td>
                                <td>{{$ticket->location}}</td>
                                <td>{{$ticket->start_date}}</td>


                                <td>
                                    <a href="{{route('user.tickets.show',$ticket->id)}}" class="btn btn-primary">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
