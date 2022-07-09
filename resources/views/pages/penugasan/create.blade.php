<form action="{{ route('penugasan.store') }}" accept-charset="UTF-8" class="form needs-validation" id="create"
    autocomplete="off">
    @csrf
    <div class="row">
        <div class="mt-2">
            <label class="form-label">Judul</label>
            <textarea name="judul" class="form-control input-air-primary" placeholder="ex. Penugasan PMPRB"></textarea>
        </div>
        <div class="mt-2">
            <label class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control input-air-primary"
                placeholder="ex. Perhitungan Terkait Biaya Penugasan"></textarea>
        </div>
        <div class="mt-2">
            <label class="form-label">SKPD</label>
            <textarea name="skpd" class="form-control input-air-primary"
                placeholder="ex. RSJD Atma Husada Mahakam"></textarea>
        </div>
        <div class="mt-2">
            <label class="form-label">Tgl Mulai</label>
            <input type="date" name="tgl_mulai" class="form-control input-air-primary" />
        </div>
        <div class="mt-2">
            <label class="form-label">Tgl Selesai</label>
            <input type="date" name="tgl_selesai" class="form-control input-air-primary" />
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
