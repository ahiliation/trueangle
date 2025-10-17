---
layout: post
title: Verifying MySQL Connector/Python installation  
---

<pre>
$python3
Python 3.10.6 (main, Aug 10 2022, 11:19:32) [GCC 12.1.0] on linux
Type "help", "copyright", "credits" or "license" for more information.
>>> import mysql.connector
>>> 
>>> 
>>> mysql.connector.connect(host='localhost',
...                         database='learning',
...                         user='jeff',
...                         password='sixer')
<mysql.connector.connection_cext.CMySQLConnection object at 0x7f9ddd630400>
>>> 
$cat ted.py 
import mysql.connector


mysql.connector.connect(host='localhost',
			database='learning',
			user='jeff',
			password='sixer')
$
</pre>