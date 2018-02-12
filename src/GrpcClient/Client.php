<?php

namespace GrpcClient;

use Grpc\ChannelCredentials;
use Ping;

class Client
{
    public function Ping()
    {
        $client = new Ping\PingClient('localhost:19003', [
            'credentials' => ChannelCredentials::createInsecure(),
        ]);
        $request = new Ping\HelloReqest();
        $request->setToMessage("hogeeeeeeeeeeeeee");

        list($reply, $status) = $client->Hello($request)->wait();

        return [$reply, $status];
    }

}