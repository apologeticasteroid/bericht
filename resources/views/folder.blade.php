<x-header />
<div class="w-full flex flex-row m-2">
    <a class="p-2 rounded-md hover:text-white hover:bg-blue-600" href="/">
        <x-monoicon-list class="rounded w-8 h-8" />
    </a>
</div>

<div class="w-full max-w-2xl m-auto space-y-2">
    <a class="hover:bg-gray-400 rounded-md p-2" href="#">
        <span class="text-2xl font-bold ">Central Bank</span>
    </a>
    <div class="font-mono">Report Name</div>
    <input type="text" name="name" class="border-2 rounded-md w-full p-2 font-mono">
    <div class="font-mono">Description</div>
    <textarea name="description" class="border-2 rounded-md w-full p-2 font-mono"></textarea>
</div>

<div class="w-full max-w-2xl m-auto space-y-2">
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

<div class="w-full font-mono max-w-2xl m-auto my-5">
    <div class="flex flex-row p-2">
        <a class="hover:bg-gray-400 rounded-md p-2" href="/file/x">
            <span class="text-2xl font-bold ">Central Bank</span>
        </a>
        <a class="p-2 rounded-md hover:text-white hover:bg-green-600" href="/file">
            <x-monoicon-document-add class="rounded w-8 h-8" />
        </a>
    </div>

    <ul class="m-2">
        <li class="flex flex-row gap-3">
            <a class="hover:bg-gray-400 rounded-md p-2" href="/file/1">
                <div>CUR12_A-Related party balances.</div>
            </a>
            <a class="p-2 hover:text-white hover:bg-blue-600 rounded-md" href="/download/x">
                <x-monoicon-download class="rounded w-5 h-5" />
            </a>
        </li>
        <li class="flex flex-row gap-3">
            <a class="hover:bg-gray-400 rounded-md p-2" href="/file/2">
                <div>CUR12_A-Related party balances.</div>
            </a>
            <a class="p-2 hover:text-white hover:bg-blue-600 rounded-md" href="/download/x">
                <x-monoicon-download class="rounded w-5 h-5" />
            </a>
        </li>
        <li class="flex flex-row gap-3">
            <a class="hover:bg-gray-400 rounded-md p-2" href="/file/3">
                <div>CUR12_A-Related party balances.</div>
            </a>
            <a class="p-2 hover:text-white hover:bg-blue-600 rounded-md" href="/download/x">
                <x-monoicon-download class="rounded w-5 h-5" />
            </a>
        </li>
    </ul>
</div>

<x-footer />
