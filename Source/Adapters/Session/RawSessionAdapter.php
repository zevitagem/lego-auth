<?php

namespace App\Libraries\Annacode\Adapters\Session;

class RawSessionAdapter
{

    public function configureSession(array $data)
    {
        $_SESSION['current_auth']                      = $data['session_identifier'];
        $_SESSION['is_logged']                         = $data['is_logged'];
        $_SESSION['auth'][$data['session_identifier']] = [
            'token' => $data['token'],
            'expire_at' => $data['expire_at'],
            'own_url' => $data['own_url'],
            'user' => $data['user'],
            'created_at' => $data['created_at']
        ];
    }

    public function changeSessionByIdentifier(array $data)
    {
        $_SESSION['current_auth'] = $data['session_identifier'];
    }

    public function readSessionValue($key)
    {
        return $_SESSION[$key] ?? null;
    }
}