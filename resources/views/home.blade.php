@extends('layouts/main-layout');

@section('content')
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di partenza</th>
            <th scope="col">Stazione di arrivo</th>
            <th scope="col">Orario di partenza</th>
            <th scope="col">Orario di arrivo</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>

            </tr>
        </thead>
    
        <tbody>
            @foreach ($trains as $singleTrain)     
            <tr class="{{$singleTrain->is_deleted ? 'deleted' : ''}}">
                <th scope="row">{{$singleTrain->id}}</th>
                <td>{{$singleTrain->company_name}}</td>
                <td>{{$singleTrain->station_departure}}</td>
                <td>{{$singleTrain->station_arrival}}</td>
                <td>{{$singleTrain->time_departure}}</td>
                <td>{{$singleTrain->time_arrival}}</td>
                <td>{{$singleTrain->is_time ? 'In orario' : 'In ritardo'}}</td>
                <td>{{$singleTrain->is_deleted}}</td>
            </tr>
        @endforeach
     
    </tbody>
  </table>
@endsection