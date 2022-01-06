
import pymysql

#database connection
cnx = pymysql.connect(host="localhost", user="root", password="root", db="pythondatabase", port=8889, unix_socket='/Applications/MAMP/tmp/mysql/mysql.sock')

create_table_query = ("INSERT INTO `pythondatabase`.`monsters` (`id`, `name`, `type`, `hp`) VALUES ('2', 'Shrek', 'ogre', 50);")

cursor = cnx.cursor()
cursor.execute(create_table_query)


cnx.commit()
cursor.close()
cnx.close()

