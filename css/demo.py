import mysql.connector
mydb = mysql.connector.connect(host ="localhost", user ="root", passwd ="" )
mycursor = mydb.cursor()
mycursor.execute("Show databases")
for i in mycursor:
           print(i)

