@extends("layout.index")
@section("content")

<table class="w-full table-auto">
        <thead class="font-bold">
            <tr>
                <td class="px-4 py-2"><a href="?sort=delivery_address&order={{ $orders }}">Tarne address</a></td>
                <td class="px-4 py-2 w-32"><a href="?sort=order_date&order={{ $orders }}">Tellimuse kuupäev</a></td>
                <td class="px-4 py-2 w-32"><a href="?sort=status&order={{ $orders }}">Staatus</a></td>
                <td class="px-4 py-2 w-32"><a href="?sort=client_id&order={{ $orders }}">Kliendi Id</a></td>
                <td class="px-4 py-2 w-32"><a href="?sort=book_id&order={{ $orders }}">Raamatu id</a></td>
            </tr>
        </thead>
        <tbody class="text-sm">
            @foreach($orders ?? '' as $book)
            <tr>
                <td class="border rounded px-4 py-2"><a href="/books/{{ $book->id }}">{{ $book->title }}</a></td>
                <td class="border rounded px-4 py-2">{{ $book->delivery_address }}</td>
                <td class="border rounded px-4 py-2">{{ $book->pages }}</td>
                <td class="border rounded px-4 py-2">{{ $book->price }}</td>
                <td class="border rounded px-4 py-2">{{ $book->book_id }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>



@endsection