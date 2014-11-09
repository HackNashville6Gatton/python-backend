import _mysql, json
db=_mysql.connect("localhost","virpatel","password","laundry_app")
db.query('SELECT * from machines')
r = db.store_result()
print json.dumps(r.fetch_row()[0])
print 'hello world'


for i in range(100):
	print 'vir is a fuck'