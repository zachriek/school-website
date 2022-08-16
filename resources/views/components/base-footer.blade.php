<footer class="bg-dark text-light mt-5 py-5">
    <div class="container">
        <div class="row" style="row-gap: 2rem;">
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-4">ABOUT US</h5>
                <p>SMKN 1 Bandar Lampung</p>
                <ul>
                    <li>
                        <p>
                            <a class="text-light" href="#">Google Maps</a> <br>
                            Jl. Hos Cokroaminoto No.102, Enggal, Engal, Kota Bandar Lampung, Lampung 35118, Lampung
                        </p>
                    </li>
                    <li>
                        <p>Telepon (0721) 261-637</p>
                    </li>
                    <li>
                        <p>Fax (0721) 261-637</p>
                    </li>
                    <li>
                        <p>E-mail smkn4bl@yahoo.co.id</p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-4">STATISTIK</h5>
                <p><span class="font-weight-bold">Users online :</span> 0</p>
                <p><span class="font-weight-bold">Visitors today :</span> 0</p>
                <p><span class="font-weight-bold">Page views today :</span> 0</p>
                <p><span class="font-weight-bold">Total visitors :</span> 90,468</p>
                <p><span class="font-weight-bold">Total page view :</span> 154,857</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-4">LINK LAIN</h5>
                <ul>
                    <li>
                        <a class="text-light" href="#">Dapodik</a>
                    </li>
                    <li>
                        <a class="text-light" href="#">E-rapor</a>
                    </li>
                    <li>
                        <a class="text-light" href="#">PMP Dikdasmen</a>
                    </li>
                    <li>
                        <a class="text-light" href="#">Dikdasmen</a>
                    </li>
                    <li>
                        <a class="text-light" href="#">Takola</a>
                    </li>
                    <li>
                        <a class="text-light" href="#">Kelulusan</a>
                    </li>
                    <li>
                        <a class="text-light" href="#">PSMK</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-4">RECENT POSTS</h5>
                <ul>
                    @foreach (App\Models\Blog::latest()->limit(3)->get() as $blog)
                        <li>
                            <a class="text-light" href="#">{{ $blog->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
