CREATE VIEW student_data as
SELECT
    siswa.StudentID as student_id,
    siswa.Nama as nama,
    krs.kode_term as term,
    SUM(COALESCE(m.sks,0)) as total_sks
FROM mahasiswa siswa
LEFT JOIN krs ON siswa.StudentID = krs.StudentID
LEFT JOIN krs_detail kd on krs.kode_krs = kd.kode_krs
LEFT JOIN matakuliah m on kd.kode_matakuliah = m.kode_matakuliah
GROUP BY siswa.StudentID, siswa.Nama, krs.kode_term;

CREATE VIEW khs_detail_view as
SELECT
    siswa.StudentID as StudentID,
    siswa.Nama as nama,
    kuliah.kode_matakuliah as kode_matkul,
    kuliah.nama_matakuliah as nama_matkul,
    kuliah.sks as sks,
    khd.NilaiHuruf as huruf
FROM mahasiswa siswa
LEFT JOIN krs ON siswa.StudentID = krs.StudentID
LEFT JOIN krs_detail kd on krs.kode_krs = kd.kode_krs
LEFT JOIN matakuliah kuliah on kd.kode_matakuliah = kuliah.kode_matakuliah
LEFT JOIN khs_detail khd on kd.kode_krsdetail = khd.kode_krs_detail;