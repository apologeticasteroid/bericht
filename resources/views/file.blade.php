<x-header />
<div class="w-full flex flex-row m-2">
    <a class="p-2 rounded-md hover:text-white hover:bg-blue-600" href="/">
        <x-monoicon-list class="rounded w-8 h-8" />
    </a>
</div>
<div class="w-full max-w-lg m-auto space-y-2">
    <a class="hover:bg-gray-400 rounded-md p-2" href="\folder">
        <span class="text-2xl font-bold ">Central Bank</span>
    </a>
    <div class="font-mono">Report Name</div>
    <input type="text" name="name" class="border-2 rounded-md w-full p-2 font-mono">
    <div class="font-mono">Description</div>
    <textarea name="description" class="border-2 rounded-md w-full p-2 font-mono"></textarea>
    <div class="font-mono">Query</div>
</div>
<div class="w-full m-auto sm:px-1 md:px-4 lg:px-8 xl:px-16 my-2">
    <textarea id="querytext" name="query" cols="30" rows="10" class="border-2 rounded-md w-full p-2 font-mono "></textarea>
</div>

<div class="w-full max-w-lg m-auto space-y-2">
    <div class="flex flex-row gap-3">
        <a class="p-2 rounded-md hover:text-white hover:bg-red-600" href="#">
            <x-monoicon-delete class="rounded w-8 h-8" />
        </a>
        <a class="p-2 rounded-md hover:text-white hover:bg-yellow-600" href="#">
            <x-monoicon-refresh class="rounded w-8 h-8" />
        </a>
        <a class="p-2 rounded-md hover:text-white hover:bg-green-600" href="#">
            <x-monoicon-save class="rounded w-8 h-8" />
        </a>
    </div>
</div>


<input type="file" id="dockpicker" accept=".sql" display="none">

<x-footer />
@vite('resources/js/app.js')
