<?php

namespace Database\Seeders;

use App\Models\Degrees;
use Illuminate\Database\Seeder;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $degrees = collect([
            'Sarjana Administrasi Bisnis (S.A.B.)',
            'Sarjana Administrasi Publik (S.A.P.)',
            'Sarjana Agama (S.Ag.)',
            'Sarjana Agroteknologi (S.Agr)[1]',
            'Sarjana Akuntansi (S.Ak.)',
            'Sarjana Antropologi (S.Ant.)',
            'Sarjana Arsitektur (S.Ars.)',
            'Sarjana Desain (S.Ds./S.Des.)',
            'Sarjana Ekonomi (S.E.)',
            'Sarjana Ekonomi Asuransi (S.E.As.)',
            'Sarjana Ekonomi Islam (S.E.I.)',
            'Sarjana Ekonomi Syariah (S.E.Sy.)',
            'Sarjana Farmasi (S.Farm.)',
            'Sarjana Filsafat (S.Fil.)',
            'Sarjana Filsafat Hindu (S.Fil.H.)',
            'Sarjana Filsafat Islam (S.Fil.I.)',
            'Sarjana Fisioterapi (S.Ft.)',
            'Sarjana Hubungan Internasional (S.Hub.Int.)',
            'Sarjana Hukum (S.H.)',
            'Sarjana Hukum Islam (S.H.I.)',
            'Sarjana Hukum Hindu (S.H.H.)',
            'Sarjana Humaniora (S.Hum.)',
            'Sarjana Ilmu Administrasi (S.I.A.)',
            'Sarjana Ilmu Gizi (S.Gz.)',
            'Sarjana Ilmu Kelautan (S.Kel. atau S. IK)',
            'Sarjana Ilmu Keluarga dan Konsumen (S.I.K.K.)',
            'Sarjana Ilmu Kepolisian (S.I.K.)',
            'Sarjana Ilmu Komunikasi (S.I.Kom.)',
            'Sarjana Ilmu Pemerintahan (S.I.P.)',
            'Sarjana Ilmu Perpustakaan (S.IP)',
            'Sarjana Ilmu Perpustakaan (S.I.Ptk.)',
            'Sarjana Ilmu Perpustakaan dan Informasi (S.IIP.)',
            'Sarjana Ilmu Politik (S.I.Pol.)',
            'Sarjana Ilmu Sosial (S.Sos.)',
            'Sarjana Intelijen (S.In.)',
            'Sarjana Kebidanan (S.Keb.)',
            'Sarjana Kedokteran (S.Ked.)',
            'Sarjana Kedokteran Gigi (S.KG.)',
            'Sarjana Kedokteran Hewan (S.K.H.)',
            'Sarjana Kehutanan (S.Hut.)',
            'Sarjana Keperawatan (S.Kep.)',
            'Sarjana Kesehatan Lingkungan (S.K.L.)',
            'Sarjana Kesehatan Masyarakat (S.K.M.)',
            'Sarjana Komputer (S.Kom.)',
            'Sarjana Komunikasi Islam (S.Kom.I.)',
            'Sarjana Komunikasi dan Pengembangan Masyarakat(S.K.P.M.)',
            'Sarjana Manajemen (S.Mn./S.M.)',
            'Sarjana Manajemen Bisnis (S.Mb.)',
            'Sarjana Pariwisata (S.Par.)',
            'Sarjana Pendidikan (S.Pd.)',
            'Sarjana Pendidikan Buddha (S.Pd.B)',
            'Sarjana Pendidikan Hindu (S.Pd.H.)',
            'Sarjana Pendidikan Islam (S.Pd.I.)',
            'Sarjana Pendidikan Sains (S.Pd.Si.)',
            'Sarjana Pendidikan Sekolah Dasar (S.Pd.SD.)',
            'Sarjana Perikanan (S.Pi.)',
            'Sarjana Perpajakan (S.Pn.)',
            'Sarjana Ilmu Perpustakaan (S.Ptk.)',
            'Sarjana Pertahanan (S.Han.)',
            'Sarjana Peternakan (S.Pt.)',
            'Sarjana Psikologi (S.Psi.)',
            'Sarjana Sains (S.Si.)[2]',
            'Sarjana Sains Teologi (S.Si.Teol.)',
            'Sarjana Sains Terapan (S.ST.)',
            'Sarjana Sains Terapan Pemerintahan (S.STP.)',
            'Sarjana Sastra (S.S.)',
            'Sarjana Seni (S.Sn.)',
            'Sarjana Sistem Informasi (S.SI. atau S.Kom.)',
            'Sarjana Sosial (S.Sos.)',
            'Sarjana Sosial Hindu (S.Sos.H.)',
            'Sarjana Sosial Islam (S.Sos.I.)',
            'Sarjana Syari"ah (S.Sy.)',
            'Sarjana Statistika (S.Stat.)',
            'Sarjana Teknik (S.T.)',
            'Sarjana Teknologi Informasi (S.TI.)',
            'Sarjana Teknologi Pertanian (S.T.P.)',
            'Sarjana Teologi (S.Th.)',
            'Sarjana Teologi Islam (S.Th.I.)',
            'Sarjana Terapan Kepolisian (S.Tr.K.)',
            'Sarjana Terapan Pekerjaan Sosial (S.Tr.Sos.)',
            'Sarjana Terapan Perikanan (S.Tr.Pi.)',
            'Sarjana Terapan Teknik ( S.Tr.T.)',
            'Sarjana Terapan Pertahanan (S.T.Han.)',
            'Sarjana Terapan Komputer (S.Tr.Kom.)',
            'Sarjana Terapan Bisnis (S.Tr.Bns.)',
            'Sarjana Sains Terapan Perikanan (S.St.Pi)',
        ]);
        $degrees->each(function($c){
            Degrees::create([
                'degree'=>$c,
                'slug'=>\Str::slug($c)
            ]);
        });
    }
}
