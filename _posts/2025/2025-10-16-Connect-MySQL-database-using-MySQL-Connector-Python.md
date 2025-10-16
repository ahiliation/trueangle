---
layout: post
title: Connect MySQL database using MySQL-Connector Python  
---

<pre>
$cat fdb.py
import mysql.connector


conn = mysql.connector.connect(host='localhost',
			database='learning',
			user='jeff',
			password='sixer')
print(conn)
conn.close
$python3  fdb.py
<mysql.connector.connection_cext.CMySQLConnection object at 0x7f143fc84790>
$

</pre>