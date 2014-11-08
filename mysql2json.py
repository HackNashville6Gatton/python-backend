import _mysql
db=_mysql.connect("localhost","virpatel","password","laundry_app")
db.query('SELECT * from machines')
r = db.store_result()
print r.fetch_row()[0]
print 'test'
