<?php

namespace Stratedge\PassportObscureClients\Traits\Http\Controllers\ClientController;

trait StoresWithId
{
    /**
     * Store a new client.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validation->make($request->all(), [
            'name' => 'required|max:255',
            'redirect' => 'required|url',
        ])->validate();

        return $this->clients->create(
            str_random(20),
            $request->user()->id,
            $request->name,
            $request->redirect
        )->makeVisible('secret');
    }
}
