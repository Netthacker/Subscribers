<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inscritos</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <style>
            body {
                margin: 60px;
            }
            h1 {
                color: #333;
            }
            form {
                margin-top: 20px;
            }
            label {
                margin-bottom: 5px;
                display: flex;
            }
            .input_case{
                padding: 8px;
                width: 30%;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                transition: border-color 0.3s;
            }
            .input_case:focus{
                outline: none;
                border: 2px solid #3490DC;
            }
            .col{
                display: flex;
                flex-direction: column;
                align-items: left;
            }
            .row{
                display: flex;
                flex-direction: row;
                align-items: center;
            }
            .input_checkbox{
                display: relative;
                margin-left: 5px;
                height: 20px;
                width: 20px;
            }
            button {
                background-color: #3490dc;
                color: #fff;
                border: none;
                padding: 8px 16px;
                cursor: pointer;
            }
            button:hover {
                background-color: #2779bd;
            }
        </style>


    </head>
    <body>
        <h1>Criar Inscrito</h1>

        <form action="{{ route('subscribers.store') }}" method="POST">
            @csrf
            <label for="nome" >Nome:</label>
            <input type="text" name="nome" required class="input_case">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" required class="input_case">
            <br>
            <div class="col">
                <div class="row">
                    <label for="subscribed">Inscrever-se:</label>
                    <input class="input_checkbox" type="checkbox" name="subscribed">
                </div>
            <div>
            <br>
            <button type="submit">Criar</button>
        </form>
    </body>
</html>


