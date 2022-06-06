# Tugas-6-Basis-Data-20.D1
# NAMA : SUCI DWI FRATIWI
# KELAS : TI.20.D2
# NIM : 312010143

1. MASUK KE DATABASE NAMA_NIM
![image](https://user-images.githubusercontent.com/101787968/172167363-6d647146-8191-4914-8cf8-47160d6ae447.png)


2. LAKUKAN PROSES BACKUP DENGAN SQL DARI DATABASE TUGAS SEBELUMNYA
![image](https://user-images.githubusercontent.com/101787968/172168674-93c751bf-49f6-44d6-bc68-d642aa0c6937.png)


3. JIKA PROSES BERHASIL MAKA AKAN MUNCUL FILE C;\xampp\mysql\data\nama database
![image](https://user-images.githubusercontent.com/101787968/172168733-5ef41342-ce16-41b1-85df-908d94f119ee.png)


4. Recovery
![image](https://user-images.githubusercontent.com/101787968/172168952-e86fc611-6755-487a-8be9-106d4a7d5251.png)

5. LAKUKAN PROSES BACKUP DAN RECOVERY DENGAN SQLDUMP DARI DATABASE TUGAS SEBELUMNYA
![Screenshot (296)](https://user-images.githubusercontent.com/101787968/172172917-8e230369-f156-4b63-b73f-ddbc120251ca.png)
![Screenshot (297)](https://user-images.githubusercontent.com/101787968/172172928-d7e175ae-b5d5-4ee8-b36c-f8f9540e5f21.png)
![Screenshot (298)](https://user-images.githubusercontent.com/101787968/172172953-c41669f1-118f-4b8f-a9f7-e3bb4c7c8505.png)
![Screenshot (299)](https://user-images.githubusercontent.com/101787968/172172973-44797d26-cce5-48d9-8705-fcbf0af39dfc.png)
![Screenshot (300)](https://user-images.githubusercontent.com/101787968/172172996-b05a69a1-f338-456b-9829-f96f296f2d45.png)


TULISKAN SCRIPT CRON JOB UNTUK MELAKUKAN BACKUP OTOMATIS SETIAP HARI MINGGU JAM 12 MALAM


# Crontab -e

5923***myqldump -u root -p
klinik_312010143>backupTugas6.sql
