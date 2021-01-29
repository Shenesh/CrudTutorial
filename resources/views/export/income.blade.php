<h1>Income Table Export</h1>
<table>
    <tr><th>Month</th><th>Amount</th></tr>
    @foreach ($data as $item)
        <tr><td>{{ $item->month }}</td><td>{{ $item->amount }}</td></tr>
    @endforeach
</table>