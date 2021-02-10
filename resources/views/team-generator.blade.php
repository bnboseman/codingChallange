@extends('layouts.default')

@section('title', 'Team Generator')


@section('content')
    <div class="accordian" id="teamAccordian">
        @foreach ($teams as $team)
            <div class="accordion-item" >
                <h2 class="accordion-header" id="header{{$team["id"]}}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#team{{$team["id"]}}" aria-expanded="true" aria-controls="team{{$team["id"]}}">
                    {{$team['name']}}</h2>
                <div id="team{{$team["id"]}}" class="accordion-collapse collapse show" aria-labelledby="header{{$team["id"]}}" data-bs-parent="#teamAccordian">
                    <div class="accordion-body">
                        <h3>Coach:</h3> {{$team['coach']["first_name"]}} {{$team['coach']["last_name"]}}
                        <h3>Players</h3>
                        <table class="table table-striped table-hover">

                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Ranking</th>
                                <th>Skills</th>
                            </tr>
                            @foreach($team['players'] as $player)
                                <tr>
                                    <td>{{$player["first_name"]}} </td>
                                    <td>{{$player["last_name"]}}</td>
                                    <td>{{$player["ranking"]}}</td>
                                    <td>
                                        @if($player["can_play_goalie"])
                                            Goalie
                                        @endif
                                    </td>
                                </tr>

                            @endforeach
                        </table>
                        Average player rank = {{round($team["players"]->avg('ranking'), 2)}}
                    </div>
                    </div>

            </div>
        @endforeach
    </div>

@stop
