# Osoby Manager - Laravel

Prosta aplikacja webowa do zarządzania osobami, stworzona w **Laravel** i uruchamiana w **Dockerze**.  
Pozwala na dodawanie, edycję i usuwanie osób oraz zarządzanie powiązanymi danymi: firmy, oddziały i miejscowości.

---

## Funkcjonalności

- Lista osób z następującymi kolumnami:
  - Imię, Nazwisko, Data urodzenia, Wiek, Płeć
  - Firma, Oddział firmy, Miejscowość
- Tworzenie nowej osoby
- Edycja istniejącej osoby
- Usuwanie osoby
- Automatyczne obliczanie wieku na podstawie daty urodzenia
- Automatyczne określanie płci na podstawie imienia (jeśli kończy się na „a” → kobieta, w przeciwnym przypadku → mężczyzna)
- Formularze z dynamicznymi selectami dla firm i oddziałów
- Seedowanie bazy danych przykładowymi rekordami

---

## Technologie

- PHP 8.2  
- Laravel 12  
- MySQL 8  
- Docker & Docker Compose  
- Blade (szablony widoków)

---

## Struktura bazy danych

- `osoby` – informacje o osobach  
- `miejscowosci` – lista miejscowości  
- `firmy` – lista firm  
- `oddzialy_firmy` – oddziały przypisane do firm  

Relacje:  
- Osoba należy do jednej firmy, jednego oddziału i jednej miejscowości  
- Oddział należy do firmy

---

## Instalacja i uruchomienie

1. Sklonuj repozytorium:

```bash
	git clone https://github.com/Nekio21/osoby-manager.git
	cd osoby-manager
```

2.Uruchom Docker Compose:

```bash
	docker-compose up --build
```

3.Otwórz przeglądarkę i przejdź pod adres:

```bash
	http://localhost:8000/osoby
```

## Zakończenie pracy

Po skończeniu korzystania z aplikacji możesz zatrzymać kontenery Docker i zwolnić zasoby:

1. Zatrzymanie kontenerów bez usuwania danych:

```bash
	docker-compose stop
```

2. Ponowne uruchomienie kontenerów:

```bash
	docker-compose start
```

3.Zatrzymanie i usunięcie wszystkich kontenerów, sieci i wolumenów utworzonych przez Docker Compose

```bash
	docker-compose down -v
```