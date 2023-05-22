_<?php

    namespace App\Http\Controllers;

    use App\Models\Pelukis;
    use App\Http\Requests\StorePelukisRequest;
    use App\Http\Requests\UpdatePelukisRequest;

    class PelukisController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \App\Http\Requests\StorePelukisRequest  $request
         * @return \Illuminate\Http\Response
         */
        public function store(StorePelukisRequest $request)
        {
            //
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Pelukis  $pelukis
         * @return \Illuminate\Http\Response
         */
        public function show(Pelukis $pelukis)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Pelukis  $pelukis
         * @return \Illuminate\Http\Response
         */
        public function edit(Pelukis $pelukis)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \App\Http\Requests\UpdatePelukisRequest  $request
         * @param  \App\Models\Pelukis  $pelukis
         * @return \Illuminate\Http\Response
         */
        public function update(UpdatePelukisRequest $request, Pelukis $pelukis)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Pelukis  $pelukis
         * @return \Illuminate\Http\Response
         */
        public function destroy(Pelukis $pelukis)
        {
            //
        }
    }
