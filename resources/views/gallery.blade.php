@extends('layouts.app')
@section('content')
<v-container>
    <v-row class="justify-center align-middle my-12">
        <v-col cols="9" class="mx-auto my-8">
            <gallery-images :images='@json($images)'></gallery-images>
        </v-col>
    </v-row>
</v-container>
@endsection