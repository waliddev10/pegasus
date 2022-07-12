<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <img style="width:100 vw; margin: 0 auto 25px auto; text-align: center;"
        src="{{ asset('assets/images/kop-surat.png') }}" />
    <table border="0" style="width: 100%;">
        <tr>
            <td style="width: 60%;"></td>
            <td>Samarinda, {{ \Carbon\Carbon::parse($tgl_pengantar)->isoFormat('d MMMM Y') }}</td>
        </tr>
        <tr>
            <td>
                <table border="0" style="width: 100%;">
                    <tr>
                        <td>Nomor</td>
                        <td>:</td>
                        <td>{{ $nomor_pengantar }}</td>
                    </tr>
                    <tr>
                        <td>Sifat</td>
                        <td>:</td>
                        <td>{{ $sifat_pengantar }}</td>
                    </tr>
                    <tr>
                        <td>Lampiran</td>
                        <td>:</td>
                        <td>{{ $jml_lampiran_pengantar }}</td>
                    </tr>
                    <tr>
                        <td>Perihal</td>
                        <td>:</td>
                        <td>{{ $perihal_pengantar }}</td>
                    </tr>
                </table>
            </td>
            <td>Kepada<br />
                Yth. {{ $pimpinan_pengantar }}
                <br />
                di -
                <br />
                {{ $kota_pimpinan_pengantar }}
            </td>
        </tr>
    </table>

    <p style="width: 100%; text-indent: 0.5cm; text-align: justify;">
        Berdasarkan {{ $berdasarkan_pengantar }},
        Tim Inspektorat Daerah Provinsi Kalimantan Timur akan melakukan
        {{ $melakukan_pengantar }}
        pada {{ $skpd_pengantar }}, sesuai dengan surat perintah tugas
        terlampir.
    </p>
    <p style="width: 100%; text-indent: 0.5cm; text-align: justify;">
        Biaya sehubungan dengan pelaksanaan penugasan ini menjadi beban Inspektorat Daerah Provinsi Kalimantan
        Timur.
    </p>
    <p style="width: 100%; text-indent: 0.5cm; text-align: justify;">
        Demikian disampaikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih.
    </p>



    <table border="0" style="width: 100%;">
        <tr>
            <td style="width: 60%;">

            </td>
            <td style="text-align: center;">
                Inspektur,
                <br />
                <br />
                <br />
                <br />
                <u>Dr. H. M. Irfan Prananta, SE., MM</u>
                <br />
                Pembina Utama Madya
                <br />
                NIP 19740818 199703 1 006
            </td>
        </tr>
    </table>

    <div style="margin-top: 10px">
        Tembusan :
        <br />
        1. Wakil Gubernur Kalimantan Timur di Samarinda
        <br />
        2. Sekretaris Daerah Provinsi Kalimantan Timur
    </div>
</body>

</html>
