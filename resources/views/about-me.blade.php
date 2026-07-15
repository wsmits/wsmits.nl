<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wesley Smits – Software Engineer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap">
    @vite(['resources/css/app.css'])
    <style>
        body { font-family: 'Inter', sans-serif; }

        @media print {
            @page {
                margin: 0;
                size: A4;
            }
            html, body {
                width: 210mm;
                height: 297mm;
                font-size: 11px;
            }
            .no-print { display: none !important; }
            .sidebar {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
                color-adjust: exact;
            }
            .page-wrapper {
                box-shadow: none !important;
                margin: 0 !important;
                border-radius: 0 !important;
            }
            .skill-bar-fill {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen py-8 px-4">

    {{-- Print button --}}
    <div class="no-print max-w-5xl mx-auto mb-4 flex justify-end">
        <button onclick="window.print()" class="flex items-center gap-2 bg-slate-700 hover:bg-slate-800 text-white text-sm font-medium px-4 py-2 rounded-lg transition-colors cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
            </svg>
            Afdrukken / Opslaan als PDF
        </button>
    </div>

    {{-- CV Card --}}
    <div class="page-wrapper max-w-5xl mx-auto bg-white rounded-2xl shadow-2xl overflow-hidden flex">

        {{-- Sidebar --}}
        <div class="sidebar w-72 flex-shrink-0 bg-slate-800 text-white flex flex-col">

            {{-- Photo + Name --}}
            <div class="bg-slate-900 px-8 pt-10 pb-8 text-center">
                <img src="/assets/img/wesley.png" alt="Wesley Smits" class="w-32 h-32 rounded-full mx-auto object-cover ring-4 ring-slate-600 mb-5">
                <h1 class="text-2xl font-extrabold tracking-tight">Wesley Smits</h1>
                <p class="text-slate-400 text-sm font-medium uppercase tracking-widest mt-1">Software Engineer</p>
            </div>

            <div class="px-8 py-7 flex flex-col gap-8">

                {{-- Persoonlijke gegevens --}}
                <section>
                    <h2 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4 border-b border-slate-700 pb-2">Persoonlijke gegevens</h2>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-slate-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <a href="mailto:wesley@wsmits.nl" class="text-slate-300 hover:text-white break-all">wesley@wsmits.nl</a>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-slate-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span class="text-slate-300">Den Dungen</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-slate-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.948V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <a href="tel:+31681674474" class="text-slate-300 hover:text-white">06-81674474</a>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-slate-400 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                            <a href="https://wsmits.nl" class="text-slate-300 hover:text-white">wsmits.nl</a>
                        </li>
                    </ul>
                </section>

                {{-- Kennis & Ervaring --}}
                <section>
                    <h2 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4 border-b border-slate-700 pb-2">Kennis & Ervaring</h2>
                    <ul class="space-y-2.5">
                        @foreach([
                            ['label' => 'PHP / Laravel', 'level' => 95],
                            ['label' => 'MySQL', 'level' => 90],
                            ['label' => 'JavaScript', 'level' => 80],
                            ['label' => 'Vue.js', 'level' => 75],
                            ['label' => 'HTML / CSS', 'level' => 90],
                            ['label' => 'Linux (Debian)', 'level' => 75],
                            ['label' => 'SASS (SCSS)', 'level' => 80],
                            ['label' => 'MVC / OOP', 'level' => 90],
                        ] as $skill)
                        <li>
                            <div class="flex justify-between text-xs mb-1">
                                <span class="text-slate-300 font-medium">{{ $skill['label'] }}</span>
                                <span class="text-slate-500">{{ $skill['level'] }}%</span>
                            </div>
                            <div class="h-1.5 bg-slate-700 rounded-full overflow-hidden">
                                <div class="skill-bar-fill h-full bg-blue-500 rounded-full" style="width: {{ $skill['level'] }}%"></div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </section>

                {{-- Talen --}}
                <section>
                    <h2 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4 border-b border-slate-700 pb-2">Talen</h2>
                    <ul class="space-y-2.5">
                        @foreach([
                            ['label' => 'Nederlands', 'level' => 100],
                            ['label' => 'Engels', 'level' => 80],
                            ['label' => 'Duits', 'level' => 40],
                        ] as $lang)
                        <li>
                            <div class="flex justify-between text-xs mb-1">
                                <span class="text-slate-300 font-medium">{{ $lang['label'] }}</span>
                            </div>
                            <div class="h-1.5 bg-slate-700 rounded-full overflow-hidden">
                                <div class="skill-bar-fill h-full bg-emerald-500 rounded-full" style="width: {{ $lang['level'] }}%"></div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </section>

            </div>
        </div>

        {{-- Main content --}}
        <div class="flex-1 px-10 py-10 overflow-auto">

            {{-- Over mij --}}
            <section class="mb-8">
                <h2 class="text-lg font-bold text-slate-800 uppercase tracking-widest mb-3 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-blue-500 inline-block"></span>
                    Over mij
                </h2>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Ik woon samen en ben vader van twee dochters, waar ik graag mijn tijd mee doorbreng.
                    Met veel plezier heb ik ons eigen huis verbouwd en schuur gebouwd; nu vind ik het leuk om ons huis te automatiseren met domotica.
                    In mijn vrije tijd zou ik graag nog eens een eigen dashboard willen maken.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed mt-2">
                    Mijn hobbies zijn: series kijken, escape rooms spelen en met vrienden gamen op de PC.
                    Voor de lokale organisatie van kinderbouwdorp heb ik in WordPress de website gemaakt.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed mt-2">
                    Ik ben een harde werker, loyaal, rustig en ik vind het fijn om met collega's te kunnen sparren over bepaalde technieken of oplossingen om een taak zo goed mogelijk te kunnen volbrengen.
                    Mijn voorkeur gaat uit naar een informele werkomgeving waar alles goed georganiseerd is en waar ik de ruimte kan krijgen om mijn kennis te verbreden en nieuwe technieken te leren.
                </p>
            </section>

            {{-- Opleidingen --}}
            <section class="mb-8">
                <h2 class="text-lg font-bold text-slate-800 uppercase tracking-widest mb-4 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-blue-500 inline-block"></span>
                    Opleidingen
                </h2>
                <div class="space-y-4">
                    @foreach([
                        [
                            'period' => '2007 – 2010',
                            'title' => 'HBO Bachelor of ICT',
                            'institution' => 'Avans Hogeschool, \'s-Hertogenbosch',
                            'description' => 'Kennis opgedaan van o.a. UML, C#, XNA, Java, HTML, CSS, PHP, OOP, OOM.',
                        ],
                        [
                            'period' => '2003 – 2007',
                            'title' => 'MBO ICT-Beheerder',
                            'institution' => 'Koning Willem I College, \'s-Hertogenbosch',
                            'description' => 'Kennis opgedaan van het beheren van Windows servers, onderhouden van pc\'s en het aansturen van een helpdesk (ITIL).',
                        ],
                        [
                            'period' => '1999 – 2003',
                            'title' => 'VMBO-T',
                            'institution' => 'Sint-Janslyceum, \'s-Hertogenbosch',
                            'description' => null,
                        ],
                    ] as $edu)
                    <div class="flex gap-4">
                        <div class="w-24 flex-shrink-0 text-xs font-semibold text-blue-600 pt-0.5">{{ $edu['period'] }}</div>
                        <div class="flex-1 border-l-2 border-slate-200 pl-4">
                            <h3 class="text-sm font-bold text-slate-800">{{ $edu['title'] }}</h3>
                            <p class="text-xs text-slate-500 font-medium uppercase tracking-wide mt-0.5">{{ $edu['institution'] }}</p>
                            @if($edu['description'])
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed">{{ $edu['description'] }}</p>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

            {{-- Relevante werkervaring --}}
            <section class="mb-8">
                <h2 class="text-lg font-bold text-slate-800 uppercase tracking-widest mb-4 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-blue-500 inline-block"></span>
                    Relevante werkervaring
                </h2>
                <div class="space-y-5">
                    @foreach([
                        [
                            'period' => '2019 – heden',
                            'company' => 'On That Ass International B.V., Rosmalen',
                            'role' => 'Backend Programmeur (web)',
                            'description' => 'Onderhouden en verbeteren van een intern ontwikkeld systeem waarin de website en de abonnementen worden beheerd. Het systeem is gemaakt in het Symfony 4 framework. Door middel van console commands worden er 100.000en orders per maand gegenereerd en verwerkt. De applicatie is gehost bij Amazon AWS en de deployment is geautomatiseerd met deployment pipelines in Bitbucket en AWS.',
                        ],
                        [
                            'period' => '2010 – 2019',
                            'company' => 'Intermesh B.V., \'s-Hertogenbosch',
                            'role' => 'Programmeur (web)',
                            'description' => 'In een klein team ontwikkelen en onderhouden van een online CRM applicatie, Group-Office. Ontwikkeld in PHP (intern MVC framework), Javascript (Extjs 3.4), SQL (MySql), HTML en (S)CSS. Group-Office is beschikbaar als Open Source en wordt wereldwijd gebruikt. Draait op VPSsen met Debian OS waarop Apache en MySql (MariaDB) zijn geïnstalleerd.',
                        ],
                        [
                            'period' => '2010',
                            'company' => 'System4, Veghel',
                            'role' => 'Afstudeerstage',
                            'description' => 'Samen met een klasgenoot een CMS systeem ontwikkeld op basis van het Yii PHP framework, bedoeld voor het opzetten van booking websites voor reisbureau\'s.',
                        ],
                        [
                            'period' => '2006',
                            'company' => 'Mapro B.V., \'s-Hertogenbosch',
                            'role' => 'Systeembeheer (stage en vakantiewerk)',
                            'description' => 'Onderhouden van computers (Windows XP) en servers (Windows NT en Windows server 2003) op kantoor en in de productieomgeving.',
                        ],
                    ] as $job)
                    <div class="flex gap-4">
                        <div class="w-24 flex-shrink-0 text-xs font-semibold text-blue-600 pt-0.5">{{ $job['period'] }}</div>
                        <div class="flex-1 border-l-2 border-slate-200 pl-4">
                            <h3 class="text-sm font-bold text-slate-800">{{ $job['company'] }}</h3>
                            <p class="text-xs font-semibold text-blue-500 uppercase tracking-wide mt-0.5">{{ $job['role'] }}</p>
                            <p class="text-xs text-slate-600 mt-1.5 leading-relaxed">{{ $job['description'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

            {{-- Overige werkervaring --}}
            <section>
                <h2 class="text-lg font-bold text-slate-800 uppercase tracking-widest mb-4 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-blue-500 inline-block"></span>
                    Overige werkervaring
                </h2>
                <div class="flex gap-4">
                    <div class="w-24 flex-shrink-0 text-xs font-semibold text-blue-600 pt-0.5">2003 – 2011</div>
                    <div class="flex-1 border-l-2 border-slate-200 pl-4">
                        <h3 class="text-sm font-bold text-slate-800">Jumbo Supermarkt Den Dungen</h3>
                        <p class="text-xs font-semibold text-blue-500 uppercase tracking-wide mt-0.5">Vulploegmedewerker & Vulploegleider</p>
                        <p class="text-xs text-slate-500 mt-0.5">Medewerker 2003–2007 · Leidinggevende 2007–2011</p>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <div class="no-print h-8"></div>
</body>
</html>
