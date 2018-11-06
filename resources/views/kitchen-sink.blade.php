@extends('outline::layouts.app')

@section('content')
    <section class="app-page">
        <header class="header">
            <h1 class="title">Kitchen Sink</h1>
            <p class="caption">Everything you need!</p>
        </header>

        <div class="content">
            <outline-text-field class="mt-4"
                                label="Text Field"
                                name="name"
                                placeholder="The placeholder for your field." />

            <outline-long-text-field class="mt-4"
                                     label="Long Text Field"
                                     name="long-text"
                                     placeholder="Some field value here."
                                     hint="Here's a hint for the textarea and all that." />
        </div>
    </section>
@endsection
