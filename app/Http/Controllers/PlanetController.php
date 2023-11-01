<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    //indexページ
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', ['planets' => $planets]);
    }

    //createページ
    public function create()
    {
        return view('planets.create');
    }

    //storeページ
    public function store(Request $request)
    {
        //インスタンスの作成
        $planet = new Planet;

        // 値の用意
        $planet->name = $request->name;
        $planet->name_en = $request->name_en;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        //インスタンスに値を設定して保存
        $planet->save();

        //登録したらindexに戻る
        return redirect(route("planets.index"));
    }

    //showページ
    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', ['planet' => $planet]);
    }


}
