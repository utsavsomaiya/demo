<?php

it('returns a successful response', function () {
    dump([
        'env' => app()->environment(),
        'db' => config('database.connections.mysql.database'),
        '__env_file' => app()->environmentFile(),
    ]);
});
