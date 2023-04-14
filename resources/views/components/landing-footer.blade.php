<footer>
    <div class="container-fluid" style="background: #fff">
        <div class="row p-4">
            <div class="col-md-4">
                <h5>TENTANG</h5>
                <hr />
                <p>Sekolah Menengah Kejuruan adalah pendidikan formal yang menyelenggarakan pendidikan kejuruan pada
                    jenjang pendidikan menengah sebagai lanjutan dari SMP/MTs.</p>
            </div>
            <div class="col-md-4">
                <h5>TAGS</h5>
                <hr />
                @forelse ($tags as $tag)
                    <div>
                        <a href="#" class="btn btn-sm btn-outline-secondary mb-2 mr-2">
                            {{ $tag->name }}</a>
                    </div>
                @empty
                    tags tidak ditemukan!
                @endforelse
            </div>
            <div class="col-md-4">
                <h5>KONTAK</h5>
                <hr />
                <p>
                    <i class="fa fa-map-marker" aria-hidden="true"></i> Jl. Jendral Sudirman No.83, Daerah Khusus
                    Ibukota Jakarta, Indonesia
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
