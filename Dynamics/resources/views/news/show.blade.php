@extends('layouts.app')

@section('content')

    <section id="about" class="about-area">
            <div style="margin:75px">
                <h2 style="margin-top: 115px">
                    {{ $post->title }}
                </h2>

                <div style="margin-top:15px">
                    <div class="about-image mt-70">
                        <img src="{{ URL::asset('images/' . $post->image_path) }}" alt="about">
                    </div> <!-- faq image -->
                </div>

                <div>
                    <p class="text-justify" style="font-size: 19px; margin-top: 15px">
                        {{ $post->description }}
                    </p>
                </div>
            </div>
    </section>
@endsection
