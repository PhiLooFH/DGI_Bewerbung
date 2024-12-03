# Aufgabenstellung: Laravel-Projekt mit Wünsche-Übersicht

## Ziel der Aufgabe:
Zeigen Sie, dass Sie eine Laravel-Umgebung einrichten und eine einfache Web-Anwendung mit grundlegender Funktionalität erstellen können. Diese Aufgabe prüft Ihre Fähigkeiten in der Web-Programmierung, einschließlich Backend- und Frontend-Entwicklung sowie Umgang mit Datenbanken.

---

## Teil 1: Einrichtung des Projekts

1. **Richten Sie Laravel auf Ihrem lokalen Entwicklungsgerät ein.**
   - Stellen Sie sicher, dass PHP, Composer und ein Webserver (z. B. Apache oder nginx) korrekt installiert sind.
   - Erstellen Sie ein neues Laravel-Projekt.

2. **Richten Sie eine Verbindung zu einer MariaDB-/MySQL-Datenbank ein.**

3. **Erstellen Sie die Tabelle `wishes` in der Datenbank mit der folgenden Struktur:**
   Die Tabelle repräsentiert Feature-Requests/Feature-Wishes

   ```sql
   CREATE TABLE wishes (
       id INT AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255) NOT NULL,
       description TEXT NOT NULL,
       is_fulfilled BOOLEAN DEFAULT 0,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

5. **Befüllen Sie die Tabelle mit den folgenden Dummy-Daten:**

	```sql
	INSERT INTO wishes (title, description, is_fulfilled, created_at) VALUES
	('Dark Mode', 'Fügen Sie eine Option hinzu, um den Dark Mode für die Website zu aktivieren.', 0, '2023-12-01 10:00:00'),
	('Benachrichtigungssystem', 'Ein System, das Benutzer über neue Inhalte oder Updates informiert.', 1, '2023-11-15 15:30:00'),
	('Live-Chat-Funktion', 'Ein Live-Chat, um die Kundenbetreuung in Echtzeit zu verbessern.', 0, '2023-12-02 18:45:00'),
	('Multi-Sprachen-Support', 'Unterstützung für mehrere Sprachen, einschließlich Deutsch und Englisch.', 0, '2023-10-10 08:20:00'),
	('Feedback-Formular', 'Ein Formular, über das Benutzer ihre Meinungen und Vorschläge senden können.', 1, '2023-09-20 09:00:00');
**Hinweis:** Es ist ein "Nice-to-Have", wenn Sie die Erstellung der Tabelle und die Dummy-Daten über Laravel-Migrationen und Seeder statt über SQL-Statements umsetzen.


## Teil 2: Erstellen der "Wünsche-Übersicht"

Entwickeln Sie eine einfache Seite in Ihrer Laravel-Anwendung, die eine Übersicht über die gespeicherten Wünsche anzeigt.

1.  **Wünsche anzeigen:**
    
    -   Laden Sie die Daten aus der `wishes`-Tabelle und zeigen Sie sie in einer Tabelle an.
    -   Die Tabelle soll folgende Spalten enthalten:
        -   **Titel**
        -   **Beschreibung**
        -   **Erstellt am**
        -   **Status** (Erfüllt/Nicht erfüllt)
        

## Erwartungen an die Umsetzung

-   **Setup:** Laravel-Projekt ist erfolgreich eingerichtet und mit der Datenbank verbunden.
-   **Routing und Controller:** Nutzen Sie Laravel-Routing und einen Controller, um die Daten aus der Datenbank zu laden und an die View zu übergeben.
-   **Code-Qualität:** Der Code ist klar strukturiert, kommentiert und gut lesbar.
-   **Datenbankverbindung:** Sie können entweder SQL-Statements oder Laravel-Migrationen nutzen, um die Tabelle und die Daten zu erstellen.


## Abgabe:

Laden Sie Ihre Projektdateien in diese Repository hoch!


## Viel Erfolg :)
