@extends ('layout')

@section('content')

    <ul>
    @foreach ($ads as $ad)

        <li>{{$ad->title}}</li>
    @endforeach
    </ul>
@endsection