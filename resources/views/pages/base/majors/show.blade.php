<x-base-layout title="Jurusan">
    <section class="mt-5" id="majors">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-3">{{ $major->name }}</h2>
                    <p>{{ $major->description }}</p>
                </div>
            </div>
        </div>
    </section>
</x-base-layout>
