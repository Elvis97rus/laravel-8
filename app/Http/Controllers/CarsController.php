<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Rules\Uppercase;

class CarsController extends Controller
{

    public function index()
    {
        //Select * From cars
        $cars = Car::all();
        // in array (not collection)
//        $cars = Car::all()->toArray();
        // in JSON (not collection)
//        $cars = Car::all()->toJson();
//        $cars = json_decode($cars);
        //filter
//        $cars = Car::where('name', '=', 'Audi')->get();
//
//        print_r(Car::sum('founded'));
//        print_r(Car::avg('founded'));
//
        //get some or throw error
        //->findOrFail();
//
        //chunk separate query result on parts by {2}
//        $cars = Car::chunk(2, function ($cars) {
//            foreach ($cars as $car) {
//                print_r($car);
//           }
//        });

        return view('cars.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     *  * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if not valid - throw Exception, else create a car
        // validation values can be arrays insted of piped vals
        // 'name' => ['required'], ['unique:cars'],
        $request->validate([
//            'name' => new Uppercase,
            'name' => 'required|unique:cars',
            'founded' => 'required|integer|min:0|max:2021',
            'description' => 'required',
        ]);

        $car = Car::create([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description'),
        ]);

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        //dd($car);
        //find all related products to single(this) car
        $products = Product::find($id);

        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id)->first();

        return view('cars.edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Car::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'founded' => $request->input('founded'),
                'description' => $request->input('description'),
        ]);

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('/cars');
    }
}
