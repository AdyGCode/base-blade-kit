@props(['rows' => 10, 'message'=>null])

<textarea
      {{ $attributes->merge([
            'class' => 'p-2 block w-full
                        border border-gray-300 focus:border-indigo-300
                        focus:ring focus:ring-indigo-200
                        rounded-sm shadow-sm
                        min-h-96',
            ]) }}
    rows="{{ $rows }}"
>{{ $message ?? null }}</textarea>
