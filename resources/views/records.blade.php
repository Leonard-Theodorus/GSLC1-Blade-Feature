@extends('layouts.mainlayout')

@section('body')
    <h1 class="text-white">Financial Record Summary</h1>
@endsection

@section('content1')

    @foreach ($records as $record )
        <div class="border border-success rounded mt-3">
            <div class="table-responsive-md">
                <table class="table  table-primary table-bordered border-primary mt-2">
                    <thead>
                        <tr>
                            <th scope="col">Nama Record</th>
                            <th scope="col">Income</th>
                            <th scope="col">Expense</th>
                            <th scope="col">Summary</th>
                        </tr>
                    </thead>


                    <tbody class="mt-2">

                        <div class="row row-cols-4">
                            <tr>
                                <th class="col-3">
                                    <div class="col">
                                        <h2>{{ $record['record_title']}}</h2>
                                    </div>

                                </th>
                                <th class="col-3">
                                    <div class="col-4">
                                        <h3>{{ $record['income']}}</h3>
                                    </div>

                                </th>
                                <th class="col-3">
                                    <div class="col-4">
                                        <h3>{{ $record['expense']}}</h3>
                                    </div>

                                </th>
                                <th class="col-4">
                                    <div class="col-4">
                                        <h3 class="text-success">
                                            @if ($record['income'] > $record['expense'])
                                                {{$res = $record['income'] - $record['expense']}}
                                            @endif
                                        </h3>
                                        <h3 class="text-danger">
                                            @if ($record['income'] < $record['expense'])
                                            {{$res = $record['expense'] - $record['income']}}
                                            @endif
                                        </h3>
                                    </div>

                                </th>

                            </tr>
                        </div>

                    </tbody>
                </table>

            </div>

        </div>
    @endforeach
@endsection


