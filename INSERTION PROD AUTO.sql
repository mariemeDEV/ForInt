

RECUPERATION DE PRODUCTION NON DEVERSEE

-----1) SUR TOAD (ON ENLEVE LES "BEGIN" ET "END;") ET ON EXECUTE AVEC "F5"

insert into police_valide
(numpolice,codeformule,codeintermediaire, codecategorie,typecontrat,
naturecontrat,codezone,dateeffet,dateecheance,qualite,nom,prenom,adresse,codeville,codeprofession,
codeactivite,typepiece,numpiece,telephone,typepermi,numepermis,datedelivpermis,lieudelivpermis,
immatriculation, numchassis,codemarque,codeserie,codegenre,codeusage,codeenergie,nombreplace,cylindre,
valeurneuve,valeurvenale,puissancefiscale,codecarrosserie,datemisecirculation,montant_prime,
montant_accessoire,montant_taxe,montant_fga,montant_ttc,datevali,datesous,datesais,flagtrans) 

values 
(4170000253, 2, 111, 417, 'F',
'N', '1', to_date('20/05/2016','DD/MM/RRRR'), to_date('19/05/2017','DD/MM/RRRR'), '1', 'NIANG', 'ABOU CHEIKH', '', '0', 0, 
'0', 'CIN', '1271199600348', '', '', '', to_date('08/09/2005','DD/MM/RRRR'), '',
'DK3228BA', 'KMSFC538727815', 'RENAULT', 'MEGANE BREAK RN 1.4', 'VP', 'PA', 'D', '5', '146', 
to_number(' ,0000','9999999999D9999'), to_number(' 2800000,0000','9999999999D9999'), 6, NULL, to_date('25/10/2007','DD/MM/RRRR'), to_number(' 86581,0000','9999999999D9999'), to_number(' 3000,0000','9999999999D9999'), to_number(' 8958,1000','9999999999D9999'), to_number(' 1129,5300','9999999999D9999'), to_number(' 99668,6300','9999999999D9999'), to_date('19/05/2016','DD/MM/RRRR'), to_date('19/05/2016','DD/MM/RRRR'), to_date('19/05/2016','DD/MM/RRRR'), 'N'); 

 
insert into police_valide_garantie (numpolice,codegarantie,montant_prim_gara,idengarantie) values (4170000253,1, to_number('      45181,0000','9999999999D9999'),'RC'); 
insert into police_valide_garantie (numpolice,codegarantie,montant_prim_gara,idengarantie) values (4170000253,2, to_number('           ,0000','9999999999D9999'),'RTI');  
insert into police_valide_garantie (numpolice,codegarantie,montant_prim_gara,idengarantie) values (4170000253,3, to_number('           ,0000','9999999999D9999'),'DR'); 
insert into police_valide_garantie (numpolice,codegarantie,montant_prim_gara,idengarantie) values (4170000253,4, to_number('       4200,0000','9999999999D9999'),'INC');  
insert into police_valide_garantie (numpolice,codegarantie,montant_prim_gara,idengarantie) values (4170000253,5, to_number('       4200,0000','9999999999D9999'),'VOL');  
insert into police_valide_garantie (numpolice,codegarantie,montant_prim_gara,idengarantie) values (4170000253,6, to_number('       8000,0000','9999999999D9999'),'BDG');  
insert into police_valide_garantie (numpolice,codegarantie,montant_prim_gara,idengarantie) values (4170000253,7, to_number('      10000,0000','9999999999D9999'),'AVR'); 
 insert into police_valide_garantie (numpolice,codegarantie,montant_prim_gara,idengarantie) values (4170000253,8, to_number('       5000,0000','9999999999D9999'),'IPT'); end; 
 insert into police_valide_garantie (numpolice,codegarantie,montant_prim_gara,idengarantie) values (4170000253,11, to_number('      10000,0000','9999999999D9999'),'AAC'); end; 

 -----2) (ON EXECUTE LE JOB 22 OU LA REQUETE)
 
 BEGIN
   boa_interface.productionboa;
EXCEPTION
   WHEN OTHERS
   THEN
      NULL;
END;
