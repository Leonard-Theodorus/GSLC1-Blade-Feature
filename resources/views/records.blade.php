@extends('layouts.mainlayout')

@section('body')
    <h1>Financial Record Summary</h1>
@endsection

@section('content1')
    @foreach ($records as $record )
        <h2>{{ $record['record_title']}}</h2>
        <h3>Income: {{ $record['income']}}</h3>
        <h3>Expense: {{ $record['expense']}}</h3>
        <h3 class="text-success">
            @if ($record['income'] > $record['expense'])
                Summary: {{$res = $record['income'] - $record['expense']}}
            @endif
        </h3>
        <h3 class="text-danger">
            @if ($record['income'] < $record['expense'])
            Summary: {{$res = $record['expense'] - $record['income']}}
            @endif
        </h3>
    @endforeach
@endsection


