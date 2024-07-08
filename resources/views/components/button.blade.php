@aware(['type' => 'error'])

<div
    class="cursor-pointer flex justify-center items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
>
    @if($type === 'success')
        Sucesso
    @endif

    @if($type === 'error')
        Erro
    @endif

</div>
