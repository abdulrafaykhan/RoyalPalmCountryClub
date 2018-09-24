TYPE=VIEW
query=select `a`.`ID` AS `ID`,`a`.`FNAME` AS `FNAME`,`a`.`LNAME` AS `LNAME`,`a`.`CNIC_NO` AS `CNIC_NO`,`a`.`HOUSE_NO` AS `HOUSE_NO`,`a`.`BLOCK` AS `BLOCK`,`a`.`AREA` AS `AREA`,`a`.`CITY` AS `CITY`,`a`.`COUNTRY` AS `COUNTRY`,`a`.`EMAIL` AS `EMAIL`,`a`.`GENDER` AS `GENDER`,`a`.`EXPERTISE` AS `EXPERTISE`,`a`.`HIREDATE` AS `HIREDATE`,`a`.`SALARY` AS `SALARY`,`a`.`BANK_NAME` AS `BANK_NAME`,`a`.`ACCOUNT_NO` AS `ACCOUNT_NO`,`a`.`WORK_HOURS` AS `WORK_HOURS`,`a`.`JOB` AS `JOB`,`a`.`COMMISSION` AS `COMMISSION`,`b`.`CONTACT_NO` AS `CONTACT_NO` from `the_royal_palm`.`employees` `a` join `the_royal_palm`.`employee_contacts` `b` where (`a`.`ID` = `b`.`ID`)
md5=b9045e45be84b6c2027576a7bb86ff52
updatable=1
algorithm=0
definer_user=rafay
definer_host=localhost
suid=2
with_check_option=0
timestamp=2016-10-29 08:26:21
create-version=1
source=SELECT A.ID, \nA.FNAME, \nA.LNAME, \nA.CNIC_NO, \nA.HOUSE_NO, \nA.BLOCK, \nA.AREA, \nA.CITY, \nA.COUNTRY, \nA.EMAIL, \nA.GENDER, \nA.EXPERTISE, \nA.HIREDATE, \nA.SALARY, \nA.BANK_NAME, \nA.ACCOUNT_NO, \nA.WORK_HOURS, \nA.JOB, \nA.COMMISSION, \nB.CONTACT_NO\nFROM employees A, employee_contacts B \nWHERE A.ID = B.ID
client_cs_name=cp850
connection_cl_name=cp850_general_ci
view_body_utf8=select `a`.`ID` AS `ID`,`a`.`FNAME` AS `FNAME`,`a`.`LNAME` AS `LNAME`,`a`.`CNIC_NO` AS `CNIC_NO`,`a`.`HOUSE_NO` AS `HOUSE_NO`,`a`.`BLOCK` AS `BLOCK`,`a`.`AREA` AS `AREA`,`a`.`CITY` AS `CITY`,`a`.`COUNTRY` AS `COUNTRY`,`a`.`EMAIL` AS `EMAIL`,`a`.`GENDER` AS `GENDER`,`a`.`EXPERTISE` AS `EXPERTISE`,`a`.`HIREDATE` AS `HIREDATE`,`a`.`SALARY` AS `SALARY`,`a`.`BANK_NAME` AS `BANK_NAME`,`a`.`ACCOUNT_NO` AS `ACCOUNT_NO`,`a`.`WORK_HOURS` AS `WORK_HOURS`,`a`.`JOB` AS `JOB`,`a`.`COMMISSION` AS `COMMISSION`,`b`.`CONTACT_NO` AS `CONTACT_NO` from `the_royal_palm`.`employees` `a` join `the_royal_palm`.`employee_contacts` `b` where (`a`.`ID` = `b`.`ID`)
