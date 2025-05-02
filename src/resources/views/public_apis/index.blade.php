@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh; text-align: center">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 900px; border-radius: 12px; background-color: #f7fafc;">
            <h1 class="text-center mb-4" style="font-size: 2.5rem; color: #2d3748;">API's Públicas</h1>

            <table class="table">
                <thead>
                    <tr style="background-color: #4a90e2; color: white;">
                        <th style="font-size: 1.1rem;">Nome</th>
                        <th style="font-size: 1.1rem;">Descrição</th>
                        <th style="font-size: 1.1rem;">Categoria</th>
                        <th style="font-size: 1.1rem;">Link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($publicApis as $api)
                        <tr style="background-color: #fff;">
                            <td style="font-weight: 600;"><a href="{{ route('public-apis.show', $api->id) }}">{{ $api->name }}</a></td>
                            <td style="background-color: #f7fafc; font-weight: 600;">{{ $api->description }}</td>
                            <td style="background-color: #f7fafc; font-weight: 600;">{{ $api->category }}</td>
                            <td style="font-weight: 600;"><a href="{{ $api->url }}" target="_blank">Ir para API</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>'
        </div>
    </div>
@endsection
