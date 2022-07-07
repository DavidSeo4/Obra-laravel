{{-- bootstrap --}}
<script src={{ asset('js/bootstrap.min.js')}}></script>
<script src={{ asset('js/main.js')}}></script>

{{-- cualquier otra hoja de scripts se referencia aquí --}}

{{-- para especificar en página --}}
@yield('scripts')
