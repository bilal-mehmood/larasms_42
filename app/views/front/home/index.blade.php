@extends('front.layouts.master')

@section('content')
@foreach($latestMessages as $latestMessage)
    <div class="b-blog-listing__block">
        <div class="b-blog-listing__block-top">
            <div class=" view view-sixth">
                <img data-retina="" src="/assets/front/img/blog/blog_listing.jpg" alt="">
            </div>
        </div>
        <div class="b-infoblock-with-icon b-blog-listing__infoblock">
            <a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate hidden-xs">
                <i class="fa fa-pencil"></i>
            </a>
            <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                <a href="#" class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-l b-title-b-hr f-title-b-hr">
                    {{ $latestMessage->title }}
                </a>
                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text f-primary-b b-blog-listing__pretitle">
                    By <a href="#" class="f-more">Stephen Brock</a> In <a href="#" class="f-more">Lifestyle</a>, <a href="#" class="f-more">Photography</a> Posted May 24th, 2013
                    <a href="#" class="f-more b-blog-listing__additional-text f-primary"><i class="fa fa-comment"></i>12 Comments</a>
                </div>
                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text c-primary b-blog-listing__text">
                    Pendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus erat, a placerat tellus laoreet eget. Blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis.
                </div>
                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                    <a href="#" class="f-more f-primary-b">Read more</a>
                </div>
            </div>
        </div>
    </div>
@endforeach
{{ $latestMessages->links() }}
@endsection