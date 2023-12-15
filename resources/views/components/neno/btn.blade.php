<button :type="{{$type}}" :disabled="{{$disabled}}"
    class="{{ $bgColor }} {{ $borderColor }} {{ $textColor }} {{ $textSize }} {{ $btnPadding }} {{ $rounded }} {{ $className}} font-medium">
    {{ $slot }}
</button>
