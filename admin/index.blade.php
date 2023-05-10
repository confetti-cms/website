@php
    $componentStore = new \Confetti\Helpers\ComponentStore('/section');
    $currentContentId = str_replace('/admin', '', request()->uri());
    $contentStore = new \Confetti\Helpers\ContentStore($currentContentId);
    $menuComponents = $componentStore->whereParentKey('/section');
@endphp<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

    <title>Admin</title>

    <link rel="stylesheet" href="/generated/admin/tailwind.output.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100" rel="stylesheet" />

    <script src="/object/admin/assets/js/thema.js" defer></script>
    <script src="/object/admin/assets/js/form.js" defer></script>
    <script src="/object/admin/assets/js/alpine.min.js" defer></script>
</head>

<body class="text-gray-700 dark:text-gray-400">
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen}">
        <!-- Desktop sidebar -->
        <aside class="z-20 flex-shrink-0 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block">
            @include('admin.left_menu', ['contentStore' => $contentStore, 'menuComponents' => $menuComponents, 'currentContentId' => $currentContentId])
        </aside>

        <!-- Mobile sidebar -->
        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-gray bg-opacity-50 sm:items-center sm:justify-center"></div>
        <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden" x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu" @keydown.escape="closeSideMenu">
            @include('admin.left_menu', ['contentStore' => $contentStore, 'menuComponents' => $menuComponents, 'currentContentId' => $currentContentId])
        </aside>

        <div class="flex flex-col flex-1">
            @include('admin.header', ['componentStore' => $componentStore])

            <main class="h-full pb-16 overflow-y-auto" >
                @include('admin.middle', ['componentStore' => $componentStore, 'contentStore' => $contentStore, 'currentContentId' => $currentContentId])
            </main>
        </div>
    </div>
    @stack('script_*')
</body>

</html>
















