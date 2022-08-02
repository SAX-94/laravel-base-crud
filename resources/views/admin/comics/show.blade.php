@extends('admin.layouts.index')

@section('mainContent')
    <h1>Show Comics</h1>

    <table border="2px">
        <thead>
            <tr>
                <th>Campo:</th>
                <th>Valore</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comic->toArray() as $key => $value)
                <tr style="text-align: center;">
                    <td><b>{{ $key }}</b></td>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
