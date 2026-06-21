# GEARIS - Gear Rental Intelligent System

## 🏂 Opis projektu
**GEARIS** to nowoczesna aplikacja webowa stworzona do zarządzania procesem rezerwacji, wypożyczania i zwrotu sprzętu zimowego. System usprawnia obsługę klientów wypożyczalni, pozwalając na szybką rezerwację sprzętu online, a pracownikom ułatwia zarządzanie dostępnymi zasobami, statusami napraw oraz rozliczeniami. 

Projekt został zrealizowany w architekturze klient–serwer, z wykorzystaniem warstwowego podejścia do prezentacji, logiki i zarządzania bazą danych. System ma charakter dydaktyczny (powstał w ramach semestru letniego 2025/2026).

## ✨ Główne funkcje
* **Role użytkowników:** System obsługuje 4 typy kont o różnych uprawnieniach: Klient, Pracownik wypożyczalni, Kierownik wypożyczalni oraz Administrator. Routing zabezpiecza odpowiednie widoki dla przypisanych ról.
* **Katalog i wyszukiwanie sprzętu:** Możliwość filtrowania i sortowania sprzętu (kategoria, rozmiar, dostępność, cena).
* **Zarządzanie rezerwacjami i zwrotami:** Użytkownicy mogą rezerwować sprzęt, a obsługa może zarządzać wydaniami, zwrotami i zgłaszać ewentualne uszkodzenia sprzętu (skierowanie do serwisu).
* **Zarządzanie pracownikami i generowanie raportów:** Kierownik ma dostęp do narzędzi analizy (eksport do PDF/CSV) i zarządzania zespołem (np. `workerAdd`, `workerEdit`).
* **Powiadomienia:** Zautomatyzowane e-maile i SMS-y z potwierdzeniami (np. dzień przed rozpoczęciem i na koniec rezerwacji).
* **Płatności:** Wsparcie dla transakcji online oraz stacjonarnych.

## 🛠 Technologie
* **Backend:** PHP 8.2 wykorzystujący mechanizmy autorskiego frameworka edukacyjnego (App, Config, Router).
* **Baza danych:** MySQL 8.0 utrzymywana w chmurze poprzez **Azure Database for MySQL Flexible Server**. Do komunikacji z bazą używana jest biblioteka **Medoo**.
* **Frontend:** Responsywny interfejs zbudowany z użyciem szablonów **Smarty**. Aplikacja obsługuje bezpieczne połączenie protokołem HTTPS.
* **Testowanie:** PHPUnit (^10.5).
* **Infrastruktura i wdrożenie (CI/CD):** Aplikacja działa w kontenerach **Docker**. Całość jest wdrożona na środowisku **Microsoft Azure App Service** i publikowana automatycznie dzięki **GitHub Actions**.

## 🚀 Instalacja i uruchomienie (Środowisko lokalne)

Projekt wykorzystuje `docker-compose`, co sprawia, że proces uruchomienia na lokalnej maszynie jest niezwykle prosty i nie wymaga konfiguracji PHP czy Apache ręcznie na hoście.

**Sklonuj repozytorium:**

   git clone [https://github.com/Mathiasewe/ASmat.git](https://github.com/Mathiasewe/ASmat.git)
   cd ASmat/gearis

1. Uruchom kontenery Dockera:
W katalogu z plikiem docker-compose.yml uruchom komendę, która zbuduje obraz i postawi bazy:

docker-compose up -d --build

2 Dostęp do aplikacji:

Po zbudowaniu aplikacji serwer webowy nasłuchuje pod zmapowanym portem 8080
Lokalna aplikacja w środowisku developerskim korzysta z połączenia z bazą działającą w Dockerze
Główna konfiguracja połączenia z bazą i adresów aplikacji znajduje się w pliku config.php.

🧪 Testy
plikacja posiada przygotowane środowisko do testów jednostkowych w PHPUnit.
Aby je uruchomić, wykonaj komendę w głównym katalogu:
vendor/bin/phpunit

👥 Zespół projektowy
Mathias Ewe
Artur Ciupek

