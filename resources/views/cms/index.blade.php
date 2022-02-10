<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/themes/default/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms.css') }}">
    <title>Управление сайтом</title>
</head>
<body >
<div id="app">
    <svg version="1.1" id="L7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
 <path fill="#8c67ef" d="M31.6,3.5C5.9,13.6-6.6,42.7,3.5,68.4c10.1,25.7,39.2,38.3,64.9,28.1l-3.1-7.9c-21.3,8.4-45.4-2-53.8-23.3
  c-8.4-21.3,2-45.4,23.3-53.8L31.6,3.5z">
     <animateTransform
             attributeName="transform"
             attributeType="XML"
             type="rotate"
             dur="2s"
             from="0 50 50"
             to="360 50 50"
             repeatCount="indefinite" />
 </path>
        <path fill="#8c67ef" d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
  c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z">
            <animateTransform
                    attributeName="transform"
                    attributeType="XML"
                    type="rotate"
                    dur="1s"
                    from="0 50 50"
                    to="-360 50 50"
                    repeatCount="indefinite" />
        </path>
        <path fill="#8c67ef" d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
  L82,35.7z">
            <animateTransform
                    attributeName="transform"
                    attributeType="XML"
                    type="rotate"
                    dur="2s"
                    from="0 50 50"
                    to="360 50 50"
                    repeatCount="indefinite" />
        </path>
</svg>
    <style>
        body, div{
            width:100%;
        }
        svg{
            width: 100px;
            height: 100px;

            display:block;
            margin:100px auto;
        }
    </style>
</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
{{--<script src="{{ asset('js/select2.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/jstree.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/sortable.min.js') }}"></script>--}}
<script src="{{ asset('js/cms.js') }}"></script>
</body>
</html>
