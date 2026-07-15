<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wesley Smits | Software Engineer</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap">

    @vite(['resources/css/app.css'])

    <style>
        body {
            font-family: Inter, sans-serif;
        }

        @media print {

            @page {
                margin: 0;
                size: A4;
            }

            * {
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }

            body {
                background: white;
                padding: 0;
                font-size: 0.78rem;
                line-height: 1.5;
            }

            .no-print {
                display: none;
            }

            .page {
                box-shadow: none;
                border-radius: 0;
                margin: 0;
                max-width: 100%;
            }

            /* Header */
            .page > div:first-child {
                padding: 1.5rem 1.75rem !important;
            }

            .page > div:first-child .flex.items-center {
                gap: 1.25rem !important;
            }

            .page > div:first-child img {
                width: 5rem !important;
                height: 5rem !important;
            }

            .page > div:first-child h1 {
                font-size: 1.6rem !important;
            }

            .page > div:first-child p.text-xl {
                font-size: 0.85rem !important;
                margin-top: 0.2rem !important;
            }

            .page > div:first-child p.mt-5 {
                margin-top: 0.4rem !important;
                font-size: 0.75rem !important;
                line-height: 1.5 !important;
            }

            .page > div:first-child .flex.flex-wrap.gap-6 {
                margin-top: 0.5rem !important;
                gap: 0.9rem !important;
                font-size: 0.72rem !important;
            }

            /* Sidebar & main padding */
            aside {
                padding: 1.5rem !important;
            }

            main {
                padding: 1.5rem !important;
            }

            /* Sidebar sections */
            aside section {
                margin-top: 1rem !important;
            }

            aside section:first-child {
                margin-top: 0 !important;
            }

            aside h2 {
                margin-bottom: 0.45rem !important;
                font-size: 0.65rem !important;
            }

            /* Badges */
            aside .flex.flex-wrap.gap-2 {
                gap: 0.25rem !important;
            }

            aside .flex.flex-wrap.gap-2 span {
                padding: 0.1rem 0.5rem !important;
                font-size: 0.63rem !important;
            }

            /* Sidebar text */
            aside ul, aside p {
                font-size: 0.75rem !important;
            }

            aside .space-y-2 > li + li {
                margin-top: 0.2rem !important;
            }

            aside .space-y-5 > div + div {
                margin-top: 0.6rem !important;
            }

            /* Main content */
            main h2 {
                font-size: 1rem !important;
                margin-bottom: 0.75rem !important;
            }

            main h3 {
                font-size: 0.88rem !important;
            }

            main h4 {
                font-size: 0.78rem !important;
                margin-bottom: 0.3rem !important;
            }

            main .mb-12 {
                margin-bottom: 1rem !important;
            }

            main p.mt-4 {
                margin-top: 0.35rem !important;
                font-size: 0.75rem !important;
            }

            main .mt-5 {
                margin-top: 0.5rem !important;
            }

            main .mt-8 {
                margin-top: 0.6rem !important;
            }

            /* Werkzaamheden: 2 kolommen */
            main ul.list-disc {
                columns: 2 !important;
                column-gap: 1rem !important;
                font-size: 0.75rem !important;
            }

            main ul.list-disc > li {
                break-inside: avoid !important;
                margin-top: 0.2rem !important;
            }

            /* Project cards: 2-koloms grid */
            main .space-y-4 {
                display: grid !important;
                grid-template-columns: 1fr 1fr !important;
                gap: 0.4rem !important;
            }

            main .space-y-4 > div {
                margin-top: 0 !important;
            }

            main .rounded-lg.border.p-4 {
                padding: 0.45rem 0.65rem !important;
            }

            /* Consistent font size in project cards */
            main .rounded-lg.border .font-semibold {
                font-size: 0.75rem !important;
            }

            main .rounded-lg.border .text-sm {
                font-size: 0.72rem !important;
            }
        }
    </style>
</head>

<body class="bg-slate-100 py-10">

