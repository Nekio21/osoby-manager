<table border="1">
    <tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Data urodzenia</th>
        <th>Wiek</th>
        <th>plec</th>

        <th>Firma</th>
        <th>Oddział firmy</th>
        <th>Miejscowość</th>
        <th>Akcje</th>
    </tr>

    @foreach($osoby as $osoba)
        <tr>
            <td>{{ $osoba->imie }}</td>
            <td>{{ $osoba->nazwisko }}</td>
            <td>{{ $osoba->data_urodzenia }}</td>
            <td>{{ $osoba->wiek }}</td>
            <td>{{ $osoba->plec }}</td>
            <td>{{ $osoba->firma->nazwa ?? '-' }}</td>
            <td>{{ $osoba->oddzial->nazwa ?? '-' }}</td>
            <td>{{ $osoba->miejscowosc->nazwa ?? '-' }}</td>
            <td>
                <a href="/osoby/{{ $osoba->id }}/edytuj">Edytuj</a>

                <form action="/osoby/{{ $osoba->id }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Usuń</button>
                </form>
            </td>
        </tr>
    @endforeach


</table>
<a href="/osoby/dodaj">
    Dodaj nowego użytkownika
</a>