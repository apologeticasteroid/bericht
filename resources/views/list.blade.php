<x-header />
<div class="w-full max-w-lg m-auto">
    <div class="flex flex-row gap-3 m-2">
        <a href="/folder">
            <x-monoicon-folder-add class="rounded w-10 h-10 p-auto hover:text-white hover:bg-green-600" />
        </a>
        <form action="" method="GET" class=" w-full">
            <input class="border-2 rounded-md w-full p-2 font-mono text-center" placeholder="search" type="text"
                name="" id="">
        </form>

    </div>
</div>
{{-- Section: List of folders and reports possibly filtered by search --}}
<div class="w-full font-mono max-w-2xl m-auto my-5">
    <div class="flex flex-row p-2">
        <a class="hover:bg-gray-400 rounded-md p-2" href="/file/x">
            <div class="text-2xl font-bold ">Central Bank</div>
        </a>
        <a class="p-2 hover:text-white hover:bg-green-600" href="/file">
            <x-monoicon-document-add class="rounded w-8 h-8" />
        </a>
    </div>

    <ul class="m-2">
        <li class="flex flex-row gap-3">
            <a class="hover:bg-gray-400 rounded-md p-2" href="/file/1">
                <div>CUR12_A-Related party balances.</div>
            </a>
            <a class="p-2 hover:text-white hover:bg-green-600 rounded-md" href="/download/x">
                <x-monoicon-download class="rounded w-5 h-5" />
            </a>
        </li>
        <li class="flex flex-row gap-3">
            <a class="hover:bg-gray-400 rounded-md p-2" href="/file/2">
                <div>CUR12_A-Related party balances.</div>
            </a>
            <a class="p-2 hover:text-white hover:bg-green-600 rounded-md" href="/download/x">
                <x-monoicon-download class="rounded w-5 h-5" />
            </a>
        </li>
        <li class="flex flex-row gap-3">
            <a class="hover:bg-gray-400 rounded-md p-2" href="/file/3">
                <div>CUR12_A-Related party balances.</div>
            </a>
            <a class="p-2 hover:text-white hover:bg-green-600 rounded-md" href="/download/x">
                <x-monoicon-download class="rounded w-5 h-5" />
            </a>
        </li>
    </ul>
</div>
<x-footer />
