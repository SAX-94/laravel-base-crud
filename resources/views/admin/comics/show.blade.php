@extends('admin.layouts.index')

@section('mainContent')
    <h1>Show Comics</h1>

    <table class="table table.bordered table-striped-columns" border="2px solid black">
        <thead>
            <tr>
                <th style="text-align: center;">Campo:</th>
                <th style="text-align: center;">Valore</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($comic->toArray() as $key => $value)
                <tr style="text-align: center;">
                    <td><b>{{ $key }}</b></td>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
