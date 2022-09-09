<div class="card col-6">
    <div class="card-header">
        <strong>{{$train->train_code}}</strong> - {{$train->company}}
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <ul>
                <li>
                    <strong>From:</strong> {{$train->departure_station}} - {{$train->departure_time}}
                </li>
                <li>
                    <strong>To:</strong> {{$train->arrival_station}} - {{$train->arrival_time}}
                </li>
            </ul>
            <strong>Carriages: </strong><span>{{$train->number_of_carriages}}</span><br>
            @if ($train->is_in_time == 1 && $train->is_deleted == 0)
                <span>In time</span><br>
            @elseif($train->is_in_time == 0 && $train->is_deleted == 0)
                <strong>Delayed</strong><br>
            @elseif($train->is_deleted == 1 && $train->is_in_time == 0)
                <strong>Cancelled</strong><br>
            @endif
        </blockquote>
    </div>
</div>