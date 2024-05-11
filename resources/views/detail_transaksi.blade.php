<div class="modal fade" id="detailModal{{$transaksis->id}}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel{{$transaksi->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel{{$transaksis->id}}">Detail Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong>ID Transaksi:</strong> {{$transaksis->id}}</p>
                <p><strong>Nama Customer:</strong> {{$transaksis->nama_lengkap}}</p>
                <p><strong>Grand Total:</strong> {{$transaksis->grand_total}}</p>
                <!-- Tambahkan informasi detail lainnya sesuai kebutuhan -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
