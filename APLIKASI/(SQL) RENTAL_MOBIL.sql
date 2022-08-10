/*==============================================================*/
/* DBMS name:      MySQL 4.0                                    */
/* Created on:     25/04/2016 16:14:05                          */
/*==============================================================*/


drop table if exists TBL_KONSUMEN;

drop table if exists TBL_MEMERIKSA;

drop table if exists TBL_MOBIL;

drop table if exists TBL_TRANSAKSI;

drop table if exists TBL_USER;

/*==============================================================*/
/* Table: TBL_KONSUMEN                                          */
/*==============================================================*/
create table TBL_KONSUMEN
(
   NIK                            int                            not null,
   NAMA_PELANGGAN                 varchar(20),
   ALAMAT_PELANGGAN               varchar(50),
   NO_TLP                         int,
   TGL_LAHIR                      date,
   EMAIL                          varchar(50),
   primary key (NIK)
);

/*==============================================================*/
/* Table: TBL_MEMERIKSA                                         */
/*==============================================================*/
create table TBL_MEMERIKSA
(
   ID_RENTAL                      int                            not null,
   NO_POLISI                      varchar(10)                    not null,
   primary key (ID_RENTAL, NO_POLISI)
);

/*==============================================================*/
/* Table: TBL_MOBIL                                             */
/*==============================================================*/
create table TBL_MOBIL
(
   NO_POLISI                      varchar(10)                    not null,
   NO_NOTA                        int                            not null,
   MERK_MOBIL                     varchar(10),
   JENIS_MOBIL                    varchar(10),
   WARNA_MOBIL                    varchar(10),
   HARGA_SEWA                     varchar(20),
   primary key (NO_POLISI)
);

/*==============================================================*/
/* Table: TBL_TRANSAKSI                                         */
/*==============================================================*/
create table TBL_TRANSAKSI
(
   NO_NOTA                        int                            not null,
   ID_RENTAL                      int                            not null,
   NIK                            int                            not null,
   JARAK                          varchar(20),
   TGL_SEWA                       date,
   LAMA_SEWA                      varchar(20),
   TOTAL_HARGA                    varchar(20),
   primary key (NO_NOTA)
);

/*==============================================================*/
/* Table: TBL_USER                                              */
/*==============================================================*/
create table TBL_USER
(
   ID_RENTAL                      int                            not null,
   NAMA_PEGAWAI                   varchar(20),
   PROFESI                        varchar(20),
   STATUS                         varchar(20),
   primary key (ID_RENTAL)
);

alter table TBL_MEMERIKSA add constraint FK_MEMERIKSA foreign key (ID_RENTAL)
      references TBL_USER (ID_RENTAL) on delete restrict;

alter table TBL_MEMERIKSA add constraint FK_MEMERIKSA2 foreign key (NO_POLISI)
      references TBL_MOBIL (NO_POLISI) on delete restrict;

alter table TBL_MOBIL add constraint FK_MENYEWA foreign key (NO_NOTA)
      references TBL_TRANSAKSI (NO_NOTA) on delete restrict;

alter table TBL_TRANSAKSI add constraint FK_MELAYANI foreign key (NIK)
      references TBL_KONSUMEN (NIK) on delete restrict;

alter table TBL_TRANSAKSI add constraint FK_MENDATA foreign key (ID_RENTAL)
      references TBL_USER (ID_RENTAL) on delete restrict;

