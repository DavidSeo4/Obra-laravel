<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

{{-- bootstrap --}}
<link rel="stylesheet" href={{ asset('css/bootstrap.min.css')}}>
<link rel="stylesheet" href={{ asset('css/style.css')}}>

{{-- cualquier otra hoja de estilos se referencia aquí --}}

{{-- para especificar en página --}}
@yield('styles')
