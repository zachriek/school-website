<x-base-layout title="News">
    <section class="mt-5" id="blogs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="img-fluid" src="https://source.unsplash.com/random/1000x400" alt="news">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <h2>{{ $news->name }}</h2>
                    <p>{{ $news->description }}</p>
                </div>
            </div>
        </div>
    </section>
</x-base-layout>
