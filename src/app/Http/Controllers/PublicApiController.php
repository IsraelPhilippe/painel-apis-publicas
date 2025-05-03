<?php

namespace App\Http\Controllers;

use App\Models\PublicApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PublicApiController extends Controller
{
    public function index()
    {
        $publicApis = PublicApi::all();

        return view('public_apis.index', compact('publicApis'));
    }

    public function show($id)
    {
        $api = PublicApi::findOrFail($id);

        $api_name = "";
        if ($id == $api->id) {
            $api_name = $api->name;
        }

        switch ($api_name) {
            case "CoinGecko" :
                return self::coinGecko($api);
        }
    }

    public function coinGecko($api)
    {
        $response = Http::get($api->url);

        $data = $response->json();
        if (!$data) {
            return redirect()->route('public-apis.index')->with('error', 'Não foi possível obter dados da API');
        }

        $coinData = [
            'name' => $data['name'] ?? 'N/A',
            'symbol' => $data['symbol'] ?? 'N/A',
            'price' => $data['market_data']['current_price']['brl'] ?? 'N/A',
            'volume' => $data['market_data']['total_volume']['brl'] ?? 'N/A',
            'market_cap' => $data['market_data']['market_cap']['brl'] ?? 'N/A',
        ];

        return view('public_apis.show', compact('api', 'coinData'));
    }

}
