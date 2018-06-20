<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
    <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">

    <script src="/js/app.js"></script>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vuetify/dist/vuetify.js"></script>

    {{--<!-- Fonts -->--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
    {{--<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">--}}

    {{--<!-- Style -->--}}
    {{--<link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">--}}

</head>
<body>
<div id="app">
    <v-app>
        <v-content>
            <v-container>
                <v-layout>
                    <v-flex row xs6 offset-xs3>
                        <todolist></todolist>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-content>
    </v-app>
</div>

{{--<script src="https://unpkg.com/vue/dist/vue.js"></script>--}}
{{--<script src="https://unpkg.com/vuetify/dist/vuetify.js"></script>--}}
</body>
</html>
