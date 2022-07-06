<form action="{{ route('peraturan.store') }}" accept-charset="UTF-8" class="form needs-validation" id="create"
    autocomplete="off">
    @csrf
    <div class="row">
        <div class="col">
            <div class="mt-2">
                <label class="form-label">Kategori</label>
                <input type="text" name="kategori" class="form-control input-air-primary"
                    placeholder="ex. Perjalanan Dinas" />
            </div>
            <div class=" mt-2">
                <label class="form-label">Jenis</label>
                <input type="text" name="jenis" class="form-control input-air-primary"
                    placeholder="ex. Peraturan Menteri" />
            </div>
            <div class=" mt-2">
                <label class="form-label">Nomor</label>
                <input type="text" name="nomor" class="form-control input-air-primary"
                    placeholder="ex. 113/PMK.05/2012" />
            </div>
            <div class=" mt-2">
                <label class="form-label">Tahun</label>
                <input type="number" name="tahun" class="form-control input-air-primary" placeholder="ex. 2012" />
            </div>
        </div>
        <div class="col">
            <div class="mt-2">
                <label class="form-label">Judul</label>
                <textarea name="judul" class="form-control input-air-primary"
                    placeholder="ex. PERJALANAN DINAS DALAM NEGERI BAGI PEJABAT NEGARA, PEGAWAI NEGERI, DAN PEGAWAI TIDAK TETAP"></textarea>
            </div>
            <div class="mt-2">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control input-air-primary"
                    placeholder="ex. Peraturan Menteri Keuangan Republik Indonesia"></textarea>
            </div>
            <div class="mt-2">
                <label class="form-label">Berkas Peraturan</label>
                <input type="file" name="file" class="form-control input-air-primary" />
            </div>
        </div>
    </div>

    <div class="text-right mt-5">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
    </div>

</form>

<script type="text/javascript">
    $("#create").on('submit', function(event) {
        event.preventDefault();
        var form = $(this);
        var formData = new FormData($(this)[0]);

        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $("#modalContainer").modal('hide');
                // tableDokumen.ajax.reload(null, false);
                window.location.reload();
                showAlert(response.message, response.status || 'success');
            },
            error: function(xhr) {
                var err = eval("(" + xhr.responseText + ")");
                showAlert(err.message, err.status || 'error');
            }
        });
        return false;
    });
</script>
