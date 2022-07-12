<form action="{{ route('topensisan.spt.store') }}" accept-charset="UTF-8" class="form needs-validation" id="create"
    autocomplete="off">
    @csrf

    <h2>Pengantar</h2>
    <div class="row">
        <div class="col">
            <div class="mt-2">
                <label class="form-label">Nomor</label>
                <input name="nomor_pengantar" class="form-control input-air-primary"
                    value="../..-Khusus/Itprov/../2022" />
            </div>
            <div class="mt-2">
                <label class="form-label">Sifat</label>
                <input name="sifat_pengantar" class="form-control input-air-primary" value="" />
            </div>
            <div class="mt-2">
                <label class="form-label">Jml Lampiran</label>
                <input name="jml_lampiran_pengantar" class="form-control input-air-primary" value=".. lembar" />
            </div>
            <div class="mt-2">
                <label class="form-label">Perihal</label>
                <textarea name="perihal_pengantar" class="form-control input-air-primary"></textarea>
            </div>
        </div>
        <div class="col">
            <div class="mt-2">
                <label class="form-label">Kota</label>
                <input name="kota_pengantar" class="form-control input-air-primary" value="Samarinda" />
            </div>
            <div class="mt-2">
                <label class="form-label">Tanggal</label>
                <input type="date" name="tgl_pengantar" class="form-control input-air-primary" value="Samarinda" />
            </div>
            <div class="mt-2">
                <label class="form-label">Pimpinan</label>
                <textarea name="pimpinan_pengantar" class="form-control input-air-primary"></textarea>
            </div>
            <div class="mt-2">
                <label class="form-label">Kota Pimpinan</label>
                <input name="kota_pimpinan_pengantar" class="form-control input-air-primary" value="Samarinda" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="mt-2">
                <label class="form-label">Berdasarkan</label>
                <textarea name="berdasarkan_pengantar" class="form-control input-air-primary"></textarea>
            </div>
            <div class="mt-2">
                <label class="form-label">Melakukan Tugas</label>
                <textarea name="melakukan_pengantar" class="form-control input-air-primary"></textarea>
            </div>
            <div class="mt-2">
                <label class="form-label">Pada SKPD</label>
                <textarea name="skpd_pengantar" class="form-control input-air-primary"></textarea>
            </div>
        </div>
    </div>

    <h2 class="mt-2">SPT</h2>
    <div class="row">
        <div class="col">
            <div class="mt-2">
                <label class="form-label">Nomor</label>
                <input name="nomor_spt" class="form-control input-air-primary" value="090.1/..-Khusus/Itprov/../2022" />
            </div>
            <div class="mt-2">
                <label class="form-label">Kota</label>
                <input name="kota_spt" class="form-control input-air-primary" value="Samarinda" />
            </div>
            <div class="mt-2">
                <label class="form-label">Tanggal</label>
                <input type="date" name="tgl_spt" class="form-control input-air-primary" value="Samarinda" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="mt-2">
                <label class="form-label">Melakukan Tugas</label>
                <textarea name="melakukan_spt" class="form-control input-air-primary"></textarea>
            </div>
            <div class="mt-2">
                <label class="form-label">Tgl Mulai Tugas</label>
                <input type="date" name="tgl_mulai_spt" class="form-control input-air-primary" />
            </div>
            <div class="mt-2">
                <label class="form-label">Tgl Selesai Tugas</label>
                <input type="date" name="tgl_selesai_spt" class="form-control input-air-primary" />
            </div>
        </div>
        <div class="col">
            <div class="mt-2">
                <label class="form-label">Jenis Hari</label>
                <select name="jenis_hari_spt" class="form-select input-air-primary">
                    <option value="hari kerja">Hari Kerja</option>
                    <option value="hari kalender">Hari Kalender</option>
                </select>
            </div>
            <div class="mt-2">
                <label class="form-label">Jml Hari</label>
                <input type="number" name="jml_hari_spt" class="form-control input-air-primary" />
            </div>
        </div>
    </div>

    <div class="text-right mt-5">
        <button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button>
    </div>

</form>

{{-- <script type="text/javascript">
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
</script> --}}
