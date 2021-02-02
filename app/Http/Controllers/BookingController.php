<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BookingModel;

use Dontev\Validator;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BookingModel::all();
        return view('home',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create_data");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
          'guestFullName' => 'required|min:3',
          'guestCard'=>'required',
          'guestCard'=>'required',
          'guestRoom'=> 'required',
          'guestFrom'=> 'required',
          'guestTo'=> 'required'
        ]);


        $createBook = new BookingModel();
        $createBook->guest_full_name = $validated['guestFullName'];
        $createBook->guest_credit_card = $validated["guestCard"];
        $createBook->room = $validated["guestRoom"];
        $createBook->from_date = $validated["guestFrom"];
        $createBook->to_date = $validated["guestTo"];
        $createBook->more_details = $request->input("guestDetails");

        $createBook->save();
        return view('succes');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datas = BookingModel::find($id);
        return view('detail', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dettagli = BookingModel::find($id);
        return view('edit', compact('dettagli'));
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
      $validated = $request->validate([
        'guestFullName' => 'required|min:3',
        'guestCard'=>'required',
        'guestCard'=>'required',
        'guestRoom'=> 'required',
        'guestFrom'=> 'required',
        'guestTo'=> 'required'
      ]);


      $update_book = BookingModel::find($id);
      $update_book->guest_full_name = $validated['guestFullName'];
      $update_book->guest_credit_card = $validated["guestCard"];
      $update_book->room = $validated["guestRoom"];
      $update_book->from_date = $validated["guestFrom"];
      $update_book->to_date = $validated["guestTo"];
      $update_book->more_details = $request->input("guestDetails");

      $update_book->save();
      return view('succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
