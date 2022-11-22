from bottle import route, run, template

@route('/json')
def index():
    with open('Cars.json') as user_file:
        file_contents = user_file.read()
    return template(file_contents)

@route('/xml')
def index():
    with open('Cars.xml') as user_file:
        file_contents = user_file.read()
    return template(file_contents)

@route('/csv')
def index():
    with open('Cars.csv') as user_file:
        file_contents = user_file.read()
    return template(file_contents)


run(host='localhost', port=8080)
