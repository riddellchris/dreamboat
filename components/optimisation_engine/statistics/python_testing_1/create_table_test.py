
import pymysql

#database connection
db = pymysql.connect(host="localhost", user="root", password="root", db="pythondatabase", port=8889, unix_socket='/Applications/MAMP/tmp/mysql/mysql.sock')

create_table_query = ("CREATE TABLE `Persons` (PersonID int);


#Make sure to initiate the cursor to fetch rows
cursor = db.cursor()
print(db)

# make a habit to close the database connection once you create it 
db.close()


