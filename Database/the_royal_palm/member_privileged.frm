TYPE=VIEW
query=select `a`.`ID` AS `ID`,`a`.`FNAME` AS `FNAME`,`a`.`LNAME` AS `LNAME`,`a`.`CNIC_NO` AS `CNIC_NO`,`a`.`HOUSE_NO` AS `HOUSE_NO`,`a`.`BLOCK` AS `BLOCK`,`a`.`AREA` AS `AREA`,`a`.`CITY` AS `CITY`,`a`.`COUNTRY` AS `COUNTRY`,`a`.`EMAIL` AS `EMAIL`,`a`.`GENDER` AS `GENDER`,`a`.`CARD_NO` AS `CARD_NO`,`a`.`DATE_OF_JOINING` AS `DATE_OF_JOINING`,`a`.`MONTHLY_INSTALLMENTS` AS `MONTHLY_INSTALLMENTS`,`a`.`PAYMENT_STATUS` AS `PAYMENT_STATUS`,`b`.`CONTACT_NO` AS `CONTACT_NO` from `the_royal_palm`.`members` `a` join `the_royal_palm`.`member_contacts` `b` where ((`a`.`TYPE` = \'PRV\') and (`a`.`ID` = `b`.`ID`))
md5=c7c409f0354094313d61ef4caa2685a9
updatable=1
algorithm=0
definer_user=rafay
definer_host=localhost
suid=2
with_check_option=0
timestamp=2016-10-22 12:30:28
create-version=1
source=SELECT A.ID, A.FNAME, A.LNAME, A.CNIC_NO, A.HOUSE_NO, A.BLOCK, A.AREA, A.CITY, A.COUNTRY, A.EMAIL, A.GENDER, A.CARD_NO, A.DATE_OF_JOINING, A.MONTHLY_INSTALLMENTS, A.PAYMENT_STATUS, B.CONTACT_NO \nFROM members A, member_contacts B \nWHERE A.TYPE = \'PRV\' AND A.ID = B.ID
client_cs_name=cp850
connection_cl_name=cp850_general_ci
view_body_utf8=select `a`.`ID` AS `ID`,`a`.`FNAME` AS `FNAME`,`a`.`LNAME` AS `LNAME`,`a`.`CNIC_NO` AS `CNIC_NO`,`a`.`HOUSE_NO` AS `HOUSE_NO`,`a`.`BLOCK` AS `BLOCK`,`a`.`AREA` AS `AREA`,`a`.`CITY` AS `CITY`,`a`.`COUNTRY` AS `COUNTRY`,`a`.`EMAIL` AS `EMAIL`,`a`.`GENDER` AS `GENDER`,`a`.`CARD_NO` AS `CARD_NO`,`a`.`DATE_OF_JOINING` AS `DATE_OF_JOINING`,`a`.`MONTHLY_INSTALLMENTS` AS `MONTHLY_INSTALLMENTS`,`a`.`PAYMENT_STATUS` AS `PAYMENT_STATUS`,`b`.`CONTACT_NO` AS `CONTACT_NO` from `the_royal_palm`.`members` `a` join `the_royal_palm`.`member_contacts` `b` where ((`a`.`TYPE` = \'PRV\') and (`a`.`ID` = `b`.`ID`))
