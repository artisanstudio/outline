@extends('outline::layouts.app')

@section('content')
    <section class="app-page">
        <header class="header">
            <h1 class="title">Kitchen Sink</h1>
            <p class="caption">Everything you need!</p>
        </header>

        <div class="content">
            <ol-text-field
                class="mt-4"
                name="name"
                label="Text Field Input"
                placeholder="The placeholder for your field.">
            </ol-text-field>
        </div>
    </section>
@endsection
