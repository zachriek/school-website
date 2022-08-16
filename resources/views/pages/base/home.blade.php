<x-base-layout title="Home">
    <section id="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-fluid" src="https://source.unsplash.com/random/1000x400" alt="Unsplash"
                                    width="100%">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="https://source.unsplash.com/random/1000x401" alt="Unsplash"
                                    width="100%">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="https://source.unsplash.com/random/1000x402" alt="Unsplash"
                                    width="100%">
                            </div>
                        </div>

                        <div class="swiper-pagination"></div>

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5" id="blogs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="row mb-3">
                        <div class="col-12">
                            <h2>Blog Terbaru</h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($blogs as $blog)
                            <div class="col-12 col-sm-6 mb-2">
                                <div class="card shadow">
                                    <img class="card-img-top"
                                        src="https://source.unsplash.com/random/300x30{{ $loop->iteration }}"
                                        alt="blog">
                                    <div class="card-body">
                                        <a href="{{ route('blogs.show', $blog->slug) }}" class="text-dark">
                                            <h5 class="card-title">{{ $blog->name }}</h5>
                                        </a>
                                        <p class="card-text">{{ Str::limit($blog->description, 70) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row mb-3">
                        <div class="col-12">
                            <h2>Berita Terbaru</h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($news as $news)
                            <div class="col-12 mb-2">
                                <div class="card shadow">
                                    <img class="card-img-top" src="https://source.unsplash.com/random/1000x300"
                                        alt="blog">
                                    <div class="card-body">
                                        <a href="{{ route('news.show', $news->slug) }}" class="text-dark">
                                            <h5 class="card-title">Lorem ipsum dolor sit amet consectetur</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('addon-scripts')
        <script>
            const swiper = new Swiper('.swiper', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
    @endpush
</x-base-layout>
