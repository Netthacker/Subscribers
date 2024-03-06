<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inscritos</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </head>

    <style>
        body {
            margin: 60px;
        }
        h1 {
            color: #333;
        }

        .inscricao{
            font-weight: bold;
            color: #2779bd;
            font-size: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        button{
            text-decoration: none;
            background-color: #333;
            color: #fff;
            border: none;
            padding: 8px 20px;
            cursor: pointer;
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 5px;
            border-radius: 8px;
        }
        button:hover {
            background-color: #a51212;
        }

        .a_button{
            text-decoration: none;
            background-color: #333;
            color: #fff;
            border: none;
            padding: 8px 26px;
            cursor: pointer;
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 5px;
            border-radius: 8px;
        }
        .a_button:hover{
            background-color: #2779bd;
        }

    </style>

    <body>
        <main>

            <h1>Inscritos</h1>

            <a href="{{ route('subscribers.create') }}"  class="inscricao">Fazer Inscrição</a>

            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Inscrito</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subscribers as $subscriber)
                        <tr>
                            <td>{{ $subscriber->nome }}</td>
                            <td>{{ $subscriber->email }}</td>
                            <td>{{ $subscriber->subscribed ? 'Sim' : 'Não' }}</td>
                            <td class="td_action">
                                <a href="{{ route('subscribers.edit', $subscriber->id) }}" class="a_button">Edit</a>
                                <form action="{{ route('subscribers.destroy', $subscriber->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>

    </body>
</html>


