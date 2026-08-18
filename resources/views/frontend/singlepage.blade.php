@extends('layouts.base')
@section('body')

@php
$faq_title = "Frequently Asked Questions for " . $page->title;
@endphp

<!-- ============================= -->
<!-- Hero Section -->
<!-- ============================= -->
<div class="page-hero-section">
    <div class="page-section-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-banner text-white d-flex flex-column justify-content-center align-items-center text-center">
                        <h1 id="section-title">{{ $page->page_title }}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Page</a></li>
                                <li class="breadcrumb-item active text-info" aria-current="page">{{ $page->page_subtitle }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================= -->
<!-- Main Content with Sidebar -->
<!-- ============================= -->
<div class="container-fluid">
    <div class="row g-4">
        <!-- Left Sidebar -->
        <div class="col-lg-2 d-none d-lg-block">
            <div class="sticky-sidebar page-sidebar-scroll">
                <div class="quick-links">
                    <span class="text-primary fw-bold mb-3 d-block">Table of Contents</span>
                    <div id="dynamic-nav"></div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-7" id="page-content">
            <div class="bg-white p-4 shadow rounded">
                <h2 class="text-center text-dark fw-bold">{{ $page->title }}</h2>
                <div>{{ $page->page_shortdescription }}</div>

                @if(!empty(trim($page->content)))
                <div class="content-section mt-4">
                    {!! $page->content !!}
                </div>
                @endif

            

                @if(!empty($feeStructure))
                <div class="mt-2" id="feeStructure">
                    <h4 class="fw-semibold text-primary">Fee Structure for {{ $page->title }}</h4>
                    <hr>
                    {!! $feeStructure !!}
                </div>
                @endif

                @if(!empty($faqLayOut))
                <div class="mt-2">
                    @include('layouts.faq-layout')
                </div>
                @endif

                @if(!empty($page->seo_meta_keywords))
                <div class="mt-4">
                    @foreach(explode(',', $page->seo_meta_keywords) as $keyword)
                        <span class="badge bg-primary me-1 mb-1">{{ trim($keyword) }}</span>
                    @endforeach
                </div>
                @endif
                
                @if(!empty($otherPages))
                <div class="mt-3">
                    <h3 class="fw-bold mb-4 text-dark">
                        <i class="fa fa-globe text-primary me-2"></i> Explore Other Pages
                    </h3>
                    <div class="row g-3">
                        @foreach($otherPages as $op)
                        <div class="col-md-6 col-lg-4">
                            <a href="{{ url($op->slug) }}" target="_blank" class="text-decoration-none">
                                <div class="card shadow-sm border-0 h-100 hover-card">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="icon-circle me-3">
                                            <i class="fa fa-arrow-circle-right text-primary fs-4"></i>
                                        </div>
                                        <span class="fw-semibold text-dark">{{ $op->title }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="col-lg-3">
            <div class="right-sidebar">
                 <div>@include('layouts.contactus')</div>
                
                @if(!empty($page->image))
                <div class="mb-4">
                    <div class="card shadow-sm border-0">
                        <img src="{{ asset('page/'.$page->image) }}" class="card-img-top rounded" alt="{{ $page->title }}">
                    </div>
                </div>
                @endif

                @if($page->video_embedding != "")
                <div class="mb-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-0">{!! $page->video_embedding !!}</div>
                    </div>
                </div>
                @endif

               
            </div>
        </div>
    </div>
</div>

<!-- Additional Sections -->
@include("layouts.domestic-states")
@include("layouts.courses-we-provide")

<!-- ============================= -->
<!-- Dynamic Navigation Script -->
<!-- ============================= -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    // Wrap each heading and its following content into a section
    function createSections() {
        const $content = $('#page-content');
        const $headings = $content.find('h2, h3');
        let index = 1;

        $headings.each(function () {
            const $heading = $(this);

            if (!$heading.attr('id')) {
                $heading.attr('id', 'section-' + index++);
            }

            if (!$heading.parent().is('section')) {
                const $section = $('<section></section>');
                $heading.before($section);
                $section.append($heading);

                let $next = $heading.next();
                while ($next.length && !$next.is('h2, h3')) {
                    $section.append($next);
                    $next = $heading.next();
                }
            }
        });
    }

    // Build sidebar navigation
    function generateNavigation() {
        const navContainer = $('#dynamic-nav');
        navContainer.empty();

        $('#page-content').find('h2, h3').each(function () {
            const $heading = $(this);
            const id = $heading.attr('id');
            const text = $heading.text();
            const tagName = $heading.prop('tagName');

            if (tagName === 'H2') {
                navContainer.append(
                    `<a href="#${id}" class="nav-link d-block mb-2 fw-bold" data-id="${id}">${text}</a>`
                );
            } else if (tagName === 'H3') {
                navContainer.append(
                    `<a href="#${id}" class="nav-link d-block ms-3 mb-1 small" data-id="${id}">${text}</a>`
                );
            }
        });

        if (!navContainer.children().length) {
            navContainer.append('<p class="text-muted">No sections available</p>');
        }
    }

    // Smooth scroll
    $(document).on('click', '.nav-link', function (e) {
        e.preventDefault();
        const targetId = $(this).data('id');
        const $target = $('#' + targetId);

        if ($target.length) {
            $('html, body').animate({
                scrollTop: $target.offset().top - 80
            }, 600);
        }
    });

    // Scrollspy
    function setupScrollSpy() {
        const $navLinks = $('.nav-link');
        const $sections = $('#page-content').find('h2, h3');

        $(window).on('scroll', function () {
            const scrollPos = $(window).scrollTop() + 120;
            let currentId = null;

            $sections.each(function () {
                if (scrollPos >= $(this).offset().top) {
                    currentId = $(this).attr('id');
                }
            });

            $navLinks.removeClass('active');
            if (currentId) {
                $(`.nav-link[data-id="${currentId}"]`).addClass('active');
            }
        });
    }

    createSections();
    generateNavigation();
    setupScrollSpy();
    $(window).trigger('scroll');
});
</script>

@endsection
