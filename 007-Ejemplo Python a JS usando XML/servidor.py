from flask import Flask, Response
from flask_cors import CORS

app = Flask(__name__)

# Enable CORS for your entire application
CORS(app)

# Function to generate XML response
def generate_xml_response(xml_content):
    response = Response(xml_content, content_type='application/xml; charset=utf-8')
    return response

@app.route('/')
def index():
    # An empty XML response
    xml_data = '<?xml version="1.0" encoding="UTF-8"?><root></root>'
    return generate_xml_response(xml_data)

@app.route('/clientes')
def about_me():
    # XML data for the /clientes route
    xml_data = '<?xml version="1.0" encoding="UTF-8"?><clientes><cliente><nombre>Jose Vicente</nombre></cliente><cliente><nombre>Juan</nombre></cliente></clientes>'
    return generate_xml_response(xml_data)

@app.route('/productos')
def contact():
    # XML data for the /productos route
    xml_data = '<?xml version="1.0" encoding="UTF-8"?><productos><producto><nombre>Zapatillas</nombre></producto><producto><nombre>Camiseta</nombre></producto></productos>'
    return generate_xml_response(xml_data)

if __name__ == '__main__':
    app.run(port=8080)
