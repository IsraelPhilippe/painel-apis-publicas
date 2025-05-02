@extends('layouts.app')

@section('content')
    <a href="{{ route('public-apis.index') }}"
       class="mt-4 d-block mx-auto px-4 py-2 shadow-sm text-white text-center"
       style="background-color: #4a90e2; border-radius: 12px; font-weight: 500; font-size: 16px; text-decoration: none; display: inline-block;">
        ← Voltar para lista
    </a>

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh; text-align: center">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 900px; border-radius: 12px; background-color: #f7fafc;">
            <h1 class="text-center mb-4" style="font-size: 2.5rem; color: #2d3748;">{{ $api->name }}</h1>
            <p class="text-center" style="font-size: 1.2rem; color: #4a5568;">{{ $api->description }}</p>
            <p class="text-center" style="font-size: 1.2rem; font-weight: 600; color: #2d3748;">Categoria: <span style="color: #38b2ac;">{{ $api->category }}</span></p>
            <h2 class="mt-4 text-center" style="font-size: 2rem; color: #2d3748;">Detalhes da API</h2>

            <table class="table table-bordered mt-4 mx-auto" style="background-color: #edf2f7; border-radius: 10px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); text-align: center;">

                <thead class="thead-dark">
                    <tr style="background-color: #4a90e2; color: white;">
                        <th style="font-size: 1.1rem;">Campo</th>
                        <th style="font-size: 1.1rem;">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="background-color: #fff;">
                        <td style="font-weight: 600;">Nome</td>
                        <td style="color: #2d3748;">{{ $coinData['name'] }}</td>
                    </tr>
                    <tr style="background-color: #f7fafc;">
                        <td style="font-weight: 600;">Simbolo</td>
                        <td style="color: #2d3748;">{{ $coinData['symbol'] }}</td>
                    </tr>
                    <tr style="background-color: #fff;">
                        <td style="font-weight: 600;">Preço Atual (USD)</td>
                        <td style="color: #38b2ac;">R${{ number_format($coinData['price'], 2) }}</td>
                    </tr>
                    <tr style="background-color: #f7fafc;">
                        <td style="font-weight: 600;">Volume Total (24h)</td>
                        <td style="color: #38b2ac;">R${{ number_format($coinData['volume'], 2) }}</td>
                    </tr>
                    <tr style="background-color: #fff;">
                        <td style="font-weight: 600;">Market Cap</td>
                        <td style="color: #38b2ac;">R${{ number_format($coinData['market_cap'], 2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
