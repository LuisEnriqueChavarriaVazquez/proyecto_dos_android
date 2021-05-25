import MySQLdb

db = MySQLdb.connect("tvcpw8tpu4jvgnnq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","atwvohgynfc5n90d","difz4d94clrax72n","m464d8pt1pfenzyb")
cursor = db.cursor()

"""file = open('/home/fixstream/Desktop/test10.txt', 'r')
file_content = file.read()
file.close()"""

query = "UPDATE volumentable SET volumen = '30cm' WHERE id = 1"

##cursor.execute(query, (file_content,))

cursor.execute(query)

db.commit()
db.close()