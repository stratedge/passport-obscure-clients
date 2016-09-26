<?php

namespace Stratedge\PassportObscureClients\Traits\ClientRepository;

trait CreatesWithId
{
    /**
     * Store a new client.
     *
     * @param  string  $clientId
     * @param  int  $userId
     * @param  string  $name
     * @param  string  $redirect
     * @param  bool  $personalAccess
     * @param  bool  $password
     * @return Client
     */
    public function create($clientId, $userId, $name, $redirect, $personalAccess = false, $password = false)
    {
        $client = (new Client)->forceFill([
            'id' => $clientId,
            'user_id' => $userId,
            'name' => $name,
            'secret' => str_random(40),
            'redirect' => $redirect,
            'personal_access_client' => $personalAccess,
            'password_client' => $password,
            'revoked' => false,
        ]);

        $client->save();

        return $client;
    }

    /**
     * Store a new personal access token client.
     *
     * @param  string  $clientId
     * @param  int  $userId
     * @param  string  $name
     * @param  string  $redirect
     * @return Client
     */
    public function createPersonalAccessClient($clientId, $userId, $name, $redirect)
    {
        return $this->create($clientId, $userId, $name, $redirect, true);
    }

    /**
     * Store a new password grant client.
     *
     * @param  string  $clientId
     * @param  int  $userId
     * @param  string  $name
     * @param  string  $redirect
     * @return Client
     */
    public function createPasswordGrantClient($clientId, $userId, $name, $redirect)
    {
        return $this->create($clientId, $userId, $name, $redirect, false, true);
    }
}
