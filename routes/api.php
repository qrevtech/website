<?php

Route::post('/push', function (\App\Http\Requests\PushRequest $pushRequest) {
    event(new \App\Events\Push($pushRequest->input('session'), $pushRequest->input('payload')));
    return response('Accepted', 202);
});
