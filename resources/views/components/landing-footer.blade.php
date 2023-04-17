<footer>
    <div class="container-fluid" style="background: #fff">
        <div class="row p-4">
            <div class="col-md-4">
                <h5>TENTANG</h5>
                <hr />
                <p>SMA Antariksa adalah sebuah sekolah menengah atas di pusat kota yang menawarkan program akademik dan
                    ekstrakurikuler
                    berkualitas tinggi untuk siswa menuju prestasi.</p>
            </div>
            <div class="col-md-4">
                <h5>TAGS</h5>
                <hr />
                <div class="col">
                    @forelse ($tags as $tag)
                        <a href="#" class="btn btn-sm btn-outline-secondary mb-2 mr-2">
                            {{ $tag->name }}</a>
                    @empty
                        tags tidak ditemukan!
                    @endforelse
                </div>
            </div>
            <div class="col-md-4">
                <h5>KONTAK</h5>
                <hr />
                <p>
                    <i class="fa fa-map-marker" aria-hidden="true"></i> Jl. Raya Siwalanpanji No.6, Siwalan Panji,
                    Siwalanpanji, Kec. Buduran, Kabupaten Sidoarjo, Jawa Timur 61252
                    <i class="fas fa-phone"></i> +62857-8585-2224
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color:#6777EF">
        <div class="row p-3">
            <div class="mx-auto text-white font-weight-bold">Copyright © 2023
                SMA
                ANTARIKSA.
                All rights reserved.
            </div>
        </div>
    </div>
</footer>
