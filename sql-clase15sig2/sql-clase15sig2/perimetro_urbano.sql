SET CLIENT_ENCODING TO UTF8;
SET STANDARD_CONFORMING_STRINGS TO ON;
BEGIN;
CREATE TABLE "perimetro_urbano" (gid serial,
"nombre" varchar(254),
"anno" numeric(10,0));
ALTER TABLE "perimetro_urbano" ADD PRIMARY KEY (gid);
INSERT INTO "perimetro_urbano" ("nombre","anno") VALUES ('PERIMETRO URBANO','2014');
COMMIT;
