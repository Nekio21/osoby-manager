<h2>Edytuj osobę</h2>

<form action="/osoby/{{ $osoba->id }}" method="POST">
    @csrf
    @method('PUT')

    @if ($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <label>Imię:</label>
    <input type="text" name="imie" value="{{ $osoba->imie }}"><br>

    <label>Nazwisko:</label>
    <input type="text" name="nazwisko" value="{{ $osoba->nazwisko }}"><br>

    <label>Data urodzenia:</label>
    <input type="date" name="data_urodzenia" value="{{ $osoba->data_urodzenia }}"><br>

    <label>Miejscowość:</label>
    <select name="miejscowosc_id" required>
        <option value="">Wybierz miejscowość</option>
        @foreach($miejscowosci as $m)
            <option value="{{ $m->id }}" {{ isset($osoba) && $osoba->miejscowosc_id == $m->id ? 'selected' : '' }}>
                {{ $m->nazwa }}
            </option>
        @endforeach
    </select>

    <label>Firma:</label>
    <select name="firma_id" id="firma-select" required>
        <option value="">Wybierz firmę</option>
        @foreach($firmy as $firma)
            <option value="{{ $firma->id }}" {{ $osoba->firma_id == $firma->id ? 'selected' : '' }}>
                {{ $firma->nazwa }}
            </option>
        @endforeach
    </select>

    <label>Oddział firmy:</label>
    <select name="oddzial_firmy_id" id="oddzial-select" required>
        <option value="">Wybierz oddział</option>
        @foreach($firmy as $firma)
            @foreach($firma->oddzialy as $oddzial)
                <option value="{{ $oddzial->id }}" data-firma="{{ $firma->id }}" {{ $osoba->oddzial_firmy_id == $oddzial->id ? 'selected' : '' }}>
                    {{ $oddzial->nazwa }}
                </option>
            @endforeach
        @endforeach
    </select>



    <button type="submit">Zapisz</button>
    <a href="/osoby">Anuluj</a>
</form>

<script>
    const firmaSelect = document.getElementById('firma-select');
    const oddzialSelect = document.getElementById('oddzial-select');
    const allOptions = Array.from(oddzialSelect.options);

    function filterOddzialy() {
        const firmaId = firmaSelect.value;
        oddzialSelect.innerHTML = '<option value="">Wybierz oddział</option>';
        allOptions.forEach(option => {
            if (option.dataset.firma === firmaId) {
                oddzialSelect.appendChild(option);
            }
        });
    }
    firmaSelect.addEventListener('change', filterOddzialy);
    filterOddzialy();
</script>