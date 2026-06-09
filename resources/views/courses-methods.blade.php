<x-app-layout>
    <div class="py-12">
        <div class="max-w-[1920px] mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900">

                <!-- <H1><?php echo $_SERVER['SERVER_NAME']; ?> - Metodi Iscrizione.</H1> -->

                <h1 class="!text-4xl !font-bold mb-4">
                    {{ strtoupper($_SERVER['SERVER_NAME']) }} - Courses Enrollment Methods.
                </h1>

                <!-- Contenuto Pagina 3 -->
                @include('templates.metodi-iscrizione')


            </div>
        </div>
    </div>
</x-app-layout>