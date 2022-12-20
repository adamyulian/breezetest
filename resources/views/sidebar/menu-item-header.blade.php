<li @isset($item['id']) id="{{ $item['id'] }}" @endisset class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ $item['class'] ?? '' }}">

    {{ is_string($item) ? $item : $item['header'] }}

</li>
