<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <main>
            <h1>Broker lists</h1>
            <div class="broker-list-container">
                <x-broker-list title="Top 3 brokers in 2020" :brokers="$brokers" />
                <x-broker-list title="All stock brokers" :brokers="$brokers" />
                <x-broker-list title="Brokers with no inactivity fees" :brokers="$brokers" />
            </div>
        </main>
    </body>
</html>
