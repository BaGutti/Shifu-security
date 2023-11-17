@extends('template')
@section('content')
<header id="header" class="z-20">
    <div>
        <p class="mb-2 text-sm leading-6 font-semibold text-indigo-500 dark:text-indigo-400">¡Hola!🖐</p>
        <div class="flex items-center">
            <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">¡Bienvenido a Shifu!</h1>
        </div>
    </div>
    <p class="mt-2 text-lg text-slate-700 dark:text-slate-400">¡La herramienta que te enseña a defenderte!</p>
</header>
<div class="z-20 prose prose-slate mt-8 dark:prose-dark">
    <img class="max-w-full mb-10 h-auto bg-white dark:bg-gray-900" src="{!! asset('img/logoShifu-full-bg.png') !!}" alt="Shifu-logo full">    
    <ul class="grid gap-6 w-full md:grid-cols-2">
        <li>
            <input type="radio" id="hosting-small" name="hosting" value="hosting-small" class="hidden peer" required>
            <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-700 bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-800">                           
                <div class="block">
                    <div class="w-full text-2xl font-semibold"> <strong>¿Para qué sirve esta herramienta?</strong></div>
                    <div class="w-full">La herramienta web Shifu está diseñada con el fin de entrenar a las personas para que, en un futuro puedan evitar ataques de ingeniería social. Esto se realizará por medio de un exámen para identificar casos de ataque.</div>
                </div>                
            </label>
        </li>
        <li>
            <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
            <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-700 bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-800">                           
                <div class="block">
                    <div class="w-full text-2xl font-semibold"> <strong>¿Cúal es la meta de este proyecto?</strong></div>
                    <div class="w-full">El proyecto <strong>"Mente segura. Una estrategia para evitar ataques de ingeniería social."</strong> busca concientizar a la población de que existen atacantes informáticos, como operan y como hacerle frente ante estos posibles ataques.</div>
                </div>                
            </label>
        </li>
        <li>
            <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
            <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-700 bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-800">                           
                <div class="block">
                    <div class="w-full text-2xl font-semibold"> <strong>¿Por qué nació esta herramienta?</strong></div>
                    <div class="w-full">Debido a la pandemia sanitaria de 2020, muchas familias vieron la necesidad de unirse al mundo digital, pero debido a la falta de experiencia de estas familias en el internet.</div>
                </div>                
            </label>
        </li>
    </ul>
    <header id="header" class="z-20">
        <div class="mt-10">
            <p class="mb-2 text-sm leading-6 font-semibold text-indigo-500 dark:text-indigo-400">¡Empieza ahora!</p>
            <div class="flex items-center">
                <h1 class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">¿Quieres empezar a defenderte?</h1>
            </div>
        </div>
        <p class="mt-2 text-lg text-slate-700 dark:text-slate-400">Haz click en el botón y empieza a conocer sobre ataques infortaticos</p>
    </header>
    <div class="flex flex-col items-center">
        <button type="button" class="text-white mt-10 bg-gradient-to-br from-indigo-700 to-blue-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:focus:ring-indigo-700 font-medium rounded-lg text-2xl px-5 py-2.5 text-center mb-2">¡Haz el test!😊</button>
    </div>
</div>  
@endsection