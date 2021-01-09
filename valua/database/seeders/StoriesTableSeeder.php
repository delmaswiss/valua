<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Backlog: Delma | Epic Kosten Sparen (1)

        DB::table('stories')->insert([
            'epics_frmd' => 1,
            'story_wer' => 'Delma',
            'story_was' => 'weniger für unsere Handys, Telefone und das Internet bezahlen (bei gleicher Qualität)',
            'story_warum' => 'um langfristig Kosten zu sparen',
            'definition_of_done' => 'Kosten gesenkt | Gleicher Leistungsumfang (international)',
            'definition_of_ready' => null,
            'kommentar' => null,
            'story_points' => null,
        ]);

        DB::table('stories')->insert([
            'epics_frmd' => 1,
            'story_wer' => 'Delma',
            'story_was' => 'die kostenlosen INTRUM Abfragen in den Delma Fulfiller eingebaut haben gemäss Konzept',
            'story_warum' => 'zukünftig Kosten zu sparen und eine bessere Qualität in der Bonitätsprüfung zu erhalten',
            'definition_of_done' => 'Schätzung von 201created vorhanden bezüglich Kosten',
            'definition_of_ready' => null,
            'kommentar' => null,
            'story_points' => null,
        ]);

        // Backlog: Delma | Gorgias Switch (2)

        DB::table('stories')->insert([
            'epics_frmd' => 2,
            'story_wer' => 'Kunde',
            'story_was' => 'E-Mails erhalten, welche aussehen wie normale E-Mails aussehen im Header',
            'story_warum' => 'nicht zu merken, dass ich mit einem Ticketingtool kommuniziere',
            'definition_of_done' => 'E-Mailserver ist angepasst',
            'definition_of_ready' => null,
            'kommentar' => null,
            'story_points' => null,
        ]);

        DB::table('stories')->insert([
            'epics_frmd' => 2,
            'story_wer' => 'Benutzer',
            'story_was' => 'nur die Tickets sehen, für die ich zuständig bin',
            'story_warum' => 'schneller und effizienter arbeiten zu können',
            'definition_of_done' => 'Rollen definiert',
            'definition_of_ready' => null,
            'kommentar' => null,
            'story_points' => null,
        ]);

        DB::table('stories')->insert([
            'epics_frmd' => 2,
            'story_wer' => 'Manager',
            'story_was' => 'sehen wie lange benötigt wird um ein Ticket zu beantworten / zu schliessen pro Shop / Projekt',
            'story_warum' => 'den Kundenservice zu verbessern',
            'definition_of_done' => 'Zeittracking pro Shop / Projekt',
            'definition_of_ready' => 'Rollenkonzept wurde erstellt',
            'kommentar' => null,
            'story_points' => null,
        ]);

        // Backlog: Natapura | Onlineshop Re-Launch (3)

        DB::table('stories')->insert([
            'epics_frmd' => 3,
            'story_wer' => 'Mitarbeiter',
            'story_was' => 'ein genaues Tracking der Aktivitäten auf der Webseite haben',
            'story_warum' => 'die Besucher & Kunden besser verstehen zu können',
            'definition_of_done' => 'Google Tag Manager installiert & funktionsfähig',
            'definition_of_ready' => null,
            'kommentar' => 'Kann ausgelagert werden an Florian. Benötigt jedoch Aufwand von unserer Seite.',
            'story_points' => null,
        ]);

        DB::table('stories')->insert([
            'epics_frmd' => 3,
            'story_wer' => 'Besucher',
            'story_was' => 'hochwertige und ansprechende Produktbilder vorfinden',
            'story_warum' => 'mein Interesse am Produkt visuell zu steigern',
            'definition_of_done' => 'Fertige Produktbilder für jedes Produkt',
            'definition_of_ready' => 'Idee: Bild eines Öls und als Hoover Effekt direkt sehen wie das Öl abgefüllt wird (siehe CAPIL Produktbild)',
            'kommentar' => null,
            'story_points' => null,
        ]);

        DB::table('stories')->insert([
            'epics_frmd' => 3,
            'story_wer' => 'Besucher',
            'story_was' => 'bei den Bewertungen sehen, ob es sich um einen verifizierten Käufer handelt',
            'story_warum' => 'der Bewertung mehr Vertrauen schenken zu können',
            'definition_of_done' => 'Bei jeder Bewertung steht, ob es sich um einen verifizierten Kauf handelt',
            'definition_of_ready' => null,
            'kommentar' => null,
            'story_points' => null,
        ]);

        // Backlog: Janepure | Onlineshop (6)
        DB::table('stories')->insert([
            'epics_frmd' => 6,
            'story_wer' => 'Besucher',
            'story_was' => 'eine schöne schöne Webseite vorfinden',
            'story_warum' => 'um sofort die Wertigkeit der Produkte zu merken',
            'definition_of_done' => 'Mockup Design umgesetzt',
            'definition_of_ready' => null,
            'kommentar' => 'Kann ausgelagert werden an Designer',
            'story_points' => null,
        ]);

        DB::table('stories')->insert([
            'epics_frmd' => 6,
            'story_wer' => 'Mitarbeiter',
            'story_was' => 'über die Aktivitäten der Besucher auf der Webseite genau Bescheid wissen',
            'story_warum' => 'mögliche Optimierungen zu ermitteln',
            'definition_of_done' => 'Google Analytics implementiert',
            'definition_of_ready' => null,
            'kommentar' => null,
            'story_points' => null,
        ]);

        DB::table('stories')->insert([
            'epics_frmd' => 6,
            'story_wer' => 'Besucher',
            'story_was' => 'jederzeit auf den Warenkorb und den CTA Button Zugriff haben',
            'story_warum' => 'nicht wieder lange scrollen zu müssen um das Produkt zu kaufen',
            'definition_of_done' => 'Sticky CTA Button implementiert',
            'definition_of_ready' => 'Webseite ist technisch fertig',
            'kommentar' => 'StickAPP Applikation verwenden',
            'story_points' => null,
        ]);

        DB::table('stories')->insert([
            'epics_frmd' => 6,
            'story_wer' => 'Manager',
            'story_was' => 'jeden Tag eine Summary der Ausgaben & Einnahmen erhalten per Mail',
            'story_warum' => 'stets einen Überblick über den Erfolg zu haben',
            'definition_of_done' => 'E-Mail wird jeden Tag versendet',
            'definition_of_ready' => null,
            'kommentar' => null,
            'story_points' => null,
        ]);

        // Backlog: Janepure | Produkte (7)
        DB::table('stories')->insert([
            'epics_frmd' => 7,
            'story_wer' => 'Kunde',
            'story_was' => 'ein Produkt kaufen können, welches mein Haarwachstum anregt',
            'story_warum' => 'ein persönliches & wichtiges Problem zu lösen',
            'definition_of_done' => 'Produktmischung definiert',
            'definition_of_ready' => null,
            'kommentar' => null,
            'story_points' => null,
        ]);

        DB::table('stories')->insert([
            'epics_frmd' => 7,
            'story_wer' => 'Kunde',
            'story_was' => 'eine haptisch ansprechende Verpackung in den Händen halten',
            'story_warum' => 'sofort zu merken, wie hochwertig die Marke Janepure ist',
            'definition_of_done' => 'Einzigartige Verpackung definiert',
            'definition_of_ready' => null,
            'kommentar' => null,
            'story_points' => null,
        ]);

        // Backlog: Janepure | Administration (8)

        DB::table('stories')->insert([
            'epics_frmd' => 8,
            'story_wer' => 'Kunde',
            'story_was' => 'innerhalb von 24h eine Rückmeldung auf meine Frage erhalten',
            'story_warum' => 'mich optimal beraten zu fühlen',
            'definition_of_done' => 'SLA definiert auf 24h',
            'definition_of_ready' => null,
            'kommentar' => null,
            'story_points' => null,
        ]);

        DB::table('stories')->insert([
            'epics_frmd' => 8,
            'story_wer' => 'Kunde',
            'story_was' => 'meine Rechnung auf einem Janepure Blattpapier erhalten',
            'story_warum' => 'mein Vertrauen in die Marke zu stärken',
            'definition_of_done' => 'Briefpapier definiert und bestellet',
            'definition_of_ready' => null,
            'kommentar' => null,
            'story_points' => null,
        ]);

        DB::table('stories')->insert([
            'epics_frmd' => 8,
            'story_wer' => 'Kunde',
            'story_was' => 'im Onlineshop sofort sehen wie ich Janepure kontaktieren kann',
            'story_warum' => 'nicht lange suchen zu müssen',
            'definition_of_done' => 'Kontaktmöglichkeiten im Footer implementiert inkl. Hinweis auf Wartezeit',
            'definition_of_ready' => null,
            'kommentar' => null,
            'story_points' => null,
        ]);

        // Backlog: CAPIL | Onlineshop (9)

        DB::table('stories')->insert([
            'epics_frmd' => 9,
            'story_wer' => 'Kunde',
            'story_was' => 'eine schöne Webseite vorfinden',
            'story_warum' => 'sofort begeistert zu sein',
            'definition_of_done' => 'Feldtests durchgeführt mit den Designs',
            'definition_of_ready' => null,
            'kommentar' => 'Auslagerung an Designer',
            'story_points' => null,
        ]);

        DB::table('stories')->insert([
            'epics_frmd' => 9,
            'story_wer' => 'Kunde',
            'story_was' => 'sofort Vertrauen in der Seite haben',
            'story_warum' => 'um keine negativen Gefühle aufkommen zu lassen bei einer Bestellung',
            'definition_of_done' => 'Vertrauensstärkende Massnahmen (Icons, Bilder etc) sind implementiert',
            'definition_of_ready' => null,
            'kommentar' => null,
            'story_points' => null,
        ]);

        DB::table('stories')->insert([
            'epics_frmd' => 9,
            'story_wer' => 'Kunde',
            'story_was' => 'sofort sehen, wer hinter Capil steckt',
            'story_warum' => 'einen persönlichen Bezug herstellen zu können',
            'definition_of_done' => 'Bilder der Gründer sind implementiert in einer über uns Sektion',
            'definition_of_ready' => null,
            'kommentar' => null,
            'story_points' => null,
        ]);

        // Backlog: CAPIL | Onlineshop (10)

        DB::table('stories')->insert([
            'epics_frmd' => 10,
            'story_wer' => 'Kunde',
            'story_was' => 'mein Produkt in einer Extraverpackung erhalten',
            'story_warum' => 'um von der Hochwertigkeit der Marke überzeugt zu werden',
            'definition_of_done' => 'Faltschachteln gestaltet und bestellt',
            'definition_of_ready' => null,
            'kommentar' => 'Auslagerung an Designer',
            'story_points' => null,
        ]);

        // Backlog: CAPIL | Administration (11)
        DB::table('stories')->insert([
            'epics_frmd' => 11,
            'story_wer' => 'Manager',
            'story_was' => 'dass die Rechnungen automatisch erstellt werden',
            'story_warum' => 'Zeit zu sparen und schneller versenden zu können',
            'definition_of_done' => 'Rechnungen werden automatisch generiert für den Download',
            'definition_of_ready' => null,
            'kommentar' => 'Anbindung an 201 Software',
            'story_points' => null,
        ]);

        DB::table('stories')->insert([
            'epics_frmd' => 11,
            'story_wer' => 'Manager',
            'story_was' => 'eine genaue Auflistung der versendeten Pakete erhalten',
            'story_warum' => 'um die Aufteilung der Kosten gerecht bewerkstelligen zu können',
            'definition_of_done' => 'Monatliche Kosten ersichtlich (Post Schweiz)',
            'definition_of_ready' => null,
            'kommentar' => null,
            'story_points' => null,
        ]);


    }
}
