<x-base-layout title="Blog">
    <section class="mt-5" id="blogs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="img-fluid" src="https://source.unsplash.com/random/1000x400" alt="blog">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <h2>{{ $blog->name }}</h2>
                    <p>{{ $blog->description }}</p>
                </div>
            </div>
        </div>
    </section>
</x-base-layout>