<div class="no-print max-w-5xl mx-auto mb-5 flex justify-end">
    <button
        onclick="window.print()"
        class="rounded-lg bg-slate-800 px-4 py-2 text-white hover:bg-slate-900">
        Print / Opslaan als PDF
    </button>
</div>

<div class="page max-w-5xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden">

    <!-- HEADER -->

    <div class="p-12 border-b border-slate-200">

        <div class="flex items-center gap-8">

            <img
                src="/assets/img/wesley.png"
                class="w-32 h-32 rounded-full object-cover ring-4 ring-slate-200">

            <div class="flex-1">

                <h1 class="text-4xl font-extrabold text-slate-900">
                    Wesley Smits
                </h1>

                <p class="text-xl text-blue-600 font-semibold mt-2">
                    Senior Software Engineer
                </p>

                <p class="mt-5 text-slate-600 leading-relaxed max-w-3xl">

                    Backend software engineer met ruim 15 jaar ervaring in het ontwikkelen van maatwerk webapplicaties.
                    Gespecialiseerd in PHP en Laravel waarbij kwaliteit, onderhoudbaarheid en schaalbaarheid centraal staan.
                    Ik werk graag aan uitdagende projecten, API-koppelingen en software die dagelijks door duizenden gebruikers wordt gebruikt.

                </p>

                <div class="flex flex-wrap gap-6 mt-6 text-sm text-slate-600">

                    <span>📍 Den Dungen</span>

                    <span>📧 wesley@wsmits.nl</span>

                    <span>📞 06-81674474</span>

                    <span>🌍 wsmits.nl</span>

                </div>

            </div>

        </div>

    </div>

    <!-- CONTENT -->

    <div class="grid grid-cols-12">

        <!-- SIDEBAR -->

        <aside class="col-span-4 bg-slate-50 p-10 border-r">

            <section>

                <h2 class="font-bold text-slate-900 uppercase tracking-wider mb-5">
                    Technologieën
                </h2>

                <div class="flex flex-wrap gap-2">

                    @foreach([
                        'PHP',
                        'Laravel',
                        'Symfony',
                        'MySQL',
                        'MariaDB',
                        'Redis',
                        'REST API',
                        'JavaScript',
                        'Vue.js',
                        'Livewire',
                        'HTML5',
                        'CSS3',
                        'Tailwind CSS',
                        'SCSS',
                        'Git',
                        'Docker',
                        'Linux',
                        'AWS',
                        'MVC',
                        'OOP'
                    ] as $tech)

                        <span class="rounded-full bg-blue-50 border border-blue-200 px-3 py-1 text-sm text-blue-700">
                            {{ $tech }}
                        </span>

                    @endforeach

                </div>

            </section>

            <section class="mt-10">

                <h2 class="font-bold text-slate-900 uppercase tracking-wider mb-5">
                    Talen
                </h2>

                <ul class="space-y-2 text-slate-600">

                    <li>Nederlands (moedertaal)</li>

                    <li>Engels (goed)</li>

                    <li>Duits (basis)</li>

                </ul>

            </section>

            <section class="mt-10">

                <h2 class="font-bold text-slate-900 uppercase tracking-wider mb-5">
                    Persoonlijk
                </h2>

                <p class="text-slate-600 leading-relaxed">

                    Vader van twee dochters.
                    In mijn vrije tijd houd ik mij bezig met domotica,
                    home automation, escape rooms en gamen met vrienden.

                </p>

            </section>

            <section class="mt-10">

                <h2 class="font-bold text-slate-900 uppercase tracking-wider mb-5">
                    Opleidingen
                </h2>

                <div class="space-y-5">

                    <div>

                        <div class="font-semibold">
                            HBO Bachelor ICT
                        </div>

                        <div class="text-sm text-slate-500">
                            Avans Hogeschool
                        </div>

                        <div class="text-sm text-slate-500">
                            2007 – 2010
                        </div>

                    </div>

                    <div>

                        <div class="font-semibold">
                            MBO ICT-Beheerder
                        </div>

                        <div class="text-sm text-slate-500">
                            Koning Willem I College
                        </div>

                        <div class="text-sm text-slate-500">
                            2003 – 2007
                        </div>

                    </div>

                </div>

            </section>

        </aside>

        <!-- MAIN -->

        <main class="col-span-8 p-10">

            <h2 class="text-2xl font-bold text-slate-900 mb-8">
                Werkervaring
            </h2>

            <!-- Fruitcake -->

            <div class="mb-12">

                <div class="flex justify-between">

                    <div>

                        <h3 class="text-xl font-bold">
                            Fruitcake B.V.
                        </h3>

                        <div class="text-blue-600 font-semibold">
                            Webdeveloper
                        </div>

                    </div>

                    <div class="text-slate-500">
                        januari 2021 – heden
                    </div>

                </div>

                <p class="mt-4 text-slate-600">

                    Ontwikkelen van maatwerk Laravel-applicaties voor uiteenlopende klanten.
                    Verantwoordelijk voor nieuwe functionaliteiten, API-koppelingen,
                    performance optimalisaties, onderhoud en het ontwikkelen van complete webapplicaties.

                </p>

                <div class="mt-5">

                    <h4 class="font-semibold mb-3">
                        Werkzaamheden
                    </h4>

                    <ul class="list-disc ml-5 space-y-2 text-slate-600">

                        <li>Laravel webapplicaties ontwikkelen</li>

                        <li>REST API's ontwerpen en ontwikkelen</li>

                        <li>Integraties met externe systemen</li>

                        <li>Database ontwerp en optimalisatie</li>

                        <li>Code reviews</li>

                        <li>Performance optimalisaties</li>

                        <li>Onderhoud van bestaande applicaties</li>

                        <li>Meedenken over software architectuur</li>

                    </ul>

                </div>

                <div class="mt-8">

                    <h4 class="font-semibold mb-3">
                        Projectervaring
                    </h4>

                    <div class="space-y-4">

                        <div class="rounded-lg border p-4">

                            <div class="font-semibold">
                                Diverse klantportalen
                            </div>

                            <div class="text-slate-600 text-sm mt-1">

                                Ontwikkeling van Laravel-applicaties waarmee klanten
                                hun gegevens, documenten en processen kunnen beheren.

                            </div>

                        </div>

                        <div class="rounded-lg border p-4">

                            <div class="font-semibold">
                                API Integraties
                            </div>

                            <div class="text-slate-600 text-sm mt-1">

                                Realisatie van koppelingen tussen Laravel-applicaties
                                en externe diensten.

                            </div>

                        </div>

                        <div class="rounded-lg border p-4">

                            <div class="font-semibold">
                                Maatwerk bedrijfsapplicaties
                            </div>

                            <div class="text-slate-600 text-sm mt-1">

                                Ontwikkeling van interne systemen voor automatisering
                                van bedrijfsprocessen.

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- OTA -->

            <div class="mb-12">

                <div class="flex justify-between">

                    <div>

                        <h3 class="text-xl font-bold">
                            On That Ass International B.V.
                        </h3>

                        <div class="text-blue-600 font-semibold">
                            Backend Developer
                        </div>

                    </div>

                    <div class="text-slate-500">
                        2019 – januari 2021
                    </div>

                </div>

                <p class="mt-4 text-slate-600">

                    Ontwikkeling van een intern Symfony-platform voor abonnementen,
                    orderverwerking en internationale webshops.
                    Dagelijks verwerken van honderdduizenden orders via geautomatiseerde processen.

                </p>

            </div>

            <!-- Intermesh -->

            <div class="mb-12">

                <div class="flex justify-between">

                    <div>

                        <h3 class="text-xl font-bold">
                            Intermesh B.V.
                        </h3>

                        <div class="text-blue-600 font-semibold">
                            Software Engineer
                        </div>

                    </div>

                    <div class="text-slate-500">
                        2010 – 2019
                    </div>

                </div>

                <p class="mt-4 text-slate-600">

                    Ontwikkeling van het wereldwijd gebruikte CRM-platform Group-Office.
                    Werkzaam aan backend, frontend, databases en Linux servers.

                </p>

            </div>

        </main>

    </div>

</div>

</body>
</html>
