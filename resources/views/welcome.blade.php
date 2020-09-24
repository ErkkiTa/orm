<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Library</title>
</head>

<body class="p-12">
    <table class="w-full table-auto">
        <thead class="font-bold">
            <tr>
                <td class="px-4 py-2"><a href="?sort=title&order={{ $order }}">Pealkiri</a></td>
                <td class="px-4 py-2 w-32">Autor</td>
                <td class="px-4 py-2 w-32"><a href="?sort=release_date&order={{ $order }}">Aasta</a></td>
                <td class="px-4 py-2 w-32"><a href="?sort=pages&order={{ $order }}">Lehekülgi</a></td>
                <td class="px-4 py-2 w-32"><a href="?sort=price&order={{ $order }}">Hind</a></td>
                <td class="px-4 py-2 w-32"><a href="?sort=stock_saldo&order={{ $order }}">Laoseis</a></td>
                <td class="px-4 py-2 w-32"><a href="?sort=type&order={{ $order }}">Tüüp</a></td>
            </tr>
        </thead>
        <tbody class="text-sm">
            @foreach($books as $book)
            <tr>
                <td class="border rounded px-4 py-2"><a href="/book/{{ $book->id }}">{{ $book->title }}</a></td>
                <td class="border rounded px-4 py-2"></td>
                <td class="border rounded px-4 py-2">{{ $book->release_date }}</td>
                <td class="border rounded px-4 py-2">{{ $book->pages }}</td>
                <td class="border rounded px-4 py-2">{{ $book->price }}</td>
                <td class="border rounded px-4 py-2">{{ $book->stock_saldo }}</td>
                <td class="border rounded px-4 py-2">{{ $book->type }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $books->withQueryString()->links() }}
    </div>

</body>

</html>
