<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
</head>
<style>
    .button {
    background-color: #4CAF50; /* Green */
    border: none;
    border-radius: 15px;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    }
    .button1 {
        background-color: white;
        color: black;
        border: 2px solid #0CD3F6;
    }

    .button1:hover {
        background-color: #0CD3F6;
        color: white;
    }

    .button2 {
        background-color: white;
        color: black;
        border: 2px solid #F20909;
    }

    .button2:hover {
        background-color: #F71212;
        color: white;
    }
    table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
<body>
        <h3>Liste des clients</h3>

        @if ($client->count() > 0)
        <table>
            <tr>
              <th>Nom</th>
              <th>CNI</th>
              <th>Ville</th>
              <th>Contact</th>
              <th>Created At</th>
              <th>Actions</th>
            </tr>

            @foreach ($client as $c)
            <tr>
                <td>{{ $c->nom }}</td>
                <td>{{ $c->numero }}</td>
                <td>{{ $c->ville }}</td>
                <td>{{ $c->telephone }}</td>
                <td>{{ $c->created_at }}</td>
                <td><span>
                    <a href="/client/{{$c->id}}"><button class="button button1">Modifier</button></a>
                    <a href="/client_supprimer/{{$c->id}}"><button class="button button2">Supprimer</button></a>
                    </span></td>
              </tr>
            @endforeach
          </table>
        @else

        @endif

    <div>

    </div>

    </body>
</html>
